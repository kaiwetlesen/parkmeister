<?php
/**
	*price class
	*for price
	*yah
	*/

class price{
	private $parking_interval; // interval in minutes
	private $price_per_interval; // price to pay per a certain amount per minutes ($6 per 30 mins or $20 for 720 mins (12 hours))
	private $payment_type = [ // valid payment types
			'cash' => true,
			'credit card'=> true,
			'permit'=> true
	];


	public function parking_interval($pi){ // user's name
		if (is_integer($pi)){
			$this->parking_interval= $pi;
		}
		return $this->parking_interval;
	}

	public function payment_type($pt){ // car's license plate
		if (is_string($pt)){
			$this->payment_type= $pt;
		}
		return $this->payment_type;
	}

	public function to_json() { // json_encode
		return json_encode(Array(
				'parking_interval' => $this->parking_interval (),
				'price_per_interval' => $this->price_per_interval (),
				'payment_type' => $this->payment_type ()
				
			));
	}

	public function from_json() {   // jason_decode
		return json_decode(Array(
				'parking_interval' => $this->parking_interval (),
				'price_per_interval' => $this->price_per_interval (),
				'payment_type' => $this->payment_type ()

			));
	}

}
?>
