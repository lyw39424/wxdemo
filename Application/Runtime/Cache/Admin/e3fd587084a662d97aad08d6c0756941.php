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
<![endif]-->
<!--/meta 作为公共模版分离出去-->
<title>添加公众号</title>
</head>
<body>
<article class="page-container">
	<form action="<?php echo U('Menue/add');?>" method="post" class="form form-horizontal" id="form-member-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>菜单总类：</label>
			<div class="formControls col-xs-3 col-sm-2">
				<input type="text" class="input-text" value="" placeholder="" id="menu_cate" name="menu_cate">
			</div>
		</div>
		<div class="row cl">
			<button type="button" onclick="add()" class="btn btn-primary">添加下级菜单</button>
		</div>
		<div id="InputsWrapper"></div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/wxdemo/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/static/h-ui/js/H-ui.admin.js"></script>
<!--/_footer /作为公共模版分离出去--> 

<!--请在下方写此页面业务相关的脚本--> 
<script type="text/javascript">
	var i=0;
	var j=0;
	function add(){
		$(InputsWrapper).append('<div class="delmen"><label class="form-label col-xs-3 col-sm-2"><span class="c-red">*</span>二级级菜单名称：</label><div class="formControls col-xs-3 col-sm-2"> <input type="text" class="input-text" value="" placeholder=""  name="title_name['+i+']"> </div> <label class="form-label col-xs-3 col-sm-2"><span class="c-red">*</span>URL：</label><div class="formControls col-xs-3 col-sm-2"><input type="text" class="input-text" value="" placeholder=""  name="title_code['+i+']"></div><div class="row cl"><button type="button" onclick="adds('+i+')" class="btn btn-primary radius">添加按钮</button><button type="button" onclick="delss(this)" class="btn btn-warning radius">删除二级</button></div><div id="menubutton'+i+'"></div></div>');
		i++;
	}
	function adds(i){
        var menus="#menubutton"+i;
       $(menus).append('<div class="meunes"><label class="form-label col-xs-3 col-sm-2"><span class="c-red">*</span>按钮：</label><div class="formControls col-xs-4 col-sm-3"><input type="text" class="input-text" value="" placeholder=""  name="menu_name['+j+']['+i+']"></div><label class="form-label col-xs-3 col-sm-2"><span class="c-red">*</span>URL：</label><div class="formControls col-xs-4 col-sm-3"><input type="text" class="input-text" value="" placeholder=""  name="menu_code['+j+']['+i+']"></div><div class="row cl"><button type="button" onclick="del(this)" class="btn btn-danger radius">删除</button></div></div>');
		j++;
	}
	function del(s){
		$(s).parent().parent().remove();
	}
    function delss(f){
        console.log($(f));
        $(f).parent().parent().remove();
    }
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>