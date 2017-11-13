<?php
/**
 * 栏目管理
 * @author : zrr
 * @date : 2017.10.17
 */
namespace app\admin\controller;

use think\Controller;
class Column extends Controller

{
    public function index()
    {
    	return $this->fetch();
        
    }

    
}


