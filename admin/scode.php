<?php
session_start();
if ($_SESSION['IsAdmin'] != "ok")
{
     header("Location: index.php") ;
}
?>