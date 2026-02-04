<?php 

abstract class Beispiel {
	
	public abstract function methode1();
	public function methode2($str) {
		echo 'Methode 2 ' . $str;
	}
	
}

class Tochter extends Beispiel {
	public function methode1() {
		echo 'Methode 1';
	}
	public function methode2($str) {
		echo 'Hallo Welt '. $str;
	}
}

$obj = new Tochter();
$obj->methode2('Test');