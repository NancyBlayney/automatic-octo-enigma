<?php

	class First{
		public $id = 23;
		public $name = 'Nancy';


		public function saySomething($word){
			echo $word.'Something...';
		}

	}

	class Second extends First{
		public function getName(){
			echo $this->name;
		}
	}

$new = new Second;
echo $new->name;
$new->saySomething('Hello World');





?>