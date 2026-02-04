<?php

class BeispielStatischeMethode {
    
    private $eigenschaft1 = 100;

    public static function methode1() {
        echo 'Methode 1';
    }

    /*
     * Diese Methode kann nicht statisch sein, 
     * da $this ein Ausschlußkriterium ist für eine statische Methode.
     */
    
    public  function methode2() {
        echo $this->eigenschaft1;
    }
}
//$obj = new BeispielStatischeMethode();
//$obj->methode1();

BeispielStatischeMethode::methode1();