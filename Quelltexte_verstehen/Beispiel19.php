<?php 

class Beispiel1  {
	public function methode1() {
		echo 'Hallo Welt';	
	}
}

class Beispiel2 extends Beispiel1 {}
class Beispiel3 extends Beispiel2 {}
class Beispiel4 extends Beispiel3 {}

$obj = new Beispiel4();
$obj->methode1();


