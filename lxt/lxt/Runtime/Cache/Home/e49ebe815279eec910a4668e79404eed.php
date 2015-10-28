<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>LXT会员平台</title>
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
        <div class="graphs">
         <div class="alert alert-info" role="alert">
        <strong>您好！</strong> 这是 LXT 会员积分平台。本平台正在建设中，功能会逐步完善，还请您耐心等待，并提出宝贵建议！
       </div>
           
           
           
           <div class="widget_4">
             <div class="col-md-4 widget_1_box1">
                <div class="coffee">
                <div class="coffee-top">
                    <a href="#"><img class="img-responsive" src="/lxt/Public/Admin/images/pic4.jpg" alt="">
                    <div class="doe">
                        <h6><?php echo session('mid');?></h6>
                        <p><?php echo session('membername');?></p>
                        <p style="color:white"><?php echo C('V.USER_STATUS_TITLE');?></p>
                        <p style="color:yellow">冻结:<?php echo ($data["left_score"]); ?></p>
                    </div>
                    <i></i></a>
                </div>
                <div class="follow">
                  <a href="<?php echo U('Home/Order/orderDetail');?>">                   
                    <div class="col-xs-4 two">
                        <p>已返剩余</p>
                        <span><?php echo ($data["get_score"]); ?></span>
                    </div></a>
                    <a href="<?php echo U('Home/Cash/index');?>"> 
                      <div class="col-xs-4 two">
                        <p>提现</p>
                        <span><?php echo ($data["cash"]); ?></span>
                      </div>
                    </a>
                     <div class="col-xs-4 two">
                        <p>兑换</p>
                        <span><?php echo ($data["ex_score"]); ?></span>
                    </div>

                    <div class="clearfix"> </div>
                  </a>
                </div>
               </div>
             </div>
             <div class="col-md-4 stats-info3"> 
                <div class="online">
                    <?php if(is_array($member2)): foreach($member2 as $key=>$v): ?><div class="online-top">
                        <?php echo ($key+1); ?><div class="top-at">
                            <img class="img-responsive" src="/lxt/Public/Admin/images/status_<?php echo ($v['memberstatus']); ?>.png" alt="">
                        </div>
                        <div class="top-on">
                            <div class="top-on1">
                                <p><?php echo (mb_substr($v["name"],0,1,'utf-8')); ?>先生</p>
                                <span><?php echo ($v["score"]); ?></span>
                            </div>
                            <label class="round"> </label>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div><?php endforeach; endif; ?>
                </div>
             </div>
             <div class="col-md-4 stats-info stats-info1">
                <div class="panel-heading">
                    <h4 class="panel-title"><span class="label label-default" style='font-size:20px'>最近订单</span></h4>
                </div>
                <div class="panel-body panel-body2">
                    <ul class="list-unstyled">
                        <li><span style='color:black;font-size:15px'>订单内容</span><div class="text-success pull-right">金额</div></li>
                        <?php if(is_array($order)): foreach($order as $key=>$v): ?><li>·&nbsp;<?php echo ($v["detail"]); ?><div class="text-success pull-right"><?php echo ($v["money"]); ?>元</div></li><?php endforeach; endif; ?>
                    </ul>
                </div>
            </div>
             <div class="clearfix"> </div>
           </div>
            <div class="col-md-6 widget_1_box2">
            
               <button type="button" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal" style="margin-top:25px">
                申请提现
               </button>
               <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal2" style="margin-left:15px;margin-top:25px">
                申请兑换
               </button>
               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <form class="form-horizontal" method="post" action="<?php echo U('Home/Index/cashHandle');?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h2 class="modal-title">提现</h2>
                        </div>
                        <div class="modal-body">
                         <div class="alert alert-warning" role="alert">
                          <strong>提醒！</strong>您是<?php echo C('V.USER_STATUS_TITLE');?>，提现额度为<?php echo C('V.USER_STATUS_CASHRULE')*10*10;?>%，10积分=1元，可提现积分为<?php echo ($data["get_score"]); ?>
                         </div>
                          
                            <div class="form-group">
                              <label for="disabledinput" class="col-sm-2 control-label">提现积分</label>
                              <div class="row">
                                <div class="col-md-3 grid_box1">
                                  <input type="text" name="amount" class="form-control1" id="disabledinput">
                                  <input type="hidden" name="cashrule" value="<?php echo ($cashrule); ?>">
                                  <input type="hidden" name="get" value="<?php echo ($get_money); ?>">
                                </div>
                              </div>
                            </div>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                          <button type="submit" class="btn-success btn">提交</button>
                        </div>
                        </form>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->

                  </div>
                  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <form class="form-horizontal" method="post" action="<?php echo U('Home/Index/exchangeHandle');?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h2 class="modal-title">兑换</h2>
                        </div>
                        <div class="modal-body">
                         <div class="alert alert-warning" role="alert">
                          <strong>提醒！</strong>兑换率为100%，确认之后管理员会收到您的请求并主动与您联系
                         </div>
                          
                            <div class="form-group">
                              <label for="disabledinput" class="col-sm-2 control-label">兑换积分</label>
                              <div class="row">
                                <div class="col-md-3 grid_box1">
                                  <input type="text" name="amount" class="form-control1" id="disabledinput">
                                  <input type="hidden" name="get" value="<?php echo ($get_money); ?>">
                                  <!-- <input type="hidden" name="cashrule" value="<?php echo ($cashrule); ?>"> -->
                                </div>
                              </div>
                            </div>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                          <button type="submit" class="btn-success btn">提交</button>
                        </div>
                        </form>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                    </div>
             </div>
             
             
             
             <div class="clearfix"> </div>
      </div>
    <div class="copy">
            <p>Copyright &copy; 2015. <a href='http://green.njtech.edu.cn/' target="_blank">GreenStudio</a> All rights reserved.</p>
  </div>
    </div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
  

<link href="/lxt/Public/Admin/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/lxt/Public/Admin/js/metisMenu.min.js"></script>
<script src="/lxt/Public/Admin/js/custom.js"></script>
</body>
</html>