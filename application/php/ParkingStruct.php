<?php
/**
 * ParkingStruct or parking lot
 * Container class for a ParkingStruct entity. Maps over
 * to the parking_struct table using ParkingStructMapper.
 */


class ParkingStruct {
	private $lot_id;
	private $geo_lat;
	private $geo_long;
	private $lot_name;
	private $operator_id;

	public function lot_id($li){ // id of the parking lot
		if (is_int($li)){
			$this->lot_id= $li;
		}
	}

	public function geo_lat($lat){ // geo latitude, east to west
		if (is_float($lat)){
			$this->geo_lat= $lat;
		}
	}

	public function geo_long($lon){ // geo longitude, north to south
		if (is_float($lon)){
			$this->geo_long= $lon;
		}
	}

	public function lot_name($nam){ // name of parkng structure or lot
		if (is_string($nam)){
			$this->lot_name= $nam;
		}
	}

	public function opID($oi){ // 
		if (is_int($oi)){
			$this->operator_id= $oi;
		}
		return $this->operator_id;
	}

	public function to_json() { // json_encode
		return json_encode(Array(
				'lot_id' => $this->lot_id (),
				'geo_lat' => $this->geo_lat (),
				'geo_long' => $this->geo_long (),
				'lot_name' => $this->lot_name ()
			));
	}

	public function from_json() {   // jason_decode
		return json_decode(Array(
				'lot_id' => $this->lot_id (),
				'geo_lat' => $this->geo_lat (),
				'geo_long' => $this->geo_long (),
				'lot_name' => $this->lot_name ()

			));
	}




}
?>
