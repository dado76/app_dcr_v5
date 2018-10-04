
<?php
require('../dbconnection.php');
require('../db.php');
include("../auth.php");

?>
<?php require_once ("../dbconnection.php"); /* REQUIS POUR ACCES BDDD */
	$pnum="";  /* ON MET LES VARIABLE A  */
		$numero_appel=""; /* ON MET LES VARIABLE A  */
	$codification="";/* ON MET LES VARIABLE A  */
	$numero_serie="";/* ON MET LES VARIABLE A  */
	$type="";/* ON MET LES VARIABLE A  */
		$statut="";/* ON MET LES VARIABLE A  */
		$modele="";/* ON MET LES VARIABLE A  */

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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TABLEAU RADIO</title>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../fancybox/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="../fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="../fancybox/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="../fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="../fancybox/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".fancybox").fancybox();
});
</script>
    <style type="text/css" title="currentStyle">
			@import "../css/demo_page.css";
			@import "../css/demo_table_jui.css";
			@import "../css/jquery-ui-1.8.4.custom.css";
		</style>
<script src="../js/jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			jQuery(document).ready(function() {
				oTable = jQuery('#tbl').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
								} );
				});
		</script>


</head>

<body>






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
							$str.="<td><center><a class='fancybox fancybox.ajax' href='addradio.php?ppid=".$row['id']."' onclick='return update()'><img src = '../images/edit-icon.png' height='30' width='30' alt = 'edit' title = 'edit'/></a><a href='delradio.php?pid=".$row['id']."' onclick='return bura()' ><img src = '../images/edit_delete.png' height='30' width='30' alt = 'delete' title = 'delete'/></a></center></td></tr>";
						}
						echo $str;
						echo "</tbody></table></div>";
                ?>


</body>
</html>
