<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
  <title>Donate System</title>
<?php


	// Check for a cookie, if none go to login page
if (!isset($_COOKIE['session_id']))
{
    header('Location: login.php?refer='. urlencode(getenv('REQUEST_URI')));
}

// Try to find a match in the database
$guid = $_COOKIE['session_id'];
$con=mysql_connect("localhost", "root", "haya12321");
mysql_select_db("member", $con);

$query = "SELECT userid FROM susers WHERE guid = '$guid'";
$result = mysql_query($query, $con);

if (!mysql_num_rows($result))
{
    // No match for guid
header('Location: login.php?refer='. urlencode(getenv('REQUEST_URI')));
}

?>
</body>
</html>
