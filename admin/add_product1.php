<?php
//session_start(); 
include 'scode.php';
include 'db.php';

		$p_cat_id=$_REQUEST['p_cat_id'];
		$p_sub_id=$_REQUEST['p_sub_id'];
		$p_prod_name=$_REQUEST['p_prod_name'];
		$p_prod_modelno=$_REQUEST['p_prod_modelno'];
		$p_prod_date=$_REQUEST['p_prod_date'];
		$p_prod_desc=$_REQUEST['p_prod_desc'];
		$p_prod_mp=$_REQUEST['p_prod_mp'];
		$p_prod_sp=$_REQUEST['p_prod_sp'];
		$p_prod_dp=$_REQUEST['p_prod_dp'];
		$p_prod_quan=$_REQUEST['p_prod_quan'];
		$p_prod_size=$_REQUEST['p_prod_size'];
		$p_prod_color=$_REQUEST['p_prod_color'];
		$p_img=$_REQUEST['p_img'];
		
			if ($_FILES['p_img']['type']=="image/jpeg" || $_FILES['p_img']['type']=="image/pjpeg" || $_FILES['p_img']['type']=="image/jpg" || $_FILES['p_img']['type']=="image/pjpg" || $_FILES['p_img']['type']=="image/gif")
	{
				
		$query=mysql_query("SELECT MAX(p_prod_id) FROM p_prod");
		$result=mysql_fetch_array($query);
		$MaxId=($result[0]+1);
		$tmp_name1 = $_FILES["p_img"]["tmp_name"];
		$name1 = time().str_replace(" ", "_",$_FILES["p_img"]["name"]);
		//$extImg1 = array_pop(split('[.]',$name1));
		$name2 = substr($name1, strrpos($name1, '.'));
		$name3 = "pImg".$MaxId.strtolower($name2);
		move_uploaded_file($tmp_name1, 'G:/EasyPHP-12.1/www/Shopping/Project/admin/p_images/'.$name3);
}
		
			$sql = "SELECT p_cat_id, p_sub_id,p_prod_name FROM p_prod WHERE p_cat_id='".$_REQUEST['p_cat_id']."' AND p_sub_id='".$_REQUEST['p_sub_id']."' AND p_prod_name='".$_REQUEST['prod_name']."'";
			$result = mysql_query($sql) or die("Error in Query1");
			$res=mysql_num_rows($result);
			$row=mysql_fetch_row($result);
			if($res>0)
			{
				header("Location: add_product.php?msg=1");
				exit;			
				
			}
			{
					$sqll = "INSERT INTO p_prod SET p_cat_id='".$p_cat_id."', p_sub_id='".$p_sub_id."', p_prod_name='".$p_prod_name."',p_prod_modelno='".$p_prod_modelno."',p_prod_date='".$p_prod_date."', p_prod_desc='".mysql_real_escape_string($p_prod_desc)."',p_prod_mp='".$p_prod_mp."',p_prod_sp='".$p_prod_sp."',p_prod_dp='".$p_prod_dp."',p_prod_quan='".$p_prod_quan."',p_prod_size='".$p_prod_size."',p_prod_color='".$p_prod_color."',p_img='".$name3."'";
					$result1 = mysql_query($sqll) or die("error in query2");
				echo $sqll;
				header("Location: view_product.php");			
			}
?>