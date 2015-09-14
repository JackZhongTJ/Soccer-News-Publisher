<?php
	function create_connection()
	{
		$link = mysql_connect("localhost","root","")
			or die("nonono<br><br>".mysql_error());
			
			
		mysql_query("SET NAMES utf8");
		
		return $link;
		}
		
		function execute_sql($database,$sql,$link)
		{
			$db_selectd = mysql_select_db($database,$link)
			or die("´ò¿ªÊ§°Ü<br><br>" . mysql_error($link));
			
			$result = mysql_query($sql, $link);
			
			return $result;
		}


?>