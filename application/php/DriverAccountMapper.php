<?php
static class DriverAccountMapper extends MapperBase {
	
	private $q_searchByAcctNum = "";

	public function __construct($db) {
		parent::__construct($db);
	}

	public function find(array $searchArgs) {
		if (defined $searchArgs["accountNum"]) {
			
		}
	}
	
	public function load(array $identifyingArgs) {
		
	}
	
	public function create($classRef) {
		
	}
	
	public function update($classRef) {
		
	}
	
	public function delete($classRef) {
		
	}
}
?>
