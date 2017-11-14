<?php
namespace app\admin\service;
use think\Db; 
use think\Model;
use tree\Tree;
class Menu extends Model
{
	public function getMenuTree(){

		$model = model('Menu');
        $result  = $model->order(["list_order" => "ASC"])->select();
        $result = $result->toArray();
        $tree       = new Tree();
        $list = $tree->toTree($result,'id','parent_id','child');
        return $list;


	}
}
