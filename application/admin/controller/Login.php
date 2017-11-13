<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
class Login extends Controller
{
	/**
	 * 登录页
	 * @return [type] [description]
	 */
    public function index(){
    	return $this->fetch();
    	

    }
    /**
     * 登录验证
     * @return [type] [description]
     */
    public function postLogin(){
    	$data = Request::instance()->post();
    	if(!check_verify($data['vcode'],'login')){
    		$this->error('验证码错误！');
    	}else{
    		$this->success('登录成功！',url('index/index'));
    	}
    	

    }
    /**
     * 验证码
     * @return [type] [description]
     */
    public function verify(){
    	$config = [
    		'codeSet'=>'123456789',
    		'length' =>'4',
    		'useCurve'=>false,

    	];
    	$captcha = new \think\captcha\Captcha($config);
    	return $captcha->entry('login');

    }


}