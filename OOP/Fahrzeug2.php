<?php

class Fahrzeug2 {
    private $farbe;
    public $geschwindigkeit = 0;
    
    public function __construct($farbe='blau') {
        $this->farbe = $farbe;
    }
    
    public function beschleunigen() {
        $this->geschwindigkeit += 10;
    }
    /*
     * Über die setter-Methode kann eine Validierung des Eigenschaftswertes 
     * vorgenommen werden. Die setter-Methode setzt die Eigenschaft auf 
     * den gewünschten Wert.
     */
    
    public function setFarbe($farbe) {
        if($farbe == 'rot' || $farbe == 'blau' || $farbe == 'schwarz') {
            $this->farbe = $farbe;
        } else {
            die("Fehler: Farbwert $farbe ungültig");
        }
    }
    
    /*
     * Die getter-Methode liefert den Wert eine Eigenschaft zurück.
     */
    public function getFarbe() {
        return $this->farbe;
    }
    
    public function ausgabe() {
        echo 'Geschwindigkeit: ' . $this->geschwindigkeit . '<br>';
        echo 'Farbe: ' . $this->farbe . '<br>';
    }
}
$opel = new Fahrzeug2('grün');
$opel->beschleunigen();
//$opel->farbe = 'schwarz';
$opel->setFarbe('schwarz2');
$opel->ausgabe();
