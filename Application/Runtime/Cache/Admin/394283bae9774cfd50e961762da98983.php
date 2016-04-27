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
<title>图片列表</title>
</head>
<body>
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 我们的产品 <span class="c-gray en">&gt;</span> 产品图列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="page-container">
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a class="btn btn-primary radius" onclick="picture_add('添加产品图片','productAdd.html')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加产品图片</a></span> <span class="r">共有数据：<strong><?php echo ($count); ?></strong> 条</span> </div>
		<div class="mt-20">
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th width="10">排序</th>
						<th width="100">产品图</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr class="text-c">
							<td><input class="order" data="<?php echo ($vo["id"]); ?>" style="text-align:center;width: 1.5rem;height: 1.5rem;border-radius: 1rem;border: 0.2rem solid #9A9A9A;" value="<?php echo ($vo["ord"]); ?>" /></td>
							<td><img height="200" class="picture-thumb" src="/Public/<?php echo ($vo["product"]); ?>"></td>
							<td class="td-manage"> <a style="text-decoration:none" class="ml-5" onClick="picture_del(this,<?php echo ($vo["id"]); ?>,'<?php echo ($vo["product"]); ?>')" href="javascript:void(0);" title="删除"><i style="font-size: 2rem;" class="Hui-iconfont">&#xe6e2;</i></a></td>
						</tr><?php endforeach; endif; ?>
				</tbody>
			</table>
		</div>
		<div style="margin-top: 1rem;"><button type="button" onclick="order();" class="btn btn-success">排序</button></div>
		<?php echo ($page); ?>
	</div>
	<script type="text/javascript" src="/Public/lib/jquery/1.9.1/jquery.min.js"></script> 
	<script type="text/javascript" src="/Public/lib/layer/2.1/layer.js"></script> 
	<script type="text/javascript" src="/Public/lib/My97DatePicker/WdatePicker.js"></script> 
	<script type="text/javascript" src="/Public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
	<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.js"></script> 
	<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.admin.js"></script> 
	<script type="text/javascript">

		/*图片-添加*/
		function picture_add(title,url){
			var index = layer.open({
				type: 2,
				title: title,
				content: url
			});
			layer.full(index);
		}

		/*图片-删除*/
		function picture_del(obj,id,product){
			layer.confirm('确认要删除吗？',function(){
				$.ajax({
					url:"<?php echo U('Index/productDel');?>",
					type:'post',
					dataType:'json',
					data:{'id':id,'product':product},
					success: function(data){
						if(data.msg == 1){
							layer.msg('删除成功!',{icon:1,time:1000});
							$(obj).parents("tr").remove();
						}else{
							layer.msg('删除失败!',{icon:2,time:1000});
						}   
					}
				})

			});
		}
		function order() {
			var str = "";

			$(".order").each(function(){
				str += $(this).val()+",";
				str += $(this).attr('data')+",";
			});

			$.ajax({
				url:"<?php echo U('Index/productOrd');?>",
				type:"post",
				dataType:"json",
				data:{"data":str},
				success: function(data){
					layer.msg('排序完成!',{icon:1,time:1000});
				}
			})
		}
	</script>
</body>
</html>