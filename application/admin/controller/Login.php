<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Login extends Controller
{
	/**
	 * 登录页
	 * @return [type] [description]
	 */
    public function index(){
        $user_name = input('user_name');
        $user_name = empty($user_name) ? '' :$user_name;
        $this->assign('user_name',$user_name);
    	return $this->fetch();
    	

    }
    /**
     * 登录验证
     * @return [type] [description]
     */
    public function postLogin(){

    	if(request()->isPost()){
            $data = input('post.');
            $user_name = $data['user_name'];
        	if(!check_verify($data['vcode'],'login')){
        		$this->error('验证码错误');
        	}
            $info = Db::name('user')->where(['user_name'=>$user_name])->find();
            if(!$info){
                $this->error('用户不存在',url('index',['user_name'=>$user_name]));
            }else if($info['password']!=md5($data['password'].$info['encrypt'])){
                $this->error('用户密码错误',url('index',['user_name'=>$user_name]));

            }else if($info['status']=='0'){
                $this->error('该用户已被禁用',url('index',['user_name'=>$user_name]));


            }

            session('user_info',$info);

        	$this->success('登录成功',url('index/index'));
        	
        }
    	

    }
    /**
     * 验证码
     * @return [type] [description]
     */
    public function verify(){
    	$config = [
    		'codeSet'=>'123456789',
    		'length' =>'4',
    		'useCurve'=>false,

    	];
    	$captcha = new \think\captcha\Captcha($config);
    	return $captcha->entry('login');

    }


}