<?php 
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
class OrderController extends CommonController{
	public function index() {
		if(isset($_GET['mid'])){
			$mid=$_GET['mid'];
			//$order_mid=M('order')->where(array('mid'=>$mid));
			$count=M('order')->where(array('mid'=>$mid))->count();
			//p($count);die;
			$page= new Page($count,10);
			$limit=$page->firstRow.','.$page->listRows;
			$order=M('order')->where(array('mid'=>$mid))->order('oid desc')->limit($limit)->select();
			//p($order);die;
			$this->page=$page->show();
			$mid='会员编号：'.$mid;
			$this->mid=$mid;
			$this->order=$order;
			$this->display();
		} else {
			$count=M('order')->count();
			$page= new Page($count,10);
			$limit=$page->firstRow.','.$page->listRows;
			$order=M('order')->order('oid desc')->limit($limit)->select();
			$this->page=$page->show();
			$this->order=$order;
			$this->display();
		}
	}

	public function addOrder() {
		$count=M('order')->count();
		$count=sprintf('%05d',$count+1);
		$date=date('Ymd').$count;
		//p($date);die;
		$this->order_id=$date;
		if ( isset($_GET['mid']) ) {
			$this->mid=I('get.mid');
			$this->display('addOrder2');
		} else {
			$this->display('addOrder2');
		}
	}

	public function addOrderHandle() {
		//p($_POST);die;
		$data=array(
			'oid' => I('order_id'),
			'createtime' => I('createtime'),
			'money' => I('money'),
			'detail' => I('detail')
			);
		$membername=I('memberName');
		
		if( !I('memberName')==null ){
			$member=M('member')->where(array('name'=>$membername))->find();
			$data['mid']=$member['mid'];
			$data['membername']=I('memberName');
			//p($data);
		} else {
			$mid=I('mid');
			$member=M('member')->where(array('mid'=>$mid))->find();
			$data['membername']=$member['name'];
			$data['mid']=I('mid');
			//p($data);
		}
		if( M('order')->add($data) ) {
			$order=M('order')->where(array('mid'=>$data['mid']))->select();
			$all_money=0;
			foreach ($order as $key => $value) {
			    $all_money=$all_money+$value['money'];
			}
			$member=M('member')->where(array('mid'=>$mid))->find();
    		$memberstatus=M('memberstatus')->where(array('id'=>$member['memberstatus']))->find();
			$money=array(
				'score'=>$all_money*$memberstatus['getrule'],
				);
			M('member')->where(array('mid'=>$data['mid']))->save($money);
			$this->success('添加成功！',U('index'));
		} else {
			$this->error('添加失败！');
		}
	}

	public function viewDetail() {
		$oid=I('get.oid');
		$data=M("order")->where(array('oid'=>$oid))->select();
		$this->data=$data;
		$this->display();
	}

	public function viewDetailHandle () {
		$oid=I('get.oid');
		M('order')->where(array('oid'=>$oid))->save($_POST);
		$order=M('order')->where(array('mid'=>I('mid')))->select();
			$all_money=0;
			foreach ($order as $key => $value) {
			    $all_money=$all_money+$value['money'];
			}
			$member=M('member')->where(array('mid'=>$mid))->find();
    		$memberstatus=M('memberstatus')->where(array('id'=>$member['memberstatus']))->find();
			$money=array(
				'score'=>$all_money*$memberstatus['getrule'],
				);
			M('member')->where(array('mid'=>$data['mid']))->save($money);
		$this->success('保存成功！',U('Admin/Order/index'));
	}


}