<?php require_once("services/php/user_login_validate.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Food App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/global.1.0.0.css">
  <link rel="stylesheet" href="css/questions.1.0.0.css">
</head>
<body class="questionspg">

  <?php
  require_once("includes/header.php");
  require_once("services/php/db_connection.php");
  require_once("services/php/user_functions.php");

  $userid = mysqli_real_escape_string($connection , htmlspecialchars($_SESSION["user_id"]));

  $userObj = new UserFunctions();
  $userDato = $userObj->getUserData($userid , $connection);
  ?>

  <div class="content">

  </div>

  <script src="js/jquery-min.js" type="text/javascript"></script>
  <script src="js/global.1.0.0.js" type="text/javascript"></script>
  <script src="js/questions.1.0.0.js" type="text/javascript"></script>
</body>
</html>
