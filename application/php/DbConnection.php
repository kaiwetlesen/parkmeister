<?php
require "Constants.php";
class DbConnection extends PDO {
	private $dbRef;
	public function __construct($cfgFile = DBCFG) {
		// Pull config vars from DBCFG file and connect
		$settings = parse_ini_file($cfgFile);
		if (!$settings) {
			throw new Exception('Failed to open config file: ' . $cfgFile);
		}
		Parent::__construct($settings['dsn'], 
			$settings['db_user'], $settings['db_pass'],
			array(PDO::ATTR_PERSISTENT => true)
		);
	}
}

?>
