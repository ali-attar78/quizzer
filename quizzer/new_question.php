<?php
include "database.php";
session_start();

if (isset($_POST["question"]) && isset($_POST["correct"])) {
    $question = $_POST["question"];
    $answers = $_POST["answers"];
    $correct = $_POST['correct'];
    $question_id = $_SESSION["total"] + 1;

    $db->query("INSERT INTO questions(id,text) VALUES('$question_id','$question')");

    $count = 1;
    $true = 0;

    foreach ($answers as $answer) :
        if ($answer == $answers[$correct]) {
            $true = 1;
        }
        $db->query("INSERT INTO answers(text, is_true, question_id) VALUES('$answer', '$true', '$question_id')");
        $count++;
        $true = 0;
    endforeach;

    header("Location:admin.php");
}

?>