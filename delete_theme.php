<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>
<body>
	<?php
	require_once("dbtool.inc.php");
	$id = $_GET["id"];
	$link = create_connection();
	$sql = "DELETE FROM message where id = $id";
	$result = execute_sql("dbs_project",$sql,$link);

	mysql_free_result($result);
	mysql_close($link);
	header("location:forum.php");
	exit();
	?>
</body>
</html>
