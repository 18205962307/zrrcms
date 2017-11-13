<?php
namespace app\admin\controller;
use think\Db; 
use tree\Tree;

class Menu extends Base
{
    public function index()
    {


        $result     = Db::name('menu')->order(["list_order" => "ASC"])->select();
       
        $tree       = new Tree();
        $list = $tree->toTree($result,'id','parent_id','child');
     	
        $this->assign('list',$list);
        return $this->fetch();
        
    }
    /**
     * 添加菜单
     * @param integer $pid [父级ID]
     */
    public function add($pid=0){
        $result     = Db::name('menu')->order(["list_order" => "ASC"])->select();
        $tree       = new Tree();
        $list = $tree->toTree($result,'id','parent_id','child');
        $this->assign('cat',$list);
        
        $menu = \think\Loader::model('Menu','service');
        return $this->fetch();

    }
}
