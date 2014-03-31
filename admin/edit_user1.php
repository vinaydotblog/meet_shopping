<?php
//session_start(); 
include 'scode.php';
include 'db.php';

			$u_id=$_REQUEST['u_id'];
			$st=$_REQUEST['st'];
			
			if($st=="edit")
			{
			$u_pwd=$_REQUEST['u_pwd'];
			$u_status=$_REQUEST['u_status'];
					$sqll = "UPDATE u_login SET u_pwd='".$u_pwd."', u_status='".$u_status."' WHERE u_id=".$u_id;
					$result1 = mysql_query($sqll) or die("error in query2");
			//	echo $sqll;
				header("Location: view_member.php");			
			}
			if($st=="del")
			{
					$sqll = "DELETE FROM u_login WHERE u_id=".$u_id;
					$result1 = mysql_query($sqll) or die("error in query2");
			//	echo $sqll;
				header("Location: view_member.php");			
			}
		
?>