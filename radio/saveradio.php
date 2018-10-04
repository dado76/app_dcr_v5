
<?php
require('../dbconnection.php');
require('../db.php');
include("../auth.php");
?>
<?php
error_reporting(0);
include ("../dbconnection.php");
$id=$_POST['pid'];
$numero_appel=$_POST['numero_appel'];
$codification=$_POST['codification'];
$numero_serie=$_POST['numero_serie'];
$type=$_POST['type'];
$statut=$_POST['statut'];
$modele=$_POST['modele'];
	if($id==null){
					$sql="INSERT INTO radio(numero_appel,codification,numero_serie,type,statut,modele)values(:numero_appel,:codification,:numero_serie,:type,:statut,:modele)";
					$qry=$db->prepare($sql);
					$qry->execute(array(':numero_appel'=>$numero_appel,':codification'=>$codification,':numero_serie'=>$numero_serie, ':type'=>$type, ':statut'=>$statut, ':modele'=>$modele));
																														}else{
																																	$sql="UPDATE radio SET numero_appel=?, codification=?, numero_serie=?, type=?, statut=?, modele=? where id=?";
																																	$qry=$db->prepare($sql);
			$qry->execute(array($numero_appel,$codification,$numero_serie,$type,$statut,$modele,$id));
	}
	echo "<script language='javascript' type='text/javascript'>alert('Mise à jour ok!!!');</script>";
	echo "<script language='javascript' type='text/javascript'>window.open('radio.php','_self')</script>";
?>
