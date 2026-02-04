<?php 

class Beispiel {
	
	private static $zahl = 0; // 2
	
	public function __construct() {
		self::$zahl++;
	}
	public function display() {
		echo self::$zahl.'<br>';	
	}	
}
$obj = new Beispiel();
$obj->display(); // 1


$obj2 = new Beispiel();
$obj->display();   // 2
$obj2->display();  // 2
