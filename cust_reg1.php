<?php
//session_start(); 
include 'db.php';

		$p_firstname=$_REQUEST['p_firstname'];
		$p_lastname=$_REQUEST['p_lastname'];
		$p_emailid=$_REQUEST['p_emailid'];
		$p_password=$_REQUEST['p_password'];
		$p_dob=$_REQUEST['p_dob'];
		$p_gender=$_REQUEST['p_gender'];
		$p_city=$_REQUEST['p_city'];
		$p_state=$_REQUEST['p_state'];
		$p_mobile=$_REQUEST['p_mobile'];
		$p_add=$_REQUEST['p_add'];
	
		$sql = "SELECT p_emailid FROM p_register WHERE p_emailid='".$_REQUEST['p_emailid']."'";
			$result = mysql_query($sql) or die("Error in Query1");
			$res=mysql_num_rows($result);
			$row=mysql_fetch_row($result);
			if($res>0)
			{
				header("Location: login.php?msg=1");
				exit;			
			}
			{
				$sqll = "INSERT INTO p_register SET p_firstname='".$p_firstname."', p_lastname='".$p_lastname."', p_emailid='".$p_emailid."',p_password='".$p_password."',p_dob='".$p_dob."',p_gender='".$p_gender."',p_city='".$p_city."',p_state='".$p_state."',p_mobile='".$p_mobile."',p_add='".mysql_real_escape_string($p_add)."'";
					$result1 = mysql_query($sqll) or die("error in query2");
			//	echo $sqll;
				header("Location: login.php?msg=2");			
			}
		
?>