<?php
require_once('connection.php');
$sql = "select * from user ";
$result = $db->query($sql)->fetchAll();

echo json_encode($result);
?>