<?php
namespace app\admin\controller;

use think\Controller;
class Content extends Controller

{
    public function index()
    {
    	return $this->fetch();
        
    }

    public function menu(){
    	return $this->fetch();

    }

    public function addActile(){
        return $this->fetch();
    }


    public function dataList(){
    	return $this->fetch('list');
    }
}


