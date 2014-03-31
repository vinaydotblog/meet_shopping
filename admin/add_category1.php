<?php
//session_start(); 
include 'scode.php';
include 'db.php';

			$cat_name=$_REQUEST['cat_name'];
			
			$sql = "SELECT p_cat_name FROM p_category WHERE p_cat_name='".$_REQUEST['cat_name']."'";
			$result = mysql_query($sql) or die("Error in Query1");
			$res=mysql_num_rows($result);
			$row=mysql_fetch_row($result);
			if($res>0)
			{
				header("Location: add_category.php?msg=1");
				exit;			
				
			}
			{
					$sqll = "INSERT INTO p_category SET p_cat_name='".$cat_name."'";
					$result1 = mysql_query($sqll) or die("error in query2");
			//	echo $sqll;
				header("Location: add_category.php?msg=2");			
			}
?>