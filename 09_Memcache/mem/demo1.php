<?php
header("content-type:text/html;charset=utf-8");
$mem = new Memcache;
 $mem->connect("localhost",11211);
echo $mem->get("key1");
print_r($mem->get("key2"));
echo "<br />";
 class mem{
 	public $name = "zh";
 	function at(){
 		echo "我赢职场";
 	}
 }
$obj = $mem->get("mObj"); //，没有实例化，内存中已经存在实例化过的对象。（自动的序列化和反序列化）
$obj->at();//???