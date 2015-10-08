<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<title>会员列表</title>
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

<script src="/lxt/Public/Admin/js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
          <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo U('Admin/Index/index');?>">LXT Admin</a>
                
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
                
				<li class="dropdown">
	        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header">
							<strong>Messages</strong>
							<div class="progress thin">
							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							    <span class="sr-only">40% Complete (success)</span>
							  </div>
							</div>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="/lxt/Public/Admin/images/1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="/lxt/Public/Admin/images/2.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="/lxt/Public/Admin/images/3.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="/lxt/Public/Admin/images/4.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="/lxt/Public/Admin/images/5.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="/lxt/Public/Admin/images/pic1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="dropdown-menu-footer text-center">
							<a href="#">View all messages</a>
						</li>	
	        		</ul>
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="/lxt/Public/Admin/images/1.png" alt=""/><span class="badge">9</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
						<li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
						<li class="divider"></li>
						<li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
						<li class="m_2"><a href="<?php echo U('Admin/Login/out');?>"><i class="fa fa-lock"></i> 退出登录</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo U('Admin/Index/index');?>"><i class="fa fa-dashboard fa-fw nav_icon"></i>主页</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>会员系统<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Member/index');?>">会员列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Member/addMember');?>">添加会员</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Member/memberStatus');?>">会员等级列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Member/addMemberStatus');?>">添加会员等级</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Member/repayRule');?>">返还规则列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Member/addRepayRule');?>">添加返还规则</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>订单系统<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Order/index');?>">订单列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Order/addOrder');?>">添加订单</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>提现申请<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Cash/index');?>">未处理</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Cash/history');?>">提现历史</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>兑换申请<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Admin/Cash/ex_index');?>">未处理</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Cash/ex_history');?>">兑换历史</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>系统设置<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="media.html">用户</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Admin/Index/update');?>">修改密码</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
     <div class="alert alert-danger" role="alert">
        <strong>教程！</strong>点击会员编号可以查询该会员所有订单，点击姓名可以查看积分情况！
       </div>
  	 <h3><span class="label label-success">会员列表</span>&nbsp;<a href="<?php echo U('Admin/Member/addMember');?>"><button type="button" class="btn btn-xs btn-success warning_4">&nbsp;+&nbsp; </button></a></h3></h3>
     <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>会员编号</th>
            <th>会员名称</th>
            <th>公司</th>
            <th>会员等级</th>
            <th>会员积分</th>
            <th>联系电话</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
          <?php if(is_array($member)): foreach($member as $key=>$v): ?><tr>
              <th scope="row"><?php echo ($key+1); ?></th>
              <td><button type="button" class="btn btn-sm btn-success warning_4"><a style="color:white;font-size:10px" href="<?php echo U('Admin/Order/index',array('mid'=>$v['mid']));?>"><?php echo ($v["mid"]); ?></a></td>
              <td><button type="button" class="btn btn-sm btn-default warning_4"><a style="color:grey;font-size:14px" href="<?php echo U('Admin/Member/scoreDetail',array('mid'=>$v['mid']));?>"><?php echo ($v["name"]); ?></a></td></button>
              <td><?php echo ($v["campany"]); ?></td>
              <td><?php echo ($v["memberstatus"]); ?></td>
              <td><?php echo ($v["score"]); ?></td>
              <td><?php echo ($v["number"]); ?></td>
              <td><button type="button" class="btn btn-xs btn-info"><a class='pi2' href="<?php echo U('Admin/Order/addOrder',array('mid' => $v['mid']));?>" style="color:white;font-size:15px;font-family:sans-serif" >添加订单</a></button>&nbsp;|&nbsp;<button type="button" class="btn btn-xs btn-warning warning_44"><a class='pi2' href="<?php echo U('Admin/Member/updateMember',array('mid'=>$v['mid']));?>" style="color:white;font-size:15px">修改</a></button></td>
            </tr><?php endforeach; endif; ?>
          <tr class="success">
          <td colspan="10" class="page" align="center"><?php echo ($page); ?></td>
        </tr>
        </tbody>
      </table>
    </div><!-- /.table-responsive -->
    
   
</div>

    <div class="clearfix"> </div>
  
  <div class="copy_layout">
  <div>
                    <button type="button" class="btn btn-default" id='back' onclick="back()">Back</button>
                </div>
      <p>Copyright &copy; 2015. <a href='http://green.njtech.edu.cn/' target="_blank">GreenStudio</a> All rights reserved.</p>
  </div>
  </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<script type="text/javascript">
	function back()
	{ 
		
		window.history.back(-1);
	}
</script>
<link href="/lxt/Public/Admin/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/lxt/Public/Admin/js/metisMenu.min.js"></script>
<script src="/lxt/Public/Admin/js/custom.js"></script>
<link href="/lxt/Public/Admin/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/lxt/Public/Admin/js/metisMenu.min.js"></script>
<script src="/lxt/Public/Admin/js/custom.js"></script>
</body>
</html>