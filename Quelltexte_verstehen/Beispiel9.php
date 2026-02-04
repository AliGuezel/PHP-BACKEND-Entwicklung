<?php 

interface Interface1 {
	public function methode2;	
}

class Beispiel implements Interface1 {
	public function methode2() {
		echo 'Hallo Welt';
	}
	
}

$obj = new Beispiel();
$obj->methode2();