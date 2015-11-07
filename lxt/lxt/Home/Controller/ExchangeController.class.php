<?php 
namespace Home\Controller;
use Think\Controller;
class ExchangeController extends CommonController{
	public function index() {
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

	public function exchangeHandle() {
        $amount=I('amount');
        $get=I('get');
        
        if(checkStatus()){
            $this->error('有未处理申请！');
        }
        if( $amount > $get ) {
            $this->error('剩余已返积分不足！');
        } else {
            $to='lxt-admin@sensobaby.net';
            $title='来自会员'.session('membername').'的兑换申请';
            $data=M('member')->where(array('mid'=>session('mid')))->find();
            $content='会员 '.session('membername').'请求 '.$amount.'积分的兑换申请，请速与其联系。联系电话：'.$data['number'];
            //p($content);die;

            if(SendMail($to,$title,$content)) {
                $data=array(
                    'mid'=> session('mid'),
                    'amount' => $amount,
                    'date' => date('Y-m-d H:i:s'),
                    );
                M('exchange')->add($data);
                $this->success('发送成功！');
            } else {
                $this->error('发送失败！');
            }
        }
        
    }
}