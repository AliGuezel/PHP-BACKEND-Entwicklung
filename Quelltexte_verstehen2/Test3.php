<?php 

class Beispiel {
	
	private $zahl = 0;
	
	public function __construct() {
		$this->zahl++;
	}
	public function display() {
		echo $this->zahl.'<br>';	
	}	
}
$obj = new Beispiel();
$obj2 = new Beispiel();
$obj->display();
$obj2->display();
