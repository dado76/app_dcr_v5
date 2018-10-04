
<?php
require('../dbconnection.php');
require('../db.php');
include("../auth.php");

?>
<?php require_once ("../dbconnection.php");
	$ppid="";  /* ON MET LES VARIABLE A  */
		$numero_appel=""; /* ON MET LES VARIABLE A  */
	$codification="";/* ON MET LES VARIABLE A  */
	$numero_serie="";/* ON MET LES VARIABLE A  */
	$type="";/* ON MET LES VARIABLE A  */
		$statut="";/* ON MET LES VARIABLE A  */
		$modele="";/* ON MET LES VARIABLE A  */

		if(isset($_GET['ppid'])){
			$ppid = $_GET['ppid'];
			$sqlLoader="Select from radio where id=?";
			$resLoader=$db->prepare($sqlLoader);
			$resLoader->execute(array($ppid));
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ajouter radio</title>

</head>
<?php
	$sqladd="Select * from radio where id=?";
	$resadd=$db->prepare($sqladd);
	$resadd->execute(array($ppid));
		while($rowadd = $resadd->fetch(PDO::FETCH_ASSOC)){
		$pnum=$rowadd['id'];

				$numero_appel=$rowadd['numero_appel'];
				$codification=$rowadd['codification'];
				$numero_serie=$rowadd['numero_serie'];
				$type=$rowadd['type'];
				$statut=$rowadd['statut'];
				$modele=$rowadd['modele'];
	}





?>
    <form method="post" name="frmStudent" action="saveradio.php">
    <input type="hidden" name="pid" value="<?php echo $ppid; ?>"/>
        <table>
            <tr><td>Numéro d'appel:</td><td><input type="text" name="numero_appel" required="required" value="<?php echo $numero_appel; ?>"/></td></tr>
            <tr><td>Codification:</td><td><input type="text" name="codification"  value="<?php echo $codification; ?>"/></td></tr>
            <tr><td>Numéro de série:</td><td><input type="text" name="numero_serie"  value="<?php echo $numero_serie; ?>"/></td></tr>
		    <tr><td>Type:</td><td><input type="text" name="type" value="<?php echo $type; ?>"/></td></tr>
			<tr><td>Statut:</td><td><input type="text" name="statut" value="<?php echo $statut; ?>"/></td></tr>
			<tr><td>Modele:</td><td><input type="text" name="modele" value="<?php echo $modele ?>"/></td></tr>

        </table>
				<br>
				<br>
				<center><input type="submit" class="myButton" value="Sauvegarder"/></center>
    </form>
<body>
</body>
</html>
