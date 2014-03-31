<HTML>
<HEAD>
<TITLE>PAU Portal</TITLE>
<meta http-equiv="imagetoolbar" content="no">	
<link href="images/style.css" rel="stylesheet" type="text/css" />
<SCRIPT LANGUAGE="JavaScript">
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
</script>


</HEAD>
<BODY LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<TABLE WIDTH="100%" BORDER=0 CELLPADDING=0 CELLSPACING=0 style="border-collapse: collapse" bordercolor="#111111">
  <TR> 
    <TD align="center" valign="top"> 
      
      <br> <font color="#800000" style="line-height:18px">
<?php
error_reporting(E_ALL & ~E_NOTICE);
if ($_REQUEST['msg']==1)
{
echo "Invalid User ID or Password!";
}
?>
      </font> <table width="36%" border="5" cellpadding="4" cellspacing="0" style="border: 1px solid #000000; border-collapse: collapse">
        <tr> 
          <td align="center" bgcolor="#CC3333" style="padding: 7px"><strong><font class="WhiteText" color="#FFFFFF"> 
            Admin Login</font> </strong></td>
        </tr>
        <tr> 
          <td style="padding: 7px"> <table width="100%" border="0">
              <form name="form2" method="post" action="signin.php" onSubmit="return fvalid(form2)">
                <tr> 
                  <td width="41%" align="right" style="margin-right: 5"	>Username</td>
                  <td width="59%"><INPUT name="username" style="WIDTH: 120px" value="" size="20" autocomplete="off"> 
                  </td>
                </tr>
                <tr> 
                  <td align="right" style="margin-right: 5">Password</td>
                  <td><INPUT style="WIDTH: 120px" type="password" name="password" size="20" autocomplete="off"></td>
                </tr>
                <tr> 
                  <td>&nbsp;</td>
                  <td> <input type="submit" value="Login" class="btn_blue"> </td>
                </tr>
              </form>
            </table></td>
        </tr>
      </table></TD>
  </TR>
 
</TABLE>
</BODY>
</HTML>