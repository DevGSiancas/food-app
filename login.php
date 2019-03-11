<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Food App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/global.1.0.0.css">
  <link rel="stylesheet" href="css/login.1.0.0.css">
</head>
<body class="loginpg">

  <?php require_once("includes/header.php"); ?>

  <form>
    <label for="username">Correo</label>
    <input type="email" placeholder="ejemplo@correo.com" id="username" maxlength="40" required>
    <label for="password">Contraseña</label>
    <input type="password" placeholder="Contraseña" id="password" maxlength="30" required>
    <input type="submit" value="Ingresar" id="login-btn">
    <a href="javascript:void(0)" class="password-forgot">Olvidaste tu contraseña?</a>
  </form>

  <div class="">

  </div>

  <a href="#" class="register-account">
    Registrarme
  </a>

  <a href="#" class="register-facebook">
    <img src="images/facebook-btn.png" alt="facebook button" width="221">
  </a>

  <script src="js/jquery-min.js" type="text/javascript"></script>
  <script src="js/login.1.0.0.js" type="text/javascript"></script>

</body>
</html>
