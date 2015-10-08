<?php
 function checkStatus(){
        $cash=D('Home/Cash');
        $c_s=$cash->getStatus(session('mid'));
        //p($c_s);die;
        $e_s=D('Exchange')->getStatus(session('mid'));
        if($c_s==0||$e_s==0) return true;
        else return false;
    }