
<?php
require('../dbconnection.php');


?>

<?php require_once ("../dbconnection.php");
$ppid="";
$codification="";
$sim="";
$balise="";
$telephone="";
$IDPORT="";
$immatriculation="";
$statut="";
$RFID="";
$navigation="";
$LC="";
$pesee="";
$origin="";

		if(isset($_GET['ppid'])){
			$ppid = $_GET['ppid'];
			$sqlLoader="Select from carte_sims where id=?";
			$resLoader=$db->prepare($sqlLoader);
			$resLoader->execute(array($ppid));
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ajouter une balise</title>

</head>
<?php
	$sqladd="Select * from carte_sims where id=?";
	$resadd=$db->prepare($sqladd);
	$resadd->execute(array($ppid));
		while($rowadd = $resadd->fetch(PDO::FETCH_ASSOC)){
		$pnum=$rowadd['id'];

		$pnum=$rowadd['id'];
		$codification=$rowadd['codification'];
		$sim=$rowadd['sim'];
		$balise=$rowadd['balise'];
		$telephone=$rowadd['telephone'];
		$IDPORT=$rowadd['IDPORT'];
		$immatriculation=$rowadd['immatriculation'];
		$statut=$rowadd['statut'];
		$RFID=$rowadd['RFID'];
		$navigation=$rowadd['navigation'];
		$LC=$rowadd['LC'];
		$pesee=$rowadd['pesee'];
		$origin=$rowadd['origin'];
	}





?>
    <form method="post" name="frmStudent" action="savebalise.php">

			<center>
			<button class="myButton" value="Retour" id="myButton">
					<h1>Balise du <?php  echo $codification; ?></h1></th></button></center>

    <input type="hidden" name="pid" value="<?php echo $ppid; ?>"/>
        <table>

					<tr><th>codification:</th><br><td><input type="text" name="codification" required="required" value="<?php echo $codification; ?>"/></td></tr>
					<tr><th>sim:</th><td><input type="text" name="sim"  value="<?php echo $sim; ?>"/></td></tr>
					<tr><th>balise:</th><td><input type="text" name="balise"  value="<?php echo $balise; ?>"/></td></tr>
					<tr><th>telephone:</th><td><input type="text" name="telephone" value="<?php echo $telephone; ?>"/></td></tr>
          <tr><th>IDPORT:</th><td><input type="text" name="IDPORT" value="<?php echo $IDPORT; ?>"/></td></tr>
	        <tr><th>immatriculation:</th><td><input type="text" name="immatriculation" value="<?php echo $immatriculation; ?>"/></td></tr>
	      	<tr><th>statut:</th><td><input type="text" name="statut" value="<?php echo $statut; ?>"/></td></tr>
	        <tr><th>RFID:</th><td><input type="text" name="RFID" value="<?php echo $RFID; ?>"/></td></tr>
	        <tr><th>navigation:</th><td><input type="text" name="navigation" value="<?php echo $navigation; ?>"/></td></tr>
					<tr><th>LC:</th><td><input type="text" name="LC" value="<?php echo $LC; ?>"/></td></tr>
					<tr><th>pesee:</th><td><input type="text" name="pesee" value="<?php echo $pesee; ?>"/></td></tr>
					<tr><th>origin:</th><td><input type="text" name="origin" value="<?php echo $origin; ?>"/></td></tr>

			  </table>

				<br>
				<br>
				<center><input type="submit" class="myButton" value="Sauvegarder" id="myButton"  class="fancybox fancybox.ajax"/></center>
    </form>
<body>
</body>
</html>
