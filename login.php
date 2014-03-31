<?php
include 'db.php';
error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Shopping</title>
<LINK href="images/style.css" type=text/css rel=stylesheet>
<LINK rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script language="JavaScript">
<!--
function fvalid(form2)
{  
if (form2.username.value == "") 
	{
	alert("Enter a value for the \"Username\" field.");
	form2.username.focus();
	return (false);
	}
	
if (form2.password.value == "") 
	{
	alert("Enter a value for the \"Password\" field.");
	form2.password.focus();
	return (false);
	}

}
 // -->
</script></head>

<body>
<table width="100%" border="0" cellpadding="4" cellspacing="3" bordercolor="#000000">
  <tr> 
    <td colspan="3" align="center"> 
      <?php include 'top.php';?>
    </td>
  </tr>
  <tr> 
    <td width="40%" valign="top"><?php
error_reporting(E_ALL & ~E_NOTICE);
if ($_REQUEST['err']==1)
{
echo "<font color='red'>Wrong Details!</font><br>";
}
?>Existing Users Login here
	<table width="70%" border="0" cellpadding="4" cellspacing="3" bordercolor="#000000" style="border: 1px dashed #000;">
        <form name="form2" method="post" action="signin.php" onSubmit="return fvalid(form2)">
          <tr> 
            <td>Email ID</td>
            <td><input name="username" style="width: 200px" value="" autocomplete="off"></td>
          </tr>
          <tr> 
            <td>Password</td>
            <td><input style="width: 200px" type="password" name="password" autocomplete="off"></td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td><input type="submit" value="Login" class="btn_blue"></td>
          </tr>
        </form>
      </table></legend></td>
    <td width="60%" valign="top"><?php
error_reporting(E_ALL & ~E_NOTICE);
if ($_REQUEST['msg']==1)
{
echo "<font color='red'>Duplicate record!</font><br>";
}
if ($_REQUEST['msg']==2)
{
echo "<font color='red'>You have been Successfully Registered</font><br>";
}
?><strong>New users register here</strong> 
      <table width="70%" border="0" cellpadding="4" cellspacing="3" bordercolor="#000000" style="border: 1px dashed #000;">
        <form name="form1" id="form1" method="post" action="cust_reg1.php">
          <tr valign="top"> 
            <td>First Name</td>
            <td> <input type="text" name="p_firstname" /> </td>
            <td>Last Name</td>
            <td> <input type="text" name="p_lastname" /> </td>
          </tr>
          <tr valign="top"> 
            <td>Email ID</td>
            <td colspan="3"> <input type="text" name="p_emailid" /> </td>
          </tr>
          <tr valign="top"> 
            <td>Password</td>
            <td><input type="password" name="p_password" /></td>
            <td>Confirm Password</td>
            <td><input type="password" name="p_password" /></td>
          </tr>
          <tr valign="top"> 
            <td>Date Of Birth</td>
            <td> <input type="text" name="p_dob" /> </td>
            <td>Gender</td>
            <td><input type="radio" value ="Male" name="p_gender" />
              Male 
              <input type="radio" value="Female" name="p_gender"/>
              Female</td>
          </tr>
          <tr valign="top"> 
            <td></td>
            <td colspan="3"> </td>
          </tr>
          <tr valign="top"> 
            <td>City</td>
            <td> <input type="text" name="p_city" /> </td>
            <td>State</td>
            <td><input type="text" name="p_state" /></td>
          </tr>
          <tr valign="top"> 
            <td>Mobile</td>
            <td><input type="text" name="p_mobile" /> </td>
            <td>Address</td>
            <td><textarea name="p_add" rows="5" cols="20"></textarea></td>
          </tr>
          <tr valign="top"> 
            <td>&nbsp;</td>
            <td colspan="3"><input type="submit" value="Create Account" name="b1" /></td>
          </tr>
        </form>
      </table></td>
  </tr>
  <tr> 
    <td colspan="3" align="center"> 
      <?php include 'footer.php';?>
    </td>
  </tr>
</table>

</body>
</html>