<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
include 'scode.php';
?> 
<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>..::SEEIT, Online Complaint Form::..</title>
<link href="images/style.css" rel="stylesheet">
<script language="JavaScript">

<!--
function validate_submit() 
{

	var frmCheck=document.theForm;
  
  if (document.theForm.pws.value == "")
    {
      alert("Enter a value for the Password field.");
      document.theForm.pws.focus();
      return (false);
    }
if ((document.theForm.pws1.value =="") || (document.theForm.pws2.value == ""))
    {
      alert("Enter a value for the \"Password and Confirm Password\" field.");
      document.theForm.pws1.focus();
      return (false);
    }
  if ((document.theForm.pws1.value) != (document.theForm.pws2.value))
    {
      alert("Values of Password and Confirm Password does not match.");
      document.theForm.pws1.value="";     
	  document.theForm.pws2.value="";
      document.theForm.pws1.focus();
      return (false);
    }
}
-->
</script>

</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="border: 1px solid #ebebeb">                          
                      <form name="theForm" method="post" action="chg_pws1.php" onSubmit="return validate_submit();">
<tr> 
                        
              <td align="center" bgcolor="#CC3333" class="maintitle" style="padding:5px; " colspan="2"><font color="#FFFFFF"><strong>Change 
                Password</strong></font></td>
                      </tr>
   <?php
   if ($_REQUEST['msg']==2)
   {?><tr><td colspan="2" class="gen" align="center" style="padding: 5px">
   <font color='#800000'>Old Password is not correct</font>
   </td></tr><?php } ?>
                      <tr> 
                        
              <td align="right" class="gen" style="padding: 5px">Old Password</td>
                        <td align="left" class="gen" style="padding: 5px"><input name="pws" type="password" class="text_1"></td>
                      </tr>
                      <tr> 
                        
              <td align="right" class="gen" style="padding: 5px">New Password</td>
                                <td align="left" class="gen" style="padding: 5px"> <input name="pws1" type="password" class="text_1"> 
                                 
                        </td>
                      </tr>
					  <tr> 
                        
              <td align="right" class="gen" style="padding: 5px">Confirm Password</td>
                                <td align="left" class="gen" style="padding: 5px"> <input name="pws2" type="password" class="text_1"> 
                               
                        </td>
                      </tr>
                      <tr> 
                        <td colspan="2" class="gen" align=center style="padding: 5px"><input name="submit" type="submit" class="text_2" value="Submit"></td>
                      </tr>
                      	</form>
                    </table>
				
</body>
</html>