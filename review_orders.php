<?php
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
$sql = "SELECT o.p_prod_id, p.p_prod_name, o.p_qty, o.p_ord_date, o.p_totalamt
		FROM p_order o
		LEFT JOIN p_prod p ON o.p_prod_id = p.p_prod_id
		WHERE p_regid = ". $_SESSION['UserID'] ."
		AND o_status =  'Complete'";

$result = mysql_query($sql) or die("Error in query2");

?>
<table border="0" width="70%" id="" cellspacing="3" cellpadding="3">
	<tr>
		
      <td><strong><font color="#6699FF">Order History</font></strong></td>
	</tr>
	<tr>
		<td><table class="table" width="100%" border="0" cellpadding="0" style="border: 1px solid #000000" cellspacing="0">
		      <tr> 
		        <th width="40%" align="left" style="padding: 3px"><font color="#333333">Product Name</font></th>
		        <th width="30%" align="center" style="padding: 3px"><font color="#333333">Order Date</font</th>
		        <th width="10%" align="center" style="padding: 3px"><font color="#333333">Qty</font></th>
		        <th width="20%" align="center" style="padding: 3px"><font color="#333333">Sub 
		          Total</font></th>
		      </tr>

			<?php while($row = mysql_fetch_array($result)):?>
		      <tr>
		      	<td><a target="_blank" href="prod_detail.php?id=<?php echo $row['p_prod_id']; ?>"><?php echo $row['p_prod_name']; ?></a></td>
		      	<td><?php echo $row['p_ord_date']; ?></td>
		      	<td><?php echo $row['p_qty']; ?></td>
		      	<td>Rs. <?php echo  money_format('%i', $row['p_totalamt']); ?></td>
		      </tr>
			<?php endwhile; ?>
	      </table>
	      </td>
      </tr>
</table>

</body>
</html>