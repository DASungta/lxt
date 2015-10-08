<?php 
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{

	public function index() {
		$this->display('login');
	}

	public function handle() {
		if(!IS_POST) {
			E('页面不存在！');
		}

		$account=I('uid');
		$pwd=I('pwd','','md5');
		// p($account);
		// p($pwd);die;
		$data=M('user')->where(array('uid'=>$account))->find();
		//p($data);die;
		if($data) {
			if($data['pwd']==$pwd) {
				session('uid',$data['uid']);
				$this->redirect('Admin/Index/index');
			} else {
				$this->error('用户名密码错误！');
			}
		} else {
			$this->error('用户名密码错误！');
		}

	}

	public function out() {
		session('uid',null);
		$this->redirect('Admin/Index/index');
	}
}