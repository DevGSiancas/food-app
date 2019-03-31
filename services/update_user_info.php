<?php
session_start();

header('Content-Type: application/json');

$request_error = array(
  "error" => 1 ,
  "description" => "Post method only"
);

$no_set_error = array(
  "error" => 1 ,
  "description" => "Values not set"
);

$empty_error = array(
  "error" => 1 ,
  "description" => "At least one value is empty"
);

$query_error = array(
  "error" => 1 ,
  "description" => "There is a query error"
);

$update_success = array(
  "error" => 0 ,
  "description" => "Successfully updated"
);



if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(isset($_POST["data"]) && isset($_POST["type"])){

      if(!empty($_POST["data"]) && !empty($_POST["data"])){

        require_once("php/db_connection.php");
        require_once("php/user_functions.php");

        $userObject = new UserFunctions();

        $data       = mysqli_real_escape_string($connection , htmlspecialchars($_POST["data"]));
        $type       = mysqli_real_escape_string($connection , htmlspecialchars($_POST["type"]));
        $user       = mysqli_real_escape_string($connection , htmlspecialchars($_SESSION["user_id"]));

        $updateData = $userObject->updateUserInfo($data , $type , $user , $connection);

        if($updateData != "error"){

          echo json_encode($update_success);

        }else{echo json_encode($query_error);}

      }else{echo json_encode($empty_error);}

  }else{echo json_encode($no_set_error);}

}else{echo json_encode($request_error);}










?>
