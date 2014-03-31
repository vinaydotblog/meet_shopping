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
echo "You have been Successfully Registered";
}
?><br>
  <table width="75%" border="0" cellpadding="4" cellspacing="3" style="border: 1px solid #000">
    <form name="form1" id="form1" method="post" action="cust_reg1.php">
      <tr> 
        <td>First Name</td>
        <td> <input type="text" name="p_firstname" /> </td>
        <td>Last Name</td>
        <td> <input type="text" name="p_lastname" /> </td>
      </tr>
      <tr> 
        <td>Email ID</td>
        <td> <input type="text" name="p_emailid" /> </td>
      </tr>
      <tr> 
        <td>Password</td>
        <td><input type="password" name="p_password" /></td>
        <td>Confirm Password</td>
        <td><input type="password" name="p_password" /></td>
      </tr>
      <tr> 
        <td>Date Of Birth</td>
        <td> <input type="text" name="p_dob" /> </td>
      </tr>
      <tr> 
        <td>Gender</td>
        <td> <input type="radio" value ="Male" name="p_gender" />
          Male 
          <input type="radio" value="Female" name="p_gender"/>
          Female</td>
      </tr>
      <tr> 
        <td>City</td>
        <td> <input type="text" name="p_city" /> </td>
      </tr>
      <tr> 
        <td>State</td>
        <td> <input type="text" name="p_state" /> </td>
      </tr>
      <tr> 
        <td>Mobile</td>
        <td> <input type="text" name="p_mobile" /> </td>
      </tr>
      <tr> 
        <td>Address</td>
        <td> <input type="text" name="p_add" /> </td>
      </tr>
      <tr> 
        <td>&nbsp;</td>
        <td><input type="submit" value="Create Account" name="b1" /></td>
      </tr>
    </form>
  </table>
</center>
</body>
</html>