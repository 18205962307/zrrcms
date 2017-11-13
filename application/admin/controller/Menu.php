<?php
namespace app\admin\controller;
use think\Controller;
class Menu extends Controller
{
    public function index()
    {
    	// $menuModel = model('Menu');
     //    $list = $menuModel->select();
     	$list =[
     		[
     			'id'=>1,
     			'name'=>'一级菜单1',
     			'child'=>[
     				[
     				    'id'=>2,
     					'name'=>'二级菜单11',
     					'child'=>[
				     				['id'=>3,'name'=>'三级菜单111'],
				     				['id'=>4,'name'=>'三级菜单111'],
				     				['id'=>5,'name'=>'三级菜单111'],
				     				['id'=>6,'name'=>'三级菜单111'],
				     				['id'=>7,'name'=>'三级菜单111'],

     					]
     				],
     				[
     					'id'=>8,
     					'name'=>'二级菜单12',
     					'child'=>[
     								['id'=>9,'name'=>'三级菜单121'],
				     				['id'=>10,'name'=>'三级菜单121'],
				     				['id'=>11,'name'=>'三级菜单121'],
				     				['id'=>12,'name'=>'三级菜单121'],
				     				['id'=>13,'name'=>'三级菜单121'],

     							 ]
     				],
     			]
     		],
     		[
     			'id'=>14,
     			'name'=>'一级菜单2',
     			'child'=>[
     				[
     				    'id'=>15,
     					'name'=>'二级菜单21',
     					'child'=>[
				     				['id'=>16,'name'=>'三级菜单211'],
				     				['id'=>17,'name'=>'三级菜单211'],
				     				['id'=>18,'name'=>'三级菜单211'],
				     				['id'=>19,'name'=>'三级菜单211'],
				     				['id'=>20,'name'=>'三级菜单211'],

     					]
     				],
     				[
     					'id'=>21,
     					'name'=>'二级菜单21',
     					'child'=>[
     								['id'=>22,'name'=>'三级菜单221'],
				     				['id'=>23,'name'=>'三级菜单221'],
				     				['id'=>24,'name'=>'三级菜单221'],
				     				['id'=>25,'name'=>'三级菜单221'],
				     				['id'=>26,'name'=>'三级菜单221'],

     							 ]
     				],
     			]
     		],
   
     	];
     	// echo '<pre>';
     	// var_dump($list);die();
        $this->assign('list',$list);
        return $this->fetch();
        
    }
}
