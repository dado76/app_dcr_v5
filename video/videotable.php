<html>
<head>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<?php require_once ("../dbconnection.php"); /* REQUIS POUR ACCES BDDD */
	$pnum="";  /* ON MET LES VARIABLE A  */

	$site="";
	$code="";
	$equipement="";
	$numero_serie="";
	$repere="";
	$date_installation="";
	$duree_garanti="";
	$etat_garanti="";

	/* SI ppid exist */

		if(isset($_GET['ppid'])){	/* boucle 1 */


			$ppid = $_GET['ppid'];
			$sqlLoader="Select from video where id=?";
			$resLoader=$db->prepare($sqlLoader);
			$resLoader->execute(array($ppid));



			while($rowLoader = $resLoader->fetch(PDO::FETCH_ASSOC)){ 	/* boucle 2 */



				$pnum=$rowLoader['id'];
				$site=$rowLoader['site'];
				$code=$rowLoader['code'];
				$equipement=$rowLoader['equipement'];
				$numero_serie=$rowLoader['numero_serie'];
				$repere=$rowLoader['repere'];
				$date_installation=$rowLoader['date_installation'];
				$duree_garanti=$rowLoader['duree_garanti'];
				$etat_garanti=$rowLoader['etat_garanti'];



			}/* FIN  boucle 1 */
	}/* FIN  boucle 2 */
?>

<?php
					$sql="Select * from video";
					$res=$db->prepare($sql);
					$res->execute();
					$str="<div class='demo_jui'><table cellpadding='0' cellspacing='0' border='0' class='display' id='tbl' class='jtable'>";
					$str.="<thead><tr>

					  <th>ID</th>
															<th>site</th>
															<th>code</th>
															<th>equipement</th>
															<th>N° numero_serie</th>
															<th>Repere</th>
															<th>date_installation</th>
													    <th>duree_garanti</th>
															<th>etat_garanti</th>

															<th>Action</th>
															</tr>
															</thead>
															<tbody>";
						while($row = $res->fetch(PDO::FETCH_ASSOC)){
							$str.="<tr><td>".$row['id']."</td>";
							$str.="<td>".$row['site']."</td>";
							$str.="<td>".$row['code']."</td>";
  						$str.="<td>".$row['equipement']."</td>";
							$str.="<td>".$row['numero_serie']."</td>";
							$str.="<td>".$row['repere']."</td>";
							$str.="<td>".$row['date_installation']."</td>";
							$str.="<td>".$row['duree_garanti']."</td>";
							$str.="<td>".$row['etat_garanti']."</td>";

							$str.="<td><center><a class='fancybox fancybox.ajax' href='addvideo.php?ppid=".$row['id']."' onclick='return update()'><img src = '../images/edit-icon.png' height='30' width='30' alt = 'edit' title = 'edit'/></a><a class='fancybox fancybox.ajax' href='viewvideo.php?pid=".$row['id']."' onclick='return update()' ><img src = '../images/view.png' height='30' width='30' alt = 'view' title = 'voir'/></a><a href='delvideo.php?pid=".$row['id']."' onclick='return bura()' ><img src = '../images/edit_delete.png' height='30' width='30' alt = 'delete' title = 'delete'/></a></center></td></tr>";

						}
						echo $str;

						echo "</tbody></table></div>";
                ?>


</body>
</html>
