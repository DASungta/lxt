<?php 
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{

	public function index() {
		$this->display('login');
	}

	public function handle() {
		if(!IS_POST) {
			E('页面不存在！');
		}

		$account=I('mid');
		$pwd=I('pwd','','md5');
		// p($account);
		// p($pwd);die;
		$result=M('member')->where(array('mid'=>$account))->find();
		$result2=M('member')->where(array('name'=>$account))->find();
		$data=($result==null) ? $result2 : $result;
		//p($data);die;
		if($data) {
			if($data['pwd']==$pwd) {
				//session('[start]');
				session('mid',$data['mid']);
				session('membername',$data['name']);
				//C('USER_MID',3);
				//dump(C('UESR_MID'));
				
				$this->redirect('Home/Index/index');
			} else {
				$this->error('用户名密码错误！');
			}
		} else {
			$this->error('用户名密码错误！');
		}

	}

	/*public function pre() {
		
		session('[start]');
		p($_SESSION['mid']);
		get_memberstatus(true);
		C('V.USER_STATUS_TITLE');die;
		$this->redirect('Home/Index/index');
	}*/

	public function out() {
		session('mid',null);
		session('membername',null);
		$this->redirect('Home/Index/index');
	}
}