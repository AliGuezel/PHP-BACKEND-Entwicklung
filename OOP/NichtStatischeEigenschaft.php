<?php
class BeispielNichtStatischeEigenschaft {
    
    private $eigenschaft1 = 0;

    public function __construct() {
        $this->eigenschaft1++;
    }
    
    public function ausgabe() {
        echo $this->eigenschaft1. '<br>';
    }
}
$obj1 = new BeispielNichtStatischeEigenschaft();
$obj2 = new BeispielNichtStatischeEigenschaft();
$obj1->ausgabe();
$obj2->ausgabe();
