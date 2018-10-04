
<?php


?>

<?php require_once ("../dbconnection.php"); /* REQUIS POUR ACCES BDDD */
	$pnum="";  /* ON MET LES VARIABLE A  */


		$codification="";
		$sim="";
		$radio="";
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
			$sqlLoader="Select from radio where id=?";
			$resLoader=$db->prepare($sqlLoader);
			$resLoader->execute(array($ppid));



			while($rowLoader = $resLoader->fetch(PDO::FETCH_ASSOC)){ 	/* boucle 2 */




								$pnum=$rowLoader['id'];
									$numero_appel=$rowLoader['numero_appel'];
									$codification=$rowLoader['codification'];
									$numero_serie=$rowLoader['numero_serie'];
									$type=$rowLoader['type'];
									$statut=$rowLoader['statut'];
									$modele=$rowLoader['modele'];



			}/* FIN  boucle 1 */
	}/* FIN  boucle 2 */
?>

<?php
					$sql="Select * from radio";
					$res=$db->prepare($sql);
					$res->execute();
					$str="<div class='demo_jui'><table cellpadding='0' cellspacing='0' border='0' class='display' id='tbl' class='jtable'>";
					$str.="<thead><tr><th>ID</th><th>N°Appel</th><th>Codification</th><th>N°serie</th><th>Type de radio</th><th>Statut</th><th>Modele</th><th>Action</th></tr></thead><tbody>";

						while($row = $res->fetch(PDO::FETCH_ASSOC)){
							$str.="<tr><td><center>".$row['id']."</center></td>";
							$str.="<td>".$row['numero_appel']."</td>";
							$str.="<td>".$row['codification']."</td>";
							$str.="<td>".$row['numero_serie']."</td>";
							$str.="<td>".$row['type']."</td>";
							$str.="<td>".$row['statut']."</td>";
							$str.="<td>".$row['modele']."</td>";

									$str.="<td><center><a class='fancybox fancybox.ajax' href='addradio.php?ppid=".$row['id']."' onclick='return update()'><img src = '../images/edit-icon.png' height='30' width='30' alt = 'edit' title = 'edit'/></a><a class='fancybox fancybox.ajax' href='viewradio.php?pid=".$row['id']."' onclick='return update()' ><img src = '../images/view.png' height='30' width='30' alt = 'view' title = 'voir'/></a><a href='delradio.php?pid=".$row['id']."' onclick='return bura()' ><img src = '../images/edit_delete.png' height='30' width='30' alt = 'delete' title = 'delete'/></a></center></td></tr>";
						}
						echo $str;

						echo "</tbody></table></div>";
                ?>


</body>
</html>
