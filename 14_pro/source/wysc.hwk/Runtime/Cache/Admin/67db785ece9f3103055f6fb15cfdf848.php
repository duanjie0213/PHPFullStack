<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="__SKIN__plugin/ui/themes/__THEME__/easyui.css" />
<link rel="stylesheet" type="text/css" href="__SKIN__plugin/ui/themes/icon.css" />
<script src="__SKIN__plugin/ui/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="__SKIN__plugin/ui/jquery.easyui.min.js" type="text/javascript"></script>
<script src="__SKIN__plugin/ui/easyui-lang-zh_CN.js" type="text/javascript"></script>
<style type="text/css">
    *{margin:0; padding:0; color:#363636;}
    a{text-decoration:none; color:#000;}
</style>
        <title>添加分类</title>
        <link href="__SKIN__css/tableform.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="easyui-panel" data-options="title:'添加分类',border:false,iconCls:'icon-application_add'">
            <form name="f1" action="" method="POST">
                <table class="table-form" border="1" width="100%">
                    <tr>
                        <th>分类名称</th><td><input type="text" name="catename" class="ipt" /></td>
                    </tr>
                    <tr>
                        <th>上级分类</th><td>
                            <select id="cc" name="pid" class="easyui-combotree" 
                                    data-options="
                                    url:'<?php echo U('Category/combotreejson');?>',
                                    value:'<?php echo ($catid); ?>'">
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>单位</th><td><input type="text" name="dw"  class="ipt" /></td>
                    </tr>
                    <tr>
                        <th>是否显示</th>
                        <td><input name="is_show" type="radio" value="1" checked/>是&nbsp;&nbsp;&nbsp;&nbsp;<input name="is_show" type="radio" value="0" />否</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input name="s1" type="submit" value="提交" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input name="r1" type="reset" value="清除" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>