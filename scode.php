<?php
session_start();
if ($_SESSION['IsUser'] != "ok")
{
     header("Location: login.php") ;
	exit;
}
?>