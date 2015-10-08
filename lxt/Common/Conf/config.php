<?php
return array(
	/* //本地测试连接数据库参数
	'DB_TYPE' => 'MySQL',
	'DB_HOST' => '127.0.0.1',
	'DB_NAME' => 'senso',
	'DB_USER' => 'root',
	'DB_PWD' => '',
	'DB_PREFIX' => 'sb_',
*/
    //服务器连接参数
    // 'DB_TYPE' => 'MySQL',
    // 'DB_HOST' => '127.0.0.1',
    // 'DB_NAME' => 'senso',
    // 'DB_USER' => 'hdm182127532_db',
    // 'DB_PWD' => 'hdm182127532',
    // 'DB_PREFIX' => 'sb_',

    //服务器连接参数
    'DB_TYPE' => 'MySQL',
    'DB_HOST' => 'hdm182127532.my3w.com',
    'DB_NAME' => 'hdm182127532_db',
    'DB_USER' => 'hdm182127532',
    'DB_PWD' => 'suntton2014',
    'DB_PREFIX' => 'sb_',

	// 配置邮件发送服务器
    'MAIL_HOST' =>'smtp.sensobaby.net',//smtp服务器的名称
    'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证
    'MAIL_USERNAME' =>'lxt@sensobaby.net',//你的邮箱名
    'MAIL_FROM' =>'lxt@sensobaby.net',//发件人地址
    'MAIL_FROMNAME'=>'LXT会员平台',//发件人姓名
    'MAIL_PASSWORD' =>'lxt@123456',//邮箱密码
    'MAIL_CHARSET' =>'utf-8',//设置邮件编码
    'MAIL_ISHTML' =>TRUE, // 是否HTML格式邮件


    'SHOW_ERROR_MSG' => false,
    'ERROR_MESSAGE'  => '正在建设中...',

    'URL_CASE_INSENSITIVE' =>true,

);