<?php

header('Content-Type: application/json');

class ConnectDB{

  // database variables
  private $username = "app_user";
  private $password = "0HCL5kv2hOyJCQgQ";
  private $database = "food_app";
  private $hostname = "localhost";

  // array response message
  private $conection_error = array(
    "error" => 1,
    "description" => "could not connect to database"
  );

  function __construct(){
    $connection = mysqli_connect($this->hostname , $this->username , $this->password , $this->database);
    if (mysqli_connect_errno()){
      die(json_encode($this->conection_error));
    }
    return $connection;
  }

}

?>
