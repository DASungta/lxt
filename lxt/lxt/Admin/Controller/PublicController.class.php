<?php 
namespace Admin\Controller;
use Think\Controller;
class PublicController extends CommonController{
	public function head () {
		$this->display();
	}

	public function footer() {
		$this->display();
	}
}