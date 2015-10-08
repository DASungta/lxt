<?php 
namespace Home\Model;
use Think\Model;
class ExchangeModel extends Model{
	public function getStatus($mid) {
		$w=array(
			'mid'=>$mid,
			'status'=>0,
			);
		$data=$this->where($w)->count();
		if($data==0) return 1;
		else return 0;
	}

}