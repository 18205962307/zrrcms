<?php
/**
 * 角色管理
 * @author : zrr
 * @date : 2017.10.17
 */
namespace app\admin\controller;

use think\Controller;
use think\Db;
class AuthGroup extends Controller

{
    public function index()
    {
        $list = Db::name('auth_group')->order("group_id asc")
                                      ->select();
        $this->assign('list',$list);
    	return $this->fetch();
        
    }
    /**
     * 添加
     */
    public function add(){
    	return $this->fetch();

    }
    /**
     * 添加保存
     */
    public function addSave(){
        if(request()->isPost()){
            $data = input('post.');
            $_data['group_name'] = $data['group_name'];
            $_data['status'] = $data['status'];
            $_data['remark'] = $data['remark'];
            $r = model('AuthGroup')->addData($_data);
            if($r['code']){
                 $this->success($r['msg'],url('index'));
            }else{
                $this->error($r['msg']);

            }

        }

    }
    /**
     * 编辑
     * @return [type] [description]
     */
    public function edit(){
        $group_id = input('group_id');
        $info = model('auth_group')->where(['group_id'=>$group_id])->find();
        $this->assign('info',$info);
        return $this->fetch();

    }
    /**
     * 编辑保存
     * @return [type] [description]
     */
    public function editSave(){
        if(request()->isPost()){
            $data = input('post.');
            $model = model('auth_group');
            $info = $model->where(['group_id'=>$data['group_id']])->find();
            if($info){
                
                $_data = [
                    'group_name' =>$data['group_name'],
                    'remark'     =>$data['remark'],
                    'status'     =>$data['status'],           

                ];
           
                $r = $model->editData($data['group_id'],$_data);
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
    /**
     * 删除
     * @return [type] [description]
     */
    public function delete(){
        $group_id = input('group_id');
        $r = model('auth_group')->where(['group_id'=>$group_id])->delete();
        if($r){
            $this->success('删除成功',url('AuthGroup/index'));

        }else{
            $this->error('删除失败');
        }


    }

    
}


