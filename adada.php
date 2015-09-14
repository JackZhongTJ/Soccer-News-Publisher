<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>Let's football it！</title>
<link rel="stylesheet" type="text/css" href="info.css"/>
</head>

<body>

<div class="header">
	<div class="header-main">
		<div class="logo"><a href="http://www.dongqiudi.com">let's football!</a></div>

		<ul class="nav">
			<li class="current">
			  <div align="center"><a href="http://www.dongqiudi.com" class="column-nav"><span class="STYLE3">积分榜</span></a></div>
			</li>
			<li>
			  <div align="center"><a href="http://www.dongqiudi.com/news" class="news-nav"><span class="STYLE6">球员信息</span></a></div>
			</li>
			<li><a href="http://www.dongqiudi.com/column" class="column-nav"><span class="STYLE6">赛事信息</span></a></li>
	  </ul>
		
	</div>	
</div>

<div>
	<div class="grid-150 fl mr20">
			
	  <div align="left">
			    <ul class="side-nav-bd">
			      <li><a class="current" href="http://www.dongqiudi.com/rank/8">英超</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/13">意甲</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/7">西甲</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/9">德甲</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/16">法甲</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/51">中超</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/17">法乙</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/1">荷甲</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/63">葡超</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/121">俄超</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/70">英冠</a></li>
			      <li><a href="http://www.dongqiudi.com/rank/26">巴甲</a></li>
        		</ul>
      </div>
	</div>
</div>


<table cellpadding="0" cellspacing="0" border="0" width="100%" class="rank_table">
				<tr class="rank_title">
					<td colspan="10">积分榜</td>
				</tr>
				<tr>
					<td>排名</td>
					<td>球队</td>
					<td>场次</td>
					<td>胜</td>
					<td>平</td>
					<td>负</td>
					<td>进球</td>
					<td>失球</td>
					<td>净胜球</td>
					<td>积分</td>
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
					<td colspan="10">积分榜</td>
				</tr>
				<tr>
					<td width="13%">排名</td>
					<td width="7%">球队</td>
					<td width="11%">场次</td>
					<td width="6%">胜</td>
					<td width="6%">平</td>
					<td width="6%">负</td>
					<td width="11%">进球</td>
					<td width="11%">失球</td>
					<td width="17%">净胜球</td>
					<td width="12%">积分</td>
				</tr>
	</table>
	</ul>
	</div>
	</div>
</div>


</body>
</html>
