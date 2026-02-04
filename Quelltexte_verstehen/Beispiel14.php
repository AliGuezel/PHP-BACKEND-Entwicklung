<?php 

class Beispiel {
	
	private static $eigenschaft1 = 1;
	
	public function __construct() {
		self::$eigenschaft1++;	
	}
	
	public function __destruct() {
		self::$eigenschaft1++;	
	}
	
	public function methode1() {
		echo self::$eigenschaft1;		
	}
}

$obj1 = new Beispiel();
$obj2 = new Beispiel();
$obj3 = new Beispiel();
$obj4 = new Beispiel();
$obj5 = new Beispiel();
$obj1->methode1();
