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

    <form>
      <div class="title">
        <h1>Registro</h1><span></span>
      </div>
      <label for="username">Correo</label>
      <input type="email" placeholder="correo@ejemplo.com" maxlength="45" class="username" required>

      <label for="username">Patron</label>
      <div class="pattern">
        <span class="pttrn" data-val="aa11"></span>
        <span class="pttrn" data-val="aa12"></span>
        <span class="pttrn" data-val="aa13"></span>
        <span class="pttrn" data-val="aa14"></span>
        <br>
        <span class="pttrn" data-val="ab21"></span>
        <span class="pttrn" data-val="ab22"></span>
        <span class="pttrn" data-val="ab23"></span>
        <span class="pttrn" data-val="ab24"></span>
        <br>
        <span class="pttrn" data-val="bc11"></span>
        <span class="pttrn" data-val="bc12"></span>
        <span class="pttrn" data-val="bc13"></span>
        <span class="pttrn" data-val="bc14"></span>
        <br>
        <span class="pttrn" data-val="bb11"></span>
        <span class="pttrn" data-val="bb12"></span>
        <span class="pttrn" data-val="cc11"></span>
        <span class="pttrn" data-val="cc12"></span>
      </div>

      <div class="error-message"></div>

      <div class="footer">
        <span class="reset">Cancelar</span>
        <input type="submit" value="Listo" class="register">
      </div>

    </form>



  </div>

  <script src="js/jquery-min.js" type="text/javascript"></script>
  <script src="js/global.1.0.0.js" type="text/javascript"></script>
  <script src="js/register.1.0.0.js" type="text/javascript"></script>
</body>
</html>
