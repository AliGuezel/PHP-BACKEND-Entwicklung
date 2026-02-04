<?php
class Fahrzeug {
    public $farbe;
    public $geschwindigkeit = 0;
    
    /*
     * Der Konstruktor ist eine "Magische Methode". Jede Magische
     * Methode beginnt mit einem Doppel-Unterstrich und wird bei einem
     * bestimmten Ereignis automatisch durchlaufen.
     * Der Konstruktor wird automatisch durchlaufen, wenn ein neues Objekt erzeugt wird.
     */
    
    public function __construct($farbe='blau') {
        echo 'Konstruktor<br>';
        $this->farbe = $farbe;
    }
    /*
     * Der Destruktor wird automatisch durchlaufen, wenn das Objekt zerstört wird. 
     * Jedes Objekt unter PHP wird spätestens am Ende des Skript automatisch zerstört,
     * unabhängig vom Destruktor.
     */
    public function __destruct() {
        echo 'Destruktor<br>';
    }
    
    public function beschleunigen() {
        $this->geschwindigkeit += 10;
    }
    
    public function bremsen() {
        $this->geschwindigkeit -= 5;
    }
    
    public function ausgabe() {
        echo 'Geschwindigkeit: ' . $this->geschwindigkeit . '<br>';
        echo 'Farbe: ' . $this->farbe . '<br>';
    }
}

$opel = new Fahrzeug('rot');
$opel->beschleunigen();
$opel->beschleunigen();
$opel->bremsen();
$opel->ausgabe();

$vw = new Fahrzeug('gelb');
$vw->beschleunigen();
$vw->ausgabe();