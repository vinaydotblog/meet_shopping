
<?php
	session_start();
$_SESSION['IsAdmin'] = "not ok";
	 $_SESSION['AdminUsit'] = "";
     $_SESSION['login_name'] = "";
	 $_SESSION['regd_no'] = "";
	
	header("Location: index.php");
	exit;
?>