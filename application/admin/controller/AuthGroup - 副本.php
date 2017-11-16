<?php
/**
 * 角色管理
 * @author : zrr
 * @date : 2017.10.17
 */
namespace app\admin\controller;

use think\Controller;
class AuthGroup extends Controller

{
    public function index()
    {
    	return $this->fetch();
        
    }
    /**
     * 添加
     */
    public function add(){
    	return $this->fetch();

    }
    /**
     * 编辑
     * @return [type] [description]
     */
    public function edit(){

    }
    /**
     * 删除
     * @return [type] [description]
     */
    public function delete(){

    }

    
}


