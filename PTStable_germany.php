<!DOCTYPE html>
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

 <body id="top" style='font-family: "hiragino sans gb", 微软雅黑;'>



          <!--标题栏层-->
          <div class="wide_max top_background" style="">
          </div>

          <div class="wide3 nav2">
            <div class="row">
                <div class="span1 span_row">
                
                	<div class="nav_item_spliter"></div>
                	<a href="main.php"><div class="nav_item">首页</div></a>	

	                <div class="nav_item_spliter"></div>
	                <!--更改此处层叠样式表-->
	                <a href="PTStable_germany.php"><div class="nav_item active">积分榜</div></a>
	                

	                <div class="nav_item_spliter"></div>
	                
	                <a href="player_info.php"><div class="nav_item">球员信息</div></a>
	                

	                <div class="nav_item_spliter"></div>
	                
	                <a href="results.php"><div class="nav_item">赛事</div></a>
	                
	                <div class="nav_item_spliter"></div>
	                
	                <a href="/exp"><div class="nav_item">论坛</div></a>
	                
	                <div class="nav_item_spliter"></div>

	                <div class="user_info_btn">
                        <div class='winlogin hashide'>
                          <span id='info' style='padding: 0; display: block; font-size: 15px;'>
                            <?php
                              
                              $passed = $_COOKIE["passed"];
                              if($passed == "TRUE")
                              {
                                echo "<div class='loginbtn1_after'>已登录，欢迎你！</div>";
                                echo "<a class='loginbtn2_after'href='logout.php'>注销</a>";
                              } 
                              else{
                              echo "<a class='loginbtn1' href='register.htm' id='loginBtn'>";
                              echo "注册";
                              echo "</a>";
                              echo "<a class='loginbtn2' href='login.htm' id='loginBtn'>";
                              echo "登录";
                              echo "</a>";
                              }
                            ?>
                          </span>
                        </div>
                	</div> 
                </div>      
            </div>
          </div>

          <div class="wide3" style="padding-top: 30px;">
			<div class="row">
				<div class="span9 bread span_row">
					<a href="main.php">首页</a> > <a href="PTStable_germany.php">积分榜</a>
				</div>
			</div>

		 	<div class="split1"></div>
		  </div>


		  </br></br></br>
          <!--积分榜层-->
          <div class="main1 list-page">
          	<div class="grid-row clearfix">
          		<div class="grid-150 fl mr20">
					<ul class="side-nav-bd">
						<li class="fuck"><a href="PTStable.php">英超</a></li>
						<li class="fuck"><a href="PTStable_spanish.php">西甲</a></li>
						<li class="fuck"><a class="current" href="PTStable_germany.php">德甲</a></li>
						<li class="fuck"><a href="PTStable_france.php">法甲</a></li>
						<li class="fuck"><a href="PTStable_china.php">中超</a></li>
					</ul>
				</div>
          	</div>


          	<div class="grid-830 fl zhong">
          		<?php
					require_once("dbtool.inc.php");
					
					$link = create_connection();
					
					$sql = "SELECT * FROM premier_league_grade order by POS asc";
					$result = execute_sql("dbs_project",$sql,$link);
					echo "<ul>";
					echo "<table cellpadding='0' cellspacing='0' border=0 width=100% class=rank_table>";

					echo "<tr class=rank_title>";
					echo "<td colspan='10'>PTS table</td>";
					echo "</tr>";

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
										
					
					
					echo"</table>"; 

					echo "</ul>";
					mysql_free_result($result);
					mysql_close($link);
				?>
          	</div>
          </div>


          <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>

           <!--页脚层-->
        <div class="footer1">
            <div class="container">
                 <div>1152200 钟天杰 数据库课程设计</div>
            </div>
        </div>


</body>

          

</html>
