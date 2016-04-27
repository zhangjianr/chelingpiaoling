<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/lib/html5.js"></script>
<script type="text/javascript" src="/Public/lib/respond.min.js"></script>
<script type="text/javascript" src="/Public/lib/PIE_IE678.js"></script>
<![endif]-->
<link href="/Public/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/Public/static/h-ui/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="/Public/static/h-ui/css/style.css" rel="stylesheet" type="text/css" />
<link href="/Public/lib/Hui-iconfont/1.0.7/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>后台登录</title>
<meta name="keywords" content="">
<meta name="description" content="">
</head>
<body>
	<input type="hidden" id="TenantId" name="TenantId" value="" />
	<div class="header"></div>
	<div class="loginWraper">
		<div id="loginform" class="loginBox">
			<form class="form form-horizontal" onsubmit="return sublog();" action="<?php echo U('Login/signIn');?>" method="post">
				<div class="row cl">
					<label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
					<div class="formControls col-xs-8">
						<input name="username" type="text" placeholder="账户" class="input-text size-L">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
					<div class="formControls col-xs-8">
						<input name="passwd" type="password" placeholder="密码" class="input-text size-L">
					</div>
				</div>
				<div class="row cl">
					<div class="formControls col-xs-8 col-xs-offset-3">
						<input class="input-text size-L" name="verify" type="text" placeholder="验证码" style="width:150px;">
						<span id="verify"><img src="<?php echo U('Login/verify');?>" width="130" height="40"></span> <a id="kanbuq" href="javascript:void(0);">看不清，换一张</a> </div>
					</div>
					<div class="row cl">
<!-- <div class="formControls col-xs-8 col-xs-offset-3">
<label for="online">
<input type="checkbox" name="online" id="online" value="">
使我保持登录状态</label>
</div> -->
</div>
<div class="row cl">
	<div class="formControls col-xs-8 col-xs-offset-3">
		<input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
		<input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
	</div>
</div>
</form>
</div>
</div>
<div class="footer"></div>
<script type="text/javascript" src="/Public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.js"></script> 
<script>
	var _hmt = _hmt || [];
	(function() {
		var hm = document.createElement("script");
		hm.src = "//hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
		var s = document.getElementsByTagName("script")[0]; 
		s.parentNode.insertBefore(hm, s);
	})();
	var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
	document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F080836300300be57b7f34f4b3e97d911' type='text/javascript'%3E%3C/script%3E"));

</script>
<script type="text/javascript">
	$(function(){
		$("#kanbuq").on("click",function(){
			$.post("<?php echo U('Login/verify');?>",{
				num:Math.random()*10,},
				function(){
					$("#verify").html("<img src=<?php echo U('Login/verify');?> width='130' height='40'/>");
				});
		});
	})

	function sublog(){
		var data = $("form").serializeArray();
		$.post("<?php echo U('Login/signIn');?>",{
			data:data},
			function(msg){
				if(msg == 1){
					location.href = "<?php echo U('Index/index');?>";
				}else{
					layer.alert(msg);
				}
			});
		return false;
	}
</script>
</body>
</html>