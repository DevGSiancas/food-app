<?php

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

$user_no_found = array(
  "error" => 1 ,
  "description" => "Successfully logged in"
);

$login_success = array(
  "error" => 0 ,
  "description" => "Successfully logged in"
);



if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(isset($_POST["user"]) && isset($_POST["pass"])){

      if(!empty($_POST["user"]) && !empty($_POST["pass"])){

        require_once("php/db_connection.php");

        $connexion  = new ConnectDB();
        $username   = $_POST["user"];
        $password   = $_POST["pass"];

        $statement = "SELECT password FROM users WHERE username = '$username' LIMIT 1";

        if($query = mysqli_query($connexion , $statement)){

          if(mysqli_num_rows($query)){

            $data = mysqli_fetch_assoc($query);

            echo $data["password"];

          }else{print_r($user_no_found);}

        }else{print_r($query_error);}

      }else{print_r($empty_error);}

  }else{print_r($no_set_error);}

}else{print_r($request_error);}










?>
