<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{

	 // public function __construct()
  //   {
  //       parent::__construct();
  //   }
    public function index()
    {
    	// echo __ROOT__;die();
       // return $this->fetch();
       // var_dump($this->request->param());die();
        $menuModel = model('Menu');
        $r = $menuModel->select();
        echo '<pre>';
        var_dump($r);
        
        // $result = $this->validate($this->request->param(), 'User');
    }
}
