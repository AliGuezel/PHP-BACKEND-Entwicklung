<?php 

class Beispiel {
	
	public static $eigenschaft1 = 0;
	
	
	public static function methode1() {
		self::$eigenschaft1++;	
	}
	
	public static function methode2() {
		echo self::$eigenschaft1.'<br>';	
	}
	
}

Beispiel::$eigenschaft1 = 5;
Beispiel::methode1();
Beispiel::methode2();


