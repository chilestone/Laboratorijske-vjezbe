<?php
require('../../fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

$tekst = file_get_contents("text.txt");
$pdf->MultiCell(0, 8, $tekst);

$pdf->Output();
