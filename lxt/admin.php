<?php
	
	/**
	 * admin模块入口文件
	 * by:GreenStudio UnderDog Dev Team
	 * admin.php
	 */
	
	define("APP_DEBUG",true);
	define("APP_PATH",'./lxt/');
	define('BIND_MODULE','Admin');
	//define('BIND_CONTROLLER','Index');
	//\Think\Build::buildController('Admin','Role');

	require "ThinkPHP/ThinkPHP.php";

?>