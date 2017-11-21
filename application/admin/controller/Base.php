<?php
/**
 * 控制器基类
 * @author : zrr
 * @date : 2017.10.17
 */
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Base extends Controller
{
	public function __construct(){
	
		parent::__construct();

		$user_info = session('admin_info');
		//判断是否登录
		if($user_info === null){
			$this->error('请先登录',url('login/index'));

		}
		
		//判断是否有权限
	}
   
}
