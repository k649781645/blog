<?php

//入口文件

//PHP版本检查
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG', true);

// 定义应用目录
define('APP_PATH', './Application/');

//定义运行缓存等目录
define('RUNTIME_PATH', './RunTime/');

//是否自动生成安全文件index.php
define('DIR_SECURE_FILENAME', false);

//安装检测
/*if(!is_file(APP_PATH . 'User/Conf/config.php')){
  header('Location: ./install.php');
  exit;
}*/

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';