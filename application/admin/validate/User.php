<?php
namespace app\admin\validate;
use think\Validate;
class User extends Validate
{
   //定义验证规则
   protected $rule = [
      'user_name'  =>  'require|max:25',
      'email'  =>  'email',
      'user_id' =>  'require',
      'password' =>  'require',
   ];
   //定义提示消息
   protected $message = [
      'user_name.require'  =>  '用户名必须输入',
      'user_name.max'     => '用户名不能超过25个字符',
      'email' => '邮箱格式错误',
      'user_id.require'  =>  '缺少user_id',
      
   ];

   protected $scene = [
        'add'   =>  ['user_name','email','password'],
        'edit'   =>  ['user_id'],
       
    ];    
}