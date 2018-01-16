<?php
namespace app\admin\service;
use think\Db; 
use think\Model;
use tree\Tree;
class Access extends Model
{
	public function checkUserAccess($user_id,$controller,$action){
		//获取用户权限
		$user_access = db('auth_group_access')->alias('a')->join('auth_group g','g.group_id=a.group_id','left')->where(['a.uid'=>$user_id])->field('g.rules,g.status,g.group_id')->find();
		//超级管理员无需判断权限
		if($user_access['group_id']=='1'){
			return true;

		}
		if($user_access['status']!='1'){ 
			return false;
		}
		//获取【控制器/方法】对应的权限ID
		$menu_access = model('menu','service')->getAuthAccessByAction();
		$menu_access = $menu_access[strtolower($controller.'/'.$action)];
		foreach ($menu_access as $key => $value) {
			if(in_array($value, explode(',', $user_access['rules']))){
				return true;

			}
			
		}
		return false;
		
	}

}
