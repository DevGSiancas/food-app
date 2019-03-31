<?php

class UserFunctions{

  function userExists($email , $connection){

    $statement = "SELECT * FROM users WHERE username = '$email' LIMIT 1";

    if($query = mysqli_query($connection , $statement)){

      if(mysqli_num_rows($query)){

        return mysqli_fetch_assoc($query);

      }else{return "noexists";}

    }else{return "error";}

  }

  function getUserData($userid , $connection){

    $statement = "SELECT * FROM users WHERE user_id = '$userid' LIMIT 1";

    if($query = mysqli_query($connection , $statement)){

        return mysqli_fetch_assoc($query);

    }else{return "error";}

  }


  function createAccount($username , $hash , $connection){

    $statement = "INSERT INTO users VALUES ('$username' , '$hash' , NULL , NULL , NULL , NOW() , NULL)";

    if(!mysqli_query($connection , $statement)){
      return "error";
    }
  }

  function deleteJustCreatedAccount($userid , $connection){

    $statement = "DELETE FROM users WHERE user_id = '$userid' LIMIT 1";

    if(!mysqli_query($connection , $statement)){
      return "error";
    }
  }

  function updateUserInfo($data , $type , $userid , $connection){

    $statement = "UPDATE users SET ".$type." = '$data' WHERE user_id = '$userid' LIMIT 1";

    if(!mysqli_query($connection , $statement)){
      return "error";
    }
  }


}


?>
