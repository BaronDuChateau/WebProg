<?php

	/**
	* Employee class
	*/
	class Employee
	{
		private $name;
		private $email;
		private $birthdate;

		function __construct($name, $email, $birthdate)
		{
			$this->name = $name;
			$this->email = $email;
			$this->birthdate = $birthdate;
		}
		/**
		* Getters
		*/
		public function get_name()
		{
			return $this->name;
		}

		public function get_email()
		{
			return $this->email;
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

		public function set_email($email)
		{
			$this->email = $email;
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
			echo  "<p>This employee is " . $this->name . ". <br>His/her name is " . $this->email . ".<br>His/her birthdate is " . date("Y-m-d", $this->birthdate) . ".<br>";
		}
		/**
		* Static methods
		*/
		public static function isYounger($birthdate1, $birthdate2)
		{

		}

		public static $employeePolicy = array(
			"Show up on time",
			"Do your job well",
			"Be honest"
		);
		public static function printPolicy()
		{
			foreach (Employee::$employeePolicy as $rule)
				{
					echo $rule . "<br>";
				}
		}
	}
?>