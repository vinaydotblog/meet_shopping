<?php
error_reporting(E_ALL & ~E_NOTICE);
?>
<script type="text/javascript">
function openDiv(val){
  var elem = document.getElementById(val);
	if(elem.style.display=='block')
		{
			elem.style.display='none'
		}
	else
	{
		elem.style.display='block';


	}
//alert (val);
}</script>
<table style="min-width: 200px;" border="1" cellpadding="3" cellspacing="0" bordercolor="#CCCCCC" style="border-collapse: collapse">
  <tr> 
    <td><div style="color:#CC0033; text-align: center; font-weight: bold;">Categories</div></td>
  </tr>
<?php
$query=mysql_query("SELECT * FROM p_category");
while($row=mysql_fetch_array($query))
{
$v=$row['p_cat_id'];
?>
<tr> 
<td><span class="acc_head" id="wtg<?php echo $row['p_cat_id']?>" style="cursor:pointer;" onclick="openDiv('wt<?php echo $row['p_cat_id']?>')"><?php echo $row['p_cat_name'];?></span> 
      <div style="display:none" class="acc_con" id="wt<?php echo $row['p_cat_id'];?>"> 
        <table border="0" cellpadding="0" cellspacing="0">
          <?php
$query1=mysql_query("SELECT * FROM p_sub_cat WHERE p_cat_id=".$row['p_cat_id']." ORDER BY p_sub_id");
while($row1=mysql_fetch_array($query1))
{
?>
<tr><td width="20" style="padding: 2px"></td>
<td style="padding: 2px;"><a href="prods.php?p_sub_id=<?php echo $row1['p_sub_id'];?>&p_cat_id=<?php echo $row['p_cat_id'];?>"><font face="Verdana" size="2" <?php if ($row1['p_sub_id']==$_REQUEST['p_sub_id']) { echo 'color="#92b901"';} else { echo 'color="#000000"'; }?>>&#9658;<?php echo $row1['p_sub_name'];?></font></a></td></tr>
          <?php }?>
        </table>
      </div></td>
  </tr>
   <?php } ?>
</table>