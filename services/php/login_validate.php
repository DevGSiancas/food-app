<?php
session_start();

if(isset($_SESSION["logged_in"])){
  if($_SESSION["logged_in"]){
      header("location: /food-app");
  }
}


?>
