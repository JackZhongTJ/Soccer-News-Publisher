<!DOCTYPE html>
<html>
    <head>
        <title>Let's football it!</title>
        <meta name="description" content="football football football!">
        <meta name="keywords" content="football,manchester united,football team,football news">
        <meta charset="utf-8">
        <link href="info.css" rel="stylesheet" type="css"/>
        <link href="test1.css" rel="stylesheet" type="css"/>
            
        <style>
        .main_title{
          font-size: 25px;
        }
        .main_title .sub_title{
          color: #acacac;
          font-size: 16px;
        }
        .nav_content{
          width: 980px;
          height: 300px;
        }
        .main_anchor_btns{
          margin-top: 30px;
        }
        .anchor_btn{
          width: 325px;
          height: 205px;
          float: left;
          border-left: 1px solid #e1e1e1;
        }
        .anchor_btn.last{
          border-right: 1px solid #e1e1e1;
        }
        .anchor_btn img{
          width: 300px;
          height: 205px;
          display: block;
          margin: 0 auto;
        }
        .main_nav{
          width: 980px;
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
                
                <a href="player_info.php"><div class="nav_item">球员信息</div></ax>
                

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

          <!--主体层-->
          <div class="wide3" style="padding-top: 30px;">
            <div class="row">
              <div class="span_row">
                <!--标题层-->
                <div class="main_title">球迷俱乐部 <span class="sub_title">最全的球赛信息，最新的积分查询！</span></div>

                <div class="main_nav init" id="slides" style="margin-top: 20px;">
                  
                  <!--图片层-->
                  <a>
                      <img src="man2.jpg" width="100%" height="100%">
                  </a> 
                </div>

                <!--按钮-->
                <div class="main_anchor_btns">
                  <div class="anchor_btn"><a href="PTStable.php"><img src="1.jpg"></a></div>
                  <div class="anchor_btn"><a href="player_info.php"><img src="2.jpg"></a></div>
                  <div class="anchor_btn last"><a href="results.php"><img src="3.jpg"></a></div>
                  <div class="clear"></div>
                </div>
              </div>
            </div>
            </br></br></br></br></br></br></br>
          </div>
        </div>

          <!--页脚层-->
        <div class="footer">
            <div class="container">
                 <div>1152200 钟天杰 数据库课程设计</div>
            </div>
        </div>
  </body>
</html>