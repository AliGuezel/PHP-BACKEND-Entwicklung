<?php 

class Beispiel {
	
	private static $farbe;
	
	public function setFarbe($farbe) {
		self::$farbe = $farbe;
	}
	
	public function display() {
		echo self::$farbe.'<br>';	
	}	
}
$obj = new Beispiel();
$obj->setFarbe('gelb');
$obj->setFarbe('rot');

$obj->display();
$obj->display();
