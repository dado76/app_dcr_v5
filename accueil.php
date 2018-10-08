<style>



.form-style-9{

    max-width: 450px;

    background: #FAFAFA;

    padding: 30px;



    box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);

    border-radius: 10px;

    border: 6px solid #005B9E;

    float: left;

    margin-top: 5%;
    margin-left: 2%;
}

.form-style-9 ul{

    padding:0;

    margin:0;

    list-style:none;

}

.form-style-9 ul li{

    display: block;

    margin-bottom: 10px;

    min-height: 35px;

}

.form-style-9 ul li  .field-style{

    box-sizing: border-box;

    -webkit-box-sizing: border-box;

    -moz-box-sizing: border-box;

    padding: 8px;

    outline: none;

    border: 1px solid #B0CFE0;

    -webkit-transition: all 0.30s ease-in-out;

    -moz-transition: all 0.30s ease-in-out;

    -ms-transition: all 0.30s ease-in-out;

    -o-transition: all 0.30s ease-in-out;



}.form-style-9 ul li  .field-style:focus{

    box-shadow: 0 0 5px #B0CFE0;

    border:1px solid #B0CFE0;

}

.form-style-9 ul li .field-split{

    width: 49%;

}

.form-style-9 ul li .field-full{

    width: 100%;

}

.form-style-9 ul li input.align-left{

    float:left;

}

.form-style-9 ul li input.align-right{

    float:right;

}

.form-style-9 ul li textarea{

    width: 100%;

    height: 100px;

}

.form-style-9 ul li input[type="button"],

.form-style-9 ul li input[type="submit"] {

    -moz-box-shadow: inset 0px 1px 0px 0px #3985B1;

    -webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;

    box-shadow: inset 0px 1px 0px 0px #3985B1;

    background-color: #005B9E;

    border: 1px solid #17445E;

    display: inline-block;

    cursor: pointer;

    color: #FFFFFF;

    padding: 8px 18px;

    text-decoration: none;

    font: 12px Arial, Helvetica, sans-serif;

}

.form-style-9 ul li input[type="button"]:hover,

.form-style-9 ul li input[type="submit"]:hover {

    background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);

    background-color: #28739E;

}

</style>
<?php
  $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
  $bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
$sql = "SELECT * FROM carte_sims";
$req = $bdd->prepare($sql);
$req->execute();
$array = $req->fetchALL();
$nb = count($array);
?>
<?php
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
$sql1 = "SELECT * FROM carte_sims WHERE statut='EN SERVICE'";
$req1 = $bdd->prepare($sql1);
$req1->execute();
$array1 = $req1->fetchALL();
$nb1 = count($array1);
?>
<?php
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
$sql2 = "SELECT * FROM carte_sims WHERE statut='EN STOCK'";
$req2 = $bdd->prepare($sql2);
$req2->execute();
$array2 = $req2->fetchALL();
$nb2 = count($array2);
?>
<?php
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
$sql3 = "SELECT * FROM carte_sims WHERE LC='TERBERG'";
$req3 = $bdd->prepare($sql3);
$req3->execute();
$array3 = $req3->fetchALL();
$nb3 = count($array3);
?>
<?php
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=localhost;dbname=dcr_info', 'root', '', $pdo_options);
$sql4 = "SELECT * FROM carte_sims WHERE RFID='OUI'";
$req4 = $bdd->prepare($sql4);
$req4->execute();
$array4 = $req4->fetchALL();
$nb4 = count($array4);
?>
<form class="form-style-9">

<ul>

<li>
<center>
<h2>
Balise  :

</h2>
</center>
<center>


</li>

<li>

  Nombres total : <?php echo $nb ?>

  <br>

En fonction : <?php echo $nb1 ?>

  <br>

Equipé RFID : <?php echo $nb2 ?>
<br>

En stock : <?php echo $nb4 ?>
<br>

Equipé LC terberg : <?php echo $nb3 ?>
</li>

<li>



<li>
</center>
<center>
<input type="submit" value="Liste des balise" />
</center>
</li>

</ul>

</form>



<form class="form-style-9">

<ul>

<li>
<center>
<h2>
Radio :

</h2>
</center>
<center>


</li>

<li>

  Nombres total :

  <br>

Nombre de radio fixe :

  <br>

Nombre de radio portatif :

<br>

En fonction :
<br>

En stock :
</li>

<li>



<li>
</center>
<center>
<input type="submit" value="Liste des radio" />
</center>
</li>

</ul>

</form>

<form class="form-style-9">

<ul>

<li>
<center>
<h2>
Video protection :

</h2>
</center>
<center>


</li>

<li>

  Nombres de site :

  <br>

Nombre de capteur :

  <br>

Nombre de caméra :

<br>

En fonction :
<br>

En stock :
</li>

<li>



<li>
</center>
<center>
<input type="submit" value="Equipements de video protection" />
</center>
</li>

</ul>

</form>


<form class="form-style-9">

<ul>

<li>
<center>
<h2>
Benne à ordure (BOM):

</h2>
</center>
<center>


</li>

<li>

  Nombres total :

  <br>

Nombre de radio fixe :

  <br>

Nombre de radio portatif :

<br>

En fonction :
<br>

En stock :
</li>

<li>



<li>
</center>
<center>
<input type="submit" value="Liste des radio" />
</center>
</li>

</ul>

</form>


</div>
