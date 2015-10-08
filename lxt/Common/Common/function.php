<?php

function p($array) {
	dump($array,1,'<pre>',0);
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

