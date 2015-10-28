<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>LXT会员平台后台-Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="/lxt/Public/Admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/lxt/Public/Admin/css/style.css" rel='stylesheet' type='text/css' />
<link href="/lxt/Public/Admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="/lxt/Public/Admin/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/lxt/Public/Admin/js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.html"><img src="/lxt/Public/Admin/images/logo.png" alt=""/></a>
  </div>
  <h2 class="form-heading">后台</h2>
  <h2 class="form-heading">login</h2>
  <div class="app-cam">
	  <form method="post" action="<?php echo U('Admin/Login/handle');?>">
		<input type="text" name="uid" class="text" placeholder="会员名称/会员ID" onfocus="this.value = '';" >
		<input type="password" name="pwd" placeholder="密码" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<div class="submit"><input type="submit" onclick="myFunction()" value="Login"></div>
		
		<ul class="new">
			<!-- <li class="new_left"><p>忘记密码?/p></li> -->
			<li class="new_right"><p  style="color:black">&nbsp;LXT&nbsp;会员积分系统 </p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
   
</body>
</html>