<?php
session_start();
include 'db.php';

$username = trim(addslashes($_REQUEST['username']));
$password=trim(addslashes($_REQUEST['password']));
if ((empty($username)) || (empty($password)))
{
        header("Location: login.php?err=1");
        exit;
}
else
{
$sql = "SELECT * FROM p_register WHERE p_emailid='".$username."' AND p_password='".$password."'";
$result = mysql_query($sql) or die("Error in query2");
$num_return = mysql_num_rows($result);
$myrow = mysql_fetch_object($result);
	if ($num_return < 1)
	{
    	header("Location: login.php?err=1");
   		exit;	
	}
	else
	{
     $_SESSION['IsUser'] = "ok";
     $_SESSION['IsUserName'] = $myrow->p_firstname." ".$myrow->p_lastname;
     $_SESSION['UserID'] = $myrow->p_regid;
	header("Location: index.php");
   		exit;	
	 }
}
?>