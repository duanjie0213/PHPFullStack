<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>无标题文档</title>
    </head>
    <style type="text/css">
        *{margin:0px;padding:0px}
        .one{
            width:200px;
            height:200px;
            border:1px  solid #ff0000;
            
            /*position:absolute;*/  /* 注意这里定义了绝对定位，因此子元素都是相对于 父元素定位*/
            /*padding:25px;*/
            /*margin:20px;*/
        }
        .two{
            width:100px;
            height:100px;
            border:1px solid #00ff00;
            margin-top:10px;
            position:relative;
            top:15px;   /* 相对于父元素顶部偏移 15像素;必须有 position 才有效 标签里定义了，这里就无效了*/
            /*  这一这里 top 是相对于原来的位置偏移不是相对于*/

        }
    </style>
    <script type="text/javascript">
        window.onload = function () {
            var div1 = document.getElementsByTagName("div")[0];
            var div2 = document.getElementsByTagName("div")[1];
            //div2.style = "top:25px"; // 设置
            alert("div2.style.top:"+div2.style.top);  /* 相对于父元素顶部偏移 15像素 只有行内元素能显示，也就是在style="" 定义的*/
            alert("div2.offsetTop:"+div2.offsetTop);  /* 返回元素相对于父元素的坐标  */
            
            alert("div2.style.left:"+div2.style.left);  
            alert("div2.offsetLeft:"+div2.offsetLeft);  
        }
    </script>
    <body>
        
        <div class="one">one
            <div class="two" style="top:37px">two</div>
        </div>
        
    </body>
</html>
