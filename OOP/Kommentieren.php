<?php

/**
 * Diese Klasse ist ein Beispiel für die Kommentierung einer Klasse.
 * @author John Doe <john.doe@example.com>
 * @copyright (c) 2022, John Doe
 */
class Kommentieren {
    /**
     * Alter des Fahrzeugs in Jahren
     * @var int
     */
    public $alter;
    /**
     * Geschwindigkeit des Fahrzeugs in km/h
     * @var float
     */
    public $geschwindigkeit = 0; 
    /**
     * Farbe des Fahrzeugs
     * @var string
     */
    protected $farbe;
    /**
     * Setzt die Startfarbe und das Alter des Fahrzeugs
     * @param int $alter Alter des Fahrzeugs in Jahren
     * @param string $farbe Farbe des Fahrzeugs
     */
    public function __construct($alter, $farbe) {
        $this->alter = $alter;
        $this->farbe = $farbe;
    }
    /**
     * Addiert zwei Zahlenwerte
     * @param int $zahl1 1. Zahl
     * @param int $zahl2 2. Zahl
     * @return int Ergebnis der Addition
     */
    public function addieren($zahl1 , $zahl2) {
        return $zahl1 + $zahl2;
    }
}

$obj = new Kommentieren(20, 'rot');
