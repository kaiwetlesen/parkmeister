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
	private $lot_type;

	public function lot_id($li = null){ // id of the parking lot
		if (is_int($li)){
			$this->lot_id= $li;
		}
		return $this->lot_id;
	}

	public function geo_lat($lat = null){ // geo latitude, east to west
		if (is_float($lat)){
			$this->geo_lat= $lat;
		}
		return $this->geo_lat;
	}

	public function geo_long($lon = null){ // geo longitude, north to south
		if (is_float($lon)){
			$this->geo_long= $lon;
		}
		return $this->geo_long;
	}

	public function lot_name($nam = null){ // name of parkng structure or lot
		if (is_string($nam)){
			$this->lot_name= $nam;
		}
		return $this->lot_name;
	}

	public function opID($oi = null){ // 
		if (is_int($oi)){
			$this->operator_id= $oi;
		}
		return $this->operator_id;
	}
	
	public function lot_type($lt = null){ // id of the parking lot
		if (is_string($lt)){
			$this->lot_name= $lt;
		}
		return $this->lot_name;
	}

	public function to_json() { // json_encode
		return json_encode(Array(
				'lot_id' => $this->lot_id (),
				'geo_lat' => $this->geo_lat (),
				'geo_long' => $this->geo_long (),
				'lot_name' => $this->lot_name (),
				'lot_type' => $this->lot_type ()
			));
	}

	public function from_json() {   // jason_decode
		return json_decode(Array(
				'lot_id' => $this->lot_id (),
				'geo_lat' => $this->geo_lat (),
				'geo_long' => $this->geo_long (),
				'lot_name' => $this->lot_name (),
				'lot_type' => $this->lot_type ()

			));
	}




}
?>
