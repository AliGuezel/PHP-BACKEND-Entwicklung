<?php

class Fahrzeug {

    /*
     * Sichtbarkeiten:
     * public:      Zugriff überall, auch außerhalb der Klasse möglich 
     * protected:   Zugriff nur innerhalb der Klasse und in der Kindklasse möglich
     * private:     Zugriff nur innerhalb der Klasse möglich
     */
    
    private $farbe;
    protected $geschwindigkeit = 0;

    public function __construct($farbe = 'blau') {
        $this->farbe = $farbe;
    }

    public function beschleunigen() {
        $this->geschwindigkeit += 10;
    }
    
    public function getFarbe() {
        return $this->farbe;
    }

    
    public function ausgabe() {
        echo 'Geschwindigkeit: ' . $this->geschwindigkeit . '<br>';
        echo 'Farbe: ' . $this->farbe . '<br>';
    }
}

class Helikopter extends Fahrzeug {
    private $hoehe = 0;
    
    public function aufsteigen() {
        $this->hoehe += 2;
    }
    
    // Die Methode ausgabe() überschreibt die Methode ausgabe() von der Elternklasse 
    
//    public function ausgabe() {
//        echo 'Geschwindigkeit: ' . $this->geschwindigkeit . '<br>';
//        echo 'Farbe: ' . $this->getFarbe() . '<br>';
//        echo 'Höhe: ' . $this->hoehe . '<br>';
//    }
    
    public function ausgabe() {
        // Die Methode ausgabe() der Elternklasse wird hier aufgerufen
        parent::ausgabe();
        echo 'Höhe: ' . $this->hoehe . '<br>';
    }
}

$heli = new Helikopter('gelb');
$heli->beschleunigen();
$heli->aufsteigen();
$heli->ausgabe();