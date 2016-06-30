<?php

	abstract class Animal{
		public $name;
		public $color;

		public function describe(){
			return $this->name.' is '.$this->color;
		}

		abstract public function makesSound();

	}

	class Duck extends Animal{
		public function describe(){
			return parent::describe();
		}

		public function makesSound(){
			return 'Quack';
		}

	}

	class Dog extends Animal{
		public function describe(){
			return parent::describe();
		}

		public function makesSound(){
			return 'Woof';
		}

	}

$duck = new Dog();
$duck->name = 'Ben';
$duck->color = 'Blue';
echo $duck->describe();
echo $duck->makesSound();




?>