<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>修改订单</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="/lxt/Public/Admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/lxt/Public/Admin/css/style.css" rel='stylesheet' type='text/css' />
<script type="text/javascript" src="/lxt/Public/shared/js/laydate.js"></script>

<link rel="stylesheet" type="text/css" href="/lxt/Public/shared/js/need/laydate.css">
<link rel="stylesheet" type="text/css" href="/lxt/Public/shared/js/skins/molv/laydate.css">
<link href="/lxt/Public/Admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="/lxt/Public/Admin/js/jquery.min.js"></script>

<script src="/lxt/Public/Admin/js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
	
        <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
	     <div class="alert alert-danger" role="alert">
        <strong>教程！</strong> 添加订单时会员姓名请务必用录入时的名称！订单日期请填写订单真实日期！
       </div>
  	       <!-- <h3><span class="label label-primary" style='margin-left:15px'>添加订单</span></h3> -->
  	       <h3><ol class="breadcrumb">
	      <li><a href="#">订单</a></li>
	      <li class="active">修改订单</li>
	    </ol></h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
						<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><form class="form-horizontal" method="post" action="<?php echo U('Admin/Order/viewDetailHandle',array('oid'=>$v['oid']));?>">
							
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">订单编号</label>
									<div class="col-sm-8">
										<input type="text" name="order_id" class="form-control1" id="disabledinput" value="<?php echo ($v['oid']); ?>" disabled="">
									</div>
								</div>

								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">会员编号</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="disabledinput" name="mid" value="<?php echo ($v['mid']); ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">会员名称</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="disabledinput" name="memberName" value="<?php echo ($v['membername']); ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">订单金额</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" id="disabledinput" name="money" value="<?php echo ($v['money']); ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="disabledinput" class="col-sm-2 control-label">订单日期</label>
									<div class="col-sm-8">
										<input  type="date" name="createtime" class="form-control1" ng-model='model.date' required="" value="<?php echo ($v['createtime']); ?>">
									</div>
								</div>
								<div class="form-group mb-n">
									<label for="largeinput" class="col-sm-2 control-label label-input-lg">订单内容</label>
									<div class="col-sm-8">
										<input type="text" name="detail" class="form-control1 input-lg" id="largeinput" value="<?php echo ($v['detail']); ?>">
									</div>
								</div>
								<div class="panel-footer">
									<div class="row">
										<div class="col-sm-8 col-sm-offset-2">
											<button class="btn-success btn">保存</button>
											<!-- <button class="btn-default btn">Cancel</button> -->
											<!-- <button class="btn-inverse btn">Reset</button> -->
										</div>
									</div>
								 </div>
								 
							</form><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
			</div>

      <!-- 提交 -->

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
</body>
</html>