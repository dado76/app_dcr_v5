
<?php

 try
 {
		 $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		 $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
 $ppid=$_REQUEST['pid'];
 $request= $bdd->prepare('SELECT * FROM radio WHERE id = :id');
 $response = $request->execute(array('id' => $ppid));
 $donnees = $request->fetch();
 ?>






	 <form  method="post" action="">


<center>
<button class="myButton" value="Retour" id="myButton">
		<h1>Radio du <?php echo  $donnees['codification']; ?></h1></th></button></center>










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
<form method="post" name="frmStudent" action="savebalise.php">
<input type="hidden" name="pid" value="<?php echo $ppid; ?>"/>
		<table>

			<tr><td>Numéro d'appel :</td><td><?php echo  $donnees['numero_appel']; ?></td></tr>
			<tr><td>Codification :</td><td><?php echo  $donnees['codification']; ?></td></tr>
			<tr><td>Numéro de série :</td><td><?php echo  $donnees['numero_serie']; ?></td></tr>
			<tr><td>Type :</td><td><?php echo  $donnees['type']; ?></td></tr>
			<tr><td>Statut :</td><td><?php echo  $donnees['statut']; ?></td></tr>
			<tr><td>Modéle :</td><td><?php echo  $donnees['modele']; ?></td></tr>


		</table>

		<br>
		<br>
		<center><input type="submit" class="myButton" value="Retour" id="myButton"  class="fancybox fancybox.ajax"/></center>
</form>
<body>
</body>
</html>
