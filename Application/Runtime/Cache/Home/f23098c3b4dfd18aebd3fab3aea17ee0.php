<?php if (!defined('THINK_PATH')) exit();?><html>
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
	<!--/meta 作为公共模版分离出去-->
	<title>编辑类别</title>
</head>
<body>
<div class="page-container">
	<form class="form form-horizontal" action="<?php echo U('WxCategory/update');?>" method="post"  id="form-article-add">
		<input type="hidden" id="id" name="id" value="<?php echo ($detail["id"]); ?>">
		<input type="hidden" id="category_code" name="category_code" value="<?php echo ($detail["category_code"]); ?>">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>种类名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($detail["category_name"]); ?>" placeholder="" id="category_name" name="category_name">
			</div>
		</div>
		<button type="button" onclick="add()" class="btn btn-primary">添加下级分类</button>
		<table  class="table table-striped table-bordered table-hover">
			<thead>
			<tr>
				<th>值</th>
				<th>名称</th>
				<th>操作</th>
			</tr>
			</thead>
			<tbody class="test">
			<?php if(is_array($lists)): $k = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><tr >
				<td class="center"><input type="text" name="code[<?php echo ($k); ?>]" value="<?php echo ($vo["code"]); ?>"></td>
				<td class="center"><input type="text" name="name[<?php echo ($k); ?>]" value="<?php echo ($vo["name"]); ?>"></td>
				<td class="center"><button type="button" class="ml-5" onClick="removez(this)"><i class="Hui-iconfont">&#xe6e2;</i></button>
				</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/wxdemo/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/static/h-ui/js/H-ui.admin.js"></script>
<script type="text/javascript">
	var i=<?php echo ($k); ?>+1;
	function add(){
		$('.test').append('<tr ><td class="center"><input type="text" name="code['+i+']"></td><td class="center"><input type="text" name="name['+i+']"></td><td class="center"><button type="button" class="ml-5" onClick="removez(this)"><i class="Hui-iconfont">&#xe6e2;</i></button></td></tr>');
		i++;
	}
	function removez(f){
		$(f).parent().parent().remove();
	}
</script>

</body>
</html>