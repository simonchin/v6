<?php if(!defined("HDPHP_PATH"))exit;C("DEBUG_SHOW",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html";charset="UTF-8">
	<title>添加文章页面</title>
</head>
<body>
	<form action='http://localhost/v6/db.php/News/add' method="post">
	<table>
		<tr>
			<td>标题</td>
			<td><input type="text" name="title" /></td>
		</tr>
		<tr>
			<td>正文</td>
			<td><script charset="utf-8" src="http://localhost/v6/hdphp/hdphp/Extend/Org/Editor/Keditor/kindeditor-all-min.js"></script>
            <script charset="utf-8" src="http://localhost/v6/hdphp/hdphp/Extend/Org/Editor/Keditor/lang/zh_CN.js"></script>
        <textarea id="hd_content" name="content"></textarea>
    <script>
        var options_content = {
        filterMode : false
                ,id : "editor_id"
        ,width : "100%"
        ,height:"300px"
                ,formatUploadUrl:false
        ,allowFileManager:false
        ,allowImageUpload:true
        ,uploadJson : "http://localhost/v6/db.php/News&m=keditor_upload&editor_type=2&Image=1&uploadsize=2000000&maximagewidth=false&maximageheight=false&hdsid=tr28bf5a7g9ojdhbltmrne9ph7"//处理上传脚本
        };var hd_content;
        KindEditor.ready(function(K) {
                    hd_content = KindEditor.create("#hd_content",options_content);
        });
        </script>
        </td>
		</tr>
		<tr>
			<td><input type="submit" value="添加文章"/></td>
			
		</tr>
	</table>
	</form>
</body>
</html>