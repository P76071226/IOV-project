<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<title>正在修改密碼</title> 
</head> 
<body> 
  <?php
  session_start (); 
  $username = $_POST ["username"]; 
  $oldpassword = $_REQUEST ["oldpassword"]; 
  $newpassword = $_REQUEST ["newpassword"]; 
    
  $con=mysql_connect("localhost", "root", "csiecial");
  if (! $con) { 
    die ( '數據庫連接失敗' . $mysql_error () ); 
  } 
  mysql_select_db ( "member", $con ); 
  $dbusername = null; 
  $dbpassword = null; 
  $result = mysql_query ( "SELECT * FROM susers WHERE user ='$username' AND password = password('$oldpassword')", $con ) or die ('Error in query');
  while ( $row = mysql_fetch_row ( $result ) ) { 
    $dbusername = $row [1]; 
    $dbpassword = $row [2]; 
  } 
  if (is_null ( $dbusername ) || is_null ( $dbpassword )) { 
    ?> 
  <script type="text/javascript"> 
    alert("帳密錯誤"); 
    window.location.href="alter_password.html"; 
  </script>  
  <?php
  } else
  /*if (password('$oldpassword') != password('$dbpassword')) { 
    ?> 
  <script type="text/javascript"> 
    alert("密碼錯誤"); 
    
  </script> 
  <?php
  } */
  mysql_query ( "update susers set password=password('$newpassword') where user='{$username}'" ) or die ( "存入數據庫失敗" . mysql_error () );//如果上述用户名密碼判定不錯，則update進數據庫中 
  mysql_close ( $con ); 
  ?> 
  
  
  <script type="text/javascript"> 
    alert("密碼修改成功"); 
    window.location.href="exit.php"; 
  </script> 
</body> 
</html> 