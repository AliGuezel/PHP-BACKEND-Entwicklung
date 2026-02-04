<?php

class Mensch {
    // Eigenschaften
    public $geschlecht;
    public $alter;
    public $gewicht;
    
    // Methoden
    public function sprechen() {
        echo 'sprechen<br>';
    }
    
    public function denken() {
        echo 'denken<br>';
    }
    
    public function atmen() {
        echo 'atmen<br>';
    }
}

$peter = new Mensch();
$peter->atmen();
$peter->denken();
