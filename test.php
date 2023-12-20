<?php
require('fpdf.php');

// Define test text in Arabic
$arabic_text = "مرحبا بالعالم!";

// Set PDF document properties
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);

// Print original text (for reference)
$pdf->Cell(80, 10, "Original Text:", 0, 1, 'L');
$pdf->Cell(80, 10, $arabic_text, 0, 1, 'L');

$pdf->SetXY(10,50);
$pdf->Cell(80, 10, $arabic_text, 1, 1, 'L');


// Output the PDF document
$pdf->Output('test_arabic.pdf', 'I');

?>