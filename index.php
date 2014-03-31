<?php
include 'db.php';
error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Shopping</title>
<link href="images/style.css" type=text/css rel=stylesheet>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>

<body>
<table width="100%" border="0" cellpadding="4" cellspacing="3" bordercolor="#000000">
  <tr> 
    <td colspan="2" align="center"><?php include 'top.php';?>
</td>
  </tr>
  <tr> 
    <td width="30%" valign="top"><?php include 'left.php';?></td>
    <td width="70%"><table width="100%" border="0" cellpadding="4" cellspacing="3" bordercolor="#000000">
  <tr><?php
               	$query="select * from p_prod";
				$result=mysql_query($query);  
				//echo "<ul>";
				$i=0;
				while($row=mysql_fetch_array($result))
				{?>
      <td>          	<img class= 'prodimg' src="admin/p_images/<?php echo $row['p_img']; ?>" /><br />
         <a href='prod_detail.php?id=<?php echo $row['p_prod_id'] ?>' ><?php echo $row['p_prod_name']; ?></a>
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
    <td colspan="2" align="center"><?php include 'footer.php';?></td>
  </tr>
</table>

</body>
</html>