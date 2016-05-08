<?php
require "DbConnection.php";
require "DriverAccountMapper.php";

$db = new DbConnection();
$da_mapper = new DriverAccountMapper($db);

echo "Something worked!\n";
?>
