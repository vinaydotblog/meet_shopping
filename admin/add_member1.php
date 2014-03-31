<?php
//session_start(); 
include 'scode.php';
include 'db.php';

			$u_name=$_REQUEST['u_name'];
			$u_pwd=$_REQUEST['u_pwd'];
			
			$sql = "SELECT u_name FROM u_login WHERE u_name='".$_REQUEST['u_name']."'";
			$result = mysql_query($sql) or die("Error in Query1");
			$res=mysql_num_rows($result);
			$row=mysql_fetch_row($result);
			if($res>0)
			{
				header("Location: add_member.php?msg=1");
				exit;			
				
			}
			{
					$sqll = "INSERT INTO u_login SET u_name='".$u_name."', u_pwd='".$u_pwd."', u_status='Active', u_type='user'";
					$result1 = mysql_query($sqll) or die("error in query2");
			//	echo $sqll;
				header("Location: add_member.php?msg=2");			
			}
		
?>