<?php

class ConnectDB{

  private $username = "";
  private $password = "";
  private $database = "";
  private $hostname = "localhost";

  $conection_error = array(
    "error" => 1,
    "description" =>
  );

  public function create_connection(){

    $connect = mysqli_connect($this->hostname , $this->username , $this->password , $this->database);

    if (mysqli_connect_errno()){
      die(json_encode($conection_error));
    }

    return $connect;    

  }

}

?>
