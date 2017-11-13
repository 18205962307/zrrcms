<?php
namespace app\api\controller;
use think\Controller;
defined('UPLOAD_PATH')   or define('UPLOAD_PATH', ROOT_PATH.'uploads');
class CatchPicture extends Controller {

    public function index(){
        echo UPLOAD_PATH;
    }

    private  $column =[
                    'xingganmote'=>1,
                    //'siwameitui'=>2,
                    //'weimeixiezhen'=>3,
                    'wangluomeinv'=>4,
                    //'gaoqingmeinv'=>5,
                    //'motemeinv'=>6,
                    // 'tiyumeinv'=>7,
                    // 'dongmanmeinv'=>8,
                    
                     ];

    private $column_id;
    // 图片列表
    private $image_list;
    //图片路径
    private $image_folder;


    //采集栏目列表

    public function do_first(){


     
      
        $column = array_rand($this->column,1);
       
        set_time_limit(0);
        $redis = new \redis();
        $redis -> connect('127.0.0.1',6379);

        $page=$redis->incr($column);

        $url = "https://www.4493.com/".$column."/index-".$page.".htm";

       
        $list = $this->catch_list($url);
        
        foreach ($list as $key => $value) {
            //判断是否抓取过，没抓取过，入队
            if(!$redis->SISMEMBER('over_list',$value['column_key'])){
                $redis->lpush('catch_list',serialize($value));
            }
        }
     

    }
    //消费二号队列
    public function do_work_catch_second_list(){
        $redis = new \redis();
        $redis -> connect('127.0.0.1',6379);
        $result = $redis->rpop('catch_second_list');
        if(!$result){
            return false;

        }
        $result = unserialize($result);
        $column_key = $result['column_key'];
        $info = $this->catch_pic_info($result['url']);
        $data['from'] = $info['image_url'];
        $data['column_key'] = $column_key;
        $data['to'] = $result['to'].$info['image_name'];

        $redis->lpush('catch_pic_list',serialize($data));


    }
    //消费3号队列
    public function do_work_catch_pic_list(){
        $redis = new \redis();
        $redis -> connect('127.0.0.1',6379);
        $result = $redis->rpop('catch_pic_list');
        $result = unserialize($result);
        $column_key = $result['column_key'];

        // echo '<pre>';
        // var_dump($result);die();
        $url = $result['to'];

        if(!is_dir(dirname($url))){
            mkdir(iconv('UTF-8','GBK',dirname($url)),0777,true);
         }
         $image = file_get_contents($result['from']);
         file_put_contents($url, $image);
         $__data[] = [
                        'img'=>$url,
                        'column_key' => $column_key,
                    ];
        $redis->lpush('sql_2',serialize($__data));    



    }
    //消费1号队列
    public function do_work_catch_list(){
        $redis = new \redis();
        $redis -> connect('127.0.0.1',6379);
        $result = $redis->rpop('catch_list');
        if(!$result){
            return false;
            

        }
        $result = unserialize($result);
        $column_key = $result['column_key'];
     
        //抓取过则不执行
        if($redis->SISMEMBER('over_list',$result['column_key'])){
            
           return false;   
        }

  
        //$floor = UPLOAD_PATH.$result['time']."/". str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT)."/";
        $floor = UPLOAD_PATH.$result['time']."/".explode('-', $column_key)[1]."/";
        $data['from'] = $result['cover'];
        
        $data['to'] = $floor."0.".pathinfo($result['cover'], PATHINFO_EXTENSION);
        //封面入队
        $redis->lpush('catch_pic_list',serialize($data));
        //抓取图片内容
        $first_url = "https://www.4493.com".$result['url'];
        // die($first_url);
        $info = $this->catch_pic_info($first_url);
        // echo '<pre>';
        // var_dump($info);
        // die();
      
        $data['from'] = $info['image_url'];
        $cover = $floor.$info['image_name'];
        $data['column_key'] = $column_key;
        $data['to'] = $cover;

        $redis->lpush('catch_pic_list',serialize($data));
        for ($i=2; $i<$info['total']+1; $i++) { 
            $_data['to'] = $floor;
            $_data['url'] = pathinfo($first_url, PATHINFO_DIRNAME)."/".$i.".htm";;
            $_data['column_key'] = $column_key;
            $redis->lpush('catch_second_list',serialize($_data));
                
        }
        //写入完成集合
        $redis->sadd('over_list',$result['column_key']);
        $__data[] = [
                        'title'=>trim($info['title']),
                        'cover'=>$cover,
                        'total' => $info['total'],
                        'column_key' => $column_key,
                    ];
        $redis->lpush('sql_1',serialize($__data));            


    }

    public function catch_list($url){

        $html = file_get_contents($url);
        
        
        $regex1="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg]))[\'|\"].*?[\/]?>/"; 
        preg_match_all($regex1, $html, $matche1);
      
        $regex2 = "/<a target=\"_blank\" href=\"(.*?)\">/";
        preg_match_all($regex2, $html, $matche2);

        $regex3 = "/<b class=\"b1\">(.*?)<\/b>/";
        preg_match_all($regex3, $html, $matche3);


        foreach ($matche2[1] as $key => $value) {
            $arr_url = explode('/', $value);
         
            $data[] = [
                        'url'=>$value,
                        'column_key'=>$arr_url[1].'-'.$arr_url[2],
                        'cover'=>$matche1[1][$key],
                        'time'=>$matche3[1][$key],

                         ];
        }
        return $data;

    }

   

    public function catch_pic_info($url) {

        
        $html = file_get_contents($url);
    

        $regex1 = "/<h1>(.*?)<span/ism";
        preg_match_all($regex1, $html, $matche1);
        //标题
        $data['title'] = substr($matche1[1][0], 0, strlen($matche1[1][0]) - 1);
        $data['title'] = iconv('GB2312', 'UTF-8', $data['title']); 
        $regex2 = "/<span id=\"allnum\">(.*?)<\/span>/ism";
        preg_match($regex2, $html, $matche2);


        //总图片数
        $data['total'] = $matche2[1];
        $data['number'] = 1;


        $regex3 = "/<div class=\"picsbox picsboxcenter\".*?><[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg]))[\'|\"].*?[\/]?><\/p>/ism";
        preg_match_all($regex3, $html, $matche3);

        //图片地址
        $data['image_url'] = $matche3[1][0];
        $data['image_name'] = pathinfo($data['image_url'], PATHINFO_BASENAME);
        $data['image_type'] = pathinfo($data['image_url'], PATHINFO_EXTENSION);
        

        return $data;
        
    }

    function IsWeixinOrAlipay() {

        //判断是不是微信
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) {
            return "WeiXIN";
        }
        //判断是不是支付宝
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'AlipayClient') !== false) {
            return "Alipay:true";
        }
        //哪个都不是
        return "false";
    }

}
