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

$user_no_found = array(
  "error" => 1 ,
  "description" => "user was not found"
);

$wrong_passw = array(
  "error" => 1 ,
  "description" => "Wrong password"
);

$login_success = array(
  "error" => 0 ,
  "description" => "Successfully logged in"
);



if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(isset($_POST["user"]) && isset($_POST["pass"])){

      if(!empty($_POST["user"]) && !empty($_POST["pass"])){

        require_once("php/db_connection.php");

        //$connexion  = new ConnectDB();
        $username   = $_POST["user"];
        $password   = $_POST["pass"];

        $statement = "SELECT password FROM users WHERE username = '$username' LIMIT 1";

        if($query = mysqli_query($connection , $statement)){

          if(mysqli_num_rows($query)){

            $data = mysqli_fetch_assoc($query);
            $hash = $data["password"];

            if(password_verify($password , $hash)){

              $_SESSION["logged_in"] = true;
              
              echo json_encode($login_success);

            }else{echo json_encode($wrong_passw);}

          }else{echo json_encode($user_no_found);}

        }else{echo json_encode($query_error);}

      }else{echo json_encode($empty_error);}

  }else{echo json_encode($no_set_error);}

}else{echo json_encode($request_error);}










?>
