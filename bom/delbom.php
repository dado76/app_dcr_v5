
<?php

require('../db.php');
include("auth.php");

?>
<?php
	include ("../dbconnection.php");
	$pid=$_GET['pid'];
	$sql="DELETE FROM carte_sims where id=?";
	$qry=$db->prepare($sql);
	$qry->execute(array($pid));
		echo "<script language='javascript' type='text/javascript'>alert('Balise supprimée!!')</script>";
		echo "<script language='javascript' type='text/javascript'>window.open('tableau','_self')</script>";
?>
