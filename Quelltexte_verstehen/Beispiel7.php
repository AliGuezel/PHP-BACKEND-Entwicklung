<?php 

final class Beispiel {	
	protected $eigenschaft1 = 10;
	
	public function methode1() {
		echo 'Methode 1';
	}
}

class Tochter extends Beispiel {
	public function methode2() {
		echo $this->eigenschaft1;
	}
	
}

$obj = new Tochter();
$obj->methode2();