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
    <form name="form1" id="form1" method="post" action="add_subcategory1.php">

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
      <td>Sub Category</td>
      <td><input type="text" name="sub_cat_name" /></td>
    </tr>
	<tr>
	<td>Description</td>
	<td><script type="text/javascript">
var FCKeditor = new FCKeditor('p_subcat_desc');
FCKeditor.BasePath = "fckeditor/";
FCKeditor.InstanceName = "p_subcat_desc"; 
FCKeditor.Value = ""; 
FCKeditor.Border = "1px";
FCKeditor.Width = "700px";
FCKeditor.Height = "300px"; 
FCKeditor.Create();
</script>
</td>    
	<tr>
      <td>&nbsp;</td>  <td><input type="submit" name="b1" value="Add Sub Category"></td>
    </tr></form>
  </table>
</center>
</body>
</html>
