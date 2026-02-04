<?php

require 'classes/fpdf.php';

class PDFTable extends FPDF{
    
    public function __construct($orientation = 'P', $unit = 'mm', $size = 'A4') {
        parent::__construct($orientation, $unit, $size);
        $this->AddPage();
    }
    
    public function table(array $data) {
        foreach ($data as $row) {
            foreach ($row as $value) {
                $this->Cell(20, 10, $value, 1);
            }
            $this->Ln();
        }
    }  
}
