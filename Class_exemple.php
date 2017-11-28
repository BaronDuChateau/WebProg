<?php
	/**
	* Imports of the classes needed
	*/
	require 'Class_Employee.php';
	/**
	* Setting new employees
	*/
	$hugo = new Employee("Hugo", "Hugo@yolo.com", mktime(0, 0, 0, 2, 10, 1996));
	$emma = new Employee("Emma", "Emma@yolo.com", mktime(0, 0, 0, 7, 20, 1998));

	$hugo->print_caracs();
	$emma->print_caracs();
	echo "<br>The policies are :<br>";
	$hugo::printPolicy();
?>