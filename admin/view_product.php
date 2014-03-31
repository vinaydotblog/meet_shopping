<?php
//session_start();
include 'scode.php';
include 'db.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Management</title>
<LINK href="images/style.css" type=text/css rel=stylesheet>
<LINK rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>

<body>
<center>
 <?php include 'top.php';?>
    <tr> 
      <td> <table width="75%" border="1">
          <tr> 
            <td><strong>Category</strong></td>
			<td><strong>Sub Category</strong></td>
			<td><strong>Product</strong></td>
            <td><strong>Update</strong></td>
          </tr>
          <?php
error_reporting(E_ALL & ~E_NOTICE);
$sql = "SELECT * FROM p_prod";
$result = mysql_query($sql) or die("Error in query2");
$num_return = mysql_num_rows($result);
while ($myrow = mysql_fetch_object($result))
{?>
          <tr> 
            <td><?php $sql1 = "SELECT * FROM p_category WHERE p_cat_id=".$myrow->p_cat_id;
$result1 = mysql_query($sql1) or die("Error in query2");
$myrow1 = mysql_fetch_object($result1);
 echo $myrow1->p_cat_name;?></td>
			<td><?php $sql2 = "SELECT * FROM p_sub_cat WHERE p_sub_id=".$myrow->p_sub_id;
$result2 = mysql_query($sql2) or die("Error in query2");
$myrow2 = mysql_fetch_object($result2);
 echo $myrow2->p_sub_name;?></td>
			<td><?php echo $myrow->p_prod_name;?></td>
			 <td><a href="edit_product.php?p_prod_id=<?php echo $myrow->p_prod_id;?>&st=edit">Edit</a> / <a href="edit_product1.php?p_prod_id=<?php echo $myrow->p_prod_id;?>&st=del">Delete</a></td>
          </tr>
          <?php }?>
        </table></td>
    </tr>
  </table>
</center>
</body>
</html>