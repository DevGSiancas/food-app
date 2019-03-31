<?php require_once("../services/php/user_login_validate.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Food App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/global.1.0.0.css">
  <link rel="stylesheet" href="../css/personal-profile.1.0.0.css">
</head>
<body class="personalinfopg">

  <?php
  require_once("../includes/header.php");
  require_once("../services/php/db_connection.php");
  require_once("../services/php/user_functions.php");

  $userid = mysqli_real_escape_string($connection , htmlspecialchars($_SESSION["user_id"]));

  $userObj = new UserFunctions();
  $userDato = $userObj->getUserData($userid , $connection);
  ?>

  <div class="content">
    <?php if($userDato != "error"){

      $name      = $userDato["name"];
      $last      = $userDato["lastname"];
      $email     = $userDato["username"];
      $telephone = $userDato["telephone"];

    ?>

      <div class="title left">
        <a href="javascript:void(0)" class="go-back"></a>
        <h1><br>Datos personales<br><br></h1>
      </div>

      <ul>
        <li class="ttl profile">Nombre</li>
        <li class="data">
          <input type="text" placeholder="Nombre" maxlength="40" value="<?php echo $name;?>" data-current="<?php echo $name;?>">
        </li>

        <li class="ttl profile">Apellido</li>
        <li class="data">
          <input type="text" placeholder="Apellido" maxlength="40" value="<?php echo $last;?>" data-current="<?php echo $last;?>">
        </li>

        <li class="ttl email">Correo</li>
        <li class="data">
          <input type="email" placeholder="Correo" maxlength="40" value="<?php echo $email;?>" data-current="<?php echo $email;?>">
        </li>

        <li class="ttl telephone">Telefono</li>
        <li class="data">
          <input type="telephone" placeholder="Telefono" maxlength="9" value="<?php echo $telephone;?>" data-current="<?php echo $telephone;?>">
        </li>

        <li class="ttl avatar">Avatar</li>
        <li class="data">Cambiar foto</li>
      </ul>

    <?php }else{ ?>

      <div class="title left">
        <h1><br>Error Conexion</h1>
      </div>

    <?php } ?>
  </div>

  <script src="../js/jquery-min.js" type="text/javascript"></script>
  <script src="../js/global.1.0.0.js" type="text/javascript"></script>
  <script src="../js/personal-profile.1.0.0.js" type="text/javascript"></script>
</body>
</html>
