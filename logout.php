<?php
session_start();
session_destroy();

header("location: /food_app");

die("Invalid Page");

?>
