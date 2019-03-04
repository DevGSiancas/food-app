<?php

header('Content-Type: application/json');

$request_error = array(
  "error" => 1 ,
  "description" => "Post method only"
);

$conexion_error = array(
  "error" => 1 ,
  "description" => "Couldn't connect to DB"
);

$login_success = array(
  "error" => 0 ,
  "description" => "Successfully logged in"
);


if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(isset($_POST["user"]) && isset($_POST["pass"])){

      echo json_encode($login_success);

  }else{}

}else{}










?>
