<?php
/*
 * 为什么要用 包含 因为 两个项目，使用了相同的配置，否则就要配置两次。
 */

$arr1 = array();
$arr2 = include './config.inc.php';   //从index.php入口文件算起，引入数据库连接文件
return array_merge($arr1,$arr2); //拼接两个数组
?>