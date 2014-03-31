<?php
//session_start(); 
include 'scode.php';
include 'db.php';

		$p_cat_id=$_REQUEST['p_cat_id'];
		$sub_cat_name=$_REQUEST['sub_cat_name'];
		$p_subcat_desc=$_REQUEST['p_subcat_desc'];

			$sql = "SELECT p_cat_id, p_sub_name FROM p_sub_cat WHERE p_cat_id='".$_REQUEST['p_cat_id']."' AND p_sub_name='".$_REQUEST['sub_name']."'";
			$result = mysql_query($sql) or die("Error in Query1");
			$res=mysql_num_rows($result);
			$row=mysql_fetch_row($result);
			if($res>0)
			{
				header("Location: add_subcategory.php?msg=1");
				exit;			
				
			}
			{
					$sqll = "INSERT INTO p_sub_cat SET p_cat_id='".$p_cat_id."', p_sub_name='".$sub_cat_name."', p_subcat_desc='".mysql_real_escape_string($p_subcat_desc)."'";
					$result1 = mysql_query($sqll) or die("error in query2");
				echo $sqll;
				header("Location: view_subcategory.php?msg=2");			
			}
?>