<?php
namespace app\admin\controller;
class Menu extends Base
{
    public function index()
    {
        $menu = model('Menu','service');
        $list = $menu->getMenuTree();
        $this->assign('list',$list);
        return $this->fetch();
        
    }
    /**
     * 添加菜单
     * @param integer $pid [父级ID]
     */
    public function add(){
        $menu = model('Menu','service');
        $list = $menu->getMenuTree();
        $this->assign('cat',$list);
        $id = input('id');
        if(!empty($id)){
            $info = model('Menu')->where(['id'=>input('id')])->find();
            if($info){
                $this->assign('info',$info);
            }

        }
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
    /**
     * 编辑
     * @return [type] [description]
     */
    public function edit(){
        $id = input('id');
        $info = model('Menu')->where(['id'=>$id])->find();
        if($info){
            $menu = model('Menu','service');
            $list = $menu->getMenuTree();
            $this->assign('cat',$list);
            $this->assign('info',$info);
            return $this->fetch();

        }else{
            $this->error('数据不存在',url('index'));
        }
        
    }

     /**
     * 编辑保存
     */
    public function editSave(){
        if(request()->isPost()){
            $data = input('post.');
            $info = model('Menu')->where(['id'=>$data['id']])->find();
            if($info){
                if($info['id']==$data['parent_id']){
                    $this->error('上级菜单选择有误');

                }
                $_data = [
                    'name'         => $data['name'],
                    'parent_id'    => $data['parent_id'],
                    'controller'   => $data['controller'],
                    'action'       => $data['action'],
                    'param'        => $data['param'],
                    'remark'       => $data['remark'],
                    'status'       => $data['status'],
                    'list_order'   => $data['list_order'],
                    'type'         => $data['type'],

                ];
                $model = model('Menu');
                $r = $model->editData($data['id'],$_data);
                if(!$r['code']){
                    $this->error($r['msg']);
                }else{
                    $this->success($r['msg'],url('index'));

                }
            }else{
                $this->error('数据不存在',url('index'));

            }
        }
    }


}
