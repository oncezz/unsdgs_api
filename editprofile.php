<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$token = $_POST['token'];
$oldPasswpord = $_POST['oldPassword'];
$newPassword = $_POST['newPassword'];
// Check oldPassword
$result = $db->select("admin","*",[
    "token"=>$token,
    "password"=>$oldPasswpord
]);
if(sizeof($result)==0){
    echo "password incorrect!";
    return;
} else {
    $db->update("admin", [
        "password"=>$newPassword
    ],[
        "token"=>$token
    ]);
    echo "pass";
}
?>