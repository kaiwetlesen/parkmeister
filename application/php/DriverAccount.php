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


	public function __construct($args) {
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
			$self->name= $na;
		}
		return $self->name;
	}

	public function email($em){ // user's email
		if (is_string($em)){
			$self->email= $em;
		}
		return $self->email;
	}

	public function hash($ha){ // hash for password
		if (is_string($ha)){
			$theHash = hash('sha256', $ha);
			$self->password_hash= $theHash;
		}
	}

	public function compare($ha){
		if (is_string($ha)){
			$theHash = hash('sha256', $ha);
			if ($theHash==$self->password_hash){
				return true;
			}
			else return false;
		}
	}

	public function payment_type($pt){ // what they will pay us with
		if (is_string($pt) && $payment_type[$pt]= true){
			$self->payment_type= $pt;
		}
		return $self->billing_type;
	}

	public function car_type($ct){ // car type
		if (is_string($ct) && $car_type[$ct]= true){
			$self->car_type= $ct;
		}
		return $self->car_type;
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



}

?>
