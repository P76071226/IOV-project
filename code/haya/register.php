<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
  <title>註冊用户</title> 
</head> 
<body> 
  <?php 
    session_start(); 
    $username=$_REQUEST["rgusername"]; 
    $password=$_REQUEST["rgpassword"]; 
  
    $con=mysql_connect("localhost", "root", "csiecial");
    if (!$con) { 
      die('數據庫連接失敗'.$mysql_error()); 
    } 
    mysql_select_db("member",$con); 
    $dbusername=null; 
    $dbpassword=null; 
    $result=mysql_query("SELECT * from susers where user ='$username'", $con ) or die ('Error in query'); 
    while ($row=mysql_fetch_row($result)) $dbusername=$row[1]; 
    
    if(!is_null($dbusername)){ 
  ?> 
  <script type="text/javascript"> 
    alert("帳號已存在"); 
    window.location.href="home.php#register"; 
    
  </script>  
  <?php exit(0);
    } 
    mysql_query("insert into susers (user,password,point) values('{$username}',password('$password'), 10000)") or die("存入數據庫失敗".mysql_error()) ; 
    mysql_close($con); 
    $_SESSION["username"]=$username; 
    $_SESSION["code"]=mt_rand(0, 100000);
  ?> 
  <script type="text/javascript"> 
    alert("註冊成功"); 
    
    window.location.href="home.php"; 
  </script> 
    
    
        
      
      
</body> 
</html> 