<?php
abstract class MapperBase {
	private static $db;

	public function __construct($db) {
		$self->db = $db;
	}

}
