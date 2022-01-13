<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);

$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$city=$_POST['city'];
$country=$_POST['country'];
$gender=$_POST['gender'];
$jobtitle=$_POST['jobtitle'];
$organization=$_POST['organization'];

$db->update("user",[
    "firstname"=>$firstname,
    "lastname"=>$lastname,
    "city"=>$city,
    "country"=>$country,
    "gender"=>$gender,
    "jobtitle"=>$jobtitle,
    "organization"=>$organization,
],[
    "id"=>$id
]);
echo "OK";
?>