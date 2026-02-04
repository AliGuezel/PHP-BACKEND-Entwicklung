<?php 

abstract class Beispiel {
	public function methode1() {
		echo "Methode 1";
	}
}
class Tochter extends Beispiel {
	
}
$obj = new Tochter();
$obj->methode1();

