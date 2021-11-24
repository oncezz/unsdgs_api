<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$username = $_POST['username'];
$password = $_POST['password'];
$adminmode = $_POST['admin'];
$id = $_POST['id'];
$db->update("admin",[
    "username"=>$username,
    "password"=>$password,
    "adminmode"=>$adminmode
],[
"id"=>$id
]);
?>