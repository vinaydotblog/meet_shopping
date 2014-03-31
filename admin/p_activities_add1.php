<?php
session_start();
include 'scode.php';
include 'db.php';
include 'my_image_class.php';
$activities_title = $_REQUEST['activities_title'];
$activities_image = $_REQUEST['activities_image'];
$activities_matter = $_REQUEST['activities_matter'];
$img_path=$_SERVER['DOCUMENT_ROOT'].'/main/activities/';

//add_section
if ($_REQUEST['activities_req']=="Save") 
{
				 $sql2 = "SELECT MAX(unique_id) FROM p_activities";
                 $returnRS = mysql_query($sql2) or die("Error");
				  $unique_id="";
                 while($myrow2 = mysql_fetch_row($returnRS))
                  {
                      $unique_id=$myrow2[0];
                  }
                  $unique_id=$unique_id + 1;

if ($_FILES['activities_image']['type']=="image/jpeg" || $_FILES['activities_image']['type']=="image/pjpeg" || $_FILES['activities_image']['type']=="image/jpg" || $_FILES['activities_image']['type']=="image/pjpg" || $_FILES['activities_image']['type']=="image/gif")
	{
 
		$tmp_name1 = $_FILES["activities_image"]["tmp_name"];
		$name1 = time().str_replace(" ", "_",$_FILES["activities_image"]["name"]);

		//$extImg1 = array_pop(split('[.]',$name1));

		$name2 = substr($name1, strrpos($name1, '.'));
		$name3 = $unique_id.$name2;
		move_uploaded_file($tmp_name1, $img_path.$name3);
			$img5=$img_path.$name3;
	      	$image_info = getimagesize($img5);
      		$image_type = $image_info[2];
		  	if($image_type==IMAGETYPE_JPEG) 
				{
					$img_wid=imagesx(imagecreatefromjpeg($img5));	  
      			} 
			elseif($image_type==IMAGETYPE_GIF) 
				{
         			$img_wid=imagesx(imagecreatefromgif($img5));
      			} 
			elseif($image_type==IMAGETYPE_PNG) 
				{
         			$img_wid=imagesx(imagecreatefrompng($img5));
      			}

		if ($img_wid>750)
		{	
			$image = new MyImage();
			$image->load($img5);
			$image->resizeToWidth(750);
			$image->save($img_path.$name3);
		}
//$allowed_tags = "<table></table><tr></tr><td></td><a><span><strong><sup><font></font><br></br><br/><sub><div><h1><h2><h3><i></i><p></p><b></b><i<h4><h5><h6><pre><address><ol><li><ul><blockquote><img>";
//		 $txt = strip_tags($_REQUEST['activities_matter'],$allowed_tags);
}		
		if($_REQUEST['activities_active']=="Yes"){
			$activities_active="Yes";
		}else{
			$activities_active="No";
		}

$sq = "INSERT INTO p_activities SET unique_id=".$unique_id.", activities_title='".mysql_real_escape_string($activities_title)."', activities_image='".$name3."', activities_active='".$activities_active."', activities_date='".date('Y-m-d')."', activities_matter='".mysql_real_escape_string($activities_matter)."'";
$result1 = mysql_query($sq) or die("Error");
header("Location: p_activities.php");
exit;
}//end add section

//edit section
if ($_REQUEST['activities_req']=="Edit") 
{
	if ($_FILES['activities_image']['type']=="image/jpeg" || $_FILES['activities_image']['type']=="image/pjpeg" || $_FILES['activities_image']['type']=="image/jpg" || $_FILES['activities_image']['type']=="image/pjpg" || $_FILES['activities_image']['type']=="image/gif")
	{

		$tmp_name1 = $_FILES["activities_image"]["tmp_name"];
		$name1 = time().str_replace(" ", "_",$_FILES["activities_image"]["name"]);
		
		$qury=mysql_query("SELECT activities_image FROM p_activities WHERE unique_id=".((int)$_REQUEST['unique_id']));
		$result=mysql_fetch_array($qury);
		if ($result[0]!="")
			{
				unlink($img_path.$result[0]);
			}
		
		$name2 = substr($name1, strrpos($name1, '.'));
		$name3 = $_REQUEST['unique_id'].$name2;
		move_uploaded_file($tmp_name1, $img_path.$name3);
			$img5=$img_path.$name3;
	      	$image_info = getimagesize($img5);
      		$image_type = $image_info[2];
		  	if($image_type==IMAGETYPE_JPEG) 
				{
					$img_wid=imagesx(imagecreatefromjpeg($img5));	  
      			} 
			elseif($image_type==IMAGETYPE_GIF) 
				{
         			$img_wid=imagesx(imagecreatefromgif($img5));
      			} 
			elseif($image_type==IMAGETYPE_PNG) 
				{
         			$img_wid=imagesx(imagecreatefrompng($img5));
      			}

		if ($img_wid>750)
		{	
			$image = new MyImage();
			$image->load($img5);
			$image->resizeToWidth(750);
			$image->save($img_path.$name3);
		}
}		

		if($_REQUEST['activities_active']=="Yes"){
			$activities_active="Yes";
		}else{
			$activities_active="No";
		}
if($name3!=""){
$sq = "UPDATE p_activities SET activities_title='".mysql_real_escape_string($activities_title)."', activities_image='".$name3."', activities_active='".$activities_active."', activities_date='".date('Y-m-d')."', activities_matter='".mysql_real_escape_string($activities_matter)."' WHERE unique_id=".((int)$_REQUEST['unique_id']);
}
else
{
$sq = "UPDATE p_activities SET activities_title='".mysql_real_escape_string($activities_title)."', activities_active='".$activities_active."', activities_date='".date('Y-m-d')."', activities_matter='".mysql_real_escape_string($activities_matter)."' WHERE unique_id=".((int)$_REQUEST['unique_id']);
}
$result1 = mysql_query($sq) or die("Error");
header("Location: p_activities.php");
exit;
}//end edit section

//delete section
if ($_REQUEST['activities_req']=="Delete") 
{
		$qury=mysql_query("SELECT activities_image FROM p_activities WHERE unique_id=".((int)$_REQUEST['unique_id']));
		$result=mysql_fetch_array($qury);
		if ($result[0]!="")
			{
				unlink($img_path.$result[0]);
			}
$sq = "DELETE FROM p_activities WHERE unique_id=".((int)$_REQUEST['unique_id']);
$result1 = mysql_query($sq) or die("Error");
header("Location: p_activities.php");
exit;
}//end delete section
?>