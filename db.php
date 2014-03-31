<?php        
error_reporting(E_ALL & ~E_NOTICE ^ E_DEPRECATED);
$conn = mysql_connect("localhost","root","root") or die("Could not make connection to the Database.");
$db= mysql_select_db("shopping",$conn) or die("Could not select the Database.");
?>