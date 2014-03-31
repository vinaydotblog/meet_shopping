<?php
include 'scode.php';
include 'db.php';
$p_regid=$_SESSION['UserID'];
if ($_REQUEST['bn']!="")
	{
		header("Location: view_cart.php");
		exit;
	}

if ($_REQUEST['st']=="update")
{
	$cc = $_REQUEST['coun'];
	for ($i=0;$i<=$cc;$i++)
		{
			$p_ord_id=$_REQUEST['p_ord_id'.$i];
			$p_qty=$_REQUEST['p_qty'.$i];
			$p_prod_dp=($_REQUEST['p_prod_dp'.$i]*$p_qty);
			$sqll = "UPDATE p_order SET p_qty='".$p_qty."', p_ord_date='".date('d-m-Y')."', p_totalamt='".$p_prod_dp."' WHERE p_ord_id='".$p_ord_id."'";
			$result1 = mysql_query($sqll) or die("error in query2");
		}
}

if ($_REQUEST['st']=="add")
	{
	$p_prod_id=$_REQUEST['p_prod_id'];
	$p_qty=$_REQUEST['p_qty'];
	$p_prod_dp=($_REQUEST['p_prod_dp']*$p_qty);

		$sql = "SELECT * FROM p_order WHERE p_regid='".$_SESSION['UserID']."' AND p_prod_id='".$_REQUEST['p_prod_id']."' AND o_status='pending'";
//echo $sql;exit;
		$result = mysql_query($sql) or die("Error in Query1");
		$res=mysql_num_rows($result);
		$row=mysql_fetch_object($result);
			if($res>0)
				{
					$p_qty=$p_qty+$row->p_qty;
					$sqll = "UPDATE p_order SET p_qty='".$p_qty."', p_ord_date='".date('d-m-Y')."' WHERE p_ord_id='".$row->p_ord_id."'";
				}
			else
				{
					$sqll = "INSERT INTO p_order SET p_regid='".$_SESSION['UserID']."', p_prod_id='".$_REQUEST['p_prod_id']."', p_qty='".$p_qty."', p_ord_date='".date('d-m-Y')."', p_totalamt='".$p_prod_dp."', o_status='pending'";
				}
$result1 = mysql_query($sqll) or die("error in query2");
}
//echo $sqll;exit;
header("Location: prod_buy.php");
?>