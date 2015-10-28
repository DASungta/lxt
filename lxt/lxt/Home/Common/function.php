<?php
 function checkStatus(){
        $cash=D('Home/Cash');
        $c_s=$cash->getStatus(session('mid'));
        //p($c_s);die;
        $e_s=D('Exchange')->getStatus(session('mid'));
        if($c_s==0||$e_s==0) return true;
        else return false;
    }

function get_order_all_money(){
	$order=D('Home/Order');
	$all_money=$order->get_order_all_money(session('mid'));
	return $all_money;
}

