<?php 
namespace Admin\Controller;
use Think\Controller;
class PublicController extends CommonController{
	public function head () {
		$f=array(
			're_mid'=>001,
			'state' => 1,
			);
		$count=M('message')->where($f)->count();
		// p($count);
		// die;
		$this->count=$count;
		$this->display();
	}

	public function footer() {
		$this->display();
	}
}