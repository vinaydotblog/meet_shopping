<?php
include 'scode.php';
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
if (form2.Name.value == "") 
	{
	alert("Enter a value for the \"Category Name\" field.");
	form2.Name.focus();
	return (false);
	}
	
if (form2.spr_ID.value == "") 
	{
	alert("Enter a value for the \"Sponser ID\" field.");
	form2.spr_ID.focus();
	return (false);
	}
	
}
function showContents(theTable)
{
     if (document.getElementById(theTable).style.display == 'none')
     {
          document.getElementById(theTable).style.display = 'block';
     }
}
function hideContents(theTable)
{
     if (document.getElementById(theTable).style.display == 'none')
     {
          document.getElementById(theTable).style.display = 'none';
     }
     else
     {
          document.getElementById(theTable).style.display = 'none';
     }
}
function showSal()
{
     if (document.getElementById('sal').style.display == 'none')
     {
          document.getElementById('sal').style.display = 'block';
		  document.getElementById('bus').style.display = 'none';
		  document.getElementById('other').style.display = 'none';
     }
}
function showBus()
{
     if (document.getElementById('bus').style.display == 'none')
     {
          document.getElementById('sal').style.display = 'none';
		  document.getElementById('bus').style.display = 'block';
		  document.getElementById('other').style.display = 'none';
     }
}
function showOther()
{
     if (document.getElementById('other').style.display == 'none')
     {
	 	 	document.getElementById('sal').style.display = 'none';
		 	document.getElementById('bus').style.display = 'none';
		 	document.getElementById('other').style.display = 'block';
     }
}
function hideEmploy()
		{
			document.getElementById('sal').style.display = 'none';
		 	document.getElementById('bus').style.display = 'none';
		 	document.getElementById('other').style.display = 'none';			
		}
function showCash()
{
     if (document.getElementById('cash').style.display != 'block')
     {
          document.getElementById('cash').style.display = 'block';
		  document.getElementById('DD').style.display = 'none';
		  document.getElementById('Ccard').style.display = 'none';


     }
}
function showDD()
{
     if (document.getElementById('DD').style.display == 'none')
     {
          document.getElementById('cash').style.display = 'none';
		  document.getElementById('DD').style.display = 'block';
		  document.getElementById('Ccard').style.display = 'none';
  
     }
}
function showCard()
{
     if (document.getElementById('Ccard').style.display == 'none')
     {
		document.getElementById('cash').style.display = 'none';
		document.getElementById('DD').style.display = 'none';
		document.getElementById('Ccard').style.display = 'block';

     }
}		
function dispText()
{
	document.forms[0].blood_group.style.display = '';
}
function hideText()
{
	document.forms[0].blood_group.style.display = 'none';
}
function fill(form2) 
{
	if (form2.c1.checked == 1) 
	{
		 form2.add2.value = form2.add1.value;
		 form2.country1.value = form2.country.value;
		 form2.state1.value = form2.state.value;
		 form2.distt1.value = form2.distt.value;
		 form2.city1.value = form2.city.value;
		 form2.zip1.value = form2.zip.value;
	}
}
 // -->
</script>
<script language="javascript" src="../images/varr_ajax.js" type="text/javascript"></script>
</head>

<body>
<center>
 <?php include 'top.php';?>
<?php
error_reporting(E_ALL & ~E_NOTICE);
if ($_REQUEST['msg']==1)
{
echo "Duplicate record!";
}
if ($_REQUEST['msg']==2)
{
echo "Record added successfully!";
}
?>  
  <table width="65%" border="1">
    <form name="form1" id="form1" method="post" action="add_category1.php">
      <tr> 
        <td>Category</td>
        <td><input type="text" name="cat_name" /></td>
      </tr>
      <tr align="center"> 
        <td colspan="4"><input type="submit" name="b1"></td>
      </tr>
    </form>
  </table>
</center>
</body>
</html>