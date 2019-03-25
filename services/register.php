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

$empty_error = array(
  "error" => 1 ,
  "description" => "Couldn't connect to DB"
);

$login_success = array(
  "error" => 0 ,
  "description" => "Successfully logged in"
);

if($_SERVER["REQUESTED_METHOD"] == "POST"){

    if(!empty()){

      require_once("php/db_connection.php");


    }

}

?>
