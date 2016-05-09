<?php
/**
 * SENSOR
 * Container class for a Sensor entity. Maps over
 * to the sensor table using SensorMapper.
 */


class Sensor {
	private $serialNumber;
	private $sensorType;
	private $validSensorTypes = array();
	/*[	
		'PROXIMITY' => true,
		'INGRESS' => true,
		'EGRESS' => true
		];
	*/

	public function serialNumber($sn = null) {
		if (is_int($sn)) {
			$this->serialNumber = $sn;
		}
		return $this->serialNumber;
	}

	public function sensorType($type = null) {
		if (is_string($type) && $validSensorTypes[$type] == true) {
			$this->sensorType = $type;
		}
		return $this->sensorType;
	}
}
?>
