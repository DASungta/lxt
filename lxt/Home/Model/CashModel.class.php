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

}