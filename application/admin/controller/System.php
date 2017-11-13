<?php
/**
 * 系统设置
 * @author : zrr
 * @date : 2017.10.17
 */
namespace app\admin\controller;

use think\Controller;
class System extends Controller

{
    public function index()
    {
    	return $this->fetch();
        
    }
    /**
     * 清除缓存
     */
    public function cleanCache(){
        $path = ROOT_PATH . 'runtime/';
        $dirArray = ['cache','log','temp',];
        foreach ($dirArray as $key => $value) {
            $dir = $path.$value;
            if(is_dir($dir)){
                del_dir($dir);

            }
        }
        $this->success('操作成功！',url('index/index'));
        
    }

    
}


