<?php 

abstract class Beispiel {
	
	public abstract function methode1();
	public final function methode2($str) {
		echo 'Methode 2 ' . $str;
	}
}

class Tochter extends Beispiel {
	public function methode1() {
		echo 'Methode 1';
	}
}

$obj = new Tochter();
$obj->methode2('Test');