<?php 
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
class MemberController extends CommonController{

	//显示会员列表
	public function index() {
		$count=M('member')->count();
		$page= new Page($count,10);
		$limit=$page->firstRow.','.$page->listRows;
		$member=M('member')->order('id')->limit($limit)->select();
		$order=M('order')->select();
		$memberstatus=M('memberstatus')->select();
		$this->page=$page->show();
		foreach ($member as $key => $value) {
			/*$money=0;
			foreach($order as $k => $v) {
				if($v['mid']==$value['mid']) {
					$money=$money+$v['money'];
				}
			}*/
			foreach ($memberstatus as $k1 => $v1) {
				if($v1['id']==$value['memberstatus']) {
					$money=$money*$v1['getrule'];
					$member[$key]['memberstatus']=$v1['title'];
				}
			}
			//$member[$key]['score']=$money;
		}
		//p($member);die;
		$this->member=$member;

		$this->display();
	}

	//添加会员页面
	public function addMember() {
		$hid=time();
		$statusData=M('memberstatus')->field(array('id','title'))->select();
		$this->statusData=$statusData;
		$this->assign('hid',$hid);
		$this->display('addMember');
	}

	public function addMemberHandle() {
		//p(I('mid'));
		$data=array(
			'mid' => I('mid'),
			'pwd' => md5('000000'),
			'name' => I('name'),
			'campany' => I('company'),
			'memberstatus' => I('memberstatus'),
			'address' => I('address'),
			'number' => I('number'),
			'datetime' => I('datetime'),
			'score' => 0,
			'email' => I('email'),
			);

		if( M('member')->add($data) ) {
			$this->success('添加成功！');
		} else {
			$this->error('添加失败！');
		}

	}

	//会员等级
	public function memberStatus() {
		$memberstatus=M('memberstatus')->select();
		foreach ($memberstatus as $key => $value) {
			$state=M('repayrule')->where(array('id'=>$value['repayrule']))->find();
			$memberstatus[$key]['repayrule']=$state['state'];
		}
		//p($memberstatus);die;
		$this->memberstatus=$memberstatus;
		$this->display();
	}

	public function addMemberStatus() {
		$repayRuleData=M('repayrule')->field(array('id','state'))->select();
		//p($statusData);
		$this->statusData=$repayRuleData;
		$this->display('addMemberStatus');
	}

	public function addMemberStatusHandle() {
		//p($_POST);
		$data=array(
			'title' => I('memberStatusName'), 
			'getrule' => I('getRule'),
			'repayrule'=> I('repayRuleId'),
			'cashrule'=> I('cashRule'),
			'buyrule' => I('buyRule'),
			);

		if( M('memberstatus')->add($data) ) {
			$this->success('添加成功！',U('memberStatus'));
		} else {
			$this->error('添加失败！');
		}
	}

	public function repayRule() {
		$repayrule=M('repayrule')->select();
		$this->repayrule=$repayrule;
		$this->display();
	}

	public function addRepayRule() {
		$count=M('repayrule')->count();
		$this->rule_id=$count+1;
		$this->display('addRepayRule');
	}

	public function addRepayRuleHandle() {
		$data=array(
			'day' => I('day'),
			'times' => I('times'),
			'state' => I('state'),
			);

		if( M('repayrule') -> add($data) ) {
			$this->success('添加成功！',U('repayRule'));
		}else{
			$this->error('添加失败！');
		}
	}

	public function updateMember() {
		$mid=I('get.mid');
		$data=M('member')->where(array('mid'=>$mid))->select();
		$statusData=M('memberstatus')->field(array('id','title'))->select();
		$this->statusData=$statusData;
		$this->data=$data;
		$this->display();
	}

	public function updateMemberHandle() {
		//p($_POST);die;
		$data=array(
			//'pwd' => I('pwd1','','md5'),
			'name' => I('name'),
			'campany' => I('company'),
			
			'address' => I('address'),
			'number' => I('number'),
			'datetime' => I('datetime'),
			'email' => I('email'),
			);
		if(!I('pwd')==null) {
			$data['pwd']=I('pwd','','md5');
		}
		if(!I('memberstatus')==0) {
			$data['memberstatus']=I('memberstatus');
		}
		M('member')->where(array('mid'=>I('mid')))->save($data);
		$data2=array(
			'membername'=>I('name'),);
		//p($data2);die;
		M('order')->where(array('mid'=>I('mid')))->save($data2);

		$this->success("修改成功！",U('Admin/Member/index'));
	}

	public function updateMemberStatus() {
		$id=I('get.id');
		$data=M('memberstatus')->where(array('id'=>$id))->select();
		//p($data);die;
		$repayRuleData=M('repayrule')->field(array('id','state'))->select();
		$this->memberdata=$data;
		$this->statusData=$repayRuleData;
		$this->display();
	}

	public function updateMemberStatusHandle() {
		$id=I('get.id');
		$data=array(
			'title' => I('memberStatusName'), 
			'getrule' => I('getRule'),
			'repayrule'=> I('repayRuleId'),
			'cashrule'=> I('cashRule'),
			'buyrule' => I('buyRule'),
			);
		M('memberstatus')->where(array('id'=>$id))->save($data);
		$this->success('修改成功！',U('Admin/Member/memberStatus'));
	}

	public function updateRepayRule() {
		$id=I('get.id');
		$data=M('repayrule')->where(array('id'=>$id))->select();
		$this->data=$data;
		$this->display();
	}

	public function updateRepayRuleHandle() {
		$id=I('get.id');
		M('repayrule')->where(array('id'=>$id))->save($_POST);
		$this->success('修改成功！',U('Admin/Member/repayRule'));
	}

	public function scoreDetail() {
		$mid=I('get.mid');
		//p($mid);die;
		$order=M('order')->where(array('mid'=>$mid))->select();
    	$member=M('member')->where(array('mid'=>$mid))->find();
    	$memberstatus=M('memberstatus')->where(array('id'=>$member['memberstatus']))->find();
    	$repayrule=M('repayrule')->where(array('id'=>$memberstatus['repayrule']))->find();
        $cash1=M('cash')->where(array('mid'=>$mid))->select();
        $ex=M('exchange')->where(array('mid'=>$mid))->select();
        $cash=0;
        $ex_score=0;
        foreach ($cash1 as $key => $value) {
            if($value['status']==1){
                $cash=$value['score']+$cash;
            }
        }
        foreach ($ex as $key => $value) {
            if($value['status']==1){
                $ex_score=$value['amount']+$ex_score;
            }
        }
    	$date=date('Y-m-d');
    	$get_money=0;
    	$all_money=$member['score'];
        $all_score=0;
    	//p((int)(11/3));die;
    	foreach ($order as $key => $value) {
            $all_score=$all_score+$value['money'];
    		$day=getDay($date,$value['createtime']);
    		if($day <= $repayrule['day']) {
    			$get_money=$get_money+(int)($value['money']*$memberstatus['getrule']*$day/$repayrule['day']);
    		}
    	}
        //p($all_score);die;
        $this->member=$member;
    	$left_money=$all_score*$memberstatus['getrule']-$get_money;
		$this->all_score=$all_score;
    	$this->left_money=$left_money;
    	$this->get_money=$get_money-$cash-$ex_score;
        $this->ex_score=$ex_score;
        $this->cash=$cash;
        $this->display();
	}

}