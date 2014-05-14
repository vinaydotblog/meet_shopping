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
 <table border="0" width="70%" cellspacing="3" cellpadding="3">
	<tr>
		<td><strong><font color="#6699FF">View Cart</font></strong></td>
	</tr>
	<tr>
		<td><table class="fancy" width="100%" border="0" cellpadding="0" style="border: 1px solid #000000" cellspacing="0">
    <form name="form1" id="form1" method="post" action="view_cart1.php">
      <tr> 
        <th width="70%" align="left" style="padding: 3px">Name</th>
        <th width="10%" align="center" style="padding: 3px">Price</th>
        <th width="10%" align="center" style="padding: 3px">Qty</th>
        <th width="10%" align="center" style="padding: 3px">Sub 
          Total</th>
      </tr>
      <?php
session_start();

$ii=0;
$sql = "SELECT * FROM p_order WHERE p_regid=".$_SESSION['UserID']." AND o_status='pending'";
$result = mysql_query($sql) or die("Error in query2");
$num_return = mysql_num_rows($result);
while ($row4 = mysql_fetch_object($result))
{
$ii=$ii+1;
$sqry=mysql_query("SELECT * FROM p_prod WHERE p_prod_id=".$row4->p_prod_id);
$rw1=mysql_fetch_array($sqry);
?>
      <tr> 
        <td align="left" style="padding: 3px">
          <?php echo $rw1['p_prod_name'];?></td>
        <td style="padding: 3px" ><?php echo $rw1['p_prod_dp'];?></td>
        <td align="center" style="padding: 3px"><?php echo $row4->p_qty;?>
          </td>
        <td align="right" style="padding: 3px"><strong><font color="#CC0033"><?php echo $sttl=(($rw1['p_prod_dp'])*($row4->p_qty));?></font></strong></td>
      </tr>
      <?php $ttl=($ttl+$sttl);
	  }
	  ?>
      <tr> 
        <td colspan="4" style="padding: 3px; border-top: 1px solid #000000"></td>
      </tr>
      <tr> 
        <td style="padding: 3px"></td>
        <td colspan="2" style="padding: 3px"><strong><font color="#CC0033">Total</font></strong> 
        </td>
        <td align="right" style="padding: 3px"><strong><font color="#CC0033"><?php echo $ttl;?></font></strong></td>
      </tr>
      <tr align="center"> 
        
      <td colspan="2" style="padding: 3px">&nbsp;</td>
        <td style="padding: 3px" colspan="2"><input type="submit" name="bn" value="Shipping & Billing" /></td>
      </tr>
      <tr align="right"> 
        <td colspan="4" style="padding: 3px"></td>
      </tr>
    </form>
  </table></td>
	</tr>
</table></div>
</body>
</html>