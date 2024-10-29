<?php
require "../../assest/FPDF/fpdf.php";
require_once "../../controlador/controlherramientasControlador.php";
require_once "../../modelo/controlherramientasModelo.php";

$id = $_GET["id"];

class PDF extends FPDF
{
  // Pie de página
  function Footer()
  {
    // Posición: a 1.5 cm del final
    $this->SetY(-14); // Ajuste aquí dependiendo del tamaño del pie de página
    // Arial italic 8
    $this->SetFont('Arial', 'I', 8);
    // Número de página
    $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');

    $this->SetFont("times", "", 8);
    $this->SetY(-30);
    $this->SetX(25);
    $this->Cell(40, 8, "PREPARED BY:", "T", 0, "C");
    //$pdf->Cell(40, 8, "", 0, "C");
    $this->SetX(85);
    $this->Cell(40, 8, utf8_decode("ACCEPTED BY QC: "), "T", 0, "C");
    $this->SetX(145);
    $this->Cell(40, 8, utf8_decode("UPDATE DATE: ") . date('d/m/Y'), 0, 0, "C");

    $this->SetY(-20);
    $this->SetX(8);
    $this->SetFont("times", "", 8);
    $this->Cell(65, 8, 'FORM SAESM104', 1, 0, 'C');
    $this->Cell(70, 8, 'REV.05', 1, 0, 'C');
    $this->Cell(65, 8, utf8_decode("DATE: ") . date('11/03/2022'), 1, 0, 'C');

  }
}

$herra = ControladorHerramientas::ctrHerramientas($id);

$today = getdate();




$pdf = new PDF('P', 'mm', 'Letter');
$pdf->AliasNbPages();
$pdf->AddPage();


$pdf->SetFont('Arial', 'B', 11);
$pdf->Image('../../assest/imagenes/gota.jpg', 8, 85, 200);
$pdf->Image('../../assest/imagenes/saee.png', 10, 10, -190);
$pdf->Cell(190, 30, 'CALIBRABLE TOOLS', 0, 2, 'C');


$pdf->SetFont('Arial', '', 8);
$pdf->setY(10);
$pdf->setX(160);
$pdf->SetFillColor(215, 211, 189);

$pdf->Cell(35, 5, 'Approved Maintenance Organization - FAA', 0, 1, 'C');
$pdf->setY(13);
$pdf->setX(160);

$pdf->Cell(35, 5, utf8_decode('Organización de Mantenimiento Aprobada - LAR'), 0, 2, 'C');


$pdf->setY(18);
$pdf->setX(143);
$pdf->Cell(35, 5, 'Code', "TB", 2, 'C');

$pdf->setY(18);
$pdf->setX(174);
$pdf->Cell(35, 5, 'FORM SAESM104', 1, 2, 'C');

$pdf->setY(23);
$pdf->setX(143);
$pdf->Cell(35, 5, 'Revision', "TB", 2, 'C');

$pdf->setY(23);
$pdf->setX(174);
$pdf->Cell(35, 5, '00', 1, 2, 'C');

$pdf->setY(28);
$pdf->setX(143);
$pdf->Cell(35, 5, 'DATE', "TB", 2, 'C');

$pdf->setY(28);
$pdf->setX(174);
$pdf->Cell(35, 5, '14/04/23', 1, 2, 'C');

$pdf->setY(33);
$pdf->setX(143);
$pdf->Cell(35, 5, 'Page Number', "TB", 2, 'C');

$pdf->setY(33);
$pdf->setX(174);
$pdf->Cell(35, 5, '1 of 1', 1, 2, 'C');

/* margenes de encabezado*/
$pdf->setY(10);
$pdf->SetX(8);
$pdf->Cell(60, 28, '', 1, 0, 'C');
$pdf->Cell(75, 28, '', 1, 0, 'C');
$pdf->Cell(66, 28, '', 1, 1, 'C');
$pdf->Cell(66, 8, '', 0, 1, 'C');

