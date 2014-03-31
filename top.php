<table width="100%" border="0" cellpadding="0" cellspacing="1">
<tr>
<td><a href="index.php"><img border="0" src="images/download.jpg" width="100%" height="160"></a></td>
<td><img src="images/lll.jpg" width="100%" height="160"></td>
<td><img src="images/ppp.jpg" width="100%" height="160"></td>
<td><img src="images/kkk.jpg" width="100%" height="160"></td>
<td><img src="images/sss.jpg" width="100%" height="160"></td>
<td><img src="images/aaa.jpg" width="100%" height="160"></td>
<td><img src="images/jjj.jpg" width="100%" height="160"></td>
<td><img src="images/eee.jpg" width="100%" height="160"></td>
<td><img src="images/fff.jpg" width="100%" height="160"></td>
</tr>
</table>
<p class="top_links">
	<?php 
		session_start();
		// print_r($_SESSION);

		if(isset($_SESSION['UserID']) && $_SESSION['UserID']) {
			$sql = "SELECT * FROM p_order WHERE p_regid=".$_SESSION['UserID']." AND o_status='pending'";
			$result = mysql_query($sql) or die("Error in query2");
			$no_of_items_in_cart = mysql_num_rows($result);			
		} else {
			$no_of_items_in_cart = 0;
		}
	?>
	<a class="cart" href="prod_buy.php"><img src="images/jjj.jpg" width="20" height="20" alt=""> <?php echo $no_of_items_in_cart; ?> Item(s)</a>

	<?php if(isset($_SESSION['IsUserName']) && $_SESSION['IsUserName']): ?>
		<a href="#"><?php echo $_SESSION['IsUserName']; ?></a><a href="logout.php">( Logout )</a>
	<?php else: ?>
		<a href="login.php">Login / Register</a>
	<?php endif; ?>
</p>