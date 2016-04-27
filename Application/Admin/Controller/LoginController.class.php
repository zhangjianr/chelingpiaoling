<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

	public function index(){
		self::display();
	}

	public function verify(){
		$Verify = new \Think\Verify();
		$Verify->entry();
	}

	public function signIn()
	{
		$data = I('post.data');
		$arr = array();
		foreach ($data as $val) {
			$a = array_values($val);
			$arr[$a[0]] = $a[1];
		}
		$verify = new \Think\Verify();
		if($verify->check(trim($arr['verify']))){
			$where['pass'] = md5(trim($arr['passwd']));
			$where['name'] = trim($arr['username']);
			$re = M('Admin')->where($where)->getField('id,name');
			$uid = array_keys($re);
			if($re){
				session('uid',$uid[0]);
				session('username',$re[1]);
				echo 1;
			}else{
				echo '账号或密码错误';
			}
		}else{
			echo '验证码错误';
		}
	}

	public function signOut()
	{
		session('uid',null);
		self::redirect('Login/index');
	}
}
