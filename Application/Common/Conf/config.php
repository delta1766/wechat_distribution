<?php
return array(
	//'配置项'=>'配置值'
	'DEFAULT_MODULE' => 'Home', //默认模块    
    'URL_MODEL' => '2', //URL模式    
    'SESSION_AUTO_START' => true, //是否开启session
    'URL_PATHINFO_DEPR' => '/', // 更改PATHINFO参数分隔符
    'URL_HTML_SUFFIX' => 'html|shtml|xml', // 多个伪静态后缀设置 用|分割
	//数据库配置信息
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'weyz', // 数据库名
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => 'root', // 密码
    'DB_PORT' => 3306, // 端口
	'DB_PREFIX' => 'yz_', // 数据库表前缀 
    'DB_CHARSET' => 'utf8', // 字符集
    
);