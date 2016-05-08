<?php
require 'Mapper.php';
abstract class MapperBase implements Mapper {
	private $db;

	public function __construct($db) {
		$this->db = $db;
	}

	public abstract function find(array $searchArgs);
	public abstract function load(array $identifyingArgs);
	public abstract function create($classRef);
	public abstract function update($classRef);
	public abstract function delete($classRef);
}
