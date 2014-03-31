<?php
include 'scode.php';
include 'db.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Management</title>
<LINK href="images/style.css" type=text/css rel=stylesheet>
<LINK rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="fckeditor/fckeditor.js"></script>
</head>

<body>
<center>
 <?php include 'top.php';?>
<?php
error_reporting(E_ALL & ~E_NOTICE);
$sql = "SELECT * FROM p_prod WHERE p_prod_id=".$_REQUEST['p_prod_id'];
$result = mysql_query($sql) or die("Error  in query2");
$num_return = mysql_num_rows($result);
$myrow = mysql_fetch_object($result)
?>  
  <table width="75%" border="1">
    <form name="form1" id="form1" method="post" action="edit_product1.php" enctype="multipart/form-data">
      <input type="hidden" name="p_prod_id" value="<?php echo $_REQUEST['p_prod_id'];?>" />
      <input type="hidden" name="st" value="edit" />
      <tr> 
        <td>Select Category</td>
        <td><select name="p_cat_id" size="1">
		    <option value="">Select Category</option>
			
              <?php
$sql1 = "SELECT * FROM p_category";
$result1 = mysql_query($sql1) or die("Error in query2");
while ($myrow1 = mysql_fetch_object($result1))
{?>
		    <option value="<?php echo $myrow1->p_cat_id;?>" <?php if ($myrow->p_cat_id==$myrow1->p_cat_id) {echo "selected";}?>><?php echo $myrow1->p_cat_name;?></option>
    <?php }?>
	      </select> 
        </td>
      </tr>
	        <tr> 
        <td>Select Sub Category</td>
        <td><select name="p_sub_id" size="1">
		    <option value="">Select Sub Category</option>
			
              <?php
$sql2 = "SELECT * FROM p_sub_cat";
$result2 = mysql_query($sql2) or die("Error in query2");
while ($myrow2 = mysql_fetch_object($result2))
{?>
		    <option value="<?php echo $myrow2->p_sub_id;?>" <?php if ($myrow->p_sub_id==$myrow2->p_sub_id) {echo "selected";}?>><?php echo $myrow2->p_sub_name;?></option>
    <?php }?>
	      </select> 
        </td> 
		<tr>
        <td>Description</td>
        <td><script type="text/javascript">
var FCKeditor = new FCKeditor('p_prod_desc');
FCKeditor.BasePath = "fckeditor/";
FCKeditor.InstanceName = "p_prod_desc"; 
FCKeditor.Value = "<?php echo mysql_real_escape_string($myrow->p_prod_desc)?>"; 
FCKeditor.Border = "1px";
FCKeditor.Width = "700px";
FCKeditor.Height = "300px"; 
FCKeditor.Create();
</script> </td>
      </tr>
	
	  	<tr>
	<td>Product Name</td>
	 <td><input type="text" name="p_prod_name" value="<?php echo $myrow->p_prod_name;?>" /></td>
	 </tr>
	 <tr>
	<td>Model No</td>
	 <td><input type="text" name="p_prod_modelno"  value="<?php echo $myrow->p_prod_modelno;?>" /></td>
	 </tr>
	 <tr>
	<td>Manufacturing Date</td>
	 <td><input type="text" name="p_prod_date" value="<?php echo $myrow->p_prod_date;?>"  /></td>
	 </tr>
	<td>Market Price</td>
	 <td><input type="text" name="p_prod_mp" value="<?php echo $myrow->p_prod_mp;?>"  /></td>
	 </tr>
	 <tr>
	<td>Selling price</td>
	 <td><input type="text" name="p_prod_sp"  value="<?php echo $myrow->p_prod_sp;?>" /></td>
	 </tr>
	 <tr>
	<td>Deal Price</td>
	 <td><input type="text" name="p_prod_dp" value="<?php echo $myrow->p_prod_dp;?>"  /></td>
	 </tr>
	 <tr>
	<td>Quantity</td>
	    <td><input type="text" name="p_prod_quan" value="<?php echo $myrow->p_prod_quan;?>"  /></td>
	 </tr>
	 <tr>
	<td>Size</td>
	 <td><input type="text" name="p_prod_size" value="<?php echo $myrow->p_prod_size;?>"  /></td>
	 </tr>
	 <tr>
	<td>Color</td>
	 <td><input type="text" name="p_prod_color" value="<?php echo $myrow->p_prod_color;?>"  /></td>
	 </tr>
	  <tr>
	<td>Image</td>
	 <td><input type="file" name="p_img">  <?php echo $myrow->p_img;?></td>
	 </tr>
	   <tr> 
        <td height="28">&nbsp;</td>
        <td><input type="submit" name="b1" value="Update"></td>
      </tr>
    </form>
  </table>
</center>
</body>
</html>