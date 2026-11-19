<html>
<head>
<style>
hr{
    height:3px;
    color:DodgerBlue;
    background-color:DodgerBlue;
}

pre{
    border-style:solid;
    border-color:navy;
    font-size:1.2em;
    margin-left:3%;
    margin-right:3%;
    padding:8px;
    overflow:auto;
}

form{
    margin-left:3%;
}

p{
    margin-left:3%;
}

</style>
<title>
    留言板
</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--
	适应手机端
    -->
</head>
<body style="font-size:1.2em;">
    <hr />
    <form method="get" action="rzgl.php" >
    <!--
	style="border-style:solid;border-width:thin;"
    -->
	输入内容：
	<br />
	<br />
        <textarea name="content" style="width:97%;height:30%;font-size:1.2em;"></textarea>
        <br />
	<br />
        <input type="submit" style="font-size:1em;" value="新增"/>
    </form>
   <hr />


    <?php
	$file=fopen("liuyanban.txt","r");
	$fileContent=fread($file,filesize("liuyanban.txt"));
	fclose($file);

    ?>
	<pre>
<?php
	echo $fileContent;
?>
    </pre>
    <hr />
    <p>
    页面加载日期：
    <?php
	echo substr(date("c"),0,19);
    ?>
    </p>
</body>
</html>
