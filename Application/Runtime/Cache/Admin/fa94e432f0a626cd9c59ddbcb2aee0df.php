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
<title>意见反馈</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 联系我们 <span class="c-gray en">&gt;</span> 联系我们 <!-- <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a> --></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <!-- <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> </span> --> <span class="r">共有数据：<strong><?php echo ($count); ?></strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
				<tr class="text-c">
					<th width="100">姓名</th>
					<th width="100">手机号</th>
					<th>留言内容</th>
					<th>留言时间</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr class="text-c">
						<td><?php echo ($vo["name"]); ?></td>
						<td><?php echo ($vo["tel"]); ?></td>
						<td class="text-l"><?php echo ($vo["text"]); ?></td>
						<td><?php echo (date('Y-m-d H:i:s',$vo["time"])); ?></td>
						<td class="td-manage"> <a title="删除" href="javascript:;" onclick="member_del(this,<?php echo ($vo["id"]); ?>)" class="ml-5" style="text-decoration:none"><i style="font-size: 2rem;" class="Hui-iconfont">&#xe6e2;</i></a></td>
					</tr><?php endforeach; endif; ?>
			</tbody>
		</table>
		<?php echo ($page); ?>
	</div>
</div>
<script type="text/javascript" src="/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/Public/lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="/Public/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/Public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.admin.js"></script> 
<script type="text/javascript">

function member_del(obj,id){
	layer.confirm('确认要删除吗？',function(){
		$.ajax({
	        url:"<?php echo U('Index/contactDel');?>",
	        type:'post',
	        dataType:'json',
	        data:{'id':id},
	        success: function(data){
	            if(data.msg == 1){
	                layer.msg('删除成功!',{icon:1,time:1000});
	                setTimeout(location.reload(),1000); 
	            }else{
	            	layer.msg('删除失败!',{icon:2,time:1000});
	            }   
	        }
	    })

	});
}
</script>
</body>
</html>