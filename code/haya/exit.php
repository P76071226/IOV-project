<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
</head> 
<body> 
<?php
session_start ();//將session銷燬時調用destroy 
session_destroy (); 
?> 
<script type="text/javascript"> 
 window.location.href="home.php"; 
</script> 
</body> 
</html> 