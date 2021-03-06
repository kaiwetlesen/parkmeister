<?php
/**
 * ParkingSpot
 * Container class for a ParkingSpot entity. Maps over
 * to the parking_struct table using ParkingSpotMapper.
 */


class ParkingSpot extends ParkingStruct{
	/**private $lot_id;
	private $geo_lat;
	private $lot_name;
	private $operator_id;*/
	private $OperatorName;
	private $Available;
	private $SpotNum;

	public function opName($on = null){ // operator_name, forieghn key
		if (is_string($on)){
			$this->OperatorName= $on;
		}
		return $this->OperatorName;
	}

	public function Available($av = null){ // 
		if (is_bool($av)){
			$this->Available= $av;
		}
		return $this->Available;
	}

	public function SpotNum($sn = null){ // 
		if (is_int($sn)){
			$this->SpotNum= $sn;
		}
		return $this->SpotNum;
	}

	public function to_json() { // json_encode
		return json_encode(Array(
				'OperatorName' => $this->OperatorName (),
				'Available' => $this->Available (),
				'SpotNum' => $this->SpotNum ()
				
			));
	}

	public function from_json() {   // jason_decode
		return json_decode(Array(
				'OperatorName' => $this->OperatorName (),
				'Available' => $this->Available (),
				'SpotNum' => $this->SpotNum ()

			));
	}


}
?>
