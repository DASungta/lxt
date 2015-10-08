<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>提现记录</title>
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
                <a class="navbar-brand" href="<?php echo U('Home/Index/index');?>">LXT Members</a>
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
                        <li class="m_2"><a href="<?php echo U('Home/Login/out');?>"><i class="fa fa-lock"></i> 退出登录</a></li> 
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
                            <a href="<?php echo U('Home/Index/index');?>"><i class="fa fa-dashboard fa-fw nav_icon"></i>首页</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i> 订单系统<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Home/Order/orderDetail');?>"> 查询订单</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Home/Order/addOrder');?>" target="_blank"> 添加订单</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo U('Home/Cash/index');?>"><i class="fa fa-indent nav_icon"></i> 提现记录</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                            <a href="<?php echo U('Home/Cash/ex_index');?>"><i class="fa fa-indent nav_icon"></i> 兑换记录</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-flask nav_icon"></i> 修改信息<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('Home/Member/updataInfo');?>"> 个人信息</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Home/Member/updatePwd');?>" target="_blank"> 修改密码</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-flask nav_icon"></i> 积分商城<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">>母婴频道<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo U('Home/Exchange/index');?>" target="_blank"> 奶粉类</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo U('Home/Exchange/index');?>" target="_blank"> 尿裤湿巾</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo U('Home/Exchange/index');?>" target="_blank"> 喂养用品</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo U('Home/Exchange/index');?>" target="_blank">>居家生活</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Home/Exchange/index');?>" target="_blank">>个护化妆</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Home/Exchange/index');?>" target="_blank">>家居家纺</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('Home/Exchange/index');?>" target="_blank">>生活服务</a>
                                </li>
                            </ul>
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
  	 <h3><span class="label label-success">提现历史</span></h3>
     <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
          <h2>Table</h2>
          <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
          <table class="table table-striped">
            <thead>
              <tr class="warning">
                <th>#</th>
                <th>会员编号</th>
                <th>会员名称</th>
                <th>申请金额</th>
                <th>日期</th>
                <th>状态</th>
              </tr>
            </thead>
            <tbody>
              <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
                  <td><?php echo ($v["id"]); ?></td>
                  <td><?php echo ($v["mid"]); ?></td>
                  <td><?php echo ($v["name"]); ?></td>
                  <td><?php echo ($v["amount"]); ?></td>
                  <td><?php echo ($v["date"]); ?></td>
                  <td><?php echo ($v["state"]); ?></td>
                </tr><?php endforeach; endif; ?>
              <tr class="success">
                <td colspan="10" class="page" align="center"><?php echo ($page); ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
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