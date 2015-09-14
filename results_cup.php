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
	                
	                <a href="PTStable.php"><div class="nav_item">积分榜</div></a>
	                

	                <div class="nav_item_spliter"></div>
	                
	                <a href="player_info.php"><div class="nav_item">球员信息</div></a>
	                

	                <div class="nav_item_spliter"></div>
	                <!--更改此处层叠样式表-->
	                <a href="results.php"><div class="nav_item active">赛事</div></a>
	                
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
					<a href="main.php">首页</a> > <a href="results.php">赛事</a> > <a href="results_cup.php">Cup</a>
				</div>
			</div>

		 	<div class="split1"></div>
		</div>
	</br>
	<div class="match_select">
		<div class="match_league1">
		<a href="results.php" class="match_league_word">LEAGUE</a>
		</div>
		<div class="match_cup1">
		<a href="results1.php" class="match_cup_word">CUP</a>
		</div>
	</div>
	



	<?php
	 require_once("dbtool.inc.php");
	 $link = create_connection();


	/*-------------------------------------输出世界杯赛事信息---------------------------------------*/
	$sql = "SELECT * FROM `match` WHERE Competition = 'world_cup'";
	$result = execute_sql("dbs_project",$sql,$link);
	 //$res = mysql_query($sql,$link) or die("sorry");

	echo "<div class='v5-content v5-content-t2' id='main-content'>";
		echo "<div class='v5-2col-t5'>";
		 	echo "<ul class='fix-block'>";
		 		echo "<div class='col1'>";
		 			echo "<h4 class='fix-head-t2'>WORLD_CUP</h4>";
		 			/*标题层*/
		 			echo "<li class='fix-bar'>";
					echo "<div class='score-pld-title'>" . mysql_fetch_field($result, 2)->name. "</div>";
					echo "<div class='score-sub-title'>" . mysql_fetch_field($result, 3)->name. "</div>";
					echo "<div class='score-side-title score-side1-title'>" . mysql_fetch_field($result, 4)->name. "</div>";
					echo "<div class='score-status-title score-post-title'>" . mysql_fetch_field($result, 5)->name. "</div>";
					echo "<div class='score-side-title score-side2-title'>" . mysql_fetch_field($result, 6)->name. "</div>";
					echo "</li>";
					
				 	for($i = 0; $i < mysql_num_rows($result); $i++)
				 	{	echo "<li class='fix-bar'>";
				 		echo "<div class='score-pld'>".mysql_result($result,$i,2)."</div>";	// 取得match表的 PLD
				 		echo "<div class='score-sub'>".mysql_result($result,$i,3)."</div>";	// 取得match表的 DATA
				 		echo "<div class='score-side score-side1'>".mysql_result($result,$i,4)."</div>";	// 取得match表的 TEAM1
				 		echo "<div class='score-status score-post'>".mysql_result($result,$i,5)."</div>";	// 取得match表的 RESULT
				 		echo "<div class='score-side score-side2'>".mysql_result($result,$i,6)."</div>";	// 取得match表的 TEAM2
				 		echo "</li>";
				 	}
				echo "</div>";
			echo "</ul>";
		echo "</div>";
	echo "</div>";
	?>
	</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

    <!--页脚层-->
    <div class="footer1">
        <div class="container">
            <div>1152200 钟天杰 数据库课程设计</div>
        </div>
    </div>

</body>
</html>
