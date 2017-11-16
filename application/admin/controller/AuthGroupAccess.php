<?php
/**
 * 角色权限设置
 * @author : zrr
 * @date : 2017.10.17
 */
namespace app\admin\controller;

use think\Controller;
class AuthGroupAccess extends Controller

{

   
    /**
     * 编辑
     * @return [type] [description]
     */
    public function edit(){
        $menu = model('Menu','service');
        $list = $menu->getMenuTree();
        $this->assign('list',$list);
        $group_id = input('group_id');
        $group_info = model('AuthGroup')->where(['group_id'=>$group_id])->find();

        $this->assign('rules',explode(',', $group_info['rules']));
        $this->assign('group_id',$group_info['group_id']);
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
                $rules = isset($data['rules']) ? implode(',',$data['rules']) : '';
                $_data = [
                    'rules' =>$rules,
                         
                ];
                $r = $model->editData($data['group_id'],$_data);
                if(!$r['code']){
                    $this->error($r['msg']);
                }else{
                    $this->success('权限设置成功',url('AuthGroup/index'));

                }
            }else{
                $this->error('数据不存在',url('AuthGroup/index'));

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


