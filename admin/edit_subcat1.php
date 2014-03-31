<?php
//session_start(); 
include 'scode.php';
include 'db.php';

		$p_sub_id=$_REQUEST['p_sub_id'];
		$st=$_REQUEST['st'];
			
if($st=="edit")
	{
		$p_cat_id=$_REQUEST['p_cat_id'];
		$p_sub_name=$_REQUEST['p_sub_name'];
		$p_subcat_desc=$_REQUEST['p_subcat_desc'];

		$sqll = "UPDATE p_sub_cat SET p_cat_id='".$p_cat_id."', p_sub_name='".$p_sub_name."', p_subcat_desc='".mysql_real_escape_string($p_subcat_desc)."' WHERE p_sub_id=".$p_sub_id;
				$result1 = mysql_query($sqll) or die("error in query2");
				//echo $sqll;
				header("Location: view_subcategory.php");			
			}
			if($st=="del")
			{
					$sqll = "DELETE FROM p_sub_cat WHERE p_sub_id=".$p_sub_id;
					$result1 = mysql_query($sqll) or die("error in query2");
			//	echo $sqll;
				header("Location: view_subcategory.php");			
			}
		
?>