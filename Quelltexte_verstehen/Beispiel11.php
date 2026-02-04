<?php 

class Beispiel {
	public function __construct() {
		echo 'Hallo Welt<br>';
	}
	
	private function methode1() {
		echo 'Methode 1<br>';	
	}
	
	public function methode2() {
		$this->methode1();
		echo 'Methode 2<br>';	
	}
}

$obj = new Beispiel();
$obj->methode2();