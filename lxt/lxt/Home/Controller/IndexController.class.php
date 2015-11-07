<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {



    public function index(){
        //get_memberstatus('true');
   	    $mid=session('mid');
        $d=S('member');
        // p($d);
        $data=$this->get_member_info($mid);
        //p(CONTROLLER_NAME);
        // p($data);
        //die;
         //$d=get_order_all_money();p($d);die;
        //p(get_info('order_all_money'));
        /*$da=D('Home/order')->get_order_all_money($mid,1);
        p($da);die;*/
        
        //p(C('V.USER_STATUS_TITLE'));
        //p($data);die;
        //p(C('V.USER_STATUS_GETRULE'));
        // p(dbejsa);
        // p(C('V.USER_STATUS_REPAYDAY'));
        // die;
        //$all_money=0;
        //$data=get_member_info($mid);

        // p($data);
        // die;
        // $all_money=D('order')->get_order_all_money($mid);
        // $cash_score=D('cash')->get_cash_all_score();
        // $ex_score=D('exchange')->get_ex_all_score();
        // p($all_money);
        // p($ex_score);
        // p($cash_score);die;
    	/*$order=M('order')->where(array('mid'=>$mid))->select();
    	$member=M('member')->where(array('mid'=>$mid))->find();
    	$memberstatus=M('memberstatus')->where(array('id'=>$member['memberstatus']))->find();
    	$repayrule=M('repayrule')->where(array('id'=>$memberstatus['repayrule']))->find();
        $cash1=M('cash')->where(array('mid'=>$mid))->select();
        $ex=M('exchange')->where(array('mid'=>$mid))->select();
        $cash=0;//已处理的返现积分
        $ex_score=0;//已处理的兑换积分
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
        $all_score=0;//所有订单总额
    	//p((int)(11/3));die;
    	foreach ($order as $key => $value) {
            $all_score=$all_score+$value['money'];
    		$day=getDay($date,$value['createtime']);
    		if($day <= $repayrule['day']) {
    			$get_money=$get_money+(int)($value['money']*$memberstatus['getrule']*$day/$repayrule['day']);
    		}else{
                $member2=M('member')->order('score desc')->limit(4)->select();
                $this->member2=$member2;
                $this->all_score=$all_score;
                $this->left_money=0;
                $this->get_money=$get_money-$cash-$ex_score;
                $this->ex_score=$ex_score;
                $this->cash=$cash;
                $this->memberstatus=$memberstatus['title'];
                $this->cashrule=$memberstatus['cashrule'];
                $this->order=$order;
                //$this->display();
                die;
            }
    	}
        
        p($get_money);die;
*/
        //$this->message(MODULE_NAME.'_'.CONTROLLER_NAME.'_'.ACTION_NAME);
    	
        $member2=M('member')->order('score desc')->limit(4)->select();
        $order=M('order')->where(array('mid'=>$mid))->select();
        $this->member2=$member2;

        $this->data=$data;
        $this->d=$d;
        $this->order=$order;
    	$this->display();
    }

    

    

}