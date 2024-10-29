<?php
require "../../assest/FPDF/fpdf.php";
require_once "../../controlador/controlherramientasControlador.php";
require_once "../../modelo/controlherramientasModelo.php";

$id = $_GET["id"];

class PDF extends FPDF
{
   function Footer()
    {
        // Posición: a 1.5 cm del final
        $this->SetY(-14); // Ajuste aquí dependiendo del tamaño del pie de página
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');

        // Agregar texto adicional al pie de página
        $this->SetFont("times", "", 8);
        $this->SetY(-30); // Ajuste de posición Y para mantener un buen margen
        $this->SetX(25);
        $this->Cell(40, 8, "PREPARADO POR:", "T", 0, "C");
        $this->SetX(85);
        $this->Cell(40, 8, utf8_decode("Vo Bo CONTROL DE CALIDAD"), "T", 0, "C");
        $this->SetX(145);
        $this->Cell(40, 8, utf8_decode("FECHA DE ACTUALIZACIÓN: ") . date('d/m/Y'), 0, 0, "C");

        // Ajustar más el pie de página
        $this->SetY(-20); // Para la siguiente línea
        $this->SetX(8);
        $this->SetFont("times", "", 8);
        $this->Cell(65, 8, 'FORM SAESM104', 1, 0, 'C');
        $this->Cell(70, 8, 'REV.05', 1, 0, 'C');
        $this->Cell(65, 8, utf8_decode("FECHA: ") . date('11/03/2022'), 1, 0, 'C');
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
$pdf->Cell(190, 30, 'LISTA DE EQUIPOS Y HERRAMIENTAS', 0, 2, 'C');
$pdf->setY(33);
$pdf->Cell(190, 0, 'CALIBRABLE', 0, 1, 'C');
$pdf->SetFont('Arial', '', 9);
$pdf->setY(10);
$pdf->setX(160);
$pdf->SetFillColor(215, 211, 189);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(35, 5, 'CERTIFICACIONES', 0, 1, 'C');
$pdf->setY(14);
$pdf->setX(160);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(35, 5, 'DGAC BOLIVIA OMA No N-017', 0, 2, 'C');
$pdf->setY(18);
$pdf->setX(160);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(35, 5, 'AEROCIVIL COLOMBIA TARE No. 042', 0, 2, 'C');
$pdf->setY(22);
$pdf->setX(160);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(35, 5, 'DGAC CHILE E-448', 0, 2, 'C');
$pdf->setY(26);
$pdf->setX(160);
$pdf->Cell(35, 5, 'DGAC ECUADOR No. 077', 0, 2, 'C');
$pdf->setY(30);
$pdf->setX(160);
$pdf->Cell(35, 5, 'DGAC PERU OMAE No. 019', 0, 2, 'C');
$pdf->setY(34);
$pdf->setX(160);
$pdf->Cell(35, 5, 'AHAC HONDURAS No. CTAE-145-032 HR', 0, 2, 'C');

$pdf->setY(10);
$pdf->SetX(8);
$pdf->Cell(60, 30, '', 1, 0, 'C');
$pdf->Cell(75, 30, '', 1, 0, 'C');
$pdf->Cell(66, 30, '', 1, 1, 'C');

$pdf->Cell(66, 8, '', 0, 1, 'C');

$pdf->SetTextColor(255, 255, 255);
$pdf->SetFillColor(61, 140, 205);
$pdf->SetFont('Helvetica', 'B', 8);
$pdf->setX(8);
$pdf->Cell(10, 8, 'ITEM', 1, 0, 'C', true);
$pdf->setX(18);
$pdf->Cell(44, 8, utf8_decode('DESCRIPCIÓN'), 1, 0, 'C', true);
$pdf->setX(62);
$pdf->Cell(23, 8, utf8_decode('NRO DE PARTE'), 1, 0, 'C', true);
$pdf->setX(85);
$pdf->Cell(21, 8, utf8_decode('NRO DE SERIE'), 1, 0, 'C', true);
$pdf->setX(106);
$pdf->Cell(17, 8, utf8_decode('CÓDIGO'), 1, 0, 'C', true);
$pdf->setX(123);
$pdf->Cell(21, 8, utf8_decode('FECHA CAL.'), 1, 0, 'C', true);
$pdf->setX(144);
$pdf->Cell(20, 8, utf8_decode('FECHA VENC.'), 1, 0, 'C', true);
$pdf->setX(164);
$pdf->Cell(31, 8, utf8_decode('UBICACIÓN'), 1, 0, 'C', true);
$pdf->setX(195);
$pdf->SetFont('Helvetica', 'B', 7);
$pdf->MultiCell(14, 4, utf8_decode('No CARPETA'), 1, 0, 'C', true);

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
$maxY = 240; // Ajustar este valor dependiendo del tamaño de tu pie de página y márgenes

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

    // Calcula la diferencia de fechas
    date_default_timezone_set("America/La_Paz");
    $fecha1 = new DateTime(date("Y-m-d"));
    $fecha2 = new DateTime($value["fechavenci_controlherramientas"]);
    $diferencia = $fecha1->diff($fecha2);
    $totalDias = $diferencia->days * ($diferencia->invert ? -1 : 1);

    // Definir color de la celda en base a la fecha de vencimiento
    if ($totalDias <= 10 and $totalDias >= 1) {
        $pdf->SetFillColor(255, 221, 51);
    } elseif ($totalDias < 1) {
        $pdf->SetFillColor(223, 50, 26);
    } else {
        $pdf->SetFillColor(255, 255, 255);
    }

    $pdf->Cell(20, 8, $value["fechavenci_controlherramientas"], 1, 0, 'C', true);
    $pdf->setTextColor(0, 0, 0);
    $pdf->Cell(31, 8, $value["ubicacion_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(14, 8, $value["numcarpeta_controlherramientas"], 1, 1, 'C');
}

$pdf->Output();
