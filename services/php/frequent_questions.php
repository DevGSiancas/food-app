<?php

class FrequentQuestions{

  function getQuestions($restaurant_id , $connection){

    $statement = "SELECT * FROM frequent_questions JOIN users ON WHERE question_restaurant_id = '$restaurant_id' ORDER BY question_date DESC LIMIT 15";


  }


  function loadMoreQuestions($restaurant_id , $last_id , $connection){

    $statement = "SELECT * FROM frequent_questions WHERE question_restaurant_id = '$restaurant_id' AND question_id < $last_id ORDER BY question_date DESC LIMIT 15";
  }

}


?>
