<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
	<script src="/wxdemo/Public/admin/lib/jquery/1.9.1/jquery.min.js" ></script>
	<link href="/wxdemo/Public/admin/upload/uploadify3.2.1/uploadify.css" rel="stylesheet" type="text/css" />
	<script src="/wxdemo/Public/admin/upload/uploadify3.2.1/jquery.uploadify.min.js"></script>


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
<title>添加图文消息</title>
</head>
<script type="text/javascript">
	$(function() {
		$('#file_upload').uploadify({
			fileSizeLimit : 2*1024,
			'swf'      : '/wxdemo/Public/admin/upload/uploadify3.2.1/uploadify.swf',
			'uploader' : '<?php echo U("MuReply/img");?>',
			'buttonText' : '音乐上传',
			'onUploadSuccess' : function(file, data) {
				var datajson=eval('(' + data + ')');
				/*$('#img').attr('src','/wxdemo/Uploads/'+ datajson.url);*/
				$('#picurl').val(datajson.url);
			},
		});
		$('#file_uploads').uploadify({
			'swf'      : '/wxdemo/Public/admin/upload/uploadify3.2.1/uploadify.swf',
			'uploader' : '<?php echo U("MuReply/img");?>',
			'buttonText' : '封面',
			'onUploadSuccess' : function(file, data) {
				var datajson=eval('(' + data + ')');
				$('#imgs').attr('src','/wxdemo/Uploads/'+ datajson.url);
				$('#picurls').val(datajson.url);
			},
		});
	});
</script>
<body>
<article class="page-container">
	<form class="form form-horizontal" action="<?php echo U('MuReply/update');?>" method="post" id="form-admin-add">
		<input type="hidden" id="id" name="id" value="<?php echo ($detail["id"]); ?>"/>
		<input type="hidden" id="picurl" name="picurl" value="<?php echo ($detail["music_url"]); ?>"/>
		<input type="hidden" id="picurls" name="picurls" value="<?php echo ($detail["media_url"]); ?>"/>
	<div class="row cl">

			<div class="form-group" style="height: 200px;text-align:center;">
				<img id="img" src="/wxdemo/Public/admin/upload/images/timg.jpg" width="130" height="130" border="0" />
				<input id="file_upload" name="file_upload" type="file" multiple="true" value="" />
			</div>
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span></label>
		<div class="form-group" style="height: 200px;text-align:center;">
			<img id="imgs" src="/wxdemo/Public/admin/upload/images/timg.jpg" width="130" height="130" border="0" />
			<input id="file_uploads" name="file_upload" type="file" multiple="true" value="" />
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>标题：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($detail["title"]); ?>" placeholder="" id="title" name="title">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>音乐链接：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($detail["music_url"]); ?>"  id="music_url" name="music_url">
		</div>
	</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>高品质音乐链接：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($detail["hq_music"]); ?>"  id="hq_music" name="hq_music">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>音乐描述：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="description"  style="width:1000px;height:240px;" ><?php echo ($detail["description"]); ?></textarea>
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