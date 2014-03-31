<?php
//session_start(); 
include 'db.php';

		$p_ord_id=$_REQUEST['p_ord_id'];
		$p_regid=$_REQUEST['p_regid'];
		$p_emailid=$_REQUEST['p_regid'];
		
	
		$sql = "SELECT p_regid FROM p_order WHERE p_regid='".$_REQUEST['p_reg id']."'";
			$result = mysql_query($sql) or die("Error in Query1");
			$res=mysql_num_rows($result);
			$row=mysql_fetch_row($result);
			if($res>0)
			{
				header("Location: view_cart1.php?msg=1");
				exit;			
			}
			
		
?>