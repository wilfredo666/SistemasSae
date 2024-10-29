<?php
require "../../assest/FPDF/fpdf.php";
require_once "../../modelo/conexion.php";
require_once "../../controlador/controlherramientasControlador.php";
require_once "../../modelo/controlherramientasModelo.php";

/* ============================= 1 */
$id = $_GET["id"];

$info = ControladorHerramientas::ctrInfoInforme($id);
/* ----------------------------------------------------- */

$pdf = new FPDF('P', 'mm', 'Letter');
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 1);
$pdf->SetMargins(5, 5, 5);

$pdf->SetFont('Arial', 'B', 20);
$pdf->Image('../../assest/imagenes/saee.png', 10, 10, -190);
$pdf->Image('../../assest/imagenes/gota.jpg', 8, 105, 200);
$pdf->Cell(190, 30, 'REPORT', 0, 2, 'C');


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

$pdf->setY(44);
$pdf->SetX(8);
$pdf->SetFont('Helvetica', 'B', 10);
$pdf->Cell(160, 8, 'PLACE AND DATE: Cochabamba, ' . $info['fecha_informe'], 1, 0, 'L');
$pdf->Cell(40, 8, 'No.:', 1, 0, 'L');
$pdf->SetFont('Helvetica', '', 10);
$pdf->SetX(-35);
$pdf->Cell(40, 8, $info['num_informe'], 0, 1, 'L');

$pdf->setY(52);
$pdf->SetX(8);
$pdf->SetFont('Helvetica', 'B', 10);
$pdf->Cell(200, 8, 'FROM: ', 0, 0, 'L');

$pdf->SetFont('Helvetica', '', 10);
$pdf->SetX(-195);
$pdf->Cell(200, 8, utf8_decode($info['de_informe']), 0, 1, 'L');

$pdf->SetFont('Helvetica', 'B', 10);
$pdf->SetX(8);
$pdf->Cell(200, 8, 'TO: ', 0, 0, 'L');
$pdf->SetFont('Helvetica', '', 10);
$pdf->SetX(-195);
$pdf->Cell(200, 8, utf8_decode($info['a_informe']), 0, 1, 'L');
$pdf->setY(52);
$pdf->SetX(8);
$pdf->Cell(200, 16, '', 1, 1, 'L');

$pdf->SetX(15);
$pdf->SetFont('Helvetica', 'B', 10);
$pdf->Cell(200, 10, 'AFFAIR: ', 0, 0, 'L');
$pdf->SetFont('Helvetica', '', 10);
$pdf->SetX(-180);
$pdf->Cell(200, 10, utf8_decode($info['asunto_informe']), 0, 1, 'L');
$pdf->SetX(15);
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(190, 6, utf8_decode($info['conclusion_informe']), 0, 1, 'L');

$pdf->Cell(10, 5, '', 0, 1, 'C', true);
$pdf->SetFont('Helvetica', 'B', 8);
$pdf->setX(10);
$pdf->SetFillColor(61, 140, 205);
$pdf->SetTextColor(255, 255, 255);
 $pdf->Cell(8, 8, 'ITEM', 1, 0, 'C', true);

$pdf->Cell(45, 8, utf8_decode('DESCRIPTION'), 1, 0, 'C', true);
$pdf->Cell(14, 8, utf8_decode('P/N'), 1, 0, 'C', true);
$pdf->Cell(14, 8, utf8_decode('S/N'), 1, 0, 'C', true);
$pdf->Cell(14, 8, utf8_decode('CODE'), 1, 0, 'C', true);
$pdf->Cell(30, 8, utf8_decode('BRAND'), 1, 0, 'C', true);
$pdf->Cell(10, 8, utf8_decode('AMT.'), 1, 0, 'C', true);
$pdf->Cell(15, 8, utf8_decode('UNIT'), 1, 0, 'C', true);
$pdf->Cell(25, 8, utf8_decode('UBICATION'), 1, 0, 'C', true);
$pdf->Cell(21, 8, utf8_decode('EXP. DATE'), 1, 1, 'C', true);

$pdf->SetFont('Helvetica', 'B', 7);

function limitar_cadena($cadena, $limite, $sufijo)
{
    if (strlen($cadena) > $limite) {
        return substr($cadena, 0, $limite) . $sufijo;
    }
    return $cadena;
}

$herramientaIndividual = explode(',', $info['herra_seleccionados']);

foreach ($herramientaIndividual as $value) {
    $herra = ControladorHerramientas::ctrSelecHerramientas($value);
    $pdf->SetFont('Helvetica', '', 8);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->setX(10);
    $pdf->Cell(8, 8, utf8_decode($herra["id_controlherramientas"]), 1, 0);
    $pdf->Cell(45, 8, limitar_cadena($herra["descripcion_controlherramientas"], 23, "..."), 1, 0);
    $pdf->Cell(14, 8, $herra["pn_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(14, 8, $herra["numserie_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(14, 8, $herra["codigo_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(30, 8, $herra["marcaofabri_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(10, 8, $herra["cantidad_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(15, 8, $herra["unidad_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(25, 8, $herra["ubicacion_controlherramientas"], 1, 0, 'C');
    //fecha de caducidad - pintado
    date_default_timezone_set("America/La_Paz");
    $fecha1 = new DateTime($fecha = date("Y-m-d"));
    $fecha2 = new DateTime($herra["fechavenci_controlherramientas"]);
    $diferencia = $fecha1->diff($fecha2);
    $totalDias = $diferencia->days * ($diferencia->invert ? -1 : 1);
    if ($totalDias <= 10 and $totalDias >= 1) {
        $pdf->SetFillColor(255, 221, 51);
        $pdf->Cell(21, 8, $herra["fechavenci_controlherramientas"], 1, 0, 'C', true);
    } elseif ($totalDias < 1) {
        $pdf->SetFillColor(223, 50, 26);
        $pdf->Cell(21, 8, $herra["fechavenci_controlherramientas"], 1, 0, 'C', true);
    } else {
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Cell(21, 8, $herra["fechavenci_controlherramientas"], 1, 0, 'C', true);
    }


    $pdf->Cell(0.1, 8, "", 1, 1, 'C');
}

//CUADRO DE ASUNTO
$pdf->SetTextColor(0, 0, 0);
$pdf->setY(68);
$pdf->SetX(8);
$pdf->Cell(200, 170, '', 1, 1, 'L');
$pdf->SetX(8);
$pdf->SetFont('Helvetica', 'B', 10);
$pdf->Cell(200, 8, 'NAME:', "RTL", 0, 'L');
$pdf->SetFont('Helvetica', '', 10);
$pdf->SetX(-190);
$pdf->Cell(200, 8, utf8_decode($info['encargado_informe']), "", 1, 'L');
$pdf->SetX(8);
$pdf->SetFont('Helvetica', 'B', 10);
$pdf->Cell(200, 8, 'SIGNATURE:', "RBL", 1, 'L');
$pdf->Cell(200, 5, '', "", 1, 'L');

date_default_timezone_set('America/La_Paz');
//PIE DE PÁGINA
$pdf->SetY(-20);
$pdf->SetX(8);
$pdf->SetFont("times", "", 8);
$pdf->Cell(65, 8, 'FORM SAESM104', 1, 0, 'C');
$pdf->Cell(70, 8, 'REV.05', 1, 0, 'C');
$pdf->Cell(65, 8, utf8_decode("DATE: ") . date('11/03/2022'), 1, 0, 'C');

$pdf->Output();
