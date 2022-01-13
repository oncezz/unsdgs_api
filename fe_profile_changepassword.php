<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);

$id=$_POST['id'];
$oldpassword=$_POST['oldPassword'];
$newpassword=$_POST['newPassword'];

$result=$db->count("user",[
    "id"=>$id,
    "password"=>$oldpassword
]);
if($result==0){
    echo "password incorrect";
}
else{
    $db->update("user",[
        "password"=>$newpassword
    ],[
        "id"=>$id,
    ]);
    echo "OK";
}

?>