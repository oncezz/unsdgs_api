<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);

$quiz=$_POST['quiz'];
$quiz="quiz/" . $quiz;
$myfile = fopen( $quiz, "r") or die("Unable to open file!");
echo fread($myfile,filesize( $quiz));
fclose($myfile);

?>