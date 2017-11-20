<?php
namespace app\admin\service;
use think\Db; 
use think\Model;
use tree\Tree;
class User extends Model
{
	/**
	 * 生成用户密码加密字符串
	 * @return [type] [description]
	 */
	public function generateEncryptCode(){
		$array = ['0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
		shuffle($array);
		$str = implode('', $array);
		$code = substr($str, 0,4);
		return $code;
	}
	/**
	 * 校验用户名是否可用
	 * @param  [type] $user_name [description]
	 * @return [type]            [description]
	 */
	public function checkUserName($user_name){
		$info = model('User')->where(['user_name'=>$user_name])->find();
		if($info){
			return false;

		}else{
			return true;
		}

	}
	/**
	 * 校验用户邮箱是否可用
	 * @param  [type] $email [description]
	 * @return [type]        [description]
	 */
	public function checkUserEmail($email){
		$info = model('User')->where(['email'=>$email])->find();
		if($info){
			return false;

		}else{
			return true;
		}

	}


}
