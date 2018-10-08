
<?php
require('../dbconnection.php');


?>

<?php require_once ("../dbconnection.php");
$ppid="";
$site="";
$code="";
$equipement="";
$numero_serie="";
$repere="";
$date_installation="";
$duree_garanti="";
$etat_garanti="";


		if(isset($_GET['ppid'])){
			$ppid = $_GET['ppid'];
			$sqlLoader="Select from video where id=?";
			$resLoader=$db->prepare($sqlLoader);
			$resLoader->execute(array($ppid));
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ajouter un equipement</title>

</head>
<?php
	$sqladd="Select * from video where id=?";
	$resadd=$db->prepare($sqladd);
	$resadd->execute(array($ppid));
		while($rowadd = $resadd->fetch(PDO::FETCH_ASSOC)){
		$pnum=$rowadd['id'];

		$pnum=$rowadd['id'];
		$site=$rowadd['site'];
		$code=$rowadd['code'];
		$equipement=$rowadd['equipement'];
		$numero_serie=$rowadd['numero_serie'];
		$repere=$rowadd['repere'];
		$date_installation=$rowadd['date_installation'];
		$duree_garanti=$rowadd['duree_garanti'];
		$etat_garanti=$rowadd['etat_garanti'];

	}





?>
    <form method="post" name="frmStudent" action="savevideo.php">

			<center>
			<button class="myButton" value="Retour" id="myButton">
					<h1>equipement du <?php  echo $site; ?></h1></th></button></center>

    <input type="hidden" name="pid" value="<?php echo $ppid; ?>"/>
        <table>

					<tr><th>site:</th><br><td><input type="text" name="site" required="required" value="<?php echo $site; ?>"/></td></tr>
					<tr><th>code:</th><td><input type="text" name="code"  value="<?php echo $code; ?>"/></td></tr>
					<tr><th>equipement:</th><td><input type="text" name="equipement"  value="<?php echo $equipement; ?>"/></td></tr>
					<tr><th>numero_serie:</th><td><input type="text" name="numero_serie" value="<?php echo $numero_serie; ?>"/></td></tr>
          <tr><th>repere:</th><td><input type="text" name="repere" value="<?php echo $repere; ?>"/></td></tr>
	        <tr><th>date_installation:</th><td><input type="text" name="date_installation" value="<?php echo $date_installation; ?>"/></td></tr>
	      	<tr><th>duree_garanti:</th><td><input type="text" name="duree_garanti" value="<?php echo $duree_garanti; ?>"/></td></tr>
	        <tr><th>etat_garanti:</th><td><input type="text" name="etat_garanti" value="<?php echo $etat_garanti; ?>"/></td></tr>

			  </table>

				<br>
				<br>
				<center><input type="submit" class="myButton" value="Sauvegarder" id="myButton"  class="fancybox fancybox.ajax"/></center>
    </form>
<body>
</body>
</html>
