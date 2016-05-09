<?php
require "DbConnection.php";
require "DriverAccountMapper.php";

$test = $_POST["test"];
    $test .= "456";

    $arrResult = array(
        'result' => $test
    );

    print json_encode($arrResult);
    die();


function main() {
	session_start();


	#$da_mapper = new DriverAccountMapper($db);
	print_r($_POST);
	print_r($_GET);
}

main();
?>
