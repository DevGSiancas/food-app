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



$request_error1 = array();

$request_error1["datos"] = $request_error;

echo json_encode($request_error1);
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//
//   echo json_encode($data);
//
// }else{}










?>
