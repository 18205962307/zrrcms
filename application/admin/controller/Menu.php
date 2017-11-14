<?php
namespace app\admin\controller;
use think\Db; 
use tree\Tree;

class Menu extends Base
{
    public function index()
    {

        $model = model('Menu');
        $result  = $model->order(["list_order" => "ASC"])->select();
        $result = $result->toArray();
      
        $tree = new Tree();
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

    /**
     * 添加保存
     */
    public function addSave(){
        if(request()->isPost()){
            $data = input('post.');
            // pp($data);
            $_data = [
                'name'=>$data['name'],
                'parent_id'=>$data['parent_id'],
                'controller'=>$data['controller'],
                'action'=>$data['action'],
                'param'=>$data['param'],
                'remark'=>$data['remark'],
                'status'=>$data['status'],
                'list_order'=>$data['list_order'],
                'type'=>$data['type'],

            ];
            $model = model('Menu');
            if($data['create']==1){
                $r = $model->addAllData($_data);


            }else{
                $r = $model->addData($_data);
            

            }
            if(!$r['code']){
                $this->error($r['msg']);
            }else{
                $this->success($r['msg'],url('index'));

            }
            

        }

    }
}
