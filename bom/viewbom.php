
<?php

 try
 {
		 $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		 $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
 $ppid=$_REQUEST['pid'];
 $request= $bdd->prepare('SELECT * FROM carte_sims WHERE id = :id');
 $response = $request->execute(array('id' => $ppid));
 $donnees = $request->fetch();
 ?>






	 <form  method="post" action="">


<center>
<button class="myButton" value="Retour" id="myButton">
		<h1>Balise du <?php echo  $donnees['codification']; ?></h1></th></button></center>










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

			<tr><td>codification:</td><td><?php echo  $donnees['codification']; ?></td></tr>
			<tr><td>sim:</td><td><?php echo  $donnees['sim']; ?></td></tr>
			<tr><td>balise:</td><td><?php echo  $donnees['balise']; ?></td></tr>
			<tr><td>telephone:</td><td><?php echo  $donnees['telephone']; ?></td></tr>
			<tr><td>IDPORT:</td><td><?php echo  $donnees['IDPORT']; ?></td></tr>
			<tr><td>immatriculation:</td><td><?php echo  $donnees['immatriculation']; ?></td></tr>
			<tr><td>statut:</td><td><?php echo  $donnees['statut']; ?></td></tr>
			<tr><td>RFID:</td><td><?php echo  $donnees['RFID']; ?></td></tr>
			<tr><td>navigation:</td><td><?php echo  $donnees['navigation']; ?></td></tr>
			<tr><td>LC:</td><td><?php echo  $donnees['LC']; ?></td></tr>
			<tr><td>pesee:</td><td><?php echo  $donnees['pesee']; ?></td></tr>
			<tr><td>origin:</td><td><?php echo  $donnees['origin']; ?></td></tr>

		</table>

		<br>
		<br>
		<center><input type="submit" class="myButton" value="Retour" id="myButton"  class="fancybox fancybox.ajax"/></center>
</form>
<body>
</body>
</html>
