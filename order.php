<?php
include 'db.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Shopping</title>
<LINK href="images/style.css" type=text/css rel=stylesheet>
<LINK rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<SCRIPT LANGUAGE="JavaScript">
<!--
function fvalid(form2)
{  
if (form2.login_name.value == "") 
	{
	alert("Enter a value for the \"Login Name\" field.");
	form2.login_name.focus();
	return (false);
	}
if (form2.pwd.value == "") 
	{
	alert("Enter a value for the \"Password\" field.");
	form2.pwd.focus();
	return (false);
	}
function fill(form2) 
{
	if (form2.c1.checked == 1) 
	{
		 form2.add2.value = form2.add1.value;
		 form2.country1.value = form2.country.value;
		 form2.state1.value = form2.state.value;
		 form2.city1.value = form2.city.value;
	}
}
 // -->
</script>
<script language="javascript" src="../images/varr_ajax.js" type="text/javascript"></script>
</head>

<body>
<center>
 <?php include 'top1.php';?>
<?php
error_reporting(E_ALL & ~E_NOTICE);
if ($_REQUEST['msg']==1)
{
echo "Duplicate record!";
}
if ($_REQUEST['msg']==2)
{
echo "Your Data has been successfully saved.";
}
?><br>
  <table width="75%" border="0" cellpadding="4" cellspacing="3" style="border: 1px solid #000">
    <form name="form1" id="form1" method="post" action="cust_reg1.php">
      <tr>
      <td>Product Name</td>
      <td>
              <?php
$sql = "SELECT * FROM p_prod";
$result = mysql_query($sql) or die("Error in query2");
$num_return = mysql_num_rows($result);
while ($myrow = mysql_fetch_object($result))
{?>
		    <option value="<?php echo $myrow->p_prod_name;?>"><?php echo $myrow->p_prod_name;?></option>
    <?php }?>
	      </select>
       </td>
    </tr>
	  <tr> 
        <td>Market Price:</td>
		 <td>
              <?php
$sql1 = "SELECT * FROM p_prod";
$result1 = mysql_query($sql1) or die("Error in query2");
$num_return = mysql_num_rows($result);
while ($myrow1 = mysql_fetch_object($result1))
{?>
		    <option value="<?php echo $myrow1->p_prod_mp;?>"><?php echo $myrow1->p_prod_mp;?></option>
    <?php }?>
	      </select>
      </tr>
	<tr> 
        <td>Selling Price:</td>
		 <td>
              <?php
$sql2 = "SELECT * FROM p_prod";
$result2 = mysql_query($sql2) or die("Error in query2");
$num_return = mysql_num_rows($result);
while ($myrow2 = mysql_fetch_object($result2))
{?>
		    <strike><option value="<?php echo $myrow2->p_prod_sp;?>"><?php echo $myrow2->p_prod_sp;?></option><strike>
    <?php }?>
	      </select>
      </tr>
	  <tr> 
        <td>Deal Price:</td>
		 <td>
              <?php
$sql3 = "SELECT * FROM p_prod";
$result3 = mysql_query($sql3) or die("Error in query2");
$num_return = mysql_num_rows($result);
while ($myrow3 = mysql_fetch_object($result3))
{?>
		    <option value="<?php echo $myrow3->p_prod_dp;?>"><?php echo $myrow3->p_prod_dp;?></option>
    <?php }?>
	      </select>
      </tr>
      <tr> 
	  	  <tr> 
        <td>Total Amount:</td>
		 <td>
              <?php
$sql4 = "SELECT * FROM p_prod";
$result4 = mysql_query($sql4) or die("Error in query2");
$num_return = mysql_num_rows($result);
while ($myrow4 = mysql_fetch_object($result4))
{?>
		    <option value="<?php echo $myrow4->p_prod_dp;?>"><?php echo $myrow4->p_prod_dp;?></option>
    <?php }?>
	      </select>
      </tr>
        <td>&nbsp;</td>
    <td><input type="submit" name="b1" value="Buy Now"></td>
    </tr>
    </form>
  </table>
</center>
</body>
</html>