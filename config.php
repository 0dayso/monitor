<?php

define("DIR", dirname(__FILE__)."/");

//每个URL每次取多少个代理节点进行检查
define("MAX_CHECK_NUM", 10);

//代理库文件，默认按天获取最新的代理ip
//如果是固定代理ip，则固定该文件名，一行一个
$proxy = DIR."cache/proxy/".date("YmdH");
$proxy_tmp = DIR."cache/proxy/tmp";

if(!is_dir(dirname($proxy)))
{
    mkdir(DIR."cache/task/", 0777, true);
    mkdir(DIR."cache/proxy/", 0777, true);
    mkdir(DIR."cache/result/", 0777, true);
    mkdir(DIR."cache/thread/", 0777, true);
}

//日志默认输出，可直接关闭
function loger($msg, $level="INFO")
{
    printf("[%s]: %s\n", strtoupper($level), $msg);
}