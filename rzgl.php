<html>
<head>
<title>日志系统</title>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<script language="javascript">
    function init(){
	setTimeout(jump,4000);
    }
    function jump(){
	window.location.assign("rzck.php");
    }
</script>
</head>
<body style="font-size:1.2em;" onload="init()">
<?php
	
	$file=fopen("liuyanban.txt","a");
	fwrite($file,substr(date("c"),0,16));
	fwrite($file," ");
	fwrite($file,$_GET["content"]);
	fwrite($file,"\n");
	fclose($file);
?>
插入成功
<br/>
4秒后自动返回并刷新页面，如果没有，请点击
<a href="rzck.php">
	这里
</a>
</body>
</html>
