<?php
include_once('PDF1.php');
include_once('../model/myDBC.php');
 
$seleccion = new myDBC();
 

 $fecha= " Fecha: ".date("d") . "/" . date("m") . "/" . date("Y");
 
$pdf=new PDF('L','mm','A3');
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,10,$fecha,0,1,'R');  
$pdf->header();

 

 
$datosReporte = $seleccion->seleccionar_datos();

$miCabecera = array( 'id', 'nombre', 'apellido','documento','FechaNac','Direccion','estado');
 
$pdf->tablaVertical($miCabecera, $datosReporte);
$pdf->footer(); 
$pdf->Output(); //Salida al navegador

?>

