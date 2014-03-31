<?php
//session_start(); 
include 'scode.php';
include 'db.php';

			$p_cat_id=$_REQUEST['p_cat_id'];
			$st=$_REQUEST['st'];
			
			if($st=="edit")
			{
			$p_cat_name=$_REQUEST['p_cat_name'];
					$sqll = "UPDATE p_category SET p_cat_name='".$p_cat_name."' WHERE p_cat_id=".$p_cat_id;
					$result1 = mysql_query($sqll) or die("error in query2");
				//echo $sqll;
				header("Location: view_category.php");			
			}
			if($st=="del")
			{
					$sqll = "DELETE FROM p_category WHERE p_cat_id=".$p_cat_id;
					$result1 = mysql_query($sqll) or die("error in query2");
			//	echo $sqll;
				header("Location: view_category.php");			
			}
		
?>