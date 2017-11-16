<?php
namespace app\admin\validate;
use think\Validate;
class AuthGroup extends Validate
{
   //定义验证规则
   protected $rule = [
      'group_name'  =>  'require',
      'group_id' =>  'require',
   ];
   //定义提示消息
   protected $message = [
      'group_name.require'  =>  '角色名必须输入',
      'group_id.require'  =>  '缺少group_id',
      
   ];

   protected $scene = [
        'add'   =>  ['group_name'],
        'edit'   =>  ['group_name,group_id'],
       
    ];    
}