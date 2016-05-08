<?php
/**
	*operator account class
	*for operors who want to use our system 
	*yah
	*/

class operator_account{
	private $op_id; 
	private $op_name; //
	private $adress; //
	private $email; //
	private $contact_num; //
	private $contact_site; //
	private $password_hash; //the hash created for the password
	private $billing_amount; // How much they owes us per month
	private $billing_type = [ // how they pay us, three wayts
			'cash' => true,
			'credit card'=> true,
			'check'=> true
	]; 
	private $accept_payment_type = [ // valid payment types, three ways they can accept
			'cash' => true,
			'credit card'=> true,
			'permit'=> true
	];
	
	public function operator_name($on){ // user's name
		if (is_string($on)){
			$self->operator_name= $on;
		}
		return $self->operator_name;
	}

	public function adress($ad){ // user's officce adress
		if (is_string($ad)){
			$self->adress= $ad;
		}
		return $self->adress;

	public function email($em){ // user's email
		if (is_string($em)){
			$self->email= $em;
		}
		return $self->email;
	}


	public function contact_num($cn){ // user's contact phone number
		if (is_string($cn)){
			$self->contact_num= $cn;
		}
		return $self->contact_num;
	}

	public function contact_site($cs){ // user's website
		if (is_string($cs)){
			$self->contact_site= $cs;
		}
		return $self->contact_site;
	}

	public function hash($ha){ // hash for password
		if (is_string($ha)){
			$self->password_hash= $ha;
		}
	}

	public function billing_amount($ba){ // amount owed to us
		if (is_int($ba)){
			$self->billing_amount= $ba;
		}
		return $self->billing_amount;
	}

	public function billing_type($bt){ // what they will pay us with
		if (is_string($bt) && $billing_type[$bt]= true){
			$self->billing_type= $bt;
		}
		return $self->billing_type;
	}

	public function accepted_type($apt){ //  payment type accpeted
		if (is_string($apt) && $accept_payment_type[$apt]= true){
			$self->accept_payment_type= $apt;
		}
		return $self->accept_payment_type;
	}

	
	public function to_json() {
		return json_encode(Array(
				'op_id' => $this->op_id,
				'op_name' => $this->op_name (),
				'adress' => $this->adress () 
				'email' => $this->email (),
				'contact_num' => $this->contact_num (),
				'contact_site' => $this->contact_site (),
				'passhash' => $this->password_hash (),
				'bill_them' => $this->billing_amount (),
				'bill_them_how' => $this->billing_type ()

			));
	}


}
?>