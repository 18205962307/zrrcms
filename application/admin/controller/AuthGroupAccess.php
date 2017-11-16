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
        return $this->fetch();

    }
    /**
     * 编辑保存
     * @return [type] [description]
     */
    public function editSave(){
        pp($_POST);

    }
    /**
     * 删除
     * @return [type] [description]
     */
    public function delete(){

    }

    
}


