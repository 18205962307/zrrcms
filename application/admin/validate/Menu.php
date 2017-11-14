<?php
namespace app\admin\validate;

use think\Validate;

class Menu extends Validate
{
   //定义验证规则
   protected $rule = [
      'name'  =>  'require',
      'id' =>  'require',
   ];
   //定义提示消息
   protected $message = [
      'name.require'  =>  '菜单名必须输入',
      'id.require'  =>  '缺少ID',
      
   ];

   protected $scene = [
        'add'   =>  ['name'],
        'edit'   =>  ['name,id'],
       
    ];    
}