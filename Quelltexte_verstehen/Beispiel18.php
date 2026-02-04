<?php 

class Beispiel {
	
	private $eigenschaft1 = 0;
	
	
	public function methode1() {
		$this->eigenschaft1++;	
	}
	
	public function methode2() {
		echo $this->eigenschaft1.'<br>';	
	}
	
}

$obj = new Beispiel();
$obj->methode1();
$obj->methode2();
$obj2 = new Beispiel();
$obj2->methode1();
$obj2->methode2();