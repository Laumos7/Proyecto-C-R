<?php
include_once('../controller/PDF4.php');
include_once('../model/myDBC4.php');
 
$seleccion = new myDBC();
 

 $fecha= "Fecha Actual: ".date("d") . "/" . date("m") . "/" . date("Y");
 
$pdf=new PDF('L','mm','A3');
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,$fecha,0,1,'R');  
$pdf->header();

 

 
$datosReporte = $seleccion->seleccionar_datos();

$miCabecera = array( 'id', 'nombre', 'correo','contraseña');
 
$pdf->tablaVertical($miCabecera, $datosReporte);
$pdf->footer(); 
$pdf->Output(); //Salida al navegador

?>

