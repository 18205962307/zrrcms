<?php
/**
 * 文章管理
 * @author : zrr
 * @date : 2017.10.17
 */
namespace app\admin\controller;

use think\Controller;
class Article extends Controller

{
    public function index()
    {
    	return $this->fetch();
        
    }

    
}


