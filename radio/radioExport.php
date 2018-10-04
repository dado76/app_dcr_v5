
<?php
require('../dbconnection.php');
require('../db.php');
include("../auth.php");

?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Page de test</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>


</head>



 <body>

  <div class="col-2">
  	<img  src="logo.png" alt="logo" height="78" width="60" >
		<header><h2>Direction Collecte et Recyclage <br>Gestion du matériel informatique</h2></header>

    <article><body>
	 <th><h1><a href="simadd.php"><font color="#0080FF">Ajouter</h1></th></a>


    <main class="content">

    <table id="empTable">




  <tr>
 <th><a href="sim.php">Num </th>

 <th><a class="link"  href="simSim.php">Codification</th>
 <th><a href="simBalise.php">NS</th>


  </tr>

 <?php
try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);


    // On recupere tout le contenu de la table news
$reponse = $bdd->query('SELECT * FROM radio ORDER BY Codification');

// On affiche le resultat
while ($donnees = $reponse->fetch())
{
?>
<tr class="newspaper-b">
<?php
    //On affiche les données dans le tableau
  echo "<td> $donnees[Num] </td>";
    echo "<td> $donnees[Codification] </td>";
    echo "<td> $donnees[NS] </td>";
      echo "<td> $donnees[ETAT] </td>";


	?>


	</tr>
	<?php

}
$reponse->closeCursor();
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>

</table>
<meta http-equiv="refresh" content="0;URL=radio.php">
</article>
    </main>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

  	<footer></footer></body>


    <script>
    $(document).ready(function () {
        $("#empTable").table2excel({
            filename: "radio.xls"
        });
    });
</script>
