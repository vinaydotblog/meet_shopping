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
<table width="100%" border="0" cellpadding="4" cellspacing="3" bordercolor="#000000">
  <tr><?php
               $query4=mysql_query("SELECT * FROM p_prod WHERE p_cat_id=".$_REQUEST['p_cat_id']." AND p_sub_id=".$_REQUEST['p_sub_id']);
				//$result=mysql_query($query4);  
				//echo "<ul>";
				$i=0;
				while($row4=mysql_fetch_array($query4))
				{?>
      <td class="product" align="center"><a href='prod_detail.php?id=<?php echo $row4['p_prod_id'];?>&p_sub_id=<?php echo $row4['p_sub_id'];?>&p_cat_id=<?php echo $row4['p_cat_id'];?>' style="text-decoration: none"><img border="0" class= 'prodimg' src="admin/p_images/<?php echo $row4['p_img']; ?>" /><br /><?php echo $row4['p_prod_name']."<br>"; 
	  echo "<strike>Rs. ". $row4['p_prod_mp']."</strike>&nbsp;&nbsp;&nbsp; <strike>Rs. ".$row4['p_prod_sp']."</strike>&nbsp;&nbsp;&nbsp; Rs.".$row4['p_prod_dp'];?> </a>	
          </td>
          <?php $i++;
					if($i%3==0)
					{echo "</td></tr><tr>";}
					 //$i=$i+1;
				}
				?>
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