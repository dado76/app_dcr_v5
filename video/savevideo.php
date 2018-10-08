

<?php
error_reporting(0);
include ("../dbconnection.php");

$id=$_POST['pid'];
$site=$_POST['site'];
$code=$_POST['code'];
$equipement=$_POST['equipement'];
$numero_serie=$_POST['numero_serie'];
$repere=$_POST['repere'];
$date_installation=$_POST['date_installation'];
$duree_garanti=$_POST['duree_garanti'];
$etat_garanti=$_POST['etat_garanti'];




	if($id==null){

					$sql="INSERT INTO video(site, code, equipement, numero_serie, repere, date_installation, duree_garanti, etat_garanti)values(:site, :code, :equipement, :numero_serie, :repere, :date_installation, :duree_garanti, :etat_garanti)";
					$qry=$db->prepare($sql);
					$qry->execute(array(':site'=>$site,':code'=>$code, ':equipement'=>$equipement, ':numero_serie'=>$numero_serie, ':repere'=>$repere,':date_installation'=>$date_installation,':duree_garanti'=>$duree_garanti,':etat_garanti'=>$etat_garanti));
																														}else{
																																	$sql="UPDATE video SET site=?, code=?, equipement=?, numero_serie=?, repere=?, date_installation=?, duree_garanti=?, etat_garanti=? where id=?";
																																	$qry=$db->prepare($sql);
			$qry->execute(array($site, $code, $equipement, $numero_serie, $repere, $date_installation, $duree_garanti, $etat_garanti, $id));
	}

	echo "<script language='javascript' type='text/javascript'>alert('Mise à jour ok!!!');</script>";
	echo "<script language='javascript' type='text/javascript'>window.open('video.php','_self')</script>";

?>
