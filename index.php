<?php

	class User{
		public function __construct(){
			echo 'Constructor Called';
		}

		public function register(){
			echo "registered";
		}

		public function login($name, $pword){
			$this->auth_user($name, $pword);
			echo $name . " is now logged in";
		}

		public function auth_user($name, $pword){
			echo $name . " is now the boss";
		}

		public function __destruct(){
			echo 'destructor called';
		}
	}

	$me = new User;
	$me->register();
	$me->login('nancy', '123');
?>