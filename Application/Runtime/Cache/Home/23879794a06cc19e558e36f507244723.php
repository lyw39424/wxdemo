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
<title>新增关键字</title>
</head>
<body>
<div class="page-container">
	<form class="form form-horizontal" action="<?php echo U('KeyReply/add');?>" method="post"  name="form1">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>关键字名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="key_name" name="key_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">回复类型：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" size="1" name="province" id="province" onChange="getCity()">
					<OPTION VALUE="0">请选择类型 </OPTION>
					<?php if(is_array($cate)): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><OPTION VALUE="<?php echo ($vo["code"]); ?>"><?php echo ($vo["name"]); ?> </OPTION><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">回复内容：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="select" size="1" name="city">
					<OPTION VALUE="0">请选择回复内容</OPTION>
				</select>
				</span> </div>
		</div>
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
<script  type="text/javascript">
	   //定义了城市的二维数组，里面的顺序跟省份的顺序是相同的。通过selectedIndex获得省份的下标值来得到相应的城市数组

   function getCity(){

	   //获取下拉框值
	   var ff=$('#province option:selected') .val();
	   //获得二级下拉框的对象
       var sltCity=document.form1.city;
		         //用js获取二级菜单值
	   sltCity.length=1;
	   $.ajax({
		   url: '/wxdemo/Home/KeyReply/count',
		   type: "post",
		   data: {
			   'id': ff,

		   },
		   dataType: 'json',
		   error: function () {
			   layer.alert('服务器忙，请稍候再试')
		   },
		   success: function (state) {

			   for(var i=0;i<state.length;i++){
				   sltCity[i+1]=new Option(state[i].name,state[i].id);
			   }
			    return;
		   }
	   });

		       //清空二级下拉框，仅留提示选项

		         //将城市数组中的值填充到城市下拉框中

		     }
	</script>

</body>
</html>