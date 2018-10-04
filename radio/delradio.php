
<?php
require('../dbconnection.php');
require('../db.php');
include("../auth.php");

?>
<?php
	include ("dbconnection.php");
	$pid=$_GET['pid'];
	$sql="DELETE FROM radio where id=?";
	$qry=$db->prepare($sql);
	$qry->execute(array($pid));
		echo "<script language='javascript' type='text/javascript'>alert('Radio supprimée!!')</script>";
		echo "<script language='javascript' type='text/javascript'>window.open('radio.php','_self')</script>";
?>
