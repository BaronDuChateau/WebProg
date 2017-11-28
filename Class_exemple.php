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
		/**
		* Getters
		*/
		public function get_name()
		{
			return $this->name;
		}

		public function get_surname()
		{
			return $this->surname;
		}

		public function get_birthdate()
		{
			return $this->birthdate;
		}
		/**
		* Setters
		*/
		public function set_name($name)
		{
			$this->name = $name;
		}

		public function set_surname($surname)
		{
			$this->surname = $surname;
		}

		public function set_birthdate($birthdate)
		{
			$this->birthdate = $birthdate;
		}
		/** 
		* Others
		*/
		public function print_caracs()
		{
			echo  $this->name . $this->surname . $this->birthdate;
		}
		/**
		* Static methods
		*/
		public static function isYounger($birthdate1, $birthdate2)
		{
			if ($birthdate1 > $birthdate2)
			{
				return false;
			}
			else return true;
		}
	}

	$hugo = new Employee("Borsier", "Hugo", 10021996);
	$emma = new Employee("Borsier", "Emma", 20071998);
	print_r($hugo);
	$hugo->set_name("Joe");
	print_r($hugo);
	$hugo->print_caracs();
	echo "<br>" . $hugo->isYounger($hugo->get_birthdate(), $emma->get_birthdate());
?>