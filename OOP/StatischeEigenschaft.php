<?php
class BeispielStatischeEigenschaft {
    /*
     * Eine statische Eigenschaft ist klassengebunden. Egal wie viele
     * Objekte von dieser Klasse erzeugt wird, die statische Eigenschaft
     * existiert nur einmal.
     */
    private static $eigenschaft1 = 0;

    public function __construct() {
        self::$eigenschaft1++;
    }
    
    public function ausgabe() {
        echo self::$eigenschaft1 . '<br>';
    }
}
$obj1 = new BeispielStatischeEigenschaft();
$obj2 = new BeispielStatischeEigenschaft();
$obj3 = new BeispielStatischeEigenschaft();
$obj1->ausgabe();
$obj2->ausgabe();
