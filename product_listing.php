<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shoppingt</title>
<link rel="stylesheet" href="../css/p_style.css"/>
<script src="../jquery/jquery.js" type="text/javascript">
</script>
<script src="../jquery/jquery.fancybox.js" type="text/javascript"></script>
<script src="../jquery/jquery.fancybox.pack.js" type="text/javascript"></script>
<link rel="stylesheet" href="../css/jquery.fancybox.css"/>

<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
</head>

<body>
<?php include("../public/includep/headerp.php");?>
<?php include("includep/connection.php");?>
     <div id="container">
          <div id="content">
              <?php include("../public/includep/sidebarp.php");?> 
               <div id="wrapper">
               <?php
               	$query="select * from products where category_id={$_GET['id']}";
				$result=mysql_query($query);  
				//echo "<ul>";
				$i=0;
				echo "<div id='images'>";
				while($row=mysql_fetch_array($result))
				{?>
			 <div class='products'>
             	<a class='fancybox' href="#fancy_<?php echo $row['id']; ?>"> 
                	<img class= 'prodimg' src="../images/products/<?php echo $row['image']; ?>" />
                </a>
	            <a href='prod_description.php?id=<?php echo $row['id'] ?>' >  <h4 class='prodname'><?php echo $row['name']; ?></h4></a>
             </div>
			 <div style='display:none' id="fancy_<?php echo $row['id']; ?>"><img style="width:300px;height:300px" src="../images/products/<?php echo $row['image']; ?>" /></div>
				
					
					<?php $i++;
					if($i%3==0)
					echo "<br/>";
				}
				echo "</div>";
				//echo "</ul>";
				?>
			   </div><!--end of wrapper-->
          </div><!--end of content-->
          <?php include("../public/includep/footerp.php");?>
		  </div><!--end of container-->
</div><!--end of page-->
</body>
</html>
<?php
if(strpos($_SERVER['PHP_SELF'],'index.php') == FALSE){
		include("./include/config.php");
		header("Location: ".HOST."index.php");
	}

	if (isset($_GET['DO'])){
		$DO = $_GET['DO'];
	}else if (isset($_POST['DO'])){	
		$DO = $_POST['DO'];
	}else{
		$DO='';
	}

	$function_list = array('addEvent','deleteEvent','editEvent');

	if( in_array($DO, $function_list) ){
		$DO();
	}
	######### FUNCTIONS ################
function addEvent(){
	global $UtilitiesObj;
	global $SelectObj;	
	global $InsertObj;
	global $MessageObj;

	//echo "<pre>";print_R($_FILES);die;
	if ($_FILES['strImage']['type']=="image/jpeg" || $_FILES['strImage']['type']=="image/pjpeg" || $_FILES['strImage']['type']=="image/jpg" || $_FILES['strImage']['type']=="image/pjpg" || $_FILES['strImage']['type']=="image/gif")
	{
				
		$query=mysql_query("SELECT MAX(intEventID) FROM tblaluminievent");
		$result=mysql_fetch_array($query);
		$MaxId=($result[0]+1);
		$tmp_name1 = $_FILES["strImage"]["tmp_name"];
		$name1 = time().str_replace(" ", "_",$_FILES["strImage"]["name"]);
		$extImg1 = array_pop(split('[.]',$name1));
		$name2 = substr($name1, strrpos($name1, '.'));
		$name3 = "ev".$MaxId.strtolower($name2);
		move_uploaded_file($tmp_name1, BASE_DIR.'content/aluminiGallery/' . $name3);
	}
		if($_POST['isActive']=="Yes"){
			$active="Yes";
		}else{
			$active="No";
		}
		$allowed_tags = "<table></table><tr></tr><td></td><a><span><strong><br></br><sup><font></font><sub><div><h1><h2><h3><i></i><p></p><b></b><i<h4><h5><h6><pre><address><ol><li><ul><blockquote><img>";
		 $txt = strip_tags($_POST['strMatter'],$allowed_tags);
		$InsertObj->data_array = array(
									'strEventTitle' =>$_POST['strEventTitle'],
									'strImage' =>$name1,
									'strMatter' =>$txt,
									'strDate' =>date('Y-m-d'),
									'isActive' =>$active									
									);
				
		$InsertObj->table_name = "tblaluminievent";

		$InsertObj->execInsertData();

		$UtilitiesObj->Redirect('admin','manageAluminiEvent','listAluminiEvent');
	
}	

function deleteEvent(){
		global $UtilitiesObj;
		global $DeleteObj;	
		global $MessageObj;
		$query=mysql_query("SELECT strImage FROM tblaluminievent WHERE intEventID=".((int)$_GET['intEventID']));
		$result=mysql_fetch_array($query);
				if ($result[0]!="")
				{
				unlink(BASE_DIR.'content/aluminiGallery/' . $result[0]);
				}


		$DeleteObj->table_name = 'tblaluminievent';
		$DeleteObj->where = "WHERE intEventID='".$_GET['intEventID']."'";
		$DeleteObj->execDeleteData();

		$UtilitiesObj->Redirect('admin','manageAluminiEvent','listAluminiEvent');
	}
function editEvent(){
	global $UtilitiesObj;
	global $UpdateObj;	
	global $InsertObj;
	global $MessageObj;

	if ($_FILES['strImage']['type']=="image/jpeg" || $_FILES['strImage']['type']=="image/pjpeg" || $_FILES['strImage']['type']=="image/jpg" || $_FILES['strImage']['type']=="image/pjpg" || $_FILES['strImage']['type']=="image/gif")
	{
	
		$query=mysql_query("SELECT strImage FROM tblaluminievent WHERE intEventID=".((int)$_POST['intEventID']));
		$result=mysql_fetch_array($query);
				if ($result[0]!="")
				{
				unlink(BASE_DIR.'content/aluminiGallery/' . $result[0]);
				}
		$tmp_name1 = $_FILES["strImage"]["tmp_name"];
		$name1 = time().str_replace(" ", "_",$_FILES["strImage"]["name"]);
		$extImg1 = array_pop(split('[.]',$name1));
		$name2 = substr($name1, strrpos($name1, '.'));
		$name3 = "ev".$_REQUEST['intEventID'].strtolower($name2);
		move_uploaded_file($tmp_name1, BASE_DIR.'content/aluminiGallery/' . $name3);
		
	}
	if($_POST['isActive']=="Yes"){
			$active="Yes";
		}else{
			$active="No";
		}
		$allowed_tags = "<table></table><tr></tr><td></td><a><span><br></br><strong><sup><sub><font></font><div><h1><h2><h3><i></i><p></p><b></b><i<h4><h5><h6><pre><address><ol><li><ul><blockquote><img>";
		 $txt = strip_tags($_POST['strMatter'],$allowed_tags);
	
	if($name1!=""){
		
			$UpdateObj->field_array = array(
									'strEventTitle' =>$_POST['strEventTitle'],
									'strImage' =>$name3,
									'strMatter' =>$txt,
									'strDate' =>date('Y-m-d'),
									'isActive' =>$active	
						);
	}else{
	
			$UpdateObj->field_array = array(
									'strEventTitle' =>$_POST['strEventTitle'],
									'strMatter' =>$txt,
									'strDate' =>date('Y-m-d'),
									'isActive' =>$active	
						);
	}

		$UpdateObj->table_name = "tblaluminievent";
		$UpdateObj->where= " WHERE intEventID=".$_POST['intEventID'];
		$UpdateObj->execUpdateData();
		$UtilitiesObj->Redirect('admin','manageAluminiEvent','listAluminiEvent');
		
	
}
?>