<?php

require "MapperBase.php";
require "DriverAccount.php";

class DriverAccountMapper extends MapperBase {

	private $DA_SELECT_SQL = "SELECT * FROM account WHERE account_num = ? AND account_name = ?";
	private $DA_INSERT_SQL = "INSERT INTO account(account_name) VALUES (?)";
	private $DA_UPDATE_SQL = "UPDATE account SET account_name = ? WHERE account_num = ? AND account_name = ?";

	private $HCT_SELECT_SQL = "select car_type from has_car_type, account, car_type where car_type_name = car_type and account_num = account_id and account_num = ?";
	
	private $q_searchByAcctNum = "";

	public function __construct($db) {
		parent::__construct($db);
	}

	public function find(array $searchArgs) {
		$stmt;
		if (defined($searchArgs["accountNum"]) || defined($searchArgs["account_email"])) {
			return array($self->load($searchArgs)); # Will only return one result! Always!
		}
		else if (defined($searchArgs["account_name"])) {
			$stmt = $this->db->prepare($SQL_FIND_BY_accountEmail);
			# TODO: Remove bare constant length limit!
			$stmt->bindParam(1, $searchArgs["account_name"], PDO::PARAM_STR, 25);
		}
		if (!$stmt->execute()) {
			throw new Exception("DriverAccountMapper: Failed to execute query -- ".$db->errorCode().": ".$db->errorInfo());
		}
		$result = setDataFromResult($stmt);
		loadCarTypes($result);

		return $result;
	}
	
	public function load(array $identifyingArgs) {
		$stmt = null;
	print_r(isset($identifyingArgs["accountNum"]));
		if (isset($identifyingArgs["accountNum"])) {
			$stmt = $this->db->prepare($SQL_FIND_BY_acctNum);
			$stmt->bindParam(1, $identifyingArgs["accountNum"], PDO::PARAM_INT);
echo "this\n";
		}
		else if (defined($identifyingArgs["account_email"])) {
			$stmt = $this->db->prepare($SQL_FIND_BY_accountEmail);
			# TODO: Remove bare constant length limit!
			$stmt->bindParam(1, $identifyingArgs["account_email"], PDO::PARAM_STR, 256);
echo "that\n";
		}
		if (!$stmt->execute()) {
			throw new Exception("DriverAccountMapper: Failed to execute query -- ".$db->errorCode().": ".$db->errorInfo());
		}
		$result = setDataFromResult($stmt);
		loadCarTypes($result);

		return $result;
	}

	private function setDataFromResult($stmt) {
		if ($stmt->rowCount() != 1) {
			return null;
		}
		$data = $this->db->fetch(PDO::FETCH_ASSOC);
		$result = new DriverAccount();
		$result->name($data['account_name']);
		$result->email($data['account_email']);
		$result->account_number($data['account_num']);
		$result->hash($data['passhash']);
		loadCarTypes($result);

		return $result;
	}

	private function loadCarTypes($account) {
		if ($account->account_number() == null) {
			return;
		}
		$stmt = $this->db->prepare($HCT_SELECT_SQL);
		$stmt->bind_param(1, $account->account_number(), PDO::PARAM_INT);
		if (!$stmt->execute()) {
			throw new Exception("DriverAccountMapper: Failed to execute query -- ".$db->errorCode().": ".$db->errorInfo());
		}
		$carTypes = $stmt->fetchAll(PDO::FETCH_ASSOC, "DriverAccount");
		$account->car_types((array)$carTypes);
		return;
	}

	public function create($classRef) {
		
	}
	
	public function update($classRef) {
		
	}
	
	public function delete($classRef) {
		
	}
}
?>
