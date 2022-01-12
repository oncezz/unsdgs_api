<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$firstname=$_POST['firstName'];
$surname=$_POST['surName'];
$city=$_POST['city'];
$country=$_POST['country'];
$gender=$_POST['gender'];
$jobtitle=$_POST['jobTitle'];
$organization=$_POST['organization'];

$result=$db->count("user",[
    "username"=>$username

]);
if($result!=0){
    echo "username exists";
    return ;

}

$result=$db->count("user",[
    "email"=>$email

]);
if($result!=0){
    echo  "email exists";
    return;

}

$db->insert("user",[
    "username"=>$username,
    "password"=>$password,
    "email"=>$email,
    "firstname"=>$firstname,
    "lastname"=>$surname,
    "city"=>$city,
    "country"=>$country,
    "gender"=>$gender,
    "jobtitle"=>$jobtitle,
    "organization"=>$organization,
]);
echo "OK";






?>