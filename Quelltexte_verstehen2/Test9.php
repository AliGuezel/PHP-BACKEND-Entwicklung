<?php 

interface Beispiel {
	public function methode1();
}
interface Beispiel2 {
	public function methode2();
}

class BeispielKlasse implements Beispiel {
	public function methode1() {
		echo 'Methode 1';
	}
}

$obj = new BeispielKlasse();
$obj->methode1();

