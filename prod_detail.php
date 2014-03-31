<?php error_reporting(E_ALL & ~E_NOTICE);
  include 'db.php';
$v=$_REQUEST['p_cat_id'];
?>
<!DOCTYPE html>

<html>
<head>
<title>Online Shopping</title>
<link rel="stylesheet" href="images/style.css"/>
</head>
<body onLoad="javascript: document.getElementById('wt<?php echo $v;?>').style.display='inline';">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="border: 0px solid #c0c0c0; border-collapse: collapse">
  <tr align="center"> 
    <td colspan="2"> 
      <?php include("top.php");?>
    </td>
  </tr>
  <tr> 
    <td width="20%" valign="top" style="border-right: 1px dashed #000033;"> 
      <?php include("left.php");?>
    </td>
<td valign="top" width="80%">

<table border="0" cellpadding="4" cellspacing="3" bordercolor="#000000">
  <form name="form1" action="prod_order_add.php" method="post"><tr>
          <td align="center" valign="top"> 
            <?php
               $query4=mysql_query("SELECT * FROM p_prod WHERE p_prod_id=".$_REQUEST['id']);
				$i=0;
				$row4=mysql_fetch_array($query4);
				?>
            <img class= 'prodimg' src="admin/p_images/<?php echo $row4['p_img']; ?>" /></td>

      <td><b><?php echo $row4['p_prod_name'];?></b><br>
	MRP <strike>Rs. <?php echo $row4['p_prod_mp'];?> </strike><br>
	Selling Price<strike>Rs. <?php echo $row4['p_prod_sp'];?></strike>
	<br>Deal Price Rs.<?php echo $row4['p_prod_dp'];?>
	<br><br><b>Description<?php echo $row4['p_prod_desc'];?></b>
	</td></tr>
	<tr>
      <td align="right">Qty</td>
	  <td><input type="hidden" name="st" value="add"><input type="hidden" name="p_prod_id" value="<?php echo $row4['p_prod_id'];?>"><input type="hidden" name="p_prod_dp" value="<?php echo $row4['p_prod_dp'];?>"><input type="text" name="p_qty" value="1" size="5"> <input type="submit" name="b1" value="Buy Now"></td>
    </tr>
	</form>
	</table>
</td>
  </tr>
  <tr> 
    <td colspan="2" align="center"> 
      <?php include("footer.php");?>
    </td>
  </tr>
</table>
</body>
<?php echo $script="<script type='text/javascript'>document.getElementById('wt".$v."').style.display='inline'</script>";?>

</html>