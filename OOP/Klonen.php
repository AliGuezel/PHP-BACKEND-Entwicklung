<?php
class Schaf {
    private $farbe;
    private $alter;
    
    public function __construct($farbe, $alter) {
        $this->farbe = $farbe;
        $this->alter = $alter;
    }
    /*
     * Die Magische Methode __clone() wird automatisch durchlaufen,
     * wenn ein Objekt geklont wird - für den Klon wird die Methode durchlaufen.
     */
    public function __clone() {
        $this->alter = 0;
    }
    
    public function setFarbe($farbe){
        $this->farbe = $farbe;
    }

    public function ausgabe() {
        echo 'Farbe: ' . $this->farbe . '<br>';
        echo 'Alter: ' . $this->alter . '<br>';
    }
}
$tanja = new Schaf('weiß', 3);
// Keine Kopie!!! (Referenz);
//$dolly = $tanja;
$dolly = clone $tanja;

$dolly->setFarbe('schwarz');

$tanja->ausgabe();
$dolly->ausgabe();
