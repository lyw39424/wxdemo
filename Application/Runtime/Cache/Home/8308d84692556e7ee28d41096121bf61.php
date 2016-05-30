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
    <link href="lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="page-container">
    <form action="<?php echo U('WxMenu/index');?>" method="post" class="form form-horizontal" id="menuadd">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">备注:<span style="color:red"></span></label>
            <div class="formControls col-xs-8 col-sm-9"><span style="color:red">（一级菜单最多三个,二级菜单最多五个）</span></div>
        </div>


        <table border="2" bordercolor="#288822" cellpadding="1" cellspacing="1" style="width: 100%;hetgh:100%">
            <thead>
            <tr class="text-c">
                <th>一级菜单与类型</th>
                <th >一级菜单值</th>
                <th >二级菜单与类型</th>
                <th >二级菜单值</th>
            </tr>
            </thead>
            <tbody>
            <!--一级菜单-->
            <tr valign="center">
                <td rowspan="5" align="center" style="width: 20%;">
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>名称：</label>
                        <div class="formControls col-xs-5 col-sm-6">
                            <input type="text" class="input-text"  placeholder="最多5个字"  name="menu0" value="<?php echo ($menuo["me_name"]); ?>">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>类型：</label>
                        <div class="formControls col-xs-7 col-sm-8 skin-minimal">
                            <?php if($menuo["me_type"] == 'click'): ?><div class="radio-box">
                                    <input name="menu0_box" type="radio" value="click"  checked>
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu0_box" type="radio" value="view"  >
                                    <label for="sex-2">url</label>
                                </div>
                                <?php else: ?>
                                <div class="radio-box">
                                    <input name="menu0_box" type="radio" value="click"  >
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu0_box" type="radio" value="view"  checked>
                                    <label for="sex-2">url</label>
                                </div><?php endif; ?>

                        </div>
                    </div>
                </td>
                <td rowspan="5" align="center" style="width: 20%;">
                    <div class="row cl">
                        <div class="formControls col-xs-9 col-sm-10">
                            <input type="text" class="input-text"  placeholder="填写地址或者url(可用信息)"  name="menu0_0" value="<?php echo ($menuo["url_value"]); ?>">
                        </div>
                    </div>
                </td>

                <td style="width: 30%;">
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>二级菜单名称：</label>
                        <div class="formControls col-xs-5 col-sm-6">
                            <input type="text" class="input-text"  placeholder="最多7个字"  name="menu0_menu0" value="<?php echo ($osubmenuo["tw_name"]); ?>">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>类型：</label>
                        <div class="formControls col-xs-7 col-sm-8 skin-minimal">
                            <?php if($osubmenuo["me_type"] == 'click'): ?><div class="radio-box">
                                    <input name="menu0_box0" type="radio" value="click"  checked>
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu0_box0" type="radio" value="view"  >
                                    <label for="sex-2">url</label>
                                </div>
                                <?php else: ?>
                                <div class="radio-box">
                                    <input name="menu0_box0" type="radio" value="click"  >
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu0_box0" type="radio" value="view" checked >
                                    <label for="sex-2">url</label>
                                </div><?php endif; ?>

                        </div>
                    </div>
                </td>
                <td style="width: 30%;">
                    <div class="row cl">
                        <div class="formControls col-xs-9 col-sm-10">
                            <input type="text" class="input-text"  placeholder="填写url或者地址"  name="menu0_key0" value="<?php echo ($osubmenuo["url_value"]); ?>">
                        </div>
                    </div>
                </td>
            </tr>

            <tr valign="center">
                <td style="width: 30%;">
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>二级菜单名称：</label>
                        <div class="formControls col-xs-5 col-sm-6">
                            <input type="text" class="input-text"  placeholder="最多7个字"  name="menu0_menu1" value="<?php echo ($tsubmenuo["tw_name"]); ?>">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>类型：</label>
                        <div class="formControls col-xs-7 col-sm-8 skin-minimal">
                            <?php if($tsubmenuo["me_type"] == 'click'): ?><div class="radio-box">
                                    <input name="menu0_box1" type="radio" value="click"  checked>
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu0_box1" type="radio" value="view"  >
                                    <label for="sex-2">url</label>
                                </div>
                                <?php else: ?>
                                <div class="radio-box">
                                    <input name="menu0_box1" type="radio" value="click"  >
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu0_box1" type="radio" value="view"  checked>
                                    <label for="sex-2">url</label>
                                </div><?php endif; ?>

                        </div>
                    </div>
                </td>
                <td style="width: 30%;">
                    <div class="row cl">
                        <div class="formControls col-xs-9 col-sm-10">
                            <input type="text" class="input-text"  placeholder="填写url或者地址"  name="menu0_key1" value="<?php echo ($tsubmenuo["url_value"]); ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <tr valign="center">
                <td style="width: 30%;">
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>二级菜单名称：</label>
                        <div class="formControls col-xs-5 col-sm-6">
                            <input type="text" class="input-text"  placeholder="最多7个字"  name="menu0_menu2" value="<?php echo ($ssubmenuo["tw_name"]); ?>">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>类型：</label>
                        <div class="formControls col-xs-7 col-sm-8 skin-minimal">
                            <?php if($ssubmenuo["me_type"] == 'click'): ?><div class="radio-box">
                                    <input name="menu0_box2" type="radio" value="click"  checked>
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu0_box2" type="radio" value="view"  >
                                    <label for="sex-2">url</label>
                                </div>
                                <?php else: ?>
                                <div class="radio-box">
                                    <input name="menu0_box2" type="radio" value="click"  >
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu0_box2" type="radio" value="view"  checked>
                                    <label for="sex-2">url</label>
                                </div><?php endif; ?>

                        </div>
                    </div>
                </td>
                <td style="width: 30%;">
                    <div class="row cl">
                        <div class="formControls col-xs-9 col-sm-10">
                            <input type="text" class="input-text"  placeholder="填写url或者地址"  name="menu0_key2" value="<?php echo ($ssubmenuo["url_value"]); ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <tr valign="center">
                <td style="width: 30%;">
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>二级菜单名称：</label>
                        <div class="formControls col-xs-5 col-sm-6">
                            <input type="text" class="input-text"  placeholder="最多7个字"  name="menu0_menu3"  value="<?php echo ($fsubmenuo["tw_name"]); ?>">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>类型：</label>
                        <div class="formControls col-xs-7 col-sm-8 skin-minimal">
                            <?php if($fsubmenuo["me_type"] == 'click'): ?><div class="radio-box">
                                    <input name="menu0_box3" type="radio" value="click"  checked>
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu0_box3" type="radio" value="view"  >
                                    <label for="sex-2">url</label>
                                </div>
                                <?php else: ?>
                                <div class="radio-box">
                                    <input name="menu0_box3" type="radio" value="click"  >
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu0_box3" type="radio" value="view" checked >
                                    <label for="sex-2">url</label>
                                </div><?php endif; ?>

                        </div>
                    </div>
                </td>
                <td style="width: 30%;">
                    <div class="row cl">
                        <div class="formControls col-xs-9 col-sm-10">
                            <input type="text" class="input-text"  placeholder="填写url或者地址"  name="menu0_key3" value="<?php echo ($fsubmenuo["url_value"]); ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <tr valign="center">
                <td style="width: 30%;">
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>二级菜单名称：</label>
                        <div class="formControls col-xs-5 col-sm-6">
                            <input type="text" class="input-text"  placeholder="最多7个字"  name="menu0_menu4" value="<?php echo ($esubmenuo["tw_name"]); ?>">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>类型：</label>
                        <div class="formControls col-xs-7 col-sm-8 skin-minimal">
                            <?php if($esubmenuo["me_type"] == 'click'): ?><div class="radio-box">
                                    <input name="menu0_box4" type="radio" value="click"  checked>
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu0_box4" type="radio" value="view"  >
                                    <label for="sex-2">url</label>
                                </div>
                                <?php else: ?>
                                <div class="radio-box">
                                    <input name="menu0_box4" type="radio" value="click"  >
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu0_box4" type="radio" value="view"  checked>
                                    <label for="sex-2">url</label>
                                </div><?php endif; ?>

                        </div>
                    </div>
                </td>
                <td style="width: 30%;">
                    <div class="row cl">
                        <div class="formControls col-xs-9 col-sm-10">
                            <input type="text" class="input-text"  placeholder="填写url或者地址"  name="menu0_key4" value="<?php echo ($esubmenuo["url_value"]); ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <!--二级菜单-->
            <tr valign="center">
                <td rowspan="5" align="center" style="width: 20%;">
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>名称：</label>
                        <div class="formControls col-xs-5 col-sm-6">
                            <input type="text" class="input-text"  placeholder="最多5个字"  name="menu1" value="<?php echo ($menut["me_name"]); ?>">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>类型：</label>
                        <div class="formControls col-xs-7 col-sm-8 skin-minimal">
                            <?php if($menut["me_type"] == 'click'): ?><div class="radio-box">
                                    <input name="menu1_box" type="radio" value="click"  checked>
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu1_box" type="radio" value="view"  >
                                    <label for="sex-2">url</label>
                                </div>
                                <?php else: ?>
                                <div class="radio-box">
                                    <input name="menu1_box" type="radio" value="click"  >
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu1_box" type="radio" value="view"  checked>
                                    <label for="sex-2">url</label>
                                </div><?php endif; ?>

                        </div>
                    </div>
                </td>
                <td rowspan="5" align="center" style="width: 20%;">
                    <div class="row cl">
                        <div class="formControls col-xs-9 col-sm-10">
                            <input type="text" class="input-text"  placeholder="填写地址或者url"  name="menu1_1"  value="<?php echo ($menut["url_value"]); ?>">
                        </div>
                    </div>
                </td>

                <td style="width: 30%;">
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>二级菜单名称：</label>
                        <div class="formControls col-xs-5 col-sm-6">
                            <input type="text" class="input-text"  placeholder="最多7个字"  name="menu1_menu0" value="<?php echo ($osubmenut["tw_name"]); ?>">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>类型：</label>
                        <div class="formControls col-xs-7 col-sm-8 skin-minimal">
                            <?php if($osubmenut["me_type"] == 'click'): ?><div class="radio-box">
                                    <input name="menu1_box0" type="radio" value="click"  checked>
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu1_box0" type="radio" value="view"  >
                                    <label for="sex-2">url</label>
                                </div>
                                <?php else: ?>
                                <div class="radio-box">
                                    <input name="menu1_box0" type="radio" value="click"  >
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu1_box0" type="radio" value="view"  checked>
                                    <label for="sex-2">url</label>
                                </div><?php endif; ?>

                        </div>
                    </div>
                </td>
                <td style="width: 30%;">
                    <div class="row cl">
                        <div class="formControls col-xs-9 col-sm-10">
                            <input type="text" class="input-text"  placeholder="填写url或者地址"  name="menu1_key0" value="<?php echo ($osubmenut["url_value"]); ?>">
                        </div>
                    </div>
                </td>
            </tr>

            <tr valign="center">
                <td style="width: 30%;">
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>二级菜单名称：</label>
                        <div class="formControls col-xs-5 col-sm-6">
                            <input type="text" class="input-text"  placeholder="最多7个字"  name="menu1_menu1" value="<?php echo ($tsubmenut["tw_name"]); ?>">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>类型：</label>
                        <div class="formControls col-xs-7 col-sm-8 skin-minimal">
                            <?php if($tsubmenut["me_type"] == 'click'): ?><div class="radio-box">
                                    <input name="menu1_box1" type="radio" value="click"  checked>
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu1_box1" type="radio" value="view"  >
                                    <label for="sex-2">url</label>
                                </div>
                                <?php else: ?>
                                <div class="radio-box">
                                    <input name="menu1_box1" type="radio" value="click"  >
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu1_box1" type="radio" value="view"  checked>
                                    <label for="sex-2">url</label>
                                </div><?php endif; ?>

                        </div>
                    </div>
                </td>
                <td style="width: 30%;">
                    <div class="row cl">
                        <div class="formControls col-xs-9 col-sm-10">
                            <input type="text" class="input-text"  placeholder="填写url或者地址"  name="menu1_key1" value="<?php echo ($tsubmenut["url_value"]); ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <tr valign="center">
                <td style="width: 30%;">
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>二级菜单名称：</label>
                        <div class="formControls col-xs-5 col-sm-6">
                            <input type="text" class="input-text"  placeholder="最多7个字"  name="menu1_menu2"  value="<?php echo ($ssubmenut["tw_name"]); ?>">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>类型：</label>
                        <div class="formControls col-xs-7 col-sm-8 skin-minimal">
                            <?php if($ssubmenut["me_type"] == 'click'): ?><div class="radio-box">
                                    <input name="menu1_box2" type="radio" value="click"  checked>
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu1_box2" type="radio" value="view"  >
                                    <label for="sex-2">url</label>
                                </div>
                                <?php else: ?>
                                <div class="radio-box">
                                    <input name="menu1_box2" type="radio" value="click"  >
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu1_box2" type="radio" value="view"  checked>
                                    <label for="sex-2">url</label>
                                </div><?php endif; ?>

                        </div>
                    </div>
                </td>
                <td style="width: 30%;">
                    <div class="row cl">
                        <div class="formControls col-xs-9 col-sm-10">
                            <input type="text" class="input-text"  placeholder="填写url或者地址"  name="menu1_key2" value="<?php echo ($ssubmenut["url_value"]); ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <tr valign="center">
                <td style="width: 30%;">
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>二级菜单名称：</label>
                        <div class="formControls col-xs-5 col-sm-6">
                            <input type="text" class="input-text"  placeholder="最多7个字"  name="menu1_menu3" value="<?php echo ($fsubmenut["tw_name"]); ?>">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>类型：</label>
                        <div class="formControls col-xs-7 col-sm-8 skin-minimal">
                            <?php if($fsubmenut["me_type"] == 'click'): ?><div class="radio-box">
                                    <input name="menu1_box3" type="radio" value="click"  checked>
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu1_box3" type="radio" value="view"  >
                                    <label for="sex-2">url</label>
                                </div>
                                <?php else: ?>
                                <div class="radio-box">
                                    <input name="menu1_box3" type="radio" value="click"  >
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu1_box3" type="radio" value="view"  checked>
                                    <label for="sex-2">url</label>
                                </div><?php endif; ?>

                        </div>
                    </div>
                </td>
                <td style="width: 30%;">
                    <div class="row cl">
                        <div class="formControls col-xs-9 col-sm-10">
                            <input type="text" class="input-text"  placeholder="填写url或者地址"  name="menu1_key3" value="<?php echo ($fsubmenut["url_value"]); ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <tr valign="center">
                <td style="width: 30%;">
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>二级菜单名称：</label>
                        <div class="formControls col-xs-5 col-sm-6">
                            <input type="text" class="input-text"  placeholder="最多7个字"  name="menu1_menu4" value="<?php echo ($esubmenut["tw_name"]); ?>">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>类型：</label>
                        <div class="formControls col-xs-7 col-sm-8 skin-minimal">
                            <?php if($esubmenut["me_type"] == 'click'): ?><div class="radio-box">
                                    <input name="menu1_box4" type="radio" value="click"  checked>
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu1_box4" type="radio" value="view"  >
                                    <label for="sex-2">url</label>
                                </div>
                                <?php else: ?>
                                <div class="radio-box">
                                    <input name="menu1_box4" type="radio" value="click"  >
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu1_box4" type="radio" value="view"  checked>
                                    <label for="sex-2">url</label>
                                </div><?php endif; ?>
                        </div>
                    </div>
                </td>
                <td style="width: 30%;">
                    <div class="row cl">
                        <div class="formControls col-xs-9 col-sm-10">
                            <input type="text" class="input-text"  placeholder="填写url或者地址"  name="menu1_key4" value="<?php echo ($esubmenut["url_value"]); ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <!--三级菜单-->
            <tr valign="center">
                <td rowspan="5" align="center" style="width: 20%;">
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>名称：</label>
                        <div class="formControls col-xs-5 col-sm-6">
                            <input type="text" class="input-text"  placeholder="最多5个字"  name="menu2" value="<?php echo ($menus["me_name"]); ?>">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>类型：</label>
                        <div class="formControls col-xs-7 col-sm-8 skin-minimal">
                            <?php if($menus["me_type"] == 'click'): ?><div class="radio-box">
                                    <input name="menu2_box" type="radio" value="click"  checked>
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu2_box" type="radio" value="view"  >
                                    <label for="sex-2">url</label>
                                </div>
                                <?php else: ?>
                                <div class="radio-box">
                                    <input name="menu2_box" type="radio" value="click"  >
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu2_box" type="radio" value="view"  checked>
                                    <label for="sex-2">url</label>
                                </div><?php endif; ?>

                        </div>
                    </div>
                </td>
                <td rowspan="5" align="center" style="width: 20%;">
                    <div class="row cl">
                        <div class="formControls col-xs-9 col-sm-10">
                            <input type="text" class="input-text"  placeholder="填写地址或者url"  name="menu2_2" value="<?php echo ($menus["url_value"]); ?>">
                        </div>
                    </div>
                </td>

                <td style="width: 30%;">
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>二级菜单名称：</label>
                        <div class="formControls col-xs-5 col-sm-6">
                            <input type="text" class="input-text"  placeholder="最多7个字"  name="menu2_menu0" value="<?php echo ($osubmenus["tw_name"]); ?>">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>类型：</label>
                        <div class="formControls col-xs-7 col-sm-8 skin-minimal">
                            <?php if($osubmenus["me_type"] == 'click'): ?><div class="radio-box">
                                    <input name="menu2_box0" type="radio" value="click"  checked>
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu2_box0" type="radio" value="view"  >
                                    <label for="sex-2">url</label>
                                </div>
                                <?php else: ?>
                                <div class="radio-box">
                                    <input name="menu2_box0" type="radio" value="click"  >
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu2_box0" type="radio" value="view"  checked>
                                    <label for="sex-2">url</label>
                                </div><?php endif; ?>

                        </div>
                    </div>
                </td>
                <td style="width: 30%;">
                    <div class="row cl">
                        <div class="formControls col-xs-9 col-sm-10">
                            <input type="text" class="input-text"  placeholder="填写url或者地址"  name="menu2_key0" value="<?php echo ($osubmenus["url_value"]); ?>">
                        </div>
                    </div>
                </td>
            </tr>

            <tr valign="center">
                <td style="width: 30%;">
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>二级菜单名称：</label>
                        <div class="formControls col-xs-5 col-sm-6">
                            <input type="text" class="input-text"  placeholder="最多7个字"  name="menu2_menu1" value="<?php echo ($tsubmenus["tw_name"]); ?>">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>类型：</label>
                        <div class="formControls col-xs-7 col-sm-8 skin-minimal">
                            <?php if($tsubmenus["me_type"] == 'click'): ?><div class="radio-box">
                                    <input name="menu2_box1" type="radio" value="click"  checked>
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu2_box1" type="radio" value="view"  >
                                    <label for="sex-2">url</label>
                                </div>
                                <?php else: ?>
                                <div class="radio-box">
                                    <input name="menu2_box1" type="radio" value="click"  >
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu2_box1" type="radio" value="view"  checked>
                                    <label for="sex-2">url</label>
                                </div><?php endif; ?>

                        </div>
                    </div>
                </td>
                <td style="width: 30%;">
                    <div class="row cl">
                        <div class="formControls col-xs-9 col-sm-10">
                            <input type="text" class="input-text"  placeholder="填写url或者地址"  name="menu2_key1" value="<?php echo ($tsubmenus["url_value"]); ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <tr valign="center">
                <td style="width: 30%;">
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>二级菜单名称：</label>
                        <div class="formControls col-xs-5 col-sm-6">
                            <input type="text" class="input-text"  placeholder="最多7个字"  name="menu2_menu2" value="<?php echo ($ssubmenus["tw_name"]); ?>">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>类型：</label>
                        <div class="formControls col-xs-7 col-sm-8 skin-minimal">
                            <?php if($ssubmenus["me_type"] == 'click'): ?><div class="radio-box">
                                    <input name="menu2_box2" type="radio" value="click"  checked>
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu2_box2" type="radio" value="view"  >
                                    <label for="sex-2">url</label>
                                </div>
                                <?php else: ?>
                                <div class="radio-box">
                                    <input name="menu2_box2" type="radio" value="click"  >
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu2_box2" type="radio" value="view"  checked>
                                    <label for="sex-2">url</label>
                                </div><?php endif; ?>

                        </div>
                    </div>
                </td>
                <td style="width: 30%;">
                    <div class="row cl">
                        <div class="formControls col-xs-9 col-sm-10">
                            <input type="text" class="input-text"  placeholder="填写url或者地址"  name="menu2_key2" value="<?php echo ($ssubmenus["url_value"]); ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <tr valign="center">
                <td style="width: 30%;">
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>二级菜单名称：</label>
                        <div class="formControls col-xs-5 col-sm-6">
                            <input type="text" class="input-text"  placeholder="最多7个字"  name="menu2_menu3" value="<?php echo ($fsubmenus["tw_name"]); ?>">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>类型：</label>
                        <div class="formControls col-xs-7 col-sm-8 skin-minimal">
                            <?php if($fsubmenus["me_type"] == 'click'): ?><div class="radio-box">
                                    <input name="menu2_box3" type="radio" value="click"  checked>
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu2_box3" type="radio" value="view"  >
                                    <label for="sex-2">url</label>
                                </div>
                                <?php else: ?>
                                <div class="radio-box">
                                    <input name="menu2_box3" type="radio" value="click"  >
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu2_box3" type="radio" value="view"  checked>
                                    <label for="sex-2">url</label>
                                </div><?php endif; ?>

                        </div>
                    </div>
                </td>
                <td style="width: 30%;">
                    <div class="row cl">
                        <div class="formControls col-xs-9 col-sm-10">
                            <input type="text" class="input-text"  placeholder="填写url或者地址"  name="menu2_key3" value="<?php echo ($fsubmenus["url_value"]); ?>">
                        </div>
                    </div>
                </td>
            </tr>
            <tr valign="center">
                <td style="width: 30%;">
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>二级菜单名称：</label>
                        <div class="formControls col-xs-5 col-sm-6">
                            <input type="text" class="input-text"  placeholder="最多7个字"  name="menu2_menu4"  value="<?php echo ($esubmenus["tw_name"]); ?>">
                        </div>
                    </div>
                    <div class="row cl">
                        <label class="form-label col-xs-5 col-sm-4"><span class="c-red">*</span>类型：</label>
                        <div class="formControls col-xs-7 col-sm-8 skin-minimal">
                            <?php if($esubmenus["me_type"] == 'click'): ?><div class="radio-box">
                                    <input name="menu2_box4" type="radio" value="click"  checked>
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu2_box4" type="radio" value="view"  >
                                    <label for="sex-2">url</label>
                                </div>
                                <?php else: ?>
                                <div class="radio-box">
                                    <input name="menu2_box4" type="radio" value="click"  >
                                    <label for="sex-1">关键字回复</label>
                                </div>
                                <div class="radio-box">
                                    <input name="menu2_box4" type="radio" value="view"  checked>
                                    <label for="sex-2">url</label>
                                </div><?php endif; ?>

                        </div>
                    </div>
                </td>
                <td style="width: 30%;">
                    <div class="row cl">
                        <div class="formControls col-xs-9 col-sm-10">
                            <input type="text" class="input-text"  placeholder="填写url或者地址"  name="menu2_key4" value="<?php echo ($esubmenus["url_value"]); ?>">
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>

        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <button onClick="article_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存</button>

                <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
            </div>
        </div>
    </form>
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
    function  article_save(){
        document.getElementById('menuadd').submit();
    }
</script>
</body>
</html>