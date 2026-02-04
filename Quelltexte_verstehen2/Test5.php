<?php 

abstract class Beispiel {
	public function methode1() {
		echo "Methode 1";
	}
	
	public abstract function methode2();
}
class Tochter extends Beispiel {
	
	
}
$obj = new Tochter();
$obj->methode1();

