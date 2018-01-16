<?php
namespace app\admin\service;
use think\Db; 
use think\Model;
use tree\Tree;
class Menu extends Model
{
	/**
	 * 获取菜单树
	 * @return [type] [description]
	 */
	public function getMenuTree(){
		$cache = cache('menu_tree');
		if($cache===false){
			$model = model('Menu');
	        $result  = $model->order(["list_order" => "ASC"])->select();
	        $result = $result->toArray();
	        $tree       = new Tree();
	        $cache = $tree->toTree($result,'id','parent_id','child');

		}
		
        return $cache;


	}
	/**
	 * 获取菜单权限
	 * @return [type] [description]
	 */
	public function getAuthAccessByAction(){
		$cache = cache('getAuthAccessByAction');
		if($cache===false){
			$model = model('Menu');
		    $result  = $model->order(["list_order" => "ASC"])->select();
		    $result = $result->toArray();
		    foreach ($result as $key => $value) {
		    	$controller_action = strtolower($value['controller'].'/'.$value['action']);
		    	$cache[$controller_action][]= $value['id'];
		    }
	    	cache('getAuthAccessByAction',$cache);
		}
	    return $cache;


	}

	// /**
	//  * 获取菜单权限
	//  * @return [type] [description]
	//  */
	// public function getAuthAccessById(){
	// 	$cache = cache('getAuthAccessById');
	// 	if($cache===false){
	// 		$model = model('Menu');
	// 	    $result  = $model->order(["list_order" => "ASC"])->select();
	// 	    $result = $result->toArray();
	// 	    foreach ($result as $key => $value) {
	// 	    	$cache[$value['id']]= strtolower($value['controller'].'/'.$value['action']);
	// 	    }
	//     	cache('getAuthAccessById',$cache);
	// 	}
	//     return $cache;


	// }

	/**
	 * 清除菜单缓存
	 * @return [type] [description]
	 */
	public function cleanMenuCache(){
		cache('menu_tree',null);

	}


}
