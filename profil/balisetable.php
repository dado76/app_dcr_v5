<html>
<head>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<?php require_once ("../dbconnection.php"); /* REQUIS POUR ACCES BDDD */
	$pnum="";  /* ON MET LES VARIABLE A  */

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

	/* SI ppid exist */

		if(isset($_GET['ppid'])){	/* boucle 1 */


			$ppid = $_GET['ppid'];
			$sqlLoader="Select from carte_sims where id=?";
			$resLoader=$db->prepare($sqlLoader);
			$resLoader->execute(array($ppid));



			while($rowLoader = $resLoader->fetch(PDO::FETCH_ASSOC)){ 	/* boucle 2 */



				$pnum=$rowLoader['id'];
				$codification=$rowLoader['codification'];
				$sim=$rowLoader['sim'];
				$balise=$rowLoader['balise'];
				$telephone=$rowLoader['telephone'];
				$IDPORT=$rowLoader['IDPORT'];
				$immatriculation=$rowLoader['immatriculation'];
				$statut=$rowLoader['statut'];
				$RFID=$rowLoader['RFID'];
				$navigation=$rowLoader['navigation'];
				$LC=$rowLoader['LC'];
				$pesee=$rowLoader['pesee'];
				$origin=$rowLoader['origin'];


			}/* FIN  boucle 1 */
	}/* FIN  boucle 2 */
?>

<?php
					$sql="Select * from carte_sims";
					$res=$db->prepare($sql);
					$res->execute();
					$str="<div class='demo_jui'><table cellpadding='0' cellspacing='0' border='0' class='display' id='tbl' class='jtable'>";
					$str.="<thead><tr>

					  <th>ID</th>
															<th>Codification</th>
															<th>Carte sims</th>
															<th>N/S Balise</th>
															<th>N° Telephone</th>
															<th>ID et Port</th>
															<th>Immatriculation</th>
													    <th>Statut</th>
															<th>RFID</th>
															<th>Navigation</th>
															<th>Leve Conteneur</th>
															<th>Pesee embarquee</th>
															<th>Nom d'ogirine</th>
															<th>Action</th>
															</tr>
															</thead>
															<tbody>";
						while($row = $res->fetch(PDO::FETCH_ASSOC)){
							$str.="<tr><td>".$row['id']."</td>";
							$str.="<td>".$row['codification']."</td>";
							$str.="<td>".$row['sim']."</td>";
  						$str.="<td>".$row['balise']."</td>";
							$str.="<td>".$row['telephone']."</td>";
							$str.="<td>".$row['IDPORT']."</td>";
							$str.="<td>".$row['immatriculation']."</td>";
							$str.="<td>".$row['statut']."</td>";
							$str.="<td>".$row['RFID']."</td>";
							$str.="<td>".$row['navigation']."</td>";
							$str.="<td>".$row['LC']."</td>";
							$str.="<td>".$row['pesee']."</td>";
							$str.="<td>".$row['origin']."</td>";
							$str.="<td><center><a class='fancybox fancybox.ajax' href='addbalise.php?ppid=".$row['id']."' onclick='return update()'><img src = '../images/edit-icon.png' height='30' width='30' alt = 'edit' title = 'edit'/></a><a class='fancybox fancybox.ajax' href='viewbalise.php?pid=".$row['id']."' onclick='return update()' ><img src = '../images/view.png' height='30' width='30' alt = 'view' title = 'voir'/></a><a href='delbalise.php?pid=".$row['id']."' onclick='return bura()' ><img src = '../images/edit_delete.png' height='30' width='30' alt = 'delete' title = 'delete'/></a></center></td></tr>";

						}
						echo $str;

						echo "</tbody></table></div>";
                ?>


</body>
</html>
