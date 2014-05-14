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
  <table border="0" width="100%" cellspacing="3" cellpadding="3">
    <form name="form1" id="form1" method="post" action="order_final.php">
      <tr> 
        <td width="50%"><strong><font color="#6699FF">View Cart</font></strong></td>
        <td width="50%"><strong><font color="#6699FF">Customer Info</font></strong></td>
      </tr>
      <tr> 
        <td><table class="fancy" width="100%" border="0" cellpadding="0" style="border: 1px solid #000000" cellspacing="0">
            <tr> 
              <th width="70%" align="left" style="padding: 3px">Name</th>
              <th width="10%" align="center" style="padding: 3px">Price</th>
              <th width="10%" align="center" style="padding: 3px">Qty</th>
              <th width="10%" align="center" nowrap="nowrap" style="padding: 3px">Sub                Total</th>
            </tr>
            <?php
session_start();

$sql = "SELECT * FROM p_order WHERE p_regid=".$_SESSION['UserID']." AND o_status='pending'";
$result = mysql_query($sql) or die("Error in query2");
$num_return = mysql_num_rows($result);
while ($row4 = mysql_fetch_object($result))
{
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
            <tr align="right"> 
              <td colspan="4" style="padding: 3px"></td>
            </tr>
          </table></td>
        <td valign="top"><table width="100%" border="0" cellpadding="0" style="border: 1px solid #000000" cellspacing="0">
            <?php
session_start();
$sqlc = "SELECT * FROM p_register WHERE p_regid=".$_SESSION['UserID'];
$resultc = mysql_query($sqlc) or die("Error in query2");
$num_returnc = mysql_num_rows($resultc);
$rowc = mysql_fetch_object($resultc);
?>
            <tr> 
              <td align="left" style="padding: 3px"> <?php echo $rowc->p_firstname."<br>";
echo $rowc->p_lastname."<br>";
echo $rowc->p_emailid."<br>";
echo $orwc->p_gender."<br>";
echo $rowc->p_city."<br>";
echo $rowc->p_state."<br>";
echo $rowc->p_mobile."<br>";
echo $rowc->p_add."<br>";
?></td>
            </tr>
          </table></td>
      </tr>
      <tr> 
        <td align="right">Payment Option</td>
        <td><select size="1" name="pay_opt">
            <option value="Credit Cards">Credit Cards</option>
            <option value="Cash on Delivery">Cash on Delivery</option>
            <option value="Credit Cards">Debit Cards</option>
            <option value="Internet Banking">Internet Banking</option>
          </select></td>
      </tr>
      <tr> 
        <td colspan="2" align="center"><input type="submit" name="bn" value="Submit Order" /></td>
      </tr>
    </form>
  </table>
</div>
</body>
</html>