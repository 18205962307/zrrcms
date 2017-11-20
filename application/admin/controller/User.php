<?php
/**
 * 用户管理
 * @author : zrr
 * @date : 2017.10.17
 */
namespace app\admin\controller;
use think\Controller;
use think\Db;
class User extends Controller

{
    public function index()
    {
        // model('User','service')->checkUserName('admin');
        $list = Db::name('user')->order("user_id desc")
                                      ->select();

        $this->assign('list',$list);
        
    	return $this->fetch();
        
    }
    /**
     * 添加
     */
    public function add(){


        $roler = model('AuthGroup')->where(['status'=>'1'])->order('group_id asc')->select();
     
        $this->assign('roler',$roler);
    	return $this->fetch();

    }
    public function addSave(){
        if(request()->isPost()){
            $data = input('post.');
            $service = model('User','service');
            $user_name = $data['user_name'];
            //校验用户名是否存在
            $check_user_name = $service->checkUserName($user_name);
            if(!$check_user_name){
                $this->error('用户名已存在');

            }
            $email = $data['email'];
            //校验用户邮箱
            if(empty($email)){
                $check_user_email = $service->checkUserEmail($email);
                if(!$check_user_email){
                    $this->error('用户邮箱已被绑定');

                }

            }

            $_data['user_name'] = $user_name;
            $_data['group_id'] = $data['group_id'];
            $_data['user_name'] = $data['user_name'];
            $_data['email'] = $email;
            $_data['status'] = $data['status'];
            //安全码
            $encrypt = $service->generateEncryptCode();
            $_data['encrypt'] = $encrypt;
            $_data['password'] = md5($data['password'].$encrypt);
            $r = model('User')->addData($_data);
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
        $roler = model('AuthGroup')->where(['status'=>'1'])->order('group_id asc')->select();
     
        $this->assign('roler',$roler);
        return $this->fetch();

    }
    /**
     * 删除
     * @return [type] [description]
     */
    public function delete(){

    }

    
}


