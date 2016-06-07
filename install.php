<?php

if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

$_GET['m'] = 'Install';


//调试模式
define ( 'APP_DEBUG', true );

//是否自动生成安全文件index.php
define('DIR_SECURE_FILENAME', false);

//项目目录
define ( 'APP_PATH', './Application/' );

//运行目录
define ( 'RUNTIME_PATH', './Runtime/' );

//引入核心入口
require './ThinkPHP/ThinkPHP.php';