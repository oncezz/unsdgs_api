<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$token = $_POST['token'];
$sql = "select * from admin where token ='" . $token . "'";
$result = $db->query($sql)->fetchAll();
if(sizeof($result)==0){
    echo "logout";
}
?>