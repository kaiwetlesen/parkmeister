<?php
/**
 * PassesPermits, this for information on valid passes offeres by operaor
 * Container class for a PassesPermits entity. Maps over
 * to the permit_type and pricing_scheme tables using PassesPermitsMapper.
 */


class PassesPermits{
	/**private $lot_id;
	private $lot_name;*/
	private $operator_name;
	private $operator_id;
	private $validpayment_type =[
	'cash' => true,
	'credit card' => true];
	private $permitName;
	private $start_effective;
	private $expires;
	private $price;

	public function opName($on){ // operator_name, forieghn key
		if (is_string($on)){
			$this->operator_name= $on;
		}
		return $this->operator_name;
	}

	public function opID($oi){ // 
		if (is_int($oi)){
			$this->operator_id= $oi;
		}
		return $this->operator_id;
	}

	public function validpayment_type($vpt){ // 
		if (is_string($vpt)){
			$this->validpayment_type= $vpt;
		}
		return $this->validpayment_type;
	}

	public function permitName($pn){ // operator_name, forieghn key
		if (is_string($pn)){
			$this->permitName= $pn;
		}
		return $this->permitName;	
	}

	public function start_effective($start){ // 
		if (checkdate($start)){
			$this->start_effective= $start;
		}
		return $this->start_effective;
	}

	public function expires($end){ // 
		if (checkdate($end)){
			$this->expires= $end;
		}
		return $this->expires;
	}

	public function pricing($pri){ // 
		if (is_int($pri)){
			$this->price= $pri;
		}
		return $this->price;
	}


	public function to_json() { // json_encode
		return json_encode(Array(
				'operator_name' => $this->operator_name(),
				'operator_id' => $this->operator_id (),
				'validpayment_type' => $this->validpayment_type (),
				'permitName' => $this->permitName (),
				'start_effective' => $this->start_effective (),
				'expires' => $this->expires (),
				'price' => $this->price ()
			));
	}

	public function from_json() {   // jason_decode
		return json_decode(Array(
				'operator_name' => $this->operator_name(),
				'operator_id' => $this->operator_id (),
				'validpayment_type' => $this->validpayment_type (),
				'permitName' => $this->permitName (),
				'start_effective' => $this->start_effective (),
				'expires' => $this->expires (),
				'price' => $this->price ()

			));
	}
}
?>
