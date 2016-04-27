<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0033)http://demo42.zhizhuxiu.com/news/ -->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>免费试用</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta content="telephone=no" name="format-detection">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="renderer" content="webkit"><!--360默认急速模式打开-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
	<link href="/Public/lib/echarts/2.2.7/doc/asset/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/Public/piaoling/cui.css">
	<link rel="stylesheet" href="/Public/piaoling/style.css">
	<link rel="stylesheet" href="/Public/piaoling/less.css">
</head>
<body>
	<div id="hd">
		<div class="wp">
			<div class="logo"><a href="<?php echo U('Index/index');?>"><img src="/Public/piaoling/logo.png" alt=""></a></div>
			<div id="nav">
				<ul>
					<li><a href="<?php echo U('Index/index');?>">首页</a></li>
					<li><a href="<?php echo U('Index/product');?>">产品介绍</a></li>
					<li><a href="<?php echo U('Index/news');?>">新闻动态</a></li>
					<li><a href="<?php echo U('Index/about');?>">关于我们</a></li>
					<li><a href="">授权查询</a></li>
					<li><a href="<?php echo U('Index/trial');?>" class="mycur">免费试用</a></li>
				</ul>
			</div>
			<div class="tel">021-64197568</div>
		</div>	
	</div>
	<!-- end #hd -->
	
	<div class="c"></div>	

	<div id="bd">
		<div id="ban-in" style="background-image:url(/Public/piaoling/images/banner.jpg)">
			<div class="ban-bg"></div>
		</div>
		
		<div class="tit-i">
			<h3>申请试用</h3>
			<h5><span></span></h5>
		</div>
		<div class="wp">
			<div class="input-group input-group-lg">
				<span class="input-group-addon" id="sizing-addon1">姓名</span>
				<input type="text" class="form-control" name="username" placeholder="姓名" aria-describedby="sizing-addon1">
			</div>
			<div style="margin-top: 3rem;"></div>
			<div class="input-group input-group-lg">
				<span class="input-group-addon" id="sizing-addon1">电话</span>
				<input type="text" class="form-control" name="tel" placeholder="电话" aria-describedby="sizing-addon1">
			</div>
			<div style="margin-top: 3rem;"></div>
			<div class="input-group input-group-lg">
				<span class="input-group-addon" id="sizing-addon1">地址</span>
				<input type="text" class="form-control" name="address" placeholder="地址" aria-describedby="sizing-addon1">
			</div>
			<div style="margin-top: 2rem;"></div>
			<div class="form-group">
				<label for="name">备注留言</label>
				<textarea class="form-control" rows="5" id="message"></textarea>
			</div>
			<div style="margin-top: 2rem;"></div>
			<div style="text-align: center;">
				<button type="button" onclick="apply();" class="btn btn-success">提交申请</button>
			</div>

			<div class="c"></div>
			<div class="tit-i">
				<h4 style="margin-bottom: 2rem;">
					关注我们
					<div>&nbsp;</div>
					随时解答您的问题
				</h4>
				<span><img src="/Public/piaoling/ewm.jpg" alt=""></span>
			</div>
			<div class="dede_pages"></div>
		</div>
	</div>
	<!-- end #bd -->
	<div class="c"></div>
	<!-- begin #fd -->
	<div id="fd" class="index-fd pr">
		<div class="fd-copy">
			<div class="wp">
				<p>车令科技有限公司　ICP备案编号：沪ICP备12029384号 　</p>        
				<p>电话：021-64197568</p>
				<p>技术支持：PURELURE飘令</p>           
			</div>
		</div>
	</div>
	<div class="side">
		<ul>
			<li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=572663791&amp;site=qq&amp;menu=yes" target="_blank"><div class="sidebox"><img src="/Public/piaoling/side_icon02.png">在线咨询</div></a></li>
			<li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=572663791&amp;site=qq&amp;menu=yes"><div class="sidebox"><img src="/Public/piaoling/side_icon01.png">在线咨询</div></a></li>
			<li><a href="javascript:void(0);"><div class="sidebox"><img src="/Public/piaoling/side_icon03.png">021-64197568</div></a></li>
		</ul>
	</div>
	<div class="side2">
		<ul>
			<li><a href=""><img src="/Public/piaoling/r_icon1.png" alt=""></a><div class="weixin"><em></em><img src="/Public/piaoling/ewm.jpg" alt=""></div></li>
			<li><a href="javascript:goTop();" class="sidetop"><img src="/Public/piaoling/r_icon2.png"></a></li>
		</ul>
	</div>	
	<script type="text/javascript" src="/Public/piaoling/jquery.js"></script>
	<script type="text/javascript" src="/Public/piaoling/lib.js"></script>
	<script src="/Public/lib/echarts/2.2.7/doc/asset/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/Public/lib/layer/2.1/layer.js"></script>
	<script type="text/javascript">
		function apply() {
			var tel = $("[name='tel']").val();
			var name = $("[name='username']").val();
			var address = $("[name='address']").val();
			var message = $("#message").val();
			var re = /^[1][3587]\d{9}$/;
			if(name==""){
				layer.alert("姓名不能为空");
				return false;
			}
			if(!re.test(tel)){
				layer.alert("请输入正确的联系方式");
				return false;
			}
			if(address==""){
				layer.alert("地址不能为空");
				return false;
			}
			$.ajax({
				url:"<?php echo U('Index/trialAdd');?>",
				type:'post',
				dataType:'json',
				data:{'name':name,'tel':tel,'address':address,'message':message},
				success: function(data){
					if(data.msg == 1){
						layer.msg('提交成功!',{icon:1,time:1000});
					}else{
						layer.msg('提交失败!',{icon:2,time:1000});
					} 
				}
			})
		}
	</script>
</body>
</html>