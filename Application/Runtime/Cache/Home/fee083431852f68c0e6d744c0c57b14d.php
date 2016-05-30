<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
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
	<link type="text/css" rel="stylesheet" href="/wxdemo/Public/admin/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/wxdemo/Public/admin/css/stylesCode.css">
<title>查看图文信息</title>
</head>

<body>
<div class="content clearfix">
	<div class="section-container col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0">
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="section clearfix">
			<div class="sec-header col-xs-10 col-xs-offset-1">
			</div>
			<div class="items-container col-xs-12">
				<div class="item col-lg-3 col-sm-4 col-xs-6">
					<div class="btn01">
						<img src="/wxdemo/Uploads<?php echo ($vo["picurl"]); ?>" alt="213213">
						<div  class="ovrly"  style="color:#FF0000"><?php echo ($vo["title"]); ?></div>
						<div class="buttons">
							<a href="javascript:" onClick="picture_edit('编辑','/wxdemo/Home/GrReply/update','<?php echo ($vo["id"]); ?>')" class="fa fa-link"><i class="Hui-iconfont">&#xe6df;</i></a>
							<a href="javascript:" onClick="picture_del('删除','/wxdemo/Home/GrReply/delete','<?php echo ($vo["id"]); ?>')" class="fa fa-search"><i class="Hui-iconfont">&#xe609;</i></a>
						</div>
					</div>
				</div>
			</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
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
<!--/请在上方写此页面业务相关的脚本-->
function picture_edit(title,url,id){
var index = layer.open({
type: 2,
title: title,
content: url+'/id/'+id
});
layer.full(index);
}
/*图片-删除*/
function picture_del(obj,id){
layer.confirm('确认要删除吗？',function(index){
$.ajax({
url: '/wxdemo/Home/GrReply/delete',
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
</script>
</body>
</html>