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

$error_folder = array(
  "error" => 1 ,
  "description" => "Could not create folder"
);

$query_error = array(
  "error" => 1 ,
  "description" => "There is a query error"
);

$no_register = array(
  "error" => 1 ,
  "description" => "Could not register"
);

$user_exists = array(
  "error" => 1 ,
  "description" => "user already exists"
);

$register_success = array(
  "error" => 0 ,
  "description" => "Successfully registered"
);



if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(isset($_POST["user"]) && isset($_POST["pass"])){

      if(!empty($_POST["user"]) && !empty($_POST["pass"])){

        require_once("php/db_connection.php");
        require_once("php/user_functions.php");

        $userObject = new UserFunctions();

        $username   = mysqli_real_escape_string($connection , htmlspecialchars($_POST["user"]));
        $password   = mysqli_real_escape_string($connection , htmlspecialchars($_POST["pass"]));

        $userRegister = $userObject->userExists($username , $connection);

        if($userRegister != "error"){

          if($userRegister == "noexists"){

            $hashpass      = password_hash($password , PASSWORD_BCRYPT);
            $createAccount = $userObject->createAccount($username , $hashpass , $connection);
            $userCreatedId = mysqli_insert_id($connection);

            if($createAccount != "error"){

              if(mkdir("../users/user" . $userCreatedId , 0777 , true)){

                $_SESSION["user_id"]   = $userCreatedId;
                $_SESSION["logged_in"] = true;
                $_SESSION["user_name"] = "Humano";

                echo json_encode($register_success);

               }else{

                 $userObject->deleteJustCreatedAccount($userCreatedId , $connection);
                 echo json_encode($error_folder);
               }

            }else{echo json_encode($no_register);}

          }else{echo json_encode($user_exists);}

        }else{echo json_encode($query_error);}

      }else{echo json_encode($empty_error);}

  }else{echo json_encode($no_set_error);}

}else{echo json_encode($request_error);}










?>
