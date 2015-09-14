<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title>Let's football it!</title>
        <meta name="description" content="football football football!">
        <meta name="keywords" content="football,manchester united,football team,football news,points table">
        <meta charset="utf-8">
        <link href="info.css" rel="stylesheet" type="css"/>
        <link href="table.css" rel="stylesheet" type="css"/>
        <link href="test1.css" rel="stylesheet" type="css"/>

        <style>
        .main_title{
          font-size: 25px;
        }
        .main_title .sub_title{
          color: #acacac;
          font-size: 16px;
        }
        .footer1 {
			background: #222;
			color: #acacac;
			width: 100%;
		}
        </style>
        <script type="text/javascript">
        	function check_data(){
        		if (document.myForm.account.value.length==0) {alert("账号不能为空");}
        		else if (document.myForm.password.value.length==0) {alert("密码不能为空");}
        		else myForm.submit()
        	}
        </script>
</head>
<body>
	<?php
	require_once("dbtool.inc.php");
	$author = $_POST["author"];
	$subject = $_POST["subject"];
	$content = $_POST["content1"];
	$current_time = date("Y-m-d H:i:s");

	$link = create_connection();
	$sql = "INSERT INTO message(author, subject, content, date) VALUES ('$author','$subject','$content','$current_time')";
	$result = execute_sql("dbs_project",$sql,$link);

	mysql_close($link);
	header("location:forum.php");
	exit();
	?>



</body>
</html>
