<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Food App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/global.1.0.0.css">
  <link rel="stylesheet" href="css/register.1.0.0.css">
</head>
<body class="registerpg">

  <?php require_once("includes/header.php"); ?>

  <div class="content">

    <h2>Bienvenido</h2>

    <form>
      <label for="username">Correo</label>
      <input type="email" placeholder="ejemplo@correo.com" id="username" maxlength="40" required>
      <label for="password">Contraseña</label>
      <input type="password" placeholder="Contraseña" id="password" maxlength="30" required>
      <input type="submit" value="Ingresar" id="login-btn">
      <a href="javascript:void(0)" class="password-forgot">Olvidaste tu contraseña?</a>
    </form>

    <div class="hr-custom dark-green">
      <img src="images/hr-curl-left.png" height="10">
      Crear cuenta
      <img src="images/hr-curl-right.png" height="10">
    </div>

    <a href="#" class="register-account">
      Registrarme
    </a><br>

    <a href="#" class="register-facebook">
      <img src="images/facebook-btn.png" alt="facebook button" width="221">
    </a><br>

    <a href="#" class="register-company">
      Crear perfil de empresa
    </a>

  </div>

  <script src="js/jquery-min.js" type="text/javascript"></script>
  <script src="js/global.1.0.0.js" type="text/javascript"></script>
  <script src="js/login.1.0.0.js" type="text/javascript"></script>
</body>
</html>
