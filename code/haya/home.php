<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
  <title>DaSABI System</title>
  <meta name="description" content="Free Bootstrap 4 Pingendo Aquamarine template for unique events.">
  <meta name="keywords" content="Pingendo conference event aquamarine free template bootstrap 4">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="aquamarine.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="js/animate-in.js"></script>

  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

	<script type="text/javascript">
	jQuery(function($){
		$("p.Question").css({cursor:"pointer"}).click(function(){
		$(this).next().toggle("normal");
		});
	});
	</script>
	
	<style type="text/css">
	#QandA .Question{ /*標題的CSS定義*/
		width: 250px;
	}


	#QandA .Answer{ /*內文的CSS定義*/
		display: none;
		width: 100%;
		padding: 10px 0px;
		border-bottom: 1px #aaa dotted;
		border-top: 1px #aaa dotted;
	}

	#QandA:hover{ /*滑鼠移至區塊變色*/
		
	}

	</style>
</head>

<body class="text-center">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- 引入 jQuery -->
        

  <?php
  date_default_timezone_set('Asia/Taipei');
  session_start (); 
  $con=mysql_connect("localhost", "root", "csiecial");
  mysql_select_db("member", $con);
  mysql_query("set names utf8");
  $user_session = $_SESSION["username"];

 
  $nowmonth = date('m');
  $nowday = date('d');
  $nowhr = date('H');
  $nowsec = date('s');
  $nowmin = date('i');
  /*if(($nowmin % 5 == 0) && ($nowsec % 60 == 0)){
  	if($nowmin == 0){
  		$nowhr += 1;
  		$nowmin = 56;
  	}	else $nowmin -= 4;
  	if($count=mysql_query("SELECT * from susers where hour = '$nowhr' and minute = '$nowmin' and user='$user_session'", $con )){
  		if(mysql_num_rows($count))	mysql_query("UPDATE susers SET num = num-1 WHERE user='$user_session' ", $con ) or die ('Error in query2'); 
  		mysql_query("UPDATE susers SET  WHERE hour = '$nowhr' and minute = '$nowmin' and user='$user_session' ", $con ) or die ('Error in query3'); 
  		mysql_query("DELETE FROM data WHERE hour = '$nowhr' and minute = '$nowmin'", $con ) or die ('Error in query4');
  	}
  }*/
  $back=mysql_query("SELECT * from data where user ='$user_session' and back = 1 and (month < '$nowmonth' or (month = '$nowmonth' and day < '$nowday') or (month = '$nowmonth' and day = '$nowday' and hour < '$nowhr') or (month = '$nowmonth' and day = '$nowday' and hour = '$nowhr' and minute < '$nowmin')) " , $con ) or die ('Error in query2');
  while($pay=mysql_fetch_row ( $back )){
    $payback=$pay[4];
    mysql_query("UPDATE susers SET point = point+'$payback' WHERE user='$user_session' ", $con ) or die ('Error in query3'); 
  }
  mysql_query("UPDATE data SET back = 0 WHERE user='$user_session' and (month < '$nowmonth' or (month = '$nowmonth' and day < '$nowday') or (month = '$nowmonth' and day = '$nowday' and hour < '$nowhr') or (month = '$nowmonth' and day = '$nowday' and hour = '$nowhr' and minute < '$nowmin'))  " , $con ) or die ('Error in query2');
  $load=mysql_query("SELECT * from data where user ='$user_session' and (month > '$nowmonth' or (month = '$nowmonth' and day > '$nowday') or (month = '$nowmonth' and day = '$nowday' and hour > '$nowhr') or (month = '$nowmonth' and day = '$nowday' and hour = '$nowhr' and minute > '$nowmin')) ORDER BY month, day, hour, minute" , $con ) or die ('Error in query2');
  mysql_query("UPDATE susers SET time1 = '', message1 = '', price1 = '' WHERE user='$user_session' ", $con ) or die ('Error in query3'); 
  mysql_query("UPDATE susers SET time2 = '', message2 = '', price2 = '' WHERE user='$user_session' ", $con ) or die ('Error in query3'); 
  mysql_query("UPDATE susers SET time3 = '', message3 = '', price3 = '' WHERE user='$user_session' ", $con ) or die ('Error in query3'); 
  $list = 0;
  $count = mysql_num_rows ( $load );
  while ( ($loadrow = mysql_fetch_row ( $load )) && $count > $list ){
  	$loadmes = $loadrow[3];
  	$loadpri = $loadrow[4];
  	$loadmon = $loadrow[5];
  	$loadd = $loadrow[6];
  	$loadh = $loadrow[1];
  	$loadmin = $loadrow[2];
  	$loadtime = $loadrow[5]."/".$loadrow[6]." ".$loadrow[1].":".$loadrow[2];
    $loadback = $loadrow[8];
  	$list++;
  	if($list == 1)	mysql_query("UPDATE susers SET time1 = '$loadtime', message1 = '$loadmes', price1 = '$loadpri', num=1 WHERE user='$user_session' ", $con ) or die ('Error in query3'); 
  	if($list == 2)	mysql_query("UPDATE susers SET time2 = '$loadtime', message2 = '$loadmes', price2 = '$loadpri', num=2 WHERE user='$user_session' ", $con ) or die ('Error in query4'); 
  	if($list == 3)	mysql_query("UPDATE susers SET time3 = '$loadtime', message3 = '$loadmes', price3 = '$loadpri', num=3 WHERE user='$user_session' ", $con ) or die ('Error in query5'); 
  }
  $result=mysql_query("SELECT * from susers where user ='$user_session'", $con ) or die ('Error in query'); 
  while ( $row = mysql_fetch_row ( $result ) ) { 
    $point_sessin = $row [4]; 
    $mesnum = $row [14]; 
    $mes1time = $row[5];
    $mes1price = $row[15];
    $mes1 = $row[6];
    $mes2time = $row[8];
    $mes2price = $row[16];
    $mes2 = $row[9];
    $mes3time = $row[11];
    $mes3price = $row[17];
    $mes3 = $row[12];
  } 
  
  ?>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md fixed-top bg-dark navbar-dark">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#About">About</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#service">Service</a>
          </li>
        </ul>
        <a class="btn navbar-btn mx-2 text-white btn-outline-light" href="#register">Register now</a>
      </div>
    </div>
  </nav>
  <!-- Cover -->
  <div class="d-flex align-items-center section-aquamarine py-5 cover" style="background-image: url(&quot;assets/conference/cover-01-02.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-white mt-3">
          <h1 class="display-4 d-none d-md-block">Donate-and-Show Anonymous Bus Interaction System</h1>
          <h1 class="display-16 d-block d-md-none">DaSABI System</h1>

          <script language="JavaScript">
          window.onload=showtime;
          //<!-- 
          var now,hours,minutes,seconds,timeValue,timeValue2,timeValue3,timeValue2_2;
          function showtime(){
            now = new Date();
            hours = now.getHours();
            minutes = now.getMinutes();
            seconds = now.getSeconds();

            timeValue = ((hours >= 12) ? "下午 " : "上午 ");
            timeValue += ((hours > 12) ? hours - 12 : hours) + " 點";
            timeValue3 = hours;
            timeValue  += ((minutes < 10) ? " 0" : " ") + minutes + " 分";
            timeValue += ((seconds < 10) ? " 0" : " ") + seconds + " 秒";
            timeValue2 = now.getFullYear()+" - "+(now.getMonth()+1)+" - "+now.getDate();
            timeValue2_2 = now.getFullYear()+" - "+(now.getMonth()+1)+" - "+(now.getDate()+1);
            clock.innerHTML = timeValue;
            /*var a = 0;
            if((minutes%5 == 0) && (seconds % 60 == 0) && a == 0){
				window.location.reload();
				a++;
            }*/
            setTimeout("showtime()",1000);
          }
          showtime();
          //-->
         	
          </script>

         <p class = "mt-4" id="clock"></p>
          <?php     
          //echo $nowmin>2?"A":"XS";
           $A=$count;

          //print_r($A);
          if (isset ( $_SESSION ["code"] )){
          	echo "<div id=\"QandA\">";
            echo "<p  class=\"Question btn btn-lg mt-4 btn-outline-light\">Welcome, ".$_SESSION["username"]."</p>";
            

            	echo "<div class=\"Answer \">";
            	echo "<br><h6>IP: ${_SERVER['REMOTE_ADDR']}</h6>";
            	echo "<h6 >你還有 ".$point_sessin ." 點</h6><br><p >";
            	if($mes1) {
            	?>
            	<form action = "cancel.php "id="aa1" name="bb">
            	<input type="hidden"  value="<?=$mes1?>" name = "mes">
            	<input type="hidden"  value="<?=$mes1price?>" name = "price">
            	<input type="hidden"  value="<?=$mes1time?>" name = "time">
            	<input type="submit" class="text-muted " value="cancel""> 
            	<?php
				      echo "出價紀錄一：<br>".$mes1 ."<br>花費 ".$mes1price." 點，競標 ".$mes1time." 時段</p></form>";
            	}
            	if($mes2) {	
            	?>
            	<form action = "cancel.php "id="aa2" name="bb">
            	<input type="hidden"  value="<?=$mes2?>"  name = "mes">
            	<input type="hidden"  value="<?=$mes2price?>"  name = "price">
            	<input type="hidden"  value="<?=$mes2time?>"  name = "time">
            	<input type="submit" class="text-muted " value="cancel""> 
            	<?php
            	echo "出價紀錄二：<br>".$mes2 ."<br>花費 ".$mes2price." 點，競標 ".$mes2time." 時段</p></form>";
            	}
            	if($mes3) {	
            	?>
            	<form action = "cancel.php "id="aa3" name="bb">
            	<input type="hidden"  value="<?=$mes3?>" name = "mes">
            	<input type="hidden"  value="<?=$mes3price?>" name = "price">
            	<input type="hidden"  value="<?=$mes3time?>" name = "time">
            	<input type="submit" class="text-muted " value="cancel""> 
            	<?php
            	echo "出價紀錄三：<br>".$mes3 ."<br>花費 ".$mes3price." 點，競標 ".$mes3time." 時段</p></form>";
            	}
            	

            	echo "<br><p><a href=\"#service \" class=\"btn-outline-light btn \">開始競標</a>&nbsp;&nbsp;&nbsp;&nbsp;";
            	echo "<a href=\"#point \" class=\"btn-outline-light btn\">儲值點數</a><br><br>";
            	echo "<a href=\"alter_password.html \" class=\"btn-outline-light btn\">修改密碼</a>&nbsp;&nbsp;&nbsp;&nbsp;";
            	echo "<a href=\"exit.php \" class=\"btn-outline-light btn\">登出系統</a></p>";
            	echo "</div></div>";
          ?>

 		

          <?php

          }else{
          ?>
            <!--<a href="login.php" class="btn btn-lg mt-4 btn-outline-light">Login / Register now</a>-->
            <div id="QandA">
			<p class="Question btn btn-lg mt-4 btn-outline-light">Start!</p>
				<div class="Answer" id = log>
				<form action="index.php" method="POST">
				<h6 class="mb-0">帳號</h6>
				<input type="text" name="user">
				<br /><br />
				<h6 class="mb-0">密碼</h6>
				<input type="password" name="password">
				<br />
				<input type="submit" name="submit" class="btn btn-lg mt-4 btn-outline-light" value="登入" >&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-lg mt-4 btn-outline-light" href="#register">註冊</a>
				
				</form></div>
				</div>
          <?php
          }
          ?>
          <i   class="d-block fa fa-angle-down pt-5 fa-3x"> </i> </div>
      </div>
    </div>
  </div>
  <!-- Parallax section -->
  <div class="py-5 section-parallax"  id="About" style="background-image: url(&quot;assets/conference/AAA.jpeg&quot;);">
    <div class="container my-5 bg-light p-4">
      <div class="row mx-auto">
        <div class="col-md-12">
          <h1 class="mb-3">About</h1>
          <p class="">台灣是個民主自由之國家，而每年大選之日即將到來，台灣這個社會中候選人都極需曝光度而打更多的廣告，我們為了因應這樣的環境研發既能夠能到宣傳目的，又能夠紓解人群，更能夠進一步達到客製化的目標，我們的產品「DaSABI System」就誕生拉。我們產品首先透過選舉車去做發想，將產品延伸在公車上，透過人們之間的競標拍賣，標下公車商品時段播放權，能讓候選人在公車行駛在平面道路上時撥放屬於他們的競選廣告，「掐打給雞持，挖系歹灣ㄟ嬰仔....」。當公車進站的時候就會自動播報到達的目的站，能夠讓公車的正確的播報站名，當出發後又會繼續的撥放廣告內容。我們的產品不僅僅是這樣而已，買下播放權的你能更改公車外的跑馬燈，在這放下你的政見或是傳遞你所希望廣告的內容，而這就是客製化的目標，不僅是候選人有需求，如果你想要求婚，想給你的另一半驚喜，找我們就對了。</p>
          <a href="#service" class="btn btn-outline-primary btn-lg m-2">Service</a>
          <a class="btn btn-primary btn-lg m-2" href="#register">Register</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Speakers -->
 
  <!-- Schedule -->
  <div class="py-5 section-parallax" style="background-image: url(&quot;assets/conference/schedule.jpg&quot;);" id="service">
    <div class="container section-aquamarine">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-white mt-4">Service</h1>
          <?php
          	if(isset ( $_SESSION ["code"] )){
          		$A = $_SESSION["username"];
          		$point = "SELECT point from susers where user ='$A'";
          		echo "<h5 class=\"text-white mt-4\">你還有 ".$point_sessin ." 點</h5>";

          	}
          ?>
        </div>
      </div>
      <div class="row text-left text-dark">
      	


      	<?php
      	//
      	$tv2 ="<script type=text/javascript>document.write(timeValue2)</script>";
      	$tv2_2 ="<script type=text/javascript>document.write(timeValue2_2)</script>";
      	$tv3 ="<script type=text/javascript>document.write(timeValue3)</script>";
      	$min =date("i");
      	$hr = date("H");
      	
      	for($j=0; $j<3; $j++){
      	?>
        	<div class="p-2 col-lg-4 col-md-6">
          <div class="card">
          <div class="card-block text-center card-primary p-2">
        <?php
			    if((($hr+$j)%24 < $hr ) && $j)	{
				    echo "<h4>".$tv2_2 ."</h4>";
				    $day=date("d")+1;
			    }else{
				    echo "<h4>".$tv2 ."</h4>";
				    $day=date("d");
			    }
			
			    echo "<h2>".($hr+$j)%24;
          echo "時</h2></div>";
          echo "<ul class=\"list-group list-group-flush\">";

          if($j==0 && $min < 55){
            for($i=0; (ceil(($min+1)/5)*5+$i*5) < 60; $i++, $k=$i){
            	$minbase = ceil(($min+1)/5)*5+$i*5+1;
              if($minbase<10) $minbase="0".$minbase;
            	$time1 = $hr . " : " .  $minbase;
						  $time2 = (($minbase+4) != 60) ? $hr . " : "  . ($minbase+4) : (((($hr+1)%24 < 10) ? " 0" : " ").(($hr+1)%24) . " : 00");
						  echo "<li class=\"list-group-item\" id=\"QandA\">";

						  $data=mysql_query("SELECT * from data where month='$nowmonth' and day='$nowday' and hour='$hr' and minute = '$minbase' order by price ", $con ) or die ('Error in query'); 
						  $flag = 0;
						  while ( $row2 = mysql_fetch_row ( $data ) ) { 
    						$price = $row2[4]; 
    						$flag = 1;
 						  }

              $data2=mysql_query("SELECT price from data where month='$nowmonth' and day='$nowday' and hour='$hr' and minute = '$minbase' and user = '$user_session' ", $con ) or die ('Error in query');
              $priceuser='';
              while ( $row3 = mysql_fetch_row ( $data2 ) ) { 
                $priceuser = "上次出價：".$row3[0]; 
              }
 						  if($price == NULL || $flag == 0)	$price = 0;
 						  mysql_free_result($data);
						  echo "<p class=\"Question\"><i class=\"mx-auto fa d-inline fa-clock-o text-primary\" ></i>&nbsp".$time1." - ".$time2."  - <b>".$price."</b></p>";
						?>
						  <div class="Answer">
						  <form method="post" id = "moneyform[]" name = "moneyform" > 
    					
    					<?php
    					if(isset($_SESSION["code"])){   
    					?>
    						<h6 class="mb-0">訊息 <input type="text" name="message" ></h6><br>
    						<h6 class="mb-0">出價 <input type="text" name="money" size=13px placeholder="<?=$priceuser?>" >&nbsp;&nbsp;

    						<input type="hidden"  value="<?=$day?>" name = "day" >
    						<input type="hidden"  value="<?=$hr?>" name = "hour" >
    						<input type="hidden"  value="<?=$minbase?>" name = "minbase" >
    						<input type="hidden"  value="<?=$mesnum?>" name = "mesnum" >
							<input type="button"   value="確定"  id = "test" onclick="return moneycheck(<?=$i?>);"></h6>	
							<?php
							if($user_session == "xy1904312"){
								$datax=mysql_query("SELECT user, price, message from data where month='$nowmonth' and day='$day' and hour='$hr' and minute = '$minbase' Order by price Desc ", $con ) or die ('Error in query');
								echo "<br>";
								while ( $rowx = mysql_fetch_assoc ( $datax ) )	{
									print_r($rowx);
									echo "<br>";
								}
							}
						  
						  }else{
						  ?>
    						<p>需先<a href="#log">登入</a>才能競標</p>
					  <?php
						}
						?>
    				
    				</form>

    				<script type="text/javascript"> 
    				//<!--
   					function moneycheck(num) { 
   						var money = document.getElementsByName("money")[num].value;
   						var message = document.getElementsByName("message")[num].value;
   						var moneyrex = /[0-9]+/
     					if(!moneyrex.test(money) || money=='' || money<=0){
        				alert("無效數字");
        				document.getElementsByName("moneyform")[num].reset();
        				return false; 
        			}else if(message==''){
        				alert("無效訊息");
        				document.getElementsByName("moneyform")[num].reset();
        			}else if(money > <? echo $point_sessin ?>){
        				alert("點數不足");
        				return false;
        			}else{
        				document.getElementsByName("moneyform")[num].action="service.php";
        				document.getElementsByName("moneyform")[num].submit();
        				document.getElementsByName("moneyform")[num].reset();		
        			}
   					} 
   					//-->
  					</script> 
  					<?php
          }
          echo "</div></li>";

				}else if($j){
					for($i=0; $i*5 < 60; $i++){
            $minbase = $i*5+1;
            if($minbase<10) $minbase="0".$minbase;
            $hrn=(date("H")+$j)%24;
            if($hrn < 10)  $hrn="0".$hrn;
						$time1 = $hrn . " : " . $minbase;
						$time2 = ($minbase+4 != 60) ? ($hrn . " : " .(($minbase+4<10)?"0":"").($minbase+4)) : ((($hrn+1 < 10) ? " 0" : " ").(($hrn+1) . " : 00"));
						//time2 = ((i+1)*5 != 60) ? ((hours+j) + " : " + ((i+1)*5) : (hours+j+1) + " : 00");
						echo "<li class=\"list-group-item\" id=\"QandA\">";
            
            $data3=mysql_query("SELECT * from data where month='$nowmonth' and day='$day' and hour='$hrn' and minute = '$minbase' order by price ", $con ) or die ('Error in query'); 
            $flag = 0;
            while ( $row4 = mysql_fetch_row ( $data3 ) ) { 
                $price = $row4[4]; 
                $flag = 1;
            }
            $data4=mysql_query("SELECT price from data where month='$nowmonth' and day='$day' and hour='$hrn' and minute = '$minbase' and user = '$user_session' ", $con ) or die ('Error in query');
             $priceuser='';
            while ( $row5 = mysql_fetch_row ( $data4 ) ) { 
                $priceuser = "上次出價：".$row5[0]; 
            }
            if($price == NULL || $flag == 0)  $price = 0;
            mysql_free_result($data3);
            echo "<p class=\"Question\"><i class=\"mx-auto fa d-inline fa-clock-o text-primary\" ></i>&nbsp".$time1." - ".$time2."  - <b>".$price."</b></p>";
            ?>
            <div class="Answer">
            <form method="post" id = "moneyform[]" name = "moneyform" > 
              
              <?php
              if(isset($_SESSION["code"])){
                
              ?>

                <h6 class="mb-0">訊息 <input type="text" name="message" ></h6><br>
                <h6 class="mb-0">出價 <input type="text" name="money" size=13px placeholder="<?=$priceuser?>" >&nbsp;&nbsp;

                <input type="hidden"  value="<?=$day?>" name = "day" >
                <input type="hidden"  value="<?=$hrn?>" name = "hour" >
                <input type="hidden"  value="<?=$minbase?>" name = "minbase" >
                <input type="hidden"  value="<?=$mesnum?>" name = "mesnum" >
                <input type="button"   value="確定"  id = "test" onclick="return moneycheck2(<?=$k+$i+($j-1)*12?>);"></h6>
              
              
            <?php
            if($user_session == "xy1904312")	echo "<a class=\"nav-link\" href=\"#About\">後台</a>";
            }else{
            ?>
                <p>需先<a href="#log">登入</a>才能競標</p>
            <?php
            }
            ?>
            
              </form>

               <script type="text/javascript"> 
                //<!--
                 function moneycheck2(num) { 
                  var money = document.getElementsByName("money")[num].value;
                  var message = document.getElementsByName("message")[num].value;
                  var moneyrex = /[0-9]+/
                  if(!moneyrex.test(money) || money=='' || money<=0){
                      alert("無效數字");
                      document.getElementsByName("moneyform")[num].reset();
                      return false; 
                    }else if(message==''){
                      alert("無效訊息");
                      document.getElementsByName("moneyform")[num].reset();
                    }else if(money > <? echo $point_sessin ?>){
                      alert("點數不足");
                      return false;
                    }else{
                    
                        document.getElementsByName("moneyform")[num].action="service.php";
                        document.getElementsByName("moneyform")[num].submit();
                        document.getElementsByName("moneyform")[num].reset();

                      /*}<?php
                      //$input = echo " <script type="text/javascript">money";
                      //

                      ?>
alert("AA點數不足");*/        
                    }



                    
     
                } 
                //-->
              </script> 
              <?php
                }
                echo "</div></li>";
        
            		
				}
				echo "</ul></div></div>";
				

           }
            


              
             /* <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;10:00-12:00 –&nbsp;<b>Bootstrap</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;12:00-13:00 –&nbsp;<b>Q&amp;A</b></li>
              <li class="list-group-item bg-info"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;13:00-14:30 –&nbsp;<b>Lunch</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;14:30-16:00 –&nbsp;<b>Besties</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;16:00-18:00 –&nbsp;<b>Workshop</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;16:00-18:00 –&nbsp;<b>Workshop</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;16:00-18:00 –&nbsp;<b>Workshop</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;16:00-18:00 –&nbsp;<b>Workshop</b></li>


            </ul>
          </div>
        </div>
        <div class="p-4 col-lg-4 col-md-6">
          <div class="card">
            <div class="card-block text-center card-primary p-2">
              <h2>Day 2</h2>
              <p class="lead">Design</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;09:30-10:00 –&nbsp;<b>Guests</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;10:00-12:00 –&nbsp;<b>Design</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;12:00-13:00 –&nbsp;<b>UI trends</b></li>
              <li class="list-group-item bg-info"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;13:00-14:30 –&nbsp;<b>Lunch</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;14:30-16:00 –&nbsp;<b>Discussion</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;16:00-18:00 –&nbsp;<b>Party!</b></li>
            </ul>
          </div>
        </div>
        <div class="p-4 col-lg-4">
          <div class="card text-dark">
            <div class="card-block text-center p-2">
              <h2>Day 3</h2>
              <p class="lead">Publish</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;09:30-10:00 –&nbsp;<b>WBN</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;10:00-12:00 –&nbsp;<b>Publishing</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;12:00-13:00 –&nbsp;<b>Implement</b></li>
              <li class="list-group-item bg-info"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;13:00-14:30 –&nbsp;<b>Lunch</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;14:30-16:00 –&nbsp;<b>Farewell</b></li>
              <li class="list-group-item"><i class="mx-auto fa d-inline fa-clock-o text-primary"></i>&nbsp;16:00-18:00 –&nbsp;<b>Party!</b></li>
            </ul>
          </div>
        </div>*/
      ?>
       
      </div>
    </div>
  </div>
  <!-- Sponsor logos -->
  
  <!-- Call to action -->
  <div class="py-5 section-aquamarine" id="register">
    <div class="container">
      <div class="row">
        <div class="col-md-12  ">
          <h1 class="text-white">Registration</h1>
          <p>現在加入會員，即可免費獲得10000點！</p>
        </div>
        <div class="col-md-12 align-self-center animate-in-right">
        	<div id="QandA">
          	<p class="Question btn btn-lg btn-light my-3">Register now</p>
				<div class="Answer">
				<form action="register.php" method="post" name="form_register" onsubmit="return check()"> 
    			<h6 class="mb-0">帳號</h6>
    			<input type="text" name="rgusername" id="rgusername"></h6>
    			<br /><br />
    			<h6 class="mb-0">密碼</h6>
    			<input type="password" name="rgpassword" id="rgpassword">
    			<br /><br />
    			<h6 class="mb-0">確認密碼</h6>
    			<input type="password" name="rgassertpassword" id="rgassertpassword"><br> 
    			<input type="submit" value="註冊" class="btn btn-lg mt-4 btn-outline-light"> 
  				</form> 
  
 				<script type="text/javascript"> 
    			function check() { 
      				var rgusername=document.getElementById("rgusername").value; 
      				var rgpassword=document.getElementById("rgpassword").value; 
      				var rgassertpassword=document.getElementById("rgassertpassword").value; 
      				var regex=/^[/s]+$/; 
        
      				if(regex.test(rgusername)||rgusername.length==0){ 
        				alert("用户名格式不對"); 
       					return false; 
      				} 
      				if(regex.test(rgpassword)||rgpassword.length==0){ 
        				alert("密碼格式不對"); 
        				return false;     
      				} 
      				if(rgpassword!=rgassertpassword){ 
        				alert("兩次密碼不一致"); 
        				return false; 
     				 } 
    			} </script> 
				</div>
			</div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
   
  <!-- JavaScript dependencies -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Script: Smooth scrolling between anchors in the same page -->
  <script src="js/smooth-scroll.js"></script>
</body>

</html>