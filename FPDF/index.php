<?php
//require 'classes/fpdf.php';
//
//$pdf = new FPDF();
//$pdf->AddPage();
//$pdf->SetFont('Arial','BIU',16);
//$pdf->Cell(40,10,'Hello World!',1);
//$pdf->SetFont('Arial','',12);
//$pdf->Cell(40,10,'ZWEI',1,2,'R');
//$pdf->Cell(40,10,'DREI',1);
//$pdf->Output();

require 'classes/PDFTable.php';
$pdf = new PDFTable();
//$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$data = [
    ['A1','A2','A3'],
    ['B1','B2','B3'],
    ['C1','C2','C3'],
];
$pdf->table($data);
$pdf->Output();


?>