<?php

class Teilnehmer {
    private $teilnehmernummer;
    private $vorname;
    private $nachname;
    private $status;
   
    public function __construct($teilnehmernummer, $vorname, $nachname) {
        $this->teilnehmernummer = $teilnehmernummer;
        $this->vorname = $vorname;
        $this->nachname = $nachname;
    }
    
    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }

    public function ausgabe() {
        echo 'Teilnehmernummer: ' . $this->teilnehmernummer . '<br>';
        echo 'Vorname: ' . $this->vorname . '<br>';
        echo 'Nachname: ' . $this->nachname . '<br>';
        echo 'Status: ' . $this->status . '<br>';
    }  
}

$max = new Teilnehmer(42, 'Max', 'Mustermann');
$max->setStatus('Hoerer');
$max->ausgabe();




