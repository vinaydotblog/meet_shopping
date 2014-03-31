
<table width="50%" border="0" align="left" cellpadding="4" cellspacing="4">
  <tr align="center"> 
    <td valign="left" align="left" bgcolor="#CC3333" style="font-size: 24px;" colspan="4">
   </tr>
 <?php
$sql1 = "SELECT * FROM p_prod";
$result1 = mysql_query($sql1) or die("Error in query2");
while ($myrow1 = mysql_fetch_object($result1))
{?>
<tr><td height="4" align="left" bgcolor="#E5E5E5" style="border-bottom: 1px dashed #333333;"><a href=""><?php echo $myrow1->p_prod_name;?></a></td></tr>
<?php }?>
</table>