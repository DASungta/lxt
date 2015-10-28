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

	public function get_ex_all_score($mid) {
		$w=array(
			'mid'=>$mid,
			'status'=>1,
			);
		$data=$this->where($w)->field(array('amount'))->select();
		$ex_score=0;
		foreach ($data as $key => $value) {
			$ex_score=$ex_score+$value['amount'];
		}
		return $ex_score;
	}

}