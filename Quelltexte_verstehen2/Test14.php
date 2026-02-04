<?php 

class Beispiel1 {
		
	public function methode1() {
		echo "Hallo Welt";	
	}
}

class Beispiel2 extends Beispiel1{
	public function methode2() {
		echo "Guten Tag";	
		parent::methode1();
	}
}	


$obj = new Beispiel2();
$obj->methode1();
