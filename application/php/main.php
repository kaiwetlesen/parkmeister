<?php
require "DbConnection.php";
require "DriverAccountMapper.php";

function main() {
	session_start();


	#$da_mapper = new DriverAccountMapper($db);
	print_r($_POST);
	print_r($_GET);
}

main();
?>
