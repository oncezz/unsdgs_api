<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "select * from admin where username = '" . $username . "' and password = '" . $password . "'";
$result = $db->query($sql)->fetchAll();
if(sizeof($result) == 1){
    $token = generateRandomString();
    $sql = "update admin set token = '". $token . "' where username = '" . $username . "' and password = '" . $password . "'";
    $result = $db->query($sql)->fetchAll();
    echo $token;
} else {
    echo "false";
}

?>