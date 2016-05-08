<?php
require "DbConnection.php";
require "DriverAccountMapper.php";

$db = new DbConnection();

$db->query("use acme");
$stmt = $db->prepare("show tables");
$stmt->execute();
print_r($stmt->fetchAll());
$da_mapper = new DriverAccountMapper($db);

echo "Something worked!\n";
?>
