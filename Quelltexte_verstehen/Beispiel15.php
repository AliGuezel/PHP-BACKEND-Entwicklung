<?php 

class Beispiel {
	
	private static $eigenschaft1 = 0;
	
	
	public static function methode1() {
		self::$eigenschaft1++;	
	}
	
	public static function methode2() {
		echo self::$eigenschaft1.'<br>';	
	}
	
}
Beispiel::methode1();
Beispiel::methode1();
Beispiel::methode2();
Beispiel::methode1();
Beispiel::methode2();


