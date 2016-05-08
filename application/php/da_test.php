<?php
require "DbConnection.php";
require "DriverAccountMapper.php";

$db = new DbConnection();

$db->query("use acme");
$db->prepare("show tables");
$db->execute();
print_r($db->fetchAll());
$da_mapper = new DriverAccountMapper($db);

echo "Something worked!\n";
?>
