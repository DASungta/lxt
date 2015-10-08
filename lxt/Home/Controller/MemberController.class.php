<?php 
namespace Home\Controller;
use Think\Controller;
class MemberController extends CommonController{
	public function updataInfo() {
		$mid=session('mid');
		$data=M('member')->where(array('mid'=>$mid))->select();
		//p($data);die;
		$this->data=$data;
		$this->display();
	}

	public function updataInfoHandle() {
		$mid=session('mid');
		M('member')->where(array('mid'=>$mid))->save($_POST);
		$data=array(
			'membername'=>I('name'),);
		M('order')->where(array('mid'=>$mid))->save($data);
		$this->success('保存成功！',U('Home/Index/index'));
	}

	public function updatePwd() {
		$this->display();
	}

	public function updatePwdHandle() {
		$pwd=I('pwd1','','md5');
    	$data=array(
    		'pwd' => $pwd,
    		);
        //p($data);die;
    	M('member')->where(array('mid'=>session('mid')))->save($data);
    	session('mid',null);
    	$this->success('请重新登陆',U('Home/Index/index'));
	}
}