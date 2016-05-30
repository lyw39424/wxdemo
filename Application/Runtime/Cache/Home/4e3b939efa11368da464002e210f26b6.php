<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/html5.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/respond.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/PIE_IE678.js"></script>
<![endif]-->
<link href="/wxdemo/Public/admin/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/wxdemo/Public/admin/static/h-ui/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="/wxdemo/Public/admin/static/h-ui/css/style.css" rel="stylesheet" type="text/css" />
<link href="/wxdemo/Public/admin/lib/Hui-iconfont/1.0.7/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>微信后台管理</title>
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"><img src=""></div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <div class="form form-horizontal" >
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-xs-8">
          <input id="username" name="username" type="text" placeholder="账户" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-xs-8">
          <input id="password" name="password" type="password" placeholder="密码" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input type="text" id="verify" name="verify" class="input-text size-L" style="width:150px;">
          <img id="verifyImg" src="/wxdemo/Home/WxLogin/verify" onClick="changeVerify()" height="40" width="150" title="点击刷新验证码" /></div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <label for="online">
            <input type="checkbox" name="online" id="online" value="">
            使我保持登录状态</label>
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
            <button onClick="btn_login()" class="btn btn-success radius size-L"> &nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;</button>
            <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer">@lyw 开源公众号管理平台</div>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/icheck/jquery.icheck.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/wxdemo/Public/admin/static/h-ui/js/H-ui.admin.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F080836300300be57b7f34f4b3e97d911' type='text/javascript'%3E%3C/script%3E"));

function changeVerify(){
  document.getElementById('verifyImg').src='/wxdemo/Home/WxLogin/verify';
}
function btn_login() {
    var u = $('#username').val();
    var p = $('#password').val();
    var z = $('#verify').val();
    if (u =="") {
        layer.alert('请输入用户名');
        return false;
    }
    if (p == "") {
        layer.alert('请输入密码')
        return false;
    }
    if (z == "") {
        layer.alert('请输入验证码')
        return false;
    }
    $.ajax({
        url: '/wxdemo/Home/WxLogin/dologin',
        type: "post",
        data: {
            'user': u,
            'password': p,
            'yzm': z,
        },
        dataType: 'json',
        error: function () {
            layer.alert('服务器忙，请稍候再试')
        },
        success: function (state) {
           if(state.state == 0){
               layer.alert(state.msg);
           }else if (state.state == 1) {
               window.location.href=state.addres;
            } else {
                layer.alert(state.msg);
            }
        }
    });
}

</script>
</body>
</html>