<?php

require 'fpdf.php';

class Rechnung extends FPDF{
    
    public function addLogo($filename) {
        if(file_exists($filename)) {
            $this->Image($filename, 10, 10);            
        } else {
            die("Fehler: Logo-Datei $filename nicht gefunden");
        }
    }
    
    public function addAbsender(array $data) {
        $this->SetFont('Arial', 'BU', 10);
        $this->SetXY(10, 40);
        $txt = $data['Firma'] . ', ' . $data['Inhaber'] . ', ' . $data['Strasse']
                . ', ' . $data['PLZ'] . ' ' . $data['Ort'];
        $this->Cell(130, 10, $txt, 0);
    }
    
    public function addEmpfaenger(array $data) {
        $this->SetFont('Arial', '', 12);
        $this->SetXY(10, 60);
        $this->Cell(130, 7, $data['Anrede'], 0, 2);
        $this->Cell(130, 7, $data['Vorname'] . ' ' . $data['Nachname'], 0, 2);
        $this->Cell(130, 7, $data['Strasse'], 0, 2);
        $this->Cell(130, 7, $data['PLZ'] . ' ' . $data['Ort'], 0, 2);
    }
    
    public function addKontakt(array $data) {
        $this->SetFont('Arial', '', 12);
        $this->SetXY(150, 40);
        foreach ($data as $key => $value) {
            $this->Cell(50, 7, $key.' '.$value, 0, 2);
        }
    }
    
    public function addRechungsdata(array $data) {
        $this->SetFont('Arial', 'B', 14);
        $this->SetXY(10, 110);
        $this->Cell(130, 10, 'Rechnung');
        
        $this->SetFont('Arial', 'B', 11);
        $this->SetXY(150, 110);
        foreach ($data as $key => $value) {
            $this->SetX(150);
            $this->Cell(30, 7, $key, 0);
            $this->Cell(20, 7, $value, 0);
            $this->Ln();
        }
    }
    
    public function addLieferschein() {
        $this->SetFont('Arial', 'B', 14);
        $this->SetXY(10, 110);
        $this->Cell(130, 10, 'Lieferschein');
    }
    
    public function addArtikelListe(array $data) {
        $this->tableHeader();
        $this->SetFont('Arial', '', 10);
        foreach ($data as $key => $row) {
            $this->Cell(100, 7, 'Pos. '.($key+1).' '.$row['Artikel'], 'L');
            $this->Cell(15, 7, $row['Menge'], 'L', 0, 'R');
            $this->Cell(15, 7, $row['Einheit'], 'L');
            $this->Cell(15, 7, $row['MwSt'], 'L', 0, 'R');
            $epreis = number_format($row['E-Preis'], 2, ',', '.');
            $this->Cell(20, 7, $epreis, 'L', 0, 'R');
            $gpreis = number_format($row['E-Preis'] * $row['Menge'], 2, ',', '.');
            $this->Cell(20, 7, $gpreis, 'RL', 0, 'R');
            $this->Ln(); 
        }
        $this->Cell(185, 5, '', 'T');
    }
    
    private function tableHeader() {
        $this->SetFont('Arial', 'B', 10);
        $this->SetXY(10, 150);
        
        $this->Cell(100, 7, 'Artikel oder Leistung', 'LTB');
        $this->Cell(15, 7, 'Menge', 'TB');
        $this->Cell(15, 7, 'Einheit', 'TB');
        $this->Cell(15, 7, 'MwSt', 'TB');
        $this->Cell(20, 7, 'E-Preis', 'TB');
        $this->Cell(20, 7, 'G-Preis', 'RTB');
        $this->Ln(); 
    }
    
    
}
