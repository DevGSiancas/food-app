<?php
session_start();
session_destroy();

header("location: /food-app");

die("Invalid Page");

?>
