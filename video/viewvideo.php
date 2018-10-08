
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
		<h1> <?php echo  $donnees['equipement']; ?></h1></th></button></center>










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

      <tr><td>site :</td><td><?php echo  $donnees['site']; ?></td></tr>
      <tr><td>Code :</td><td><?php echo  $donnees['code']; ?></td></tr>
      <tr><td>Equipement :</td><td><?php echo  $donnees['equipement']; ?></td></tr>
      <tr><td>Numéro de série :</td><td><?php echo  $donnees['numero_serie']; ?></td></tr>
      <tr><td>Repere :</td><td><?php echo  $donnees['repere']; ?></td></tr>
      <tr><td>date d'installation:</td><td><?php echo  $donnees['date_installation']; ?></td></tr>     
      <tr><td>duree garanti:</td><td><?php echo  $donnees['duree_garanti']; ?></td></tr>
      <tr><td>Etat de garanti :</td><td><?php echo  $donnees['etat_garanti']; ?></td></tr>


		</table>

		<br>
		<br>
		<center><input type="submit" class="myButton" value="Retour" id="myButton"  class="fancybox fancybox.ajax"/></center>
</form>
<body>
</body>
</html>
