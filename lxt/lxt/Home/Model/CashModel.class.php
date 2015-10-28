<?php
namespace Home\Model;
use Think\Model;
class CashModel extends Model {

	protected $tablePrefix = 'sb_';

	public function getStatus($mid) {
		$w=array(
			'mid'=>$mid,
			'status'=>0,
			);
		$data=$this->where($w)->count();
		//p($data);die;
		if($data==0) return 1;
		else return 0;
	}

	public function get_cash_all_score($mid) {
		$w=array(
			'mid'=>$mid,
			'status'=>1,
			);
		$data=$this->where($w)->field(array('score'))->select();
		$cash_score=0;
		foreach ($data as $key => $value) {
			$cash_score=$cash_score+$value['score'];
		}
		return $cash_score;
	}

}