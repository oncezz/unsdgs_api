<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);

$lesson=$_POST['lesson'];

$myfile = fopen( "narrative/" . $lesson, "r") or die("Unable to open file!");
echo fread($myfile,filesize("narrative/" . $lesson));
fclose($myfile);


?>