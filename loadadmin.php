<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$sql = "select * from admin order by username";
$result = $db->query($sql)->fetchAll();
echo json_encode($result);
?>