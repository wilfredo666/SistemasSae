<?php
require "../../assest/FPDF/fpdf.php";
require_once "../../controlador/controlherramientasControlador.php";
require_once "../../modelo/controlherramientasModelo.php";

$id = $_GET["id"];

$herramientas = ControladorHerramientas::ctrInfoLogHerraCalibrada($id);

$herra = json_decode($herramientas["detalle"]);

$today = getdate();

$pdf = new FPDF('P','mm','Letter');
$pdf->AddPage();
$pdf->SetAutoPageBreak(true,1); 
$pdf->SetFont('Arial','B',16);
$pdf->Image('../../assest/imagenes/logosae1.png',10,10,-250);
$pdf->Cell(200, 22, 'INFORME DE CALIBRACION', 0, 0, 'C');


/* cabecera */
$pdf->SetFont('Arial','B',12);
$pdf->setY(45);
$pdf->Cell(60, 12,utf8_decode('Fecha y hora:'), 0, 0);
$pdf->Cell(100, 12,utf8_decode($herramientas["fecha_hora"]), 1, 1);

$pdf->Cell(60, 12,utf8_decode('Tipo'), 0, 0);
$pdf->Cell(100, 12,utf8_decode($herramientas["estado"]), 1, 1);

$pdf->Cell(60, 12,utf8_decode('Usuario:'), 0, 0);
$pdf->Cell(100, 12,utf8_decode($herramientas["nombre_usuario"]), 1, 1);

$pdf->Cell(60, 12,utf8_decode('Observaciones:'), 0, 0);
$pdf->Cell(100, 12,utf8_decode($herramientas["observacion"]), 1, 1);


/*detalle*/
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(120, 15, "", 0, 1);
$pdf->setX(90);
$pdf->Cell(30, 20, "Detalle", 0, 1, "C");

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(75, 98, 241);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(70, 8, utf8_decode("UBICACION"), 1, 0, "L", true);
$pdf->Cell(45, 8, utf8_decode("DESCRIPCION"), 1, 0, "L", true);
$pdf->Cell(45, 8, "CODIGO", 1, 0, "L", true);
$pdf->Cell(22, 8, "CANTIDAD", 1, 1, "L", true);


$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(0, 0, 0);

foreach($herra as $value){
$herraDesc = ControladorHerramientas::ctrInfoLogHerraDesc($value->id);//extrae informacion de la herramienta a partir del id
  
  $pdf->Cell(70, 8, utf8_decode($herraDesc['ubicacion_controlherramientas']), 1, 0, "L",);
  $pdf->Cell(45, 8, utf8_decode($herraDesc['descripcion_controlherramientas']), 1, 0, "L",);
  $pdf->Cell(45, 8, utf8_decode($herraDesc["codigo_controlherramientas"]), 1, 0, "L",);
  $pdf->Cell(22, 8, utf8_decode($value->cantidad), 1, 1, "L",);//equivale a la cantidad que se presto
}


$pdf->Output();
