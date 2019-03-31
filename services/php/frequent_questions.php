<?php

class FrequentQuestions{

  function getQuestions($connection){

    $statement = "SELECT * FROM frequent_questions JOIN users ON question_poster_id = user_id ORDER BY question_date DESC LIMIT 12";
    if($query = mysqli_query($connection , $statement)){
      if(mysqli_num_rows($query)){
        $content = "";
        while($data = mysqli_fetch_assoc($query)){
          $content .= '<div class="question-wrap">';
            $content .= '<p class="ask">'.$data["question_ask"].'</p>';
            $content .= '<p class="ans">'.$data["question_answer"].'</p>';
            $content .= '<span class="who">'.ucwords($data["name"]).' '.ucwords($data["lastname"]).'</span>';
            $content .= '<span class="when">'.date("d/m/Y" , strtotime($data["question_date"])).'</span>';
          $content .= '</div>';
        }
        return $content;
      }else{return "none";}

    }else{return "error";}

  }


  function loadMoreQuestions($last_id , $connection){

    $statement = "SELECT * FROM frequent_questions WHERE question_restaurant_id = '$restaurant_id' AND question_id < $last_id ORDER BY question_date DESC LIMIT 15";
  }

}


?>
