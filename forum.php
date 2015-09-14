<!DOCTYPE html>
<html>
    <head>
        <title>Let's football it!</title>
        <meta name="description" content="football football football!">
        <meta name="keywords" content="football,manchester united,football team,football news">
        <meta charset="utf-8">
        <link href="info.css" rel="stylesheet" type="css"/>
        <link href="test1.css" rel="stylesheet" type="css"/>
        <link href="table.css" rel="stylesheet" type="css"/>

            
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
        function check_data()
        {
        	if (document.myForm.subject.value.length==0) {alert("请输入主题")}
        	else if(document.myForm.content1.value.length==0) alert("请输入内容");
        	else myForm.submit();
        }
        </script>
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
                
                <a href="player_info.php"><div class="nav_item">球员信息</div></ax>
                

                <div class="nav_item_spliter"></div>
                
                <a href="results.php"><div class="nav_item">赛事</div></a>
                
                <div class="nav_item_spliter"></div>
                
                <a href="forum.php"><div class="nav_item active">论坛</div></a>
                
                <div class="nav_item_spliter"></div>

                <div class="user_info_btn">
                        <div class='winlogin hashide'>
                          <span id='info' style='padding: 0; display: block; font-size: 15px;'>
                            <?php
                              
                              $passed = $_COOKIE["passed"];
                              $id = $_COOKIE["id"];
                              $account = $_COOKIE["account"];

                              if($passed == "TRUE"&& $id =="3") //假设管理员id为3
                              {
                                echo "<div class='loginbtn1_after'>管理员欢迎你！</div>";
                                echo "<a href='logout.php' class='loginbtn2_after'>注销</a>";
                              } 
                              else if($passed == "TRUE"&& $id !="3") //假设管理员id为3
                              {
                                echo "<div class='loginbtn1_after'>已登录，欢迎你！</div>";
                                echo "<a href='logout.php' class='loginbtn2_after'>注销</a>";
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

          <!--主体层-->
         <div class="wide3" style="padding-top: 30px;">
			<div class="row">
				<div class="span9 bread span_row">
					<a href="main.php">首页</a> > <a href="forum.php">论坛</a>
				</div>
			</div>
		 	<div class="split1"></div>
		</div>
		</br>

		<?php
			require_once("dbtool.inc.php");
			$records_per_page = 4;
			if(isset($_GET["page"]))
				$page = $_GET["page"];
			else
				$page = 1;

			$link = create_connection();

			$sql = "SELECT id,author,subject,content,date FROM message ORDER BY date DESC";   //此处作者没有从数据库获取
			$result = execute_sql("dbs_project",$sql,$link);

			$total_records = mysql_num_rows($result);
			$total_pages = ceil($total_records / $records_per_page); //向上舍入的最近整数
			$started_records = $records_per_page * ($page-1);
			mysql_data_seek($result, $started_records);

			$j = 1;
      
      echo "<div class='match_select' >";
      echo "<div class='match_league match_league_word'>";
      echo "THEME";
      echo "</div>";
      echo "</div>";
      echo "<div class='v5-content v5-content-t2'>";
        echo "<div class='v5-2col-t5'>";
			while ($row = mysql_fetch_assoc($result) and $j <= $records_per_page)
			{
				echo "<ul class='fix-block'>";
          echo "<div class='col1' >";
					echo "<li>";
            echo "<div class='col1'>";
            echo "<h4 class='fix-head-t2' style='padding-left:23px; padding-top:10px; width: 966px;'>".$row['subject']."</h4>";
            echo "<li class='fix-bar no-border'>";
            echo "<div class='forum_content'>".$row['content']."</div>";
            echo "<div class='forum_author'>作者:".$row['author']."</div>";
						//echo "<div>主题:".$row['subject']."</div>";<div>
						echo "<div class='forum_time'>时间：".$row['date']."</div>";
						echo "<a href= 'show_news.php?id=";
						echo $row["id"] ."' class='forum_reply' style='color: #464545;'>回复</a>";

						/*管理员特权 可删除帖子 自己也可删除帖子*/
						if ($account=='manager' || $row['author']== $account ) {
							echo "<a href='delete_theme.php ? id=";
							echo $row["id"] ."' class='forum_delete' style='color: #464545;'>删除</a>";
						}
						$j++;
					echo "</li>";
          echo "</div>";
				echo "</ul>";

			}

        echo "</div>";
        echo "</div>";


        echo "<div class='split2'></div>";
      echo "<div class='page'>";
			if ($page >1) {
				echo "<a href='forum.php?page=".($page-1)."' style='margin-right: 20px;'>上一页</a>";
			}
			for ($i=1; $i<= $total_pages; $i++) { 
				if ($i ==$page) {
					echo "$i";
				}
				else
					echo "<a href='forum.php?page=$i'>$i</a>";
			}
			if ($page < $total_pages)
				echo"<a href='forum.php?page=".($page + 1) ."' style='margin-left: 20px;'>下一页</a>";
      echo"</div>";

			mysql_free_result($result);
			mysql_close($link);
		?>

		<form action="post.php" method="post" name="myForm">

			      <input type="hidden" name = "author" value = "<?= $account?>">
            <div class="new_theme">
                <div class="create_theme">
                <label style="font-size: 16px; font-weight:bold; color: #ab2b2c">创建主题</label>
                </div>
                <div>
                <!--
                <div>
                    <Label >作者</Label> 
                    <input name="author" type="text" size="50">
                </div>
                -->

                <div>
                    <Label style="font-size: 15px; font-weight:bold;">主题</Label>
                    <input name="subject" type="text" size="20" style="width:600px;">
                </div>

                <div>
                    <Label style="font-size: 15px; font-weight:bold; ">内容</Label>
                    <textarea name="content1" cols="50" rows="5" style="width:600px;"></textarea>
                </div>

                <div>
                    <input type="button" value="发表" onClick="check_data()" style="width:200px; margin-top:30px;">
                </div>
                </div>
            </div>
    </form>

      </BR></BR></BR></BR></BR></BR></BR>
      </div>
          <!--页脚层-->
        <div class="footer1">
            <div class="container">
                 <div>1152200 钟天杰 数据库课程设计</div>
            </div>
        </div>
  </body>
</html>