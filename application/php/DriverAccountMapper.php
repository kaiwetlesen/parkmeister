<?php

require "MapperBase.php";
require "DriverAccount.php";

class DriverAccountMapper extends MapperBase {

	private $DA_SELECT_SQL = "SELECT * FROM account WHERE account_num = ? AND account_name = ?";
	private $DA_INSERT_SQL = "INSERT INTO account(account_name) VALUES (?)";
	private $DA_UPDATE_SQL = "UPDATE account SET account_name = ? WHERE account_num = ? AND account_name = ?";

	private $SQL_FIND_BY_acctNum = "SELECT * FROM account WHERE account_num = ?";
	private $SQL_FIND_BY_accountEmail = "SELECT * FROM account WHERE account_email = ?";

	private $HCT_SELECT_SQL = "select car_type from account_has_cartype, account, car_type where car_type_name = car_type and account_num = account_id and account_num = ?";
	
	private $q_searchByAcctNum = "";

	public function __construct($db) {
		parent::__construct($db);
	}

	/*
		Locates a set of DriverAccounts from the database.
	*/
	public function find(array $searchArgs) {
		$stmt;
		$set = array();
		/* These are primary keys. If defined, delegate to loader. */
		if (defined($searchArgs["accountNum"]) || defined($searchArgs["account_email"])) {
			return array($self->load($searchArgs)); // Will only return one result! Always!
		}
		else if (defined($searchArgs["account_name"])) {
			$stmt = $this->db->prepare($this->SQL_FIND_BY_accountEmail);
			# TODO: Remove bare constant length limit!
			$stmt->bindParam(1, $searchArgs["account_name"], PDO::PARAM_STR, 25);
		}
		if (!$stmt->execute()) {
			throw new Exception("DriverAccountMapper: Failed to execute query -- ".$stmt->errorCode().": ".implode(" ",$stmt->errorInfo()));
		}
		// TODO: FIX THIS!!
		while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
			array_push($set, $this->setDataFromResult($stmt);
		}
		return $set;
	}
	
	/*
		Loads a DriverAccount based on one of the two key values
	*/
	public function load(array $identifyingArgs) {
		$stmt = null;
		if (isset($identifyingArgs["accountNum"])) { // Locating by account number, select accountNum query
			$stmt = $this->db->prepare($this->SQL_FIND_BY_acctNum);
			$stmt->bindParam(1, $identifyingArgs["accountNum"], PDO::PARAM_INT);
		}
		else if (defined($identifyingArgs["account_email"])) { // Locating by email, select email query
			$stmt = $this->db->prepare($this->SQL_FIND_BY_accountEmail);
			# TODO: Remove bare constant length limit!
			$stmt->bindParam(1, $identifyingArgs["account_email"], PDO::PARAM_STR, 256);
		}
		if (!$stmt->execute()) {
			throw new Exception("DriverAccountMapper: Failed to execute query -- ".$stmt->errorCode().": ".implode(" ",$stmt->errorInfo()));
		}

		if ($stmt->rowCount() != 1) {
			return null;
		}
		return $this->setDataFromResult($stmt->fetch(PDO::FETCH_ASSOC));
	}

	/*
		Private function sets up the object using a result set.
	*/
	private function setDataFromResult($data) {
		$result = new DriverAccount();
		$result->name($data['account_name']);
		$result->email($data['account_email']);
		$result->account_number((int)$data['account_num']);
		$result->hash($data['account_password']);
		$this->loadCarTypes($result);

		return $result;
	}

	/*
		Auxilliary Function
		Load the list of car types associated with the user account
	*/
	private function loadCarTypes($account) {
		if ($account->account_number() == null) {
			return;
		}
		$stmt = $this->db->prepare($this->HCT_SELECT_SQL);
		$stmt->bindParam(1, $account->account_number(), PDO::PARAM_INT);
		if (!$stmt->execute()) {
			throw new Exception("DriverAccountMapper: Failed to execute query -- ".$stmt->errorCode().": ".implode(" ",$stmt->errorInfo()));
		}
		$account->car_type($stmt->fetchAll(PDO::FETCH_COLUMN));
	}

	public function create($classRef) {
		
	}
	
	public function update($classRef) {
		
	}
	
	public function delete($classRef) {
		
	}
}
?>
