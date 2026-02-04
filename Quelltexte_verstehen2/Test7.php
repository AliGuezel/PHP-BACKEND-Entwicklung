<?php 

abstract class Beispiel {
	public function methode1() {
		echo "Methode 1";
	}
	
	public abstract function methode2();
}
class Tochter extends Beispiel {
	
	public function methode2() {
		return 'Methode 2';
	}		
}
$obj = new Tochter();
echo $obj->methode2();

