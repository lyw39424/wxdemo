<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
	<script src="/wxdemo/Public/admin/lib/jquery/1.9.1/jquery.min.js" ></script>
	<link href="/wxdemo/Public/admin/upload/uploadify3.2.1/uploadify.css" rel="stylesheet" type="text/css" />
	<script src="/wxdemo/Public/admin/upload/uploadify3.2.1/jquery.uploadify.min.js"></script>
<!--ueditor-->
	<link href="/wxdemo/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" charset="utf-8" src="/wxdemo/umeditor/umeditor.config.js"></script>
	<script type="text/javascript" charset="utf-8" src="/wxdemo/umeditor/umeditor.min.js"></script>
	<script type="text/javascript" src="/wxdemo/umeditor/lang/zh-cn/zh-cn.js"></script>
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
<title>添加新闻消息</title>
</head>
<script type="text/javascript">
	$(function() {
		$('#file_upload').uploadify({
			'swf'      : '/wxdemo/Public/admin/upload/uploadify3.2.1/uploadify.swf',
			'uploader' : '<?php echo U("GrReply/img");?>',
			'buttonText' : '头像上传',
			'onUploadSuccess' : function(file, data) {
				var datajson=eval('(' + data + ')');
				$('#img').attr('src','/wxdemo/Uploads/'+ datajson.url);
				$('#ne_img').val(datajson.url);
			},
		});
	});
</script>
<body>
<article class="page-container">
	<form class="form form-horizontal" action="<?php echo U('WxArticle/add');?>" method="post" id="form-admin-add">
		<input type="hidden" id="ne_img" name="ne_img" />
	<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>封面：</label>
			<div class="form-group" style="height: 200px;text-align:center;">
				<img id="img" src="/wxdemo/Public/admin/upload/images/nophoto.jpg" width="130" height="130" border="0" />
				<input id="file_upload" name="file_upload" type="file" multiple="true" value="" />
			</div>
	</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">类型：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" size="1" name="province" id="province" onChange="getCity()">
					<OPTION VALUE="0">请选择类型 </OPTION>
					<?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><OPTION VALUE="<?php echo ($vo["code"]); ?>"><?php echo ($vo["name"]); ?> </OPTION><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span> </div>
		</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>标题：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="" placeholder="" id="name" name="name">
		</div>
	</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>作者：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="author" name="author">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>内容：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="discription" id="ne_count" style="width:1000px;height:240px;" ></textarea>
				<script type="text/javascript">
					var editor = UM.getEditor('ne_count');
				</script>
			</div>
        </div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
		</div>
	</div>
	</form>
</article>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/static/js/H-ui.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/static/js/H-ui.admin.js"></script>

<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>