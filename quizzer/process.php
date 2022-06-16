<?php

include "database.php";

session_start();

$userChoiceId=$_POST["answerr"];
$qId=$_POST["question_id"];

$correctChoice=$db->query("SELECT * FROM answers WHERE question_id=$qId AND is_true=1")->fetch_assoc();

$correctChoiceID=$correctChoice["id"];

if ($userChoiceId==$correctChoiceID){

    $_SESSION["user_score"]++;

}
else{

    $_SESSION["user_score"]--;
}

$qId++;

if ($qId>$_SESSION["total"]){
  header("Location:final.php");
}
else{
    header("Location:question.php?x=$qId");
}





?>