
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/menu.css" />
        <link rel="stylesheet" href="../css/button.css" />
    <title>Accueil</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <! LOGO FONT AWESOME >
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> <! LOGO google material >

        </style>
  </head>
<body>




      <!DOCTYPE html>

      <?php
      require('../dbconnection.php');
      require('../db.php');


      ?>

      <div class="grid-container">
        <div class="menu">
    <?php  include("../menu.php");
?>

        </div>
        <div class="boddy">




          <?php
include("balisebutton.php");
          include("balisetable.php");  ?>



        </div>
      </div>
