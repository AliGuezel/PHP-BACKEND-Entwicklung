<?php 

class Beispiel1 {
		
	public final function methode1() {
		echo "Hallo Welt";	
	}
}

class Beispiel2 extends Beispiel1{
	public final function methode2() {
		echo "Guten Tag";	
	}
}	

class Beispiel3 extends Beispiel2 {
	
}
$obj = new Beispiel3();
$obj->methode2();
