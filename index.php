<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Food App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/global.1.0.0.css">
  <link rel="stylesheet" href="css/index.1.0.0.css">

  <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
</head>
<body class="indexpg">

  <?php require_once("includes/header.php"); ?>

  <br><br><br><br>

  <div class="title">
    <h1>Aprovecha nuestras promos!</h1>
    <span></span>
  </div>

  <div class="promo-slider">
    <img src="images/promo-1.png" height="140">
    <img src="images/promo-1.png" height="140">
    <img src="images/promo-1.png" height="140">
    <img src="images/promo-1.png" height="140">
    <img src="images/promo-1.png" height="140">
  </div>

  <div class="title curl">
    <h1>Menú del día</h1>
    <span></span>
  </div>

  <div class="menu-post bg1">
    <label>Desayunos</label>
    <p>Te mostramos más de 150 opciones de desayuno serca de tu oficina</p>
    <a href="#">Ingresar</a>
  </div>

  <div class="title">
    <h1>Como funciona?</h1>
    <span></span>
  </div>


  <script src="js/jquery-min.js" type="text/javascript"></script>
  <script src="js/jquery-ui.js" type="text/javascript"></script>
  <script src="js/index.1.0.0.js" type="text/javascript"></script>

</body>
</html>
