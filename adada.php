<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Let's football it��</title>
<link rel="stylesheet" type="text/css" href="info.css"/>
</head>

<body>

<div class="header">
	<div class="header-main">
		<div class="logo"><a href="http://www.dongqiudi.com">let's football!</a></div>

		<ul class="nav">
			<li class="current">
			  <div align="center"><a href="http://www.dongqiudi.com" class="column-nav"><span class="STYLE3">���ְ�</span></a></div>
			</li>
			<li>
			  <div align="center"><a href="http://www.dongqiudi.com/news" class="news-nav"><span class="STYLE6">��Ա��Ϣ</span></a></div>
			</li>
			<li><a href="http://www.dongqiudi.com/column" class="column-nav"><span class="STYLE6">������Ϣ</span></a></li>
	  </ul>
		
	</div>	
</div>

<div>
	<div class="grid-150 fl mr20">
			
	  <div align="left">
			    <ul class="side-nav-bd">
			      <li><a class="current" href="http://www.dongqiudi.com/rank/8">Ӣ��</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/13">���</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/7">����</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/9">�¼�</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/16">����</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/51">�г�</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/17">����</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/1">�ɼ�</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/63">�ϳ�</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/121">��</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/70">Ӣ��</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/26">�ͼ�</a></li>
        		</ul>
      </div>
	</div>
</div>


<table cellpadding="0" cellspacing="0" border="0" width="100%" class="rank_table">
				<tr class="rank_title">
					<td colspan="10">���ְ�</td>
				</tr>
				<tr>
					<td>����</td>
					<td>���</td>
					<td>����</td>
					<td>ʤ</td>
					<td>ƽ</td>
					<td>��</td>
					<td>����</td>
					<td>ʧ��</td>
					<td>��ʤ��</td>
					<td>����</td>
				</tr>
</table>


		<?php
		require_once("dbtool.inc.php");
		
		$link = create_connection();
		
		$sql = "SELECT * FROM grade";
		$result = execute_sql("dbs_project",$sql,$link);
		
		echo "<table>";
		echo "<tr>";
		for($i = 0;$i < mysql_num_fields($result);$i++)
		echo "<td>" . mysql_fetch_field($result, $i)->name. "</td>";
		echo "</tr>";
		
		for($j=0;$j < mysql_num_rows($result); $j++)
		{
			echo "<tr>";
			for ($k = 0; $k < mysql_num_fields($result); $k++)
				echo "<td>".mysql_result($result,$j,$k)."</td>";
			echo"</tr>";
		}
		
		echo "</table>";
		
		$meta = mysql_fetch_field($result, 1);
		echo"<td>$meta->name</td>";
		
		
		echo"</table>";
		mysql_free_result($result);
		mysql_close($link);
		?>
		
<div class="main list-page">
	<div class="grid-row clearfix">
	<div id="tab_conbox">
	<ul>
	<table cellpadding="0" cellspacing="0" border="0" width="100%" class="rank_table">
				<tr class="rank_title">
					<td colspan="10">���ְ�</td>
				</tr>
				<tr>
					<td width="13%">����</td>
					<td width="7%">���</td>
					<td width="11%">����</td>
					<td width="6%">ʤ</td>
					<td width="6%">ƽ</td>
					<td width="6%">��</td>
					<td width="11%">����</td>
					<td width="11%">ʧ��</td>
					<td width="17%">��ʤ��</td>
					<td width="12%">����</td>
				</tr>
	</table>
	</ul>
	</div>
	</div>
</div>


</body>
</html>
