<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<title>歡迎登錄界面</title> 
</head> 
<body> 
  
<?php
session_start (); 
if (isset ( $_SESSION ["code"] )) {//判斷code存不存在，如果不存在，説明異常登錄 
  ?> 
歡迎登錄<?php
  echo "${_SESSION["username"]}";//顯示登錄用户名 
  ?><br> 
您的ip：<?php
  echo "${_SERVER['REMOTE_ADDR']}";//顯示ip 
  ?> 
<br> 
您的語言： 
<?php
  echo "${_SERVER['HTTP_ACCEPT_LANGUAGE']}";//使用的語言 
  ?> 
<br> 
瀏覽器版本： 
<?php
  echo "${_SERVER['HTTP_USER_AGENT']}";//瀏覽器版本信息 
  ?> 
 <br> 
<a href="exit.php">登出</a> 
<?php
} else {//code不存在，調用exit.php 退出登錄 
  ?> 
<script type="text/javascript"> 
  alert("退出登錄"); 
  window.location.href="exit.php"; 
</script> 
<?php
} 
?> 
<br> 
  <a href="alter_password.html">修改密碼</a> 
  
</body> 
</html> 