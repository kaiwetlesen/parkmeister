<?php
/**
 * SENSOR
 * Container class for a Sensor entity. Maps over
 * to the sensor table using SensorMapper.
 */
class Sensor {
	private $serialNumber;
	private $sensorType;
	private $validSensorTypes = [	
		'PROXIMITY' => true,
		'INGRESS' => true,
		'EGRESS' => true
		];
	
	public function serialNumber($sn) {
		if (is_int($sn)) {
			$self->serialNumber = $sn;
		}
		return $self->serialNumber;
	}

	public function sensorType($type) {
		if (is_string($type) && $validSensorTypes[$type] == true) {
			$self->sensorType = $type;
		}
		return $self->sensorType;
	}
}
?>
