<?php
require_once('connection.php');
$sql = "select * from question order by orderid";
$result = $db->query($sql)->fetchAll();
for($i=0;$i<sizeof($result);$i++){
    $result[$i]['no'] =$i+1;
}
echo json_encode($result);
?>