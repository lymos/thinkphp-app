<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE' => 'mysqli',
	'DB_HOST' => 'localhost',
	'DB_PORT' => '3306',
	'DB_USER' => 'root',
	'DB_PWD' => '',
	'DB_NAME' => 'tp_db',
	'DB_PREFIX' => 'tp_',
	
	'SHOW_PAGE_TRACE' => true,
	
	// 域名配置
    /*
	'APP_SUB_DOMAIN_DEPLOY' => 1,
	'APP_SUB_DOMAIN_RULE' => array(
	    'home.com' => 'Home'
	),
	*/
	
	// 表单令牌配置
	'TOKEN_ON' => true,
	'TOKEN_NAME' => '__hash__',
	'TOKEN_TYPE' => 'md5',
	'TOKEN_RESET' => true,
	
	'URL_MODEL' => 2
	
);