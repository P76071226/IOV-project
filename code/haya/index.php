<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
  <title>Donate System</title>
<?php

    session_start();
	$user = $_POST['user'];
	$password = $_POST['password'];
	$refer = $_POST['refer'];

	if ($user == '' || $password == ''){
    // No login information
    header('Location: home.php?refer='. urlencode($_POST['refer']));
	}else{
    // Authenticate user
	$con=mysql_connect("localhost", "root", "csiecial");
	mysql_select_db("member", $con);
	mysql_query("set names utf8");
    
    $query = "SELECT userid, MD5(UNIX_TIMESTAMP() + userid + RAND(UNIX_TIMESTAMP()))
        guid FROM susers WHERE user = '$user' AND password = password('$password')";
        
    $result = mysql_query($query, $con)
    	or die ('Error in query');
    
    if (mysql_num_rows($result)){
        $row = mysql_fetch_row($result);
        // Update the user record
        $query = "UPDATE susers SET guid = '$row[1]' WHERE userid = $row[0]";
            
        mysql_query($query, $con)
        	or die('Error in query');
        
        // Set the cookie and redirect
        // setcookie( string name [, string value [, int expire [, string path
        // [, string domain [, bool secure]]]]])
        // Setting cookie expire date, 6 hours from now
        $cookieexpiry = (time() + 21600);
        setcookie("session_id", $row[1], $cookieexpiry);

        if (empty($refer) || !$refer){
            $refer = 'welcome.php';
        }
        $_SESSION["username"]=$user; 
        $_SESSION["point"]=$row[4]; 
        $_SESSION["code"]=mt_rand(0, 100000);

        header('Location: '. 'home.php');
    }
    else{
        ?>
        <script type="text/javascript"> 
         alert("帳密錯誤"); 
         window.location.href="home.php"; 
        </script> 
        <?php
        // Not authenticated
       
    }
}

	$rs = mysql_fetch_row($data);
	echo "$data <br> $rs <br> $rs[1] <br>";
	date_default_timezone_set('Asia/Taipei');
	echo date ("Y年m月d日 H:i:s<br>");
	echo "<br>";
	$str = date ("Y年m月d日 H:i:s");
	for($i=0; $i<20; $i++){
	echo $str[$i];echo " ";echo $i;echo "<br>";
	}
mysql_close($con);
?>
</body>
</html>
