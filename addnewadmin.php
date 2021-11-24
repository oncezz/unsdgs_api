<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$username = $_POST['username'];
$password = $_POST['password'];
$admin = $_POST['admin'];
$db->insert("admin",[
"username"=>$username,
"password"=>$password,
"adminmode"=>$admin
]);
?>