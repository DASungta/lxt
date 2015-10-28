<?php 
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class CashController extends CommonController{


	public function index() {
		$count=M('cash')->where(array('mid'=>session('mid')))->count();
		$page= new Page($count,10);
		$limit=$page->firstRow.','.$page->listRows;
		$data=M('cash')->where(array('mid'=>session('mid')))->order('date desc')->limit($limit)->select();
		foreach ($data as $key => $value) {
			$data[$key]['name']=session('membername');
			if($value['status']==1){
				$data[$key]['state']='已处理';
			} else {
				$data[$key]['state']='待处理';
			}
		}
		$this->page=$page->show();
		$this->data=$data;
		$this->display();
	}

	public function ex_index() {
		$count=M('exchange')->where(array('mid'=>session('mid')))->count();
		$page= new Page($count,10);
		$limit=$page->firstRow.','.$page->listRows;
		$data=M('exchange')->where(array('mid'=>session('mid')))->order('date desc')->limit($limit)->select();
		foreach ($data as $key => $value) {
			$data[$key]['name']=session('membername');
			if($value['status']==1){
				$data[$key]['state']='已处理';
			} else {
				$data[$key]['state']='待处理';
			}
		}
		$this->page=$page->show();
		$this->data=$data;
		$this->display();
	}
}