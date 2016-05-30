<?php
return array(
	//'配置项'=>'配置值'
    //'SHOW_PAGE_TRACE' =>true,
    //'配置项'=>'配置值'
    /* 调试配置 */
    //'SHOW_PAGE_TRACE' => true,
    'MODULE_ALLOW_LIST'  => array('Admin','Home','Whome'),
    'URL_MODEL'                 =>2,    //2为去掉url中的index.php
    'DEFAULT_MODULE'        =>  'Home',  // 默认模块
    'DEFAULT_CONTROLLER'    =>  'WxIndex', // 默认控制器名称
    'DEFAULT_ACTION'        =>  'index', // 默认操作名称


    /* 数据库配置 */
    'DB_TYPE'   => 'mysql', // 数据库类型
    //'DB_HOST'   => '121.41.12.202', // 服务器地址
    'DB_HOST'   => 'localhost',
    'DB_NAME'   => 'weixin', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '',  // 密码
    'DB_PORT'   => '3306', // 端口
    'DB_PREFIX' => 'wx_', // 数据库表前缀

    /* 分页COUNT */
    'PAGE_SIZE'   => '10',


    //模版设置相关
    'TMPL_ACTION_SUCCESS'   => 'Public/dispatch_jump',
    'TMPL_ACTION_ERROR'     => 'Public/dispatch_jump',

    //加载配置文件
    'LOAD_EXT_CONFIG' => 'site,route',

    //令牌验证
    'TOKEN_ON'     =>   true, //是否开启令牌验证
    'TOKEN_NAME'   =>   'token',// 令牌验证的表单隐藏字段名称
    'TOKEN_TYPE'   =>   'md5',//令牌验证哈希规则


    'LOG_RECORD' => true, // 开启日志记录
    'LOG_LEVEL'  =>'EMERG,ALERT,CRIT,ERR', // 只记录EMERG ALERT CRIT ERR 错误
    'LOG_TYPE'   =>  'File', // 日志记录类型 默认为文件方式


    'SESSION_OPTIONS'=>array('name'=>'BJYSESSION',//设置session名
    'expire'=>24*3600*1,//SESSION保存1天
    'use_trans_sid'=>1,//跨页传递
    'use_only_cookies'=>0,//是否只开启基于cookies的session的会话方式

        ),
);