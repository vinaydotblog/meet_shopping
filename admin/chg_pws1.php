<?php
session_start();
include 'scode.php';
include 'db.php';

			$pws=trim(addslashes($_REQUEST['pws']));
			$pws1=trim(addslashes($_REQUEST['pws1']));
			$pws2=trim(addslashes($_REQUEST['pws2']));
			
			$sql = "SELECT user_pwd FROM net_users WHERE user_name='".$_SESSION['IsLoginUser']."'";
			$result = mysql_query($sql) or die("Error in Query1");
			$row=mysql_fetch_row($result);
			if($pws==$row[0])
			{
					$sqll = "UPDATE net_users SET user_pwd='".$pws1."' WHERE user_name='".$_SESSION['IsLoginUser']."'";
					$result1 = mysql_query($sqll) or die("error in query2");
				if (mysql_affected_rows()==1)
					{
						$status=1;
					}
				elseif (mysql_affected_rows()!=1)
					{
						$status=1;
					}
			}
			else
			{
				header("Location: chg_pws.php?msg=2");			
				
			}
		
?>
<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>..::SEEIT, Online Complaint Form::..</title>
<link href="images/style.css" rel="stylesheet">
<script language="JavaScript">
<!--

function ref_page()
	{
	window.opener.location.reload();
	self.close();
	}

-->
</script>

</head>
<center>
<body>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="border: 1px solid #ebebeb">
            <tr> 
              
            
      <td width="44%" align="center" bgcolor="#CC3333" class="maintitle" style="padding-left:10px" colspan="2"><font color="#FFFFFF"><strong>Change 
        Password</strong></font></td>
            </tr>
            <tr> 
              <td height="25" colspan="2" class="gen">&nbsp;</td>
            </tr>
            <tr align="center"> 
              
      <td height="25" colspan="2" class="gen"><font color="#800000">Password 
        Changed</font></td>
            </tr>
            <tr> 
              <td height="27" colspan="2" class="gen" align=center><a href="" onClick="return ref_page();">Close Window</a></td>
            </tr>
          </table>
</body>
</center>
</html>