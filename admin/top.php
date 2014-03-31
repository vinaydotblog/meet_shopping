<table width="100%" border="0">
  <tr align="center"> 
    <td valign="top" bgcolor="#CC3333" style="font-size: 24px;" colspan="2">Welcome 
      <?php echo ucfirst($_SESSION['AdminUser']);?><br /> <a href="logout.php"><font color="#000000"  style="font-size: 12px;">Logout</font></a></td>
  </tr>
  <tr> 
    <td height="20" align="right" bgcolor="#E5E5E5" style="border-bottom: 1px dashed #333333;"><a href="Add_member.php">Add 
      User</a> | <a href="view_member.php">View User</a> | <a href="add_category.php">Add 
      Category</a> | <a href="view_category.php">View Category</a> | <a href="add_subcategory.php">Add 
      Sub Category</a> | <a href="view_subcategory.php">View Sub Category</a> | <a href="add_product.php">Add Product</a> | <a href="view_product.php">View Product</a></td>
    <td height="20" align="right" bgcolor="#E5E5E5" style="border-bottom: 1px dashed #333333;"><a href="chg_pws.php" class="mainmenu" target="chgPws" onClick="window.open('','chgPws','toolbar=no,location=no,directories=no,status=no,menubar=no,width=375,height=200,scrollbars=no,resizable=no,top=200,left=300')"><font color="#000000">Change 
      Password</font></a> | </td>
  </tr>
</table>
