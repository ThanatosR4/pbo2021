<?php

namespace App;

class User{
    protected $username;
    protected $password;

    	// method untuk setter
	public function setusername($a){
		$this->username = $a;
	}
	public function setpassword($a){
		$this->password = $a;
	}
         // method untuk getter
	public function getusername() {
		return $this->username; 
	}
	public function getpassword() {
		return $this->password;
	}

    function login(){

    }
}

?>