$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(61, 140, 205);
$pdf->SetFont('Helvetica', 'B', 8);
$pdf->setX(8);
$pdf->Cell(10, 8, 'ITEM', 1, 0, 'C', true);
$pdf->setX(18);
$pdf->Cell(44, 8, utf8_decode('DESCRIPTION'), 1, 0, 'C', true);
$pdf->setX(62);
$pdf->Cell(23, 8, utf8_decode('PART NUM.'), 1, 0, 'C', true);
$pdf->setX(85);
$pdf->Cell(21, 8, utf8_decode('SERIAL NUM.'), 1, 0, 'C', true);
$pdf->setX(106);
$pdf->Cell(17, 8, utf8_decode('CODE'), 1, 0, 'C', true);
$pdf->setX(123);
$pdf->Cell(21, 8, utf8_decode('CAL. DATE'), 1, 0, 'C', true);
$pdf->setX(144);
$pdf->Cell(20, 8, utf8_decode('VENC. DATE'), 1, 0, 'C', true);
$pdf->setX(164);
$pdf->Cell(31, 8, utf8_decode('LOCATION'), 1, 0, 'C', true);
$pdf->setX(195);
$pdf->SetFont('Helvetica', 'B', 7);
$pdf->MultiCell(14, 4, utf8_decode('FILE NUMBER'), 1, 0, 'C', true);

$pdf->SetFont("Helvetica", "", 7);

$pdf->setTextColor(0, 0, 0);

function limitar_cadena($cadena, $limite, $sufijo)
{
  if (strlen($cadena) > $limite) {
    return substr($cadena, 0, $limite) . $sufijo;
  }
  return $cadena;
}

// Ajuste al añadir contenido
$maxY = 240;

foreach ($herra as $value) {
  // Verifica si el siguiente bloque de contenido sobrepasará la altura máxima
  if ($pdf->GetY() + 8 > $maxY) { // 8 es la altura aproximada de una línea de contenido
    $pdf->AddPage(); // Añade una nueva página si sobrepasa
  }


  $pdf->setX(8);
  $pdf->Cell(10, 8, utf8_decode($value["id_controlherramientas"]), 1, 0);

  $pdf->SetFont("times", "", 6);
  $pdf->Cell(44, 8, limitar_cadena($value["descripcion_controlherramientas"], 32, "..."), 1, 0);
  $pdf->setX(62);

  $pdf->SetFont("times", "", 7);
  $pdf->Cell(23, 8, $value["pn_controlherramientas"], 1, 0, 'C');
  $pdf->Cell(21, 8, $value["numserie_controlherramientas"], 1, 0, 'C');
  $pdf->Cell(17, 8, $value["codigo_controlherramientas"], 1, 0, 'C');
  $pdf->Cell(21, 8, $value["fechacali_controlherramientas"], 1, 0, 'C');

  date_default_timezone_set("America/La_Paz");
  $fecha1 = new DateTime($fecha = date("Y-m-d"));
  $fecha2 = new DateTime($value["fechavenci_controlherramientas"]);
  $diferencia = $fecha1->diff($fecha2);
  $totalDias = $diferencia->days * ($diferencia->invert ? -1 : 1);

  if ($totalDias <= 10 and $totalDias >= 1) {
    $pdf->SetFillColor(255, 221, 51);
    $pdf->Cell(20, 8, $value["fechavenci_controlherramientas"], 1, 0, 'C', true);
  } elseif ($totalDias < 1) {
    $pdf->SetFillColor(223, 50, 26);
    $pdf->Cell(20, 8, $value["fechavenci_controlherramientas"], 1, 0, 'C', true);
  } else {
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(20, 8, $value["fechavenci_controlherramientas"], 1, 0, 'C', true);
  }
  $pdf->setTextColor(0, 0, 0);
  $pdf->Cell(31, 8, $value["ubicacion_controlherramientas"], 1, 0, 'C');
  $pdf->Cell(14, 8, $value["numcarpeta_controlherramientas"], 1, 1, 'C');
}



$pdf->Output();
