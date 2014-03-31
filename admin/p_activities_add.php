<?php 
include 'db.php'; 
include 'scode.php'; 
?>
<html>
<head>
<title><?php include 'p_title.php';?></title>
<meta http-equiv="imagetoolbar" content="no">	
<link href="images/style.css" rel="stylesheet" type="text/css" />
<link href="images/rte.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/library/fckeditor/fckeditor.js"></script>
</head>
<body LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>

<TABLE WIDTH="100%" BORDER=0 CELLPADDING=0 CELLSPACING=0 height="100%" style="border-collapse: collapse" bordercolor="#111111">
  <TR>
    <TD align="center" valign="top">
    <table cellSpacing="0" cellPadding="0" width="100%" border="0">
        <tr>
          <td align="center">
            <?php include 'top.php';?>
          </td>
        </tr>
 <tr><td align="right" style="padding: 2px">
 <table border="0" cellpadding="3" cellspacing="3" style="border-collapse: collapse">
		<tr bgcolor="#336600"><td nowrap><a href="p_activities_add.php" class="lnk4">Add Activities</strong></a></td>
		<td nowrap><font color="#FFFFFF">|</font></td>
		<td nowrap><a href="p_activities.php" class="lnk1">View Activities</a></td></tr>	
		</table>
</td></tr> 
<tr> 
          <td align="center" width="100%">
       <table width="70%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#C1C1C1" style="border-collapse:collapse">
              <tr> 
                <th colspan="2">Add Latest Activity</th>
              </tr>
              <form name="frmAdd" id="frmAdd" action="p_activities_add1.php" enctype="multipart/form-data" method="post" OnSubmit="return valid(this);">
                <tr> 
                  <td align="right" nowrap><strong><font color="#336633">News Title</font></strong></td>
                  <td align="left"><input type="text" id="activities_title" name="activities_title" size="75" ></td>
                </tr>
                <tr> 
                  <td align="right" nowrap><strong><font color="#336633">News 
                    Image</font></strong></td>
                  <td align="left">&nbsp; </td>
                </tr>
                <tr> 
                  <td align="right" nowrap><strong><font color="#336633">Is 
                    Active</font></strong></td>
                  <td align="left"><input type="checkbox" id="activities_active" name="activities_active" value="Yes"></td>
                </tr>
                <tr> 
                  <td align="right" valign="top" nowrap><strong><font color="#336633">News 
                    Matter</font></strong></td>
                  <td align="left">
                    <script type="text/javascript">
var FCKeditor = new FCKeditor('activities_matter');
FCKeditor.BasePath = "js/library/fckeditor/";
FCKeditor.InstanceName = "activities_matter"; 
FCKeditor.Value = ""; 
FCKeditor.Border = "1px";
FCKeditor.Width = "700px";
FCKeditor.Height = "300px"; 
FCKeditor.Create();
</script> </td>
                </tr>
                <tr align="center"> 
                  <td colspan="2"><input name="activities_image" type="file" id="activities_image"  onKeyPress='javascript:return false' value="application/octet-stream" size="60" oncontextmenu='javascript:return false' onselectstart= 'javascript:return false' oncut='return false;' onpaste='return false;' >
                    <input type="submit" name="activities_req" title="Save" value="Save" /></td>
                </tr>
              </form>
            </table>

            <br>
          
          </td>
        </tr>
         <tr>
            <td align="center"><?php include 'bottom.php';?></td>
          </tr>
      </table>
	</TD>
 </TR>
</TABLE>
</body>
</html>