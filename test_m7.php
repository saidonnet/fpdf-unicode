<?php
require('fpdf.php');

// Define test text in Arabic
$arabic_text = "مرحبا بكم مرحبا بكم مرحبا بكم مرحبا بكم مرحبا بكم مرحبا بكم مرحبا بكم مرحبا بكم مرحبا بكم مرحبا بكم مرحبا بكم مرحبا بكم ";

// Set PDF document properties
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);

// Use MultiCellUnicode to handle Arabic text
$pdf->SetXY(10,10);

$pdf->MultiCellUnicode(50, 90, $arabic_text, 1, 'R', false); // Example usage


$pdf->SetXY(10,100);

$pdf->Cell(50, 90, "ABCDEFGHGH", 1, 1, 'L');


// Output the PDF document
$pdf->Output('test_arabic.pdf', 'I');
?>
