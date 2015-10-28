<?php 
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
class CashController extends CommonController{
	public function index(){
		$data=M('cash')->where(array('status'=>0))->order('date desc')->select();

		foreach ($data as $key => $value) {
			$member=M('member')->where(array('mid'=>$value['mid']))->find();
			$data[$key]['name']=$member['name'];
			if($value['status']==1){
				$data[$key]['state']='已处理';
			} else {
				$data[$key]['state']='待处理';
			}
		}
		$this->data=$data;
		$this->display();
	}

	public function getCash() {
		$id=I('get.id');
		$data=array(
			'status'=>1
			);
		M('cash')->where(array('id'=>$id))->save($data);
		$cashdata=M('cash')->where(array('id'=>$id))->find();
		$member=M('member')->where(array('mid'=>$cashdata['mid']))->find();
		$data=array(
			'score'=>$member['score']-$cashdata['score'],
			);
		M('member')->where(array('mid'=>$cashdata['mid']))->save($data);
		$this->redirect('history');
	}

	public function history() {
		$count=M('cash')->count();
		$page= new Page($count,10);
		$limit=$page->firstRow.','.$page->listRows;
		$data=M('cash')->order('date desc')->limit($limit)->select();
		foreach ($data as $key => $value) {
			$member=M('member')->where(array('mid'=>$value['mid']))->find();
			$data[$key]['name']=$member['name'];
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

	public function ex_index(){
		$data=M('exchange')->where(array('status'=>0))->order('date desc')->select();

		foreach ($data as $key => $value) {
			$member=M('member')->where(array('mid'=>$value['mid']))->find();
			$data[$key]['name']=$member['name'];
			if($value['status']==1){
				$data[$key]['state']='已处理';
			} else {
				$data[$key]['state']='待处理';
			}
		}
		$this->data=$data;
		$this->display();
	}

	public function getExchange() {
		$id=I('get.id');
		$data=array(
			'status'=>1,
			'detail'=>I('detail')
			);
		M('exchange')->where(array('id'=>$id))->save($data);
		$exdata=M('exchange')->where(array('id'=>$id))->find();
		$member=M('member')->where(array('mid'=>$exdata['mid']))->find();
		//p($member);die;
		$data=array(
			'score'=>$member['score']-$exdata['amount'],
			);
		//p($data);die;
		M('member')->where(array('mid'=>$exdata['mid']))->save($data);
		$this->redirect('ex_history');
	}

	public function ex_history() {
		$count=M('exchange')->count();
		$page= new Page($count,10);
		$limit=$page->firstRow.','.$page->listRows;
		$data=M('exchange')->where(array('status'=>1))->order('date desc')->limit($limit)->select();
		foreach ($data as $key => $value) {
			$member=M('member')->where(array('mid'=>$value['mid']))->find();
			$data[$key]['name']=$member['name'];
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