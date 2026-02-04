<?php
/*
 * Von einer abstrakten Klasse kann kein Objekt erzeugt werden. 
 * Falls ein Objekt benötigt wird, muss vererbt werden.
 */
abstract class BeispielAbstrakteKlasse {
    
    public function methode1() {
        echo 'Methode 1';
    }
}

class Tochter extends BeispielAbstrakteKlasse {
   
}

$obj = new Tochter();
$obj->methode1();
