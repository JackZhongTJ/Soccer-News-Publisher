
<!DOCTYPE html>
<html>
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
	                
	                <!--更改此处层叠样式表-->
	                <a href="player_info.php"><div class="nav_item active">球员信息</div></a>
	                

	                <div class="nav_item_spliter"></div>
	                <a href="results.php"><div class="nav_item">赛事</div></a>
	                
	                <div class="nav_item_spliter"></div>
	                
	                <a href="forum.php"><div class="nav_item">论坛</div></a>
	                
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
					<a href="main.php">首页</a> > <a href="player_info.php">球员信息</a>
				</div>
			</div>

		 	<div class="split1"></div>
		</div>
	</br>

  <div class="match_select">
    <div class="play_info_british">
    <a href="player_info.php" class="match_league_word">British</a>
    </div>
    <div class="play_info_spaish">
    <a href="player_info_spanish.php" class="match_cup_word">Spanish</a>
    </div>
    <div class="play_info_german">
    <a href="player_info_german.php" class="match_cup_word">German</a>
    </div>
    <div class="play_info_italy">
    <a href="player_info_italy.php" class="match_cup_word">Italy</a>
    </div>
    <div class="play_info_france1">
    <a href="player_info_france.php" class="match_cup_word">France</a>
    </div>
  </div>
  


  <?php
   require_once("dbtool.inc.php");
   $link = create_connection();
   $sql = "SELECT * FROM team WHERE league = 'french'";
   $result_team = execute_sql("dbs_project",$sql,$link);
   //$res = mysql_query($sql,$link) or die("sorry");

    echo "<div class='v5-content v5-content-t2' id='main-content'>";
      echo "<div class='v5-2col-t5'>";
        echo "<ul class='fix-block'>";
          echo "<div class='col1'>";
            echo "<h4 class='fix-head-t2'>THE FRENCH</h4>";
            /*标题层*/
            echo "<li class='fix-bar'>";
            echo "<div class='score-pld-title player_info_subtitle_team'>" . mysql_fetch_field($result_team, 0)->name. "</div>";
            echo "<div class='score-sub-title player_info_subtitle_city'>" . mysql_fetch_field($result_team, 2)->name. "</div>";
            echo "<div class='score-status-title player_info_subtitle_stadium'>" . mysql_fetch_field($result_team, 1)->name. "</div>";
            echo "</li>";

            /*输出比赛信息*/
            for($i = 0; $i < mysql_num_rows($result_team); $i++)
            { echo "<li class='fix-bar'>";
              echo "<div class='team_name player_info_main_team'>".mysql_result($result_team,$i,0)."</div>"; // 取得match表的 team_name
              echo "<div class='score-sub player_info_main_city'>".mysql_result($result_team,$i,2)."</div>"; // 取得match表的 city
              echo "<div class='score-sub player_info_main_stadium'>".mysql_result($result_team,$i,1)."</div>"; // stadium
              echo "<a class='player_info_button' href='#$i'>".mysql_result($result_team,$i,0)." player info</a>";
              echo "</li>";
            }
          echo "</div>";
        echo "</ul>";
      echo "</div>";
    echo "</div>";

 for($k =0; $k <mysql_num_rows($result_team); $k++)
      {
       $sql_team = mysql_result($result_team,$k,0);
       //echo "<div>".$sql_team."</div>"; 
       //将php自定义的变量嵌套入sql语句中
      //echo "<div>".mysql_result($result_team,$k,0)."</div>";
      $sql = "SELECT * FROM `player` WHERE TEAM = '$sql_team' ";
      $result = execute_sql("dbs_project",$sql,$link);
      echo "<a name='$k' style='text-decoration:none;'>";
      echo "<div class='v5-content v5-content-t2' id='main-content'>";
        echo "<div class='v5-2col-t5'>";
          echo "<ul class='fix-block'>";
            echo "<div class='col1'>";
              echo "<h4 class='fix-head-t2'>".mysql_result($result_team,$k,0)."</h4>";
              /*标题层*/
              echo "<li class='fix-bar'>";
              echo "<div class='player-sub-title player_info_title_name'>" . mysql_fetch_field($result, 1)->name. "</div>";
              echo "<div class='player-sub-title player_info_subtitle_age'>" . mysql_fetch_field($result, 2)->name. "</div>";
              echo "<div class='player-sub-title player_info_title_team'>" . mysql_fetch_field($result, 3)->name. "</div>";
              echo "<div class='player-sub-title player_info_title_number'>" . mysql_fetch_field($result, 4)->name. "</div>";
              echo "<div class='player-sub-title player_info_title_nationality'>" . mysql_fetch_field($result, 5)->name. "</div>";
              echo "<div class='player-sub-title player_info_subtitle_weight'>" . mysql_fetch_field($result, 6)->name. "</div>";
              echo "<div class='player-sub-title player_info_title_height'>" . mysql_fetch_field($result, 7)->name. "</div>";
              echo "</li>";

              for($i = 0; $i < mysql_num_rows($result); $i++)
              { 
                echo "<li class='fix-bar'>";
                echo "<div class='player-sub-title-info player-sub-title-info-1'>".mysql_result($result,$i,1)."</div>"; 
                echo "<div class='player-sub-title-info player-sub-title-info-2'>".mysql_result($result,$i,2)."</div>"; 
                echo "<div class='player-sub-title-info player-sub-title-info-3'>".mysql_result($result,$i,3)."</div>"; 
                echo "<div class='player-sub-title-info player-sub-title-info-4'>".mysql_result($result,$i,4)."</div>";
                echo "<div class='player-sub-title-info player-sub-title-info-5'>".mysql_result($result,$i,5)."</div>"; 
                echo "<div class='player-sub-title-info player-sub-title-info-6'>".mysql_result($result,$i,6)."</div>"; 
                echo "<div class='player-sub-title-info player-sub-title-info-7'>".mysql_result($result,$i,7)."</div>";  
                echo "</li>";
              }
            echo "</div>";
          echo "</ul>";
        echo "</div>";
      echo "</div>";
      echo "</a>";
      }



  ?>
	</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

    <!--页脚层-->
    <div class="footer1">
        <div class="container">
            <div>1152200 钟天杰 数据库课程设计</div>
        </div>
    </div>

</body>
</html>
