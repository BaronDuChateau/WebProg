<?php
	
	/**
	* Employee class
	*/
	class Employee
	{
		private $name;
		private $surname;
		private $birthdate;

		function __construct($name, $surname, $birthdate)
		{
			$this->name = $name;
			$this->surname = $surname;
			$this->birthdate = $birthdate;
		}

		public function print_caracs()
		{
			echo  $this->name . $this->surname . $this->birthdate;
		}
		public function set_name($name)
		{
			$this->name = $name;
		}
	}
	$hugo = new Employee("Borsier", "Hugo", 10021996);
	print_r($hugo);
	$hugo->set_name("Joe");
	print_r($hugo);
	$hugo->print_caracs();
?>