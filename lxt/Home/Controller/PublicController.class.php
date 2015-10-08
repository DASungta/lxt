<?php 
namespace Home\Controller;
use Think\Controller;
class PublicController extends CommonController {
	public function head() {
		$this->display();
	}
	public function footer() {
		$this->display();
	}
	public function error() {
		E('正在建设中...');
		//$this->redirect('Home/Index/index');
	}
}