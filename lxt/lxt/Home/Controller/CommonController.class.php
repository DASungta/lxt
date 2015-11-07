<?php 
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
	public function _initialize(){
		if( !isset($_SESSION['mid']) || !isset($_SESSION['membername'])) {
			$this->redirect('Home/Login/index');
		}
		$member=S('member');
		if(empty($member)) {
			$this->s_start();
		}
	}

	public function s_start($mid=null) {

		//S(array('type'=>'file','expire'=>3600));

		if(is_null($mid)) $mid=session('mid');
		$member=M('member')->where(array('mid'=>$mid))->find();
        $memberstatus=M('memberstatus')->where(array('id'=>$member['memberstatus']))->find();
        $repayrule=M('repayrule')->where(array('id'=>$memberstatus['repayrule']))->find();
        $member_config=array(
                    'data' => array(
                        'USER_STATUS_TITLE' => $memberstatus['title'],
                        'USER_STATUS_GETRULE' => $memberstatus['getrule'],
                        'USER_STATUS_REPAYDAY' => $repayrule['day'],
                        'USER_STATUS_CASHRULE' => $memberstatus['cashrule'],
                        'USER_STATUS_BUYRULE' => $memberstatus['buyrule'],
                        ),
                    );
        S('member',$member_config);

	}

	public function test() {
		p(njdnfcew);
	}

	public function get_member_info($mid) {    
        $get_score=D('Home/Order')->get_order_all_money($mid,1);//获取已返还的积分
        $all_score=cal(get_info('order_all_money',$mid));//获取所有的积分
        $left_score=( $all_score-$get_score > 0 ) ? ($all_score-$get_score) : 0;//获取剩余未还反的积分
        $cash=get_info('cash_all_score',$mid);//获取提现
        $ex_score=get_info('ex_all_score',$mid);//获取提现
        return array(
            'get_score' => $get_score-$cash-$ex_score,
            'all_score' => $all_score,
            'left_score' => $left_score,
            'cash' => $cash,
            'ex_score' => $ex_score,
            );
    }

    public function message($c_name) {
        //新消息
        $message=array(
            'c_name' => $c_name,
            'se_mid' => session('mid'),
            're_mid' => 001,
            );
        if(M('message')->add($message)){}
            else{
                $this->error('消息发送错误！');
            }

    }
}