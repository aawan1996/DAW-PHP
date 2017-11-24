<?php
require('../../../../fpdf/fpdf.php');  			//Añadimos librería

$pdf=new FPDF();					//Creamos instancia
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
//Con Cell, escribimos en la página, 40 = ancho celda, 10 = alto)
$pdf->Cell(40,10,'¡Mi primera página pdf con FPDF!');
$pdf->Output();					//Cerramos el archivo
?>
