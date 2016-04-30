<?php
/*
	This class defines (at a minimum) which methods an
	object mapper must implement to load and save objects
	into the database.
 */
interface Mapper {
	public function find(array $searchArgs);
	public function load(array $identifyingArgs);
	public function create($classRef);
	public function update($classRef);
	public function delete($classRef);
}
?>
