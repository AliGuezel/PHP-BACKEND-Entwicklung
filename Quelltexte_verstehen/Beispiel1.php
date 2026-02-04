<?php 

class Beispiel {
	
	public abstract function methode1();
	public abstract function methode2($str);
	
}

class Tochter extends Beispiel {
	public function methode1() {
		echo 'Methode 1';
	}
	public function methode2($str) {
		echo 'Methode 2 ' . $str;
	}
}

$obj = new Tochter();
$obj->methode1();