<?php 

abstract class Beispiel {
	public function methode1() {
		echo "Methode 1";
	}
	
	public abstract function methode2();
}
class Tochter extends Beispiel {
	
	public function methode2($zahl1, $zahl2) {
		return $zahl1 + $zahl2;
	}		
}
$obj = new Tochter();
$obj->methode1();

