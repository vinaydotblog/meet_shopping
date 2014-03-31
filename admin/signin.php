<?php
session_start();
include 'db.php';

$username = trim(addslashes($_REQUEST['username']));
$password=trim(addslashes($_REQUEST['password']));
if ((empty($username)) || (empty($password)))
{
        header("Location: index.php?msg=1");
        exit;
}
else
{

$sql = "SELECT * FROM u_login WHERE u_name='".$username."' AND u_pwd='".$password."' AND u_type='admin' AND u_status='Active'";
$result = mysql_query($sql) or die("Error in query2");
$num_return = mysql_num_rows($result);
$myrow = mysql_fetch_object($result);
	if ($num_return < 1)
	{
    	header("Location: index.php?msg=1");
   		exit;	
	}
	else
	{
     $_SESSION['IsAdmin'] = "ok";
     $_SESSION['IsAdminName'] = $username;
     $_SESSION['AdminUser'] = $myrow->u_name;
    	 
  
  echo "login success you have entered the correct details";
	header("Location: add_member.php");
   		exit;	
	 }
}
?>
 <?php include 'top.php';?>