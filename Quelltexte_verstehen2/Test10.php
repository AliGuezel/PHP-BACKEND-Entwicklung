<?php 

interface Beispiel {
	public function methode1();
}

class BeispielKlasse implements Beispiel {
	public function methode1() {
		echo 'Methode 1';
	}
}

$obj = new BeispielKlasse();
$obj->methode1();