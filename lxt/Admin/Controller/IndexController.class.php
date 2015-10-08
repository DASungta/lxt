<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    
    public function index(){
        $order_count=M('order')->count();
        $member_count=M('member')->count();
        $order=M('order')->order('createtime desc')->limit(7)->select();
        $this->o_count=$order_count;
        $this->m_count=$member_count;
        $this->order=$order;
    	$this->display();
    }

    public function update(){
    	$this->display();
    }

    public function updateHandle() {
    	$pwd=I('pwd1','','md5');
    	$data=array(
    		'pwd' => $pwd,
    		);
        //p($data);die;
    	M('user')->where(array('uid'=>session('uid')))->save($data);
    	session('uid',null);
    	$this->success('请重新登陆',U('Admin/Index/index'));
    }
}