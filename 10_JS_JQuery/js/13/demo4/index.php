<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<style type="text/css">
.one{
	width:400px;
	border:1px solid #ff0000;
}
.two{
	width:200px;
	height:120px;
	background-color:#C7FCF5;
	margin:30px;
}
span{
	width:20px;
	height:80px;
	background-color:#FF3333;
	margin:20px;
}
</style>
<script type="text/javascript">
	window.onload = function(){
		var outdiv = document.getElementById("outdiv");
		//父节点: body
		alert(outdiv.parentNode.nodeName);
		//第一个子节点 #text 参考笔记nodename #text 代表的是文本
		alert(outdiv.firstChild.nodeName);
		//下一个兄弟节点  这里注意为什么使用了 两个nextSibling 因为 div 和 a 之间有空格和空行 也算作一个节点
		alert(outdiv.nextSibling.nextSibling.nodeName+" : "+outdiv.nextSibling.nextSibling.innerHTML)
	}
</script>
<body>
	<div id="outdiv" class="one">
		我是最外边的div
		<p class="two">我是段落标记</p>    
		<div id="innerdiv" class="two">
			<span>我是里面的div</span>
		</div>
		<h4 class="two">我是标题h4标记</h4>
	</div>
	<a>aaaaaaaaaaa</a>
</body>
</html>
