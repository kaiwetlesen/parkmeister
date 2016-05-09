<?php
/**
	*operator account class
	*for operors who want to use our system 
	*yah
	*/

class operator_account{
	private $op_id; 
	private $op_name; //
	private $address; //
	private $email; //
	private $contact_num; //
	private $contact_site; //
	private $password_hash; //the hash created for the password
	private $billing_amount; // How much they owes us per month
	private $billing_type = array();
	/*[ // how they pay us, three wayts
			'cash' => true,
			'credit card'=> true,
			'check'=> true
	];*/ 
	private $accept_payment_type = array();
	/*[ // valid payment types, three ways they can accept
			'cash' => true,
			'credit card'=> true,
			'permit'=> true
	];
	*/

	public function operator_name($on = null){ // user's name
		if (is_string($on)){
			$this->operator_name= $on;
		}
		return $this->operator_name;
	}

	public function address($ad = null){ // user's officce address
		if (is_string($ad)){
			$this->address= $ad;
		}
		return $this->address;
	}
	
	public function email($em = null){ // user's email
		if (is_string($em)){
			$this->email= $em;
		}
		return $this->email;
	}


	public function contact_num($cn = null){ // user's contact phone number
		if (is_string($cn)){
			$this->contact_num= $cn;
		}
		return $this->contact_num;
	}

	public function contact_site($cs = null){ // user's website
		if (is_string($cs)){
			$this->contact_site= $cs;
		}
		return $this->contact_site;
	}

	public function hash($ha = null){ // hash for password
		if (is_string($ha)){
			$theHash = hash('sha256', $ha);
			$this->password_hash= $theHash;
		}
	}

	public function compare($ha = null){
		if (is_string($ha)){
			$theHash = hash('sha256', $ha);
			if ($theHash==$this->password_hash){
				return true;
			}
			else return false;
		}
	}

	public function billing_amount($ba = null){ // amount owed to us
		if (is_int($ba)){
			$this->billing_amount= $ba;
		}
		return $this->billing_amount;
	}

	public function billing_type($bt = null){ // what they will pay us with
		if (is_string($bt) && $billing_type[$bt]= true){
			$this->billing_type= $bt;
		}
		return $this->billing_type;
	}

	public function accepted_type($apt = null){ //  payment type accpeted
		if (is_string($apt) && $accept_payment_type[$apt]= true){
			$this->accept_payment_type= $apt;
		}
		return $this->accept_payment_type;
	}

	
	public function to_json() {
		return json_encode(Array(
				'op_id' => $this->op_id,
				'op_name' => $this->op_name (),
				'address' => $this->address (),
				'email' => $this->email (),
				'contact_num' => $this->contact_num (),
				'contact_site' => $this->contact_site (),
				'passhash' => $this->password_hash (),
				'bill_them' => $this->billing_amount (),
				'bill_them_how' => $this->billing_type ()

			));
	}

	public function from_json() {
		return json_decode(Array(
				'op_id' => $this->op_id,
				'op_name' => $this->op_name (),
				'address' => $this->address (),
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
