<?php 
function get_member($mid){
	$data=D('Member')->get_member_info($mid);
	return $data['name'];
}