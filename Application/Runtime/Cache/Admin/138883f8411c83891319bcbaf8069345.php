<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/wxdemo/Public/favicon.ico" >
<LINK rel="Shortcut Icon" href="/wxdemo/Public/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/html5.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/respond.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/wxdemo/Public/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/wxdemo/Public/admin/static/h-ui/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/wxdemo/Public/admin/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/wxdemo/Public/admin/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/wxdemo/Public/admin/static/h-ui/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/wxdemo/Public/admin/static/h-ui/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<![endif]-->
<title>用户管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 公众号管理<span class="c-gray en">&gt;</span> 公众号信息管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<form action="<?php echo U('Wechat/index');?>" method="get" class="form form-horizontal" id="form-member-add">
	<div class="text-c">
		<input type="text" class="input-text" style="width:250px" placeholder="输入公众号名称" value="<?php echo ($map["wxname"]); ?>" id="code" name="code">
		<button type="submit" class="btn btn-success radius" ><i class="Hui-iconfont">&#xe665;</i>公众用户</button>
	</div>
		</form>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="member_add('添加公众号','/wxdemo/Admin/Wechat/add')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加公众号</a></span> <span class="r"><?php echo ($page); ?></span> </div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="80">ID</th>
				<th width="100">账号名称</th>
				<th width="40">类型</th>
				<th width="150">邮箱</th>
				<th width="130">加入时间</th>

				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c">
				<td><input type="checkbox" value="1" name="chek"></td>
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["wxname"]); ?></td>
			<?php if($vo["wxtype"] == '1'): ?><td>订阅号</td>
				<?php elseif($vo["wxtype"] == '2'): ?>
				<td>服务号</td>
				<?php else: ?> <td>1企业号</td><?php endif; ?>

				<td><?php echo ($vo["emall"]); ?></td>
				<td><?php echo ($vo["accesstime"]); ?></td>
				<td class="td-manage"> <a title="编辑" href="javascript:;" onclick="member_edit('编辑','/wxdemo/Admin/Wechat/update','<?php echo ($vo["id"]); ?>','','510')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>  <a title="删除" href="javascript:;" onclick="member_del(this,'<?php echo ($vo["id"]); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	</div>
</div>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/static/h-ui/js/H-ui.admin.js"></script>
<script type="text/javascript">
$(function(){
	$('.table-sort').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aoColumnDefs": [
		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		  {"orderable":false,"aTargets":[0,8,9]}// 制定列不参与排序
		]
	});
	$('.table-sort tbody').on( 'click', 'tr', function () {
		if ( $(this).hasClass('selected') ) {
			$(this).removeClass('selected');
		}
		else {
			table.$('tr.selected').removeClass('selected');
			$(this).addClass('selected');
		}
	});
});
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url);
}
function  member_edit(title,url,id,w,h){
	layer_show(title,url+'/id/'+id,w,h);
}
function member_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			url: '/wxdemo/Admin/Wechat/delete',
			type: "post",
			data: {
				'id': id
			},
			dataType: 'json',
			error: function () {
				layer.alert('服务器忙，请稍候再试')
			},
			success: function (state) {
				if(state.state == 0){
					layer.msg(state.msg);
					return;
				}
			}
		});
		$(obj).parents("tr").remove();
		layer.msg('已删除!',{icon:1,time:1000});
	});
}
	function  datadel(){
		var arr = "";
		for(var i = 0;i<$('tbody .text-c ').length;i++){
			if($('tbody .text-c ').eq(i).children('td').eq(0).children('input')[0].checked){
				arr += "'"+$('tbody .text-c ').eq(i).children('td').eq(1).html()+"',";
				/*var id=$('tbody .text-c ').eq(i).children('td').eq(1).html();*/

			}

		}
		/*console.log(arr.substr(0,arr.length-1));*/
		var id="("+arr.substr(0,arr.length-1)+")";
		$.ajax({
			url: '/wxdemo/Admin/Wechat/delete',
			type: "post",
			data: {
				'id': id
			},
			dataType: 'json',
			error: function () {
				layer.alert('服务器忙，请稍候再试')
			},
			success: function (state) {
				if(state.state == 0){
					layer.msg(state.msg);
					return;
				}
			}
		});

	}
</script>
</body>
</html>