<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/lib/html5.js"></script>
<script type="text/javascript" src="/Public/lib/respond.min.js"></script>
<script type="text/javascript" src="/Public/lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>飘令后台管理</title>
<meta name="keywords" content="飘令后台管理">
<meta name="description" content="飘令后台管理">
</head>
<body>
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs">飘令后台管理</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs"></a> <span class="logo navbar-slogan f-l mr-10 hidden-xs"></span> <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<!-- <nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li>
								<a href="javascript:;" onclick="article_add('添加新闻','newsAdd.html')"><i class="Hui-iconfont">&#xe616;</i> 新闻</a>
							</li>
							<li>
								<a href="javascript:;" onclick="picture_add('添加轮播图','carouselAdd.html')"><i class="Hui-iconfont">&#xe613;</i> 轮播图</a>
							</li>
							<li>
								<a href="javascript:;" onclick="product_add('添加产品图片','productAdd.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a>
							</li>
							<li>
								<a href="javascript:;" onclick="member_add('添加产品','productCenterAdd.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 产品介绍</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav> -->
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<!-- <li>超级管理员</li> -->
					<li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A"> <?php echo (session('username')); ?> <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<!-- <li><a href="#">个人信息</a></li> -->
							<li><a href="<?php echo U('Login/signOut');?>">切换账户</a></li>
							<li><a href="<?php echo U('Login/signOut');?>">退出</a></li>
						</ul>
					</li>
					<!-- <li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li> -->
					<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
							<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
							<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
							<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
							<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
							<li><a href="javascript:;" data-val="orange" title="绿色">橙色</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
<aside class="Hui-aside">
	<input runat="server" id="divScrollValue" type="hidden" value="" />
	<div class="menu_dropdown bk_2">
		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe613;</i> 图片管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Index/carousel');?>" data-title="轮播图管理" href="javascript:void(0)">轮播图管理</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-picture">
			<dt><i class="Hui-iconfont">&#xe685;</i> 我们的产品<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Index/product');?>" data-title="我们的产品" href="javascript:void(0)">我们的产品</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe6c5;</i> 联系我们<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Index/contact');?>" data-title="联系我们" href="javascript:void(0)">联系我们</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe620;</i> 产品介绍<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Index/productCenter');?>" data-title="产品中心" href="javascript:void(0)">产品中心</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe616;</i> 新闻动态<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Index/news');?>" data-title="新闻中心" href="javascript:void(0)">新闻中心</a></li>
				</ul>
			</dd>
		</dl>
		<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe627;</i> 试用申请<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a _href="<?php echo U('Index/trial');?>" data-title="试用申请" href="javascript:void(0)">试用申请</a></li>
				</ul>
			</dd>
		</dl>
	</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active"><span title="我的桌面" data-href="welcome.html">我的桌面</span><em></em></li>
			</ul>
		</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
	</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="<?php echo U('Index/desktop');?>"></iframe>
		</div>
	</div>
</section>
<script type="text/javascript" src="/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.admin.js"></script> 
<script type="text/javascript">
/*资讯-添加*/
function article_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*产品-添加*/
function product_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}
</script> 
</body>
</html>