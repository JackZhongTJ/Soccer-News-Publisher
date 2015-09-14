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
		//post 方法获取窗体数据
		$account = $_POST["account"];
		$password = $_POST["password"];
		//建立数据库连接
		$link = create_connection();
		//检查账号唯一性
		$sql= "SELECT * FROM users WHERE account='$account'";
		$result = execute_sql("dbs_project",$sql,$link);
		if(mysql_num_rows($result) != 0)
		{
			mysql_free_result($result);
			echo "<script type='text/javascript'>";
			echo "alert('邮箱已被注册');";
			echo "history.back();";
			echo "</script>";
		}
		//若没有重复代表注册成功
		else
		{
			$id = mysql_result($result, 0,"id");
			mysql_free_result($result);
			$sql = "INSERT INTO users(account, password) VALUES ('$account','$password')";
			$result = execute_sql("dbs_project",$sql,$link);
			mysql_close($link);
			setcookie("id",$id);
			setcookie("passed","TRUE");
			header("location:delay_jump_register.htm");exit();
		}
	?>
</body>
</html>
