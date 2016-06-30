<?php

	class User{
		public $id;
		public $name;
		public $email;
		public $pword;

		public function __construct($name, $pword){
			$this->name = $name;
			$this->pword = $pword;
			echo 'Constructor Called';
		}

		// public function register(){
		// 	echo "registered";
		// }

		public function login(){
			$this->auth_user();
			
		}

		public function auth_user(){
			echo $this->name . " is now the boss";
		}

		// public function __destruct(){
		// 	echo 'destructor called';
		// }
	}

	$me = new User('nancy', '123');
	// $me->register();
	$me->login();
?>