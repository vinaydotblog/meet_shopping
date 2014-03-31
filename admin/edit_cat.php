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
</head>

<body>
<center>
 <?php include 'top.php';?>
<?php
error_reporting(E_ALL & ~E_NOTICE);
$sql = "SELECT * FROM p_category WHERE p_cat_id=".$_REQUEST['p_cat_id'];
$result = mysql_query($sql) or die("Error  in query2");
$num_return = mysql_num_rows($result);
$myrow = mysql_fetch_object($result)
?>  
  <table width="75%" border="1">
    <form name="form1" id="form1" method="post" action="edit_cat1.php">
      <input type="hidden" name="p_cat_id" value="<?php echo $_REQUEST['p_cat_id'];?>" />
      <input type="hidden" name="st" value="edit" />
      <tr> 
        <td>Username</td>
        <td> <input type="text" name="p_cat_name" value="<?php echo $myrow->p_cat_name;?>" /> 
        </td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
        <td><input type="submit" name="b1" value="Update"></td>
      </tr>
    </form>
  </table>
</center>
</body>
</html>