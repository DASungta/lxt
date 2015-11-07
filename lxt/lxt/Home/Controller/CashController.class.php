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

	public function cashHandle() {
        $amount=I('amount');
        $cashrule=I('cashrule');
        //p($cashrule);die;
        $get=I('get');
        if(checkStatus()){
            $this->error('有未处理申请！');
        }
        if( $amount > $get ) {
            $this->error('剩余已返积分不足！');
        } else {
            //$to='lxt-admin@sensobaby.net';
            $to='120607752@qq.com';

            $title='来自会员'.session('membername').'的提现申请';
            $content='会员 '.session('membername').'申请 '.$amount.'*'.($cashrule*10).'% 即 '.($amount*$cashrule/10).' 元人民币的返现';
            //p($content);die;
            

            if(SendMail($to,$title,$content)) {                
                    $data=array(
                        'mid'=> session('mid'),
                        'score' => $amount,
                        'amount' => $amount*$cashrule/10,
                        'date' => date('Y-m-d H:i:s'),
                        );
                    //p($data);die;
                    M('cash')->add($data);
                    $this->message(MODULE_NAME.'_'.CONTROLLER_NAME.'_'.ACTION_NAME);
                    $this->success('发送成功！');
                } else {
                    $this->error('发送失败');
                }
        }
    }

	
}