<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0033)http://demo42.zhizhuxiu.com/news/ -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>新闻动态</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta content="telephone=no" name="format-detection">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit"><!--360默认急速模式打开-->
<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
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
					<li><a href="<?php echo U('Index/news');?>" class="mycur">新闻动态</a></li>
					<li><a href="<?php echo U('Index/about');?>">关于我们</a></li>
					<li><a href="">授权查询</a></li>
                    <li><a href="<?php echo U('Index/trial');?>">免费试用</a></li>
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

		<div class="wp">
			<div class="tit-i">
				<h3>最新动态</h3>
				<h5>HOT <span>NEWS</span></h5>
			</div>
			<ul class="ul-list">
				<?php if(is_array($arr)): foreach($arr as $key=>$vo): ?><li>
						<div class="pad">
							<div class="pic"><a href="<?php echo U('Index/newsDetails',array('id'=>$vo['id']));?>"><img src="/Public/<?php echo ($vo["image"]); ?>" alt="<?php echo ($vo["title"]); ?>"></a></div>
							<div class="bor">
								<div class="txt">
									<div class="title">
										<span><em><?php echo (date("m/d",$vo["time"])); ?></em><?php echo (date("Y",$vo["time"])); ?></span>
										<h3><a href=""><?php echo (msubstr($vo["title"],0,20,'utf-8',false)); ?></a></h3>
									</div>
									<a href="<?php echo U('Index/newsDetails',array('id'=>$vo['id']));?>" style="color:#666;"><p><?php echo (msubstr($vo["content"],0,40,'utf-8',true)); ?></p></a>	
								</div>
								<div class="more"><a href="<?php echo U('Index/newsDetails',array('id'=>$vo['id']));?>" class="r">查看更多 &gt;</a></div>
							</div>
						</div>
					</li><?php endforeach; endif; ?>
			</ul>
			<div class="c"></div>
			<div class="dede_pages">

			</div>
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


</body>
</html>