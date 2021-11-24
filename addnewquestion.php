<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$orderid = $_POST['orderid'];
$question = $_POST['question'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$answer4 = $_POST['answer4'];
$correctAnswer = $_POST['correctAnswer'];

$db->insert("question",[
    "orderid"=>$orderid,
    "question"=>$question,
    "answer1"=>$answer1,
    "answer2"=>$answer2,
    "answer3"=>$answer3,
    "answer4"=>$answer4,
    "correctAnswer"=>$correctAnswer
]);

?>