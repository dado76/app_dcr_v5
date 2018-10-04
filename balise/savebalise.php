

<?php
error_reporting(0);
include ("../dbconnection.php");

$id=$_POST['pid'];
$codification=$_POST['codification'];
$sim=$_POST['sim'];
$balise=$_POST['balise'];
$telephone=$_POST['telephone'];
$IDPORT=$_POST['IDPORT'];
$immatriculation=$_POST['immatriculation'];
$statut=$_POST['statut'];
$RFID=$_POST['RFID'];
$navigation=$_POST['navigation'];
$LC=$_POST['LC'];
$pesee=$_POST['pesee'];
$origin=$_POST['origin'];



	if($id==null){

					$sql="INSERT INTO carte_sims(codification, sim, balise, telephone, IDPORT, immatriculation, statut, RFID, navigation, LC, pesee, origin)values(:codification, :sim, :balise, :telephone, :IDPORT, :immatriculation, :statut, :RFID, :navigation, :LC, :pesee, :origin)";
					$qry=$db->prepare($sql);
					$qry->execute(array(':codification'=>$codification,':sim'=>$sim, ':balise'=>$balise, ':telephone'=>$telephone, ':IDPORT'=>$IDPORT, ':immatriculation'=>$immatriculation,':statut'=>$statut,':RFID'=>$RFID,':navigation'=>$navigation,':LC'=>$LC,':pesee'=>$pesee,':origin'=>$origin));
																														}else{
																																	$sql="UPDATE carte_sims SET codification=?, sim=?, balise=?, telephone=?, IDPORT=?, immatriculation=?, statut=?, RFID=?, navigation=?, LC=?, pesee=?, origin=? where id=?";
																																	$qry=$db->prepare($sql);
			$qry->execute(array($codification, $sim, $balise, $telephone, $IDPORT, $immatriculation, $statut, $RFID, $navigation, $LC, $pesee, $origin,$id));
	}

	echo "<script language='javascript' type='text/javascript'>alert('Mise à jour ok!!!');</script>";
	echo "<script language='javascript' type='text/javascript'>window.open('balise.php','_self')</script>";

?>
