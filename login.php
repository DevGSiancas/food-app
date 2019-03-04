<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Food App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/global.1.0.0.css">
  <link rel="stylesheet" href="css/login.1.0.0.css">
</head>
<body class="login-page">

  <?php require_once("includes/header.php"); ?>

  <form>
    <input type="email" placeholder="Correo" id="username" maxlength="40" required>
    <input type="password" placeholder="Contraseña" id="password" maxlength="30" required>
    <a href="javascript:void(0)">Olvidaste tu contraseña?</a>
    <input type="submit" value="Ingresar">
  </form>


  <script src="js/jquery-min.js" type="text/javascript"></script>
  <script src="js/jquery-ui.js" type="text/javascript"></script>
  <script src="js/index.1.0.0.js" type="text/javascript"></script>

</body>
</html>
