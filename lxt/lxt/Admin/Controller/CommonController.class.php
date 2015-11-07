<?php 
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
	public function _initialize(){
		if( !isset($_SESSION['uid']) ) {
			$this->redirect('Admin/Login/index');
		}
		
		$this->message();
	}

	public function message(){

		$f=array(
			're_mid'=>001,
			'state' => 1,
			);
		$count=M('message')->where($f)->count();
		// p($count);
		// die;
		$this->count=$count;

		$message=M('message')->where($f)->select();
		foreach ($message as $key => $value) {
			$loc=explode('_', $value['c_name']);
			//p($loc);
			switch ($loc[1]) {
				case 'Cash':
					$message[$key]['name']='提现申请';
					break;

				case 'Exchange':
					$message[$key]['name']='兑换申请';
					break;
				
				
			}
			$message[$key]['c_name']=$loc;
		}
		// p(__MODULE__);
		// die;
		$this->message=$message;
	}
}