<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
</head> 
<body> 
  
<?php
date_default_timezone_set('Asia/Taipei');
 $con=mysql_connect("localhost", "root", "csiecial");
  mysql_select_db("member", $con);
  mysql_query("set names utf8");
session_start (); 
if (isset ( $_SESSION ["code"] )) {//判斷code存不存在，如果不存在，説明異常登錄 
  $input = $_REQUEST ["message"];
  $money = $_REQUEST ["money"];
  $user_session = $_SESSION["username"];
  $hour = $_REQUEST ["hour"];
  $minute = $_REQUEST ["minbase"];
  $day = $_REQUEST ["day"];
  $month = date("m");
  $date = (date("m"))."/".$_REQUEST ["day"]." ".$hour.":".$minute;
  $num=$_REQUEST ["mesnum"];
  if($day < date("d") || ($day == date("d") && $hour < date("H")) || ($day == date("d") && $hour == date("H") && $minute-1 <= date("i"))){
  	?> 
	<script type="text/javascript"> 
  		alert("本時段已結束"); 
  		window.location.href="home.php#service"; 
	</script> 
	<?php
	exit(0);
  }else{
  	if($same=mysql_query("SELECT * from data where  month='$month'and day='$day'and minute='$minute'and hour = '$hour'", $con ) ){
  		while($samerow= mysql_fetch_row($same)){
  			if($samerow[4] == $money){
  				 ?> 
				<script type="text/javascript"> 
  					alert("此價位已有人標"); 
  					window.location.href="home.php#service"; 
				</script> 
				<?php
				exit(0);
  			}
  		}
  	}
  	if(($exist=mysql_query("SELECT * from data where user='$user_session'and month='$month'and day='$day'and minute='$minute'and hour = '$hour'", $con )) && !($row= mysql_fetch_row($exist)))  {
    	if($num >= 3){
    		?> 
			<script type="text/javascript"> 
  				alert("不能標超過三個時段"); 
  				window.location.href="home.php#service"; 
			</script> 
			<?php
    	}else{
      		mysql_query("UPDATE susers SET  point = point-'$money', num=num+1 WHERE user='$user_session' ", $con ) or die ('Error in query1');
      		mysql_query("INSERT INTO data(user, month, day, hour, minute, price, message, back) VALUES ('$user_session', '$month', '$day', '$hour', '$minute', '$money', '$input', 1) ", $con ) or die ('Error in query1');

  		}
  	}else{
   		mysql_query("DELETE FROM data WHERE hour = '$hour' and minute = '$minute' and month = '$month' and day = '$day' and user='$user_session' ", $con ) or die ('Error in query2'); 
    	mysql_query("UPDATE susers SET  point = point-'$money'+'$row[4]' WHERE user='$user_session' ", $con ) or die ('Error in query1'); 
    	mysql_query("INSERT INTO data(user, month, day, hour, minute, price, message, back) VALUES ('$user_session', '$month', '$day', '$hour', '$minute', '$money', '$input', 1) ", $con ) or die ('Error in query1');
 	}
  	mysql_query("UPDATE data SET back = 1 where month='$month'and day='$day'and minute='$minute' and hour = '$hour'", $con) or die ('Error in query10');
  	$maxpri = mysql_query("SELECT max(price) from data where month='$month'and day='$day'and minute='$minute' and hour = '$hour'", $con) or die ('Error in query100');
  	$maxpric=mysql_fetch_row($maxpri);
  	$maxprice=$maxpric[0];
  	mysql_query("UPDATE data SET back = -1 where month='$month'and day='$day'and minute='$minute' and hour = '$hour' and price = '$maxprice' ", $con ) or die ('Error in query11');

	}
}
?> 
<script>alert("出價成功"); document.location.href="home.php#service";</script>
</body> 
</html> 