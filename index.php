<?php

	class User{
		public $username;
		public static $minPassLength = 5;

		public static function validatePassword($password){
			if(strlen($password) >= self::$minPassLength){
				return true;
			} else {
				return false;
			}
		}
	}

	// $password = 'password';

	// if(User::validatePassword($password)){
	// 	echo 'Password is long enough';
	// } else {
	// 	echo 'not valid';
	// }


echo User::$minPassLength;

?>