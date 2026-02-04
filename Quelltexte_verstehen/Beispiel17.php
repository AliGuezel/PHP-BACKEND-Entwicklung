<?php 

class Beispiel {
	
	public $eigenschaft1 = 0;
	
	
	public static function methode1() {
		self::$eigenschaft1++;	
	}
	
	public static function methode2() {
		echo self::$eigenschaft1.'<br>';	
	}
	
}

$obj = new Beispiel();
$obj->methode1();
$obj->methode2();


