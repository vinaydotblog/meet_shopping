<?php
include 'scode.php';
include 'db.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Shoppingt</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<LINK href="images/style.css" type=text/css rel=stylesheet>
<LINK rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="fckeditor/fckeditor.js"></script>
</head>

<body>
<center>
 <?php include 'top.php';?>
<?php
error_reporting(E_ALL & ~E_NOTICE);
if ($_REQUEST['msg']==1)
{
echo "Duplicate record!";
}
if ($_REQUEST['msg']==2)
{
echo "Record added successfully!";
}
?>  <table width="65%" border="1">
    <form name="form1" id="form1" method="post" action="add_product1.php" enctype="multipart/form-data">

<tr>
      <td>Select Category</td>
      <td>
         <select name="p_cat_id" size="1">
		    <option value="">Select Category</option>
              <?php
$sql = "SELECT * FROM p_category";
$result = mysql_query($sql) or die("Error in query2");
$num_return = mysql_num_rows($result);
while ($myrow = mysql_fetch_object($result))
{?>
		    <option value="<?php echo $myrow->p_cat_id;?>"><?php echo $myrow->p_cat_name;?></option>
    <?php }?>
	      </select>
       </td>
    </tr>
    <tr>
      <td>Select Sub Category</td>
     <td>
         <select name="p_sub_id" size="1">
		    <option value="">Select Sub Category</option>
              <?php
$sql1 = "SELECT * FROM p_sub_cat";
$result1 = mysql_query($sql1) or die("Error in query2");
$num_return1 = mysql_num_rows($result1);
while ($myrow1 = mysql_fetch_object($result1))
{?>
		    <option value="<?php echo $myrow1->p_sub_id;?>"><?php echo $myrow1->p_sub_name;?></option>
    <?php }?>
	      </select>
       </td>
    </tr>
	<tr>
	<td>Product Name</td>
	 <td><input type="text" name="p_prod_name" /></td>
	 </tr>
	 <tr>
	<td>Model No</td>
	 <td><input type="text" name="p_prod_modelno" /></td>
	 </tr>
	 <tr>
	<td>Manufacturing Date</td>
	 <td><input type="text" name="p_prod_date" /></td>
	 </tr>
	<tr>
	<td>Description</td>
	<td><script type="text/javascript">
var FCKeditor = new FCKeditor('p_prod_desc');
FCKeditor.BasePath = "fckeditor/";
FCKeditor.InstanceName = "p_prod_desc"; 
FCKeditor.Value = ""; 
FCKeditor.Border = "1px";
FCKeditor.Width = "700px";
FCKeditor.Height = "300px"; 
FCKeditor.Create();
</script>
</td>    
<tr>
	<td>Market Price</td>
	 <td><input type="text" name="p_prod_mp" /></td>
	 </tr>
	 <tr>
	<td>Selling price</td>
	 <td><input type="text" name="p_prod_sp" /></td>
	 </tr>
	 <tr>
	<td>Deal Price</td>
	 <td><input type="text" name="p_prod_dp" /></td>
	 </tr>
	 <tr>
	<td>Quantity</td>
	 <td><input type="text" name="p_prod_quan" /></td>
	 </tr>
	 <tr>
	<td>Size</td>
	 <td><input type="text" name="p_prod_size" /></td>
	 </tr>
	 <tr>
	<td>Color</td>
	 <td><input type="text" name="p_prod_color" /></td>
	 </tr>
	 <tr>
	<td>Image</td>
	 <td><input type="file" name="p_img"></td>
	 </tr>
	<tr>
      <td>&nbsp;</td>  <td><input type="submit" name="b1" value="Add Product"></td>
    </tr></form>
  </table>
</center>
</body>
</html>
