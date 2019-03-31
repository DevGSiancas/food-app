<?php require_once("../services/php/user_login_validate.php");?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Food App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/global.1.0.0.css">
  <link rel="stylesheet" href="../css/profile.1.0.0.css">
</head>
<body class="profilepg">

  <?php require_once("../includes/header.php"); ?>

  <div class="content">

    <div class="title left">
      <h1><br>Perfil</h1>
    </div>

    <ul>
      <li class="ttl profile">Perfil</li>
      <li class="sub">
        <a href="personal-info">Datos personales</a>
      </li>
      <li class="sub">
        <a href="change-pass">Cambiar contraseña</a>
      </li>
      <br>
      <li class="ttl payment">Métodos de pago</li>
      <li class="sub">
        <a href="cards">Tarjetas de crédito</a>
      </li>
    </ul>


  </div>

  <script src="../js/jquery-min.js" type="text/javascript"></script>
  <script src="../js/global.1.0.0.js" type="text/javascript"></script>
  <script src="../js/profile.1.0.0.js" type="text/javascript"></script>
</body>
</html>
