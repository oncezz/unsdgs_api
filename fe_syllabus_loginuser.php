<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);

$username=$_POST['username'];
$password=$_POST['password'];

$result=$db->select("user","*",[
    "username"=>$username,
    "password"=>$password
]);
if(sizeof($result)==0){
    echo "login fail";
}
else{
    echo json_encode($result);
}
?>