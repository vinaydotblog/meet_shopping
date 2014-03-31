<?php
include 'scode.php';
include 'db.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Shopping</title>
<LINK href="images/style.css" type=text/css rel=stylesheet>
<LINK rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

<script language="javascript" src="../images/varr_ajax.js" type="text/javascript"></script>
</head>

<body>
 <div align="center"><?php include 'top.php';?>
<?php
error_reporting(E_ALL & ~E_NOTICE ^ E_DEPRECATED);
session_start();
include 'scode.php';
include 'db.php';
$pay_opt=$_REQUEST['pay_opt'];
$sql = "SELECT * FROM p_order WHERE p_regid='".$_SESSION['UserID']."' AND o_status='pending'";
//echo $sql;exit;
		$result = mysql_query($sql) or die("Error in Query1");
		$res=mysql_num_rows($result);
if ($res>0)
{
	while($row=mysql_fetch_object($result))
	{
		$sqll = "UPDATE p_order SET pay_opt='".$pay_opt."', o_status='Complete' WHERE p_ord_id='".$row->p_ord_id."'";
		$result1 = mysql_query($sqll) or die("error in query2");
	}
}
?> 
 <table border="0" width="100%" cellspacing="3" cellpadding="3">
      <tr> 
        <td width="50%"><strong><font color="#6699FF">Thank You for your order. Our customer support person will contact you soon</font></strong></td>
      </tr>
  </table>
</div>
</body>
</html>