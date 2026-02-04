<?php 

interface Interface1 {
	public function methode2();	
}
interface Interface2 {
	public function methode1();	
}
class Beispiel implements Interface1 {
	public function methode2() {
		echo 'Methode 2';
	}
	
	public function methode3() {
		echo 'Methode 3';
	}
}

$obj = new Beispiel();
$obj->methode2();