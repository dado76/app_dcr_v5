

<?php

 try
 {
		 $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		 $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
 $ppid=$_REQUEST['pid'];
 $request= $bdd->prepare('SELECT * FROM video WHERE id = :id');
 $response = $request->execute(array('id' => $ppid));
 $donnees = $request->fetch();
 ?>






	 <form  method="post" action="">


<center>
<button class="myButton" value="Retour" id="myButton">
		<h1><?php echo  $donnees['equipement']; ?></h1></th></button></center>










 </div>

</div>

</body>

</html>

<?php
$request->closeCursor();
}
catch(Exception $e)
{
	 die('Erreur : '.$e->getMessage());
}
?>
<form method="post" name="frmStudent" action="savevideo.php">
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
		<center><input type="submit" class="myButton" value="Retour" id="myButton"  class="fancybox fancybox.ajax"/></center>
</form>
<body>
</body>
</html>
