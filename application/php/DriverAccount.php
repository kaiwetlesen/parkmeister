<?php
/**
	*driver account class
	*for driver account
	*yah
	*/

class DriverAccount{
	private $account_number; // for account_num in table account
	private $name; // account_name
	private $email;
	private $password_hash; //the hash created for the password
	private $payment_type = [ // valid payment types, three types
			'cash',
			'credit card',
			'permit'
	];
	private $car_type = [ // valid car types, four types
			'regular',   //for car_type_name in car_type table
			'electric',
			'disabled',
			'motorcycle'
	];


	public function __construct($args = "") {
		if (is_array($args)) {
			$this->name = $args['name'];
			$this->email = $args['email'];
			$this->password_hash = $args['password_hash'];
			$this->payment_type = array($args['payment_type']);
			$this->car_type = array($args['car_type']);
		}
	}


	public function name($na){ // user's name
		if (is_string($na)){
			$this->name= $na;
		}
		return $this->name;
	}

	public function email($em){ // user's email
		if (is_string($em)){
			$this->email= $em;
		}
		return $this->email;
	}

	public function hash($ha){ // hash for password
		if (is_string($ha)){
			$theHash = hash('sha256', $ha);
			$this->password_hash= $theHash;
		}
	}

	public function compare($ha){
		if (is_string($ha)){
			$theHash = hash('sha256', $ha);
			if ($theHash==$this->password_hash){
				return true;
			}
			else return false;
		}
	}

	public function payment_type($pt){ // what they will pay us with
		if (is_string($pt) && $payment_type[$pt]= true){
			$this->payment_type= $pt;
		}
		return $this->billing_type;
	}

	public function car_type($ct){ // car type
		if (is_string($ct) && $car_type[$ct]= true){
			$this->car_type= $ct;
		}
		return $this->car_type;
	}

	public function account_number($an) { // read-only account number, with initial set permitted
		if (is_int($an) && !isset($this->account_number)) {
			$this->account_number = $an;
		}
		return $this->account_number;
	}

	public function to_json() {
		return json_encode(Array(
				'acct_num' => $this->account_number,
				'name' => $this->name (),
				'email' => $this->email (),
				'passhash' => $this->password_hash (),
				'payment_type' => $this->payment_type (),
				'car_type' => $this->car_type ()

			));
	}

	public function from_json() {
		return json_decode(Array(
				'acct_num' => $this->account_number,
				'name' => $this->name (),
				'email' => $this->email (),
				'passhash' => $this->password_hash (),
				'payment_type' => $this->payment_type (),
				'car_type' => $this->car_type ()

			));
	}

}

?>
