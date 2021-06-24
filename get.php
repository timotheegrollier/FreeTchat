<?php 
require "db_config.php";
$sql = "SELECT * FROM message";
$response = $PDO->query($sql)->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($response);