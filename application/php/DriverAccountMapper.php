<?php

class DriverAccountMapper extends MapperBase {

	private $DA_INSERT_SQL = "SELECT * FROM account WHERE account_num = ? AND account_name = ?";
	private $DA_UPDATE_SQL = "INSERT INTO account(account_name) VALUES (?)";
	private $DA_DELETE_SQL = "UPDATE account SET account_name = ? WHERE account_num = ? AND account_name = ?";
	
	private $q_searchByAcctNum = "";

	public function __construct($db) {
		parent::__construct($db);
	}

	public function find($searchArgs) {
		$stmt;
		if (defined($searchArgs["accountNum"]) || defined($searchArgs["account_email"])) {
			return array($self->load($searchArgs)); # Will only return one result! Always!
		}
		else if (defined($searchArgs["account_name"])) {
			$stmt = $db->prepare($SQL_FIND_BY_accountEmail);
			# TODO: Remove bare constant length limit!
			$stmt->bindParam(1, $searchArgs["account_name"], PDO::PARAM_STR, 25);
		}
		if ($db->execute()) {
			throw Exception("DriverAccountMapper: Failed to execute query -- ".$db->errorCode().": ".$db->errorInfo());
		}
		return setDataFromResult();
	}
	
	public function load(array $identifyingArgs) {
		$stmt;
		if (defined($searchArgs["accountNum"])) {
			$stmt = $db->prepare($SQL_FIND_BY_acctNum);
			$stmt->bindParam(1, $searchArgs["accountNum"], PDO::PARAM_INT);
		}
		else if (defined($searchArgs["account_email"])) {
			$stmt = $db->prepare($SQL_FIND_BY_accountEmail);
			# TODO: Remove bare constant length limit!
			$stmt->bindParam(1, $searchArgs["account_email"], PDO::PARAM_STR, 256);
		}
		if ($db->execute()) {
			throw Exception("DriverAccountMapper: Failed to execute query -- ".$db->errorCode().": ".$db->errorInfo());
		}
		return setDataFromResult();
	}
	
	private function setDataFromResult() {
		$data = $db->fetch();
		$result = new DriverAccount();
	}

	public function create($classRef) {
		
	}
	
	public function update($classRef) {
		
	}
	
	public function delete($classRef) {
		
	}
}
?>
