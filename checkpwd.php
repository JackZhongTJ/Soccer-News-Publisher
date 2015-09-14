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
</head>

<body>
	<?php
		require_once("dbtool.inc.php");
		$account = $_POST["account"];
		$password = $_POST["password"];

		$link = create_connection();

		$sql = "SELECT * FROM users WHERE account = '$account'
		AND password = '$password'";
		$result = execute_sql("dbs_project",$sql,$link);
		
		// password wrong
		if(mysql_num_rows($result) ==0 )
		{
			mysql_free_result($result);
			mysql_close($link);

			echo "<script type='text/javascript'>";
			echo "alert('账号或密码错误！');";
			echo "history.back();";
			echo "</script>";
		}
		else
		{
			$id = mysql_result($result, 0,"id");
			mysql_free_result($result);
			mysql_close($link);

			setcookie("id",$id);
			setcookie("passed","TRUE");
			header("location:delay_jump_login.htm");exit(); 
		}


	?>
</body>
</html>