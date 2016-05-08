<?php
require 'Mapper.php';
abstract class MapperBase implements Mapper {
	private $db;

	public function __construct($db) {
		$self->db = $db;
$db->query("use acme");
$stmt = $db->prepare("show tables");
$stmt->execute();
print_r($stmt->fetchAll());
	}

	public abstract function find(array $searchArgs);
	public abstract function load(array $identifyingArgs);
	public abstract function create($classRef);
	public abstract function update($classRef);
	public abstract function delete($classRef);
}
