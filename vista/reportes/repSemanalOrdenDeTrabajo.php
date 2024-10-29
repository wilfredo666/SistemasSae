<?php
require "../../assest/FPDF/fpdf.php";
require_once "../../controlador/ordendetrabajoControlador.php";
require_once "../../modelo/ordendetrabajoModelo.php";


$ordenes = ControladorOrdenDeTrabajo::ctrInfoOrdenesDeTrabajos();


class PDF extends FPDF
{
  private $primeraPagina = true;
  // Cabecera de página

  function Header(){
    $this->SetFont('Arial', 'B', 14);
    $this->Image('../../assest/imagenes/gotadeagua.jpg', 12, 12, 30);
    $this->Cell(100, 20, '', 0, 0, 'C');
    $this->Cell(70, 20, 'LISTADO ANUAL DE ORDENES DE TRABAJO EMITIDAS', 0, 0, 'C');
    $this->SetFont('Arial', 'B', 6);
    $this->Cell(40, 20, '', 0, 0);
    $this->MultiCell(50, 3, '                     CERTIFICACIONES
DGAC BOLIVIA OMA Nr. N-017
AEROCIVIL COLOMBIA TAREA NR. 042
DGAC CHILE CMAE-448
DGAC ECUADOR Nr. 077
DGAC PERU OMAE Nr. 01
AHAC HONDURAS Nr. CTAE-145-032 HR', 0, 'L');

    $this->Ln(5);

  }

  // Page footer
  function Footer()
  {
    date_default_timezone_set('America/La_Paz');

    $fecha= date("Y-m-d");

    $this->SetY(-15);
    $this->SetX(200);
    $this->setTextColor(0, 0, 0);
    $this->Cell(62, 8, 'FORM SAESC006 REV. 05 FECHA '.$fecha, 0, 0, 'C');

  }

}

$pdf = new PDF('L');
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 9);
$pdf->setFillColor(75, 98, 241);
$pdf->setTextColor(0, 0, 0);
$pdf->Cell(40, 8, "DESCRIPCION", 1, 0, "C", true);
$pdf->Cell(20, 8, utf8_decode("No OT"), 1, 0, "C", true);
$pdf->Cell(45, 8, "CLIENTE", 1, 0, "C", true);
$pdf->Cell(40, 8, "REQUERIMIENTO", 1, 0, "C", true);
$pdf->Cell(28, 4, "COMPONENTE", "LRT", 2, "C", true);
$pdf->Cell(28, 4, "O AERONAVE", "LRB", 0, "C", true);
$pdf->SetY(36);
$pdf->SetX(183);
$pdf->Cell(25, 8, "P/N", 1, 0, "C", true);
$pdf->Cell(25, 8, "S/N", 1, 0, "C", true);
$pdf->Cell(25, 8, "FECHA INICIO", 1, 0, "C", true);
$pdf->Cell(25, 8, "FECHA CIERRE", 1, 1, "C", true);



$pdf->SetFont('Arial','', 8);

foreach ($ordenes as $value) {

  $x = $pdf->GetX();
  $y = $pdf->GetY();

  $pdf->MultiCell(40, 4,$value["estados_ordendetrabajo"]."
  ".utf8_decode($value["descripciondelalcancedeltrabajosolicitado_ordendetrabajo"]), 1);

  $altura=($pdf->GetY())-$y;//altura de la descripcion
  $lnAlto=$pdf->GetY();//poscicion y para la linea de requerimiento
  $pdf->SetXY($x+40 , $y);

  $pdf->Cell(20, $altura, $value["numero_ordendetrabajo"], 1, 0);
  $pdf->Cell(45, $altura, $value["solicitadapor_ordendetrabajo"], 1, 0);//cliente

  $x = $pdf->GetX();
  $y = $pdf->GetY();


  $pdf->MultiCell(40, 4, utf8_decode($value["documentosadjuntosrecibidos_ordendetrabajo"]), "LRT");//requerimiento

  $pdf->Line($x,$lnAlto,$x+40,$lnAlto);//dibuja linea para la columna requerimiento
  
  $pdf->SetXY($x + 40, $y);
  $pdf->Cell(28, $altura, $value["nombrematricula_ordendetrabajo"], 1, 0);//componente
  $pdf->Cell(25, $altura, $value["modelo_pn_ordendetrabajo"], 1, 0);
  $pdf->Cell(25, $altura, $value["sn_ordendetrabajo"], 1, 0);
  $pdf->Cell(25, $altura, $value["fecha_ordendetrabajo"], 1, 0);
  $pdf->Cell(25, $altura, $value["fechacierre_ordendetrabajo"], 1, 1);
  
  //comprobamos si las tablas excedieron el alto de las paginas
  if( ($pdf->GetY())>160){
    $pdf->AddPage();
  }

}
$pdf->Output();
?>