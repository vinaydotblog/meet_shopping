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
            <td>Update</td>
          </tr>
          <?php
error_reporting(E_ALL & ~E_NOTICE);
$sql = "SELECT * FROM p_category";
$result = mysql_query($sql) or die("Error in query2");
$num_return = mysql_num_rows($result);
while ($myrow = mysql_fetch_object($result))
{?>
          <tr> 
            <td><?php echo $myrow->p_cat_name;?></td>
            <td><a href="edit_cat.php?p_cat_id=<?php echo $myrow->p_cat_id;?>&st=edit">Edit</a> / <a href="edit_cat1.php?p_cat_id=<?php echo $myrow->p_cat_id;?>&st=del">Delete</a></td>
          </tr>
          <?php }?>
        </table></td>
    </tr>
  </table>
</center>
</body>
</html>