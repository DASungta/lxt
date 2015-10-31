<?php 
namespace Home\Model;
use Think\Model;
class OrderModel extends Model {
	//获取订单总额
	public function get_order_all_money($mid,$get=null) {
		$where=array(
			'mid'=>$mid,
			);
		$field=array('mid','createtime','money');
		$data=$this->where($where)->field($field)->select();
		
		switch ($get) {
			case '1':
				$date=date('Y-m-d');
				$all_money=0;
				foreach ($data as $key => $value) {
					$day=getDay($date,$value['createtime']);
		    		if($day <= C('V.USER_STATUS_REPAYDAY')) {
		    			$get_money=$get_money+(int)($value['money']*C('V.USER_STATUS_GETRULE')*$day/C('V.USER_STATUS_REPAYDAY'));
		    			//p($get_money);
		    		}else {
		    			$get_money=$get_money+cal($value['money']);
		    		}

				}
				//p($get_money);
				//die;
				return $get_money;
				break;

			case '2':
				$date=date('Y-m-d');
				foreach ($data as $key => $value) {
					$day=getDay($date,$value['createtime']);
		    		if($day <= C('V.USER_STATUS_REPAYDAY')) {
		    			$all_money=$all_money+$value['money'];
		    		}else {
		    			$all_money=$all_money+0;
		    		}
				}
				return $all_money;
				break;
			
			case '3':
				//p(fgeshfg);die;
				$all_money=0;
				foreach ($data as $key => $value) {
					$all_money=$all_money+$value['money'];
				};
				return $all_money;
				break;
		}
		
	}

	
}