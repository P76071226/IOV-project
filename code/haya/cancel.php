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
  $input = $_REQUEST ["mes"];
  $money = $_REQUEST ["price"];
  $user_session = $_SESSION["username"];
  $time = $_REQUEST ["time"];
  $month = $time[0].$time[1];
  $day = $time[3].$time[4];
  $hour = $time[6].$time[7];
  $minute=$time[9].$time[10];
  if($day < date("d") || ($day == date("d") && $hour < date("H")) || ($day == date("d") && $hour == date("H") && $minute-1 <= date("i"))){
    ?> 
      <script type="text/javascript"> 
          alert("已不能取消"); 
          window.location.href="home.php#service"; 
      </script> 
      <?php
      exit(0);
  }else{
    mysql_query("DELETE FROM data WHERE hour = '$hour' and minute = '$minute' and month = '$month' and day = '$day' and user='$user_session' and price='$money' and message = '$input' ", $con ) or die ('Error in query2'); 
    mysql_query("UPDATE susers SET  point = point+'$money' WHERE user='$user_session' ", $con ) or die ('Error in query1');
    mysql_query("UPDATE data SET back = 1 where month='$month'and day='$day'and minute='$minute' and hour = '$hour'", $con) or die ('Error in query10');
    $maxpri = mysql_query("SELECT max(price) from data where month='$month'and day='$day'and minute='$minute' and hour = '$hour'", $con) or die ('Error in query100');
    $maxpric=mysql_fetch_row($maxpri);
    $maxprice=$maxpric[0];
    mysql_query("UPDATE data SET back = -1 where month='$month'and day='$day'and minute='$minute' and hour = '$hour' and price = '$maxprice' ", $con ) or die ('Error in query11');
  }
}
?> 
<script>alert("取消成功"); document.location.href="home.php#service";</script>
  
</body> 
</html> 