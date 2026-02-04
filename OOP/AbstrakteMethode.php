<?php

abstract class BeispielAbstrakteMethode {
    public function methode1() {
        echo 'Methode 1<br>';
    }

    /*
     * Eine abstrakte Methode kann nur in abstrakten Klasse vorkommen.
     * Eine abstrakte Methode besitzt keinen Körper und muss in der Kindklasse
     * zwingend implmentiert werden.
     */
    public abstract function methode2();
    public abstract function methode3($str);   
}

class Tochter extends BeispielAbstrakteMethode {
   
    public function methode2() {
        
    }

    public function methode3($str) {
        
    }
}



