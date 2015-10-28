<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class OrderController extends CommonController{
	public function orderDetail() {
		$mid=session('mid');
		$date=date('Y-m-d');
		$w=array('mid'=>$mid);

		$count=M('order')->where($w)->count();
		$page= new Page($count,10);
		$limit=$page->firstRow.','.$page->listRows;

		$order=M('order')->where($w)->field('membername',true)->limit($limit)->select();
		$member=M('member')->where(array('mid'=>$mid))->find();
    	$memberstatus=M('memberstatus')->where(array('id'=>$member['memberstatus']))->find();
    	$repayrule=M('repayrule')->where(array('id'=>$memberstatus['repayrule']))->find();
		
		foreach ($order as $key => $value) {
			$day=getDay($date,$value['createtime']);
			$order[$key]['day']=$day;
			$order[$key]['score']=$value['money']*$memberstatus['getrule'];
			$order[$key]['get_money']=$value['money']*$memberstatus['getrule']*$day/$repayrule['day'];
		}
		$this->page=$page->show();
		$this->day=$repayrule['day'];
		$this->order=$order;
		$this->display();
	}
	public function addOrder(){
		$this->redirect('Home/Public/error');
	}
}