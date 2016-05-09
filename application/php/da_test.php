<?php
require "DbConnection.php";
require "DriverAccountMapper.php";

$db = new DbConnection();

#$db->query("use acme");
#$stmt = $db->prepare("show tables");
#$stmt->execute();
#print_r($stmt->fetchAll());
$da_mapper = new DriverAccountMapper($db);
try {
	$account = $da_mapper->load(array('accountNum' => '123'));
}
catch (Exception $e) {
	echo "Exception : ", $e->getMessage(), "\n";
}
print_r($account);

#echo "Something worked!\n";
?>
