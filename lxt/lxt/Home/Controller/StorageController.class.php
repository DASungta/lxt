<?php 
namespace Home\Controller;
use Think\Controller;
class StorageController extends CommonController {

	// public function before(){
	// 	S(array('type'=>'file','expire'=>3600));
	// }

	public function s_start($mid=null) {

		S(array('type'=>'file','expire'=>3600));

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
        //p($member_config);
        // S('member',$member_config);
        // $data=S('member');
        //p(dw);
        //p($data);
	}

	public function index() {
		p(dejdb);
	}
}