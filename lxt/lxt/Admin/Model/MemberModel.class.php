<?php 
namespace Admin\Model;
use Think\Model;
class MemberModel extends Model{
	public function get_member_info($mid){
		$w=array(
			'mid' => $mid,
			);
		$data=M('member')->where($w)->find();
		return $data;

	}
}