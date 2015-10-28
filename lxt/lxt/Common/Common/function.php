<?php

function p($array) {
	dump($array,1,'<pre>',0);
}
function test(){
    return session('mid');
}

function tubiao(){

    $chart = new \Think\Chart();
    $title = '这里是标题'; //标题
    $data = array(20,27,45,75,90,10,20,40); //数据
    $size = 140; //尺寸
    $width = 800; //宽度
    $height = 500; //高度
    $legend = array('1111 ','2222','3333','4444 ','5555 ','6666 ','7777 ','8888 ');//说明
    
    /*一下依次为折线图，饼图，柱形图，环形图，栏图*/
    //$chart->createmonthline($title,$data,$size,$height,$width,$legend);
    $chart->create3dpie($title,$data,$size,$height,$width,$legend);
    //$chart->createcolumnar($title,$data,$size,$height,$width,$legend);
    //$chart->createring($title,$data,$size,$height,$width,$legend);
    //$chart->createhorizoncolumnar($title,$data,$size,$height,$width,$legend);

}

function getDay($Date_1,$Date_2) {
    $Date_List_a1=explode("-",$Date_1);
    $Date_List_a2=explode("-",$Date_2);
    $d1=mktime(0,0,0,$Date_List_a1[1],$Date_List_a1[2],$Date_List_a1[0]);
    $d2=mktime(0,0,0,$Date_List_a2[1],$Date_List_a2[2],$Date_List_a2[0]);
    $Days=round(($d1-$d2)/3600/24);
    return $Days;
}

/**
 * 邮件发送函数
 */
    function sendMail($to, $title, $content) {
     
        Vendor('PHPMailer.PHPMailerAutoload');     
        $mail = new PHPMailer(); //实例化
        $mail->IsSMTP(); // 启用SMTP
        $mail->Host=C('MAIL_HOST'); //smtp服务器的名称（这里以QQ邮箱为例）
        $mail->SMTPAuth = C('MAIL_SMTPAUTH'); //启用smtp认证
        $mail->Username = C('MAIL_USERNAME'); //你的邮箱名
        $mail->Password = C('MAIL_PASSWORD') ; //邮箱密码
        $mail->From = C('MAIL_FROM'); //发件人地址（也就是你的邮箱地址）
        $mail->FromName = C('MAIL_FROMNAME'); //发件人姓名
        $mail->AddAddress($to,"尊敬的客户");
        $mail->WordWrap = 50; //设置每行字符长度
        $mail->IsHTML(C('MAIL_ISHTML')); // 是否HTML格式邮件
        $mail->CharSet=C('MAIL_CHARSET'); //设置邮件编码
        $mail->Subject =$title; //邮件主题
        $mail->Body = $content; //邮件内容
        $mail->AltBody = "这是一个纯文本的身体在非营利的HTML电子邮件客户端"; //邮件正文不支持HTML的备用显示
        return($mail->Send());
    }

    function get_memberstatus($c,$get=null) {
        $mid=session('mid');
        $member=M('member')->where(array('mid'=>$mid))->find();
        $memberstatus=M('memberstatus')->where(array('id'=>$member['memberstatus']))->find();
        switch ($c) {
            default:
            case 'true':
                $user_config=array(
                    'V' => array(
                        'USER_STATUS_TITLE' => $memberstatus['title'],
                        'USER_STATUS_GETRULE' => $memberstatus['getrule'],
                        'USER_STATUS_REPAYDAY' => get_repayrule('day'),
                        'USER_STATUS_CASHRULE' => $memberstatus['cashrule'],
                        'USER_STATUS_BUYRULE' => $memberstatus['buyrule'],
                        ),
                    );
                C($user_config);
                break;

            case 'default':
            case 'false':
                switch ($get) {
                    case '1':
                        //p(123);
                        return $member['memberstatus'];
                        break;
                    
                    case '2':
                        return $memberstatus;
                        break;

                    case 'title':
                        //C('USER_STATUS_TITLE',$memberstatus['title']);
                        return $memberstatus['title'];
                        break;
                    
                    case 'getrule':
                        return $memberstatus['getrule'];
                        break;

                    case 'repayrule':
                        return $memberstatus['repayrule'];
                        break;

                    case 'cashrule':
                        return  $memberstatus['cashrule'];
                        break;

                    case 'buyrule':
                        return $memberstatus['buyrule'];
                        break;

                }
                break;
        }
        

    }

    function get_repayrule($get=null) {
        $repayrule=M('repayrule')->where(array('id'=>get_memberstatus('false','repayrule')))->find();  
        switch ($get) {
            case 'day':
                return $repayrule['day'];
                break;
            
            default:
                return $repayrule['day']/$repayrule['times']*$repayrule['day'];
                break;
        }
    }

    function get_info($get,$mid=null){
        if(is_null($mid)) $mid=session('mid');
        switch ($get) {
            case 'order_all_money':
                //p(123);
                return D('Home/Order')->get_order_all_money($mid,3);
                break;
            
            case 'cash_all_score':
                return D('Home/Cash')->get_cash_all_score($mid);
                break;

            case 'ex_all_score':
                return D('Home/exchange')->get_ex_all_score($mid);
                break;
        }
    }

    function cal($num) {
        return $num=$num*C('V.USER_STATUS_GETRULE');
    }

    function get_member_info($mid) {    
        $get_score=D('Home/order')->get_order_all_money($mid,1);//获取已返还的积分
        $all_score=cal(get_info('order_all_money',$mid));//获取所有的积分
        $left_score=( $all_score-$get_score > 0 ) ? ($all_score-$get_score) : 0;//获取剩余未还反的积分
        $cash=get_info('cash_all_score',$mid);//获取提现
        $ex_score=get_info('ex_all_score',$mid);//获取提现
        return array(
            'get_score' => $get_score-$cash-$ex_score,
            'all_score' => $all_score,
            'left_score' => $left_score,
            'cash' => $cash,
            'ex_score' => $ex_score,
            );
    }

   /* public function index() {
        $this->
    }*/

