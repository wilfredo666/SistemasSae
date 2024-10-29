<?php
require "../../assest/FPDF/fpdf.php";
require_once "../../controlador/rabControlador.php";
require_once "../../modelo/rabModelo.php";

$id = $_GET["id"];
$ordenRab = ControladorRab::ctrRepRab($id);

date_default_timezone_set('America/La_Paz');

$pdf = new FPDF();
$pdf->AddPage('L', 'A4');
$pdf->SetTopMargin(5);

$pdf->Image('../../assest/imagenes/copia1.jpg', 50, 30, 160);
// $pdf->Image('../../assest/imagenes/botonblanco.jpg', 149, 74.5, 3);
// $pdf->Image('../../assest/imagenes/botonrojo.jpg', 154.5, 67.4, 3);

$pdf->SetFont('Arial','', 7);
$pdf->Cell(92, 5, utf8_decode("1. Autoridad/País Competente que Aprueba"), "TLR", 0);
$pdf->Cell(92, 5, utf8_decode("2. CERTIFICADO DE CONFORMIDAD DE MANTENIMIENTO"), "TLR", 0);
$pdf->Cell(92, 5, utf8_decode("3. Numero de Seguimiento del Formulario"), "TLR", 1);

$pdf->Cell(92, 3.5, utf8_decode("Approving Competent Authority/Country"), "LR", 0);
$pdf->Cell(92, 3.5, utf8_decode("FORMULARIO RAB 001"), "LR", 0);
$pdf->Cell(92, 3.5, utf8_decode("Form Tracking Number"), "LR", 1);

$pdf->SetFont('Arial','B', 7);
$pdf->Cell(92, 3.5, utf8_decode("ESTADO PLURINACIONAL DE BOLIVIA"), "LR", 0);
$pdf->SetFont('Arial','', 7);
$pdf->Cell(92, 3.5, utf8_decode("AUTHORISED RELEASE CERTIFICATE - RAB FORM 001"), "LR", 0);
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(92, 3.5, utf8_decode("No.: SAE 2210/".$ordenRab["num_seguimiento_rab"]), "LR", 1);

$pdf->SetFont('Arial','', 7);
$pdf->Cell(184, 3.5, utf8_decode("4. Nombre y Dirección de la Organización:"), "TLR", 0);
$pdf->Cell(92, 3.5, utf8_decode("4. Orden de Trabajo/Contrato/Factura"), "TLR", 1);

$pdf->Cell(184, 3.5, utf8_decode("Organisation Name and Address"), "LR", 0);
$pdf->Cell(92, 3.5, utf8_decode("Work Order/Contract/Invoice"), "LR", 1);
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(184, 3.5, utf8_decode("SERVICIOS AERONAUTICOS ESPECIALIZADOS"), "LR", 0);
$pdf->Cell(92, 3.5, utf8_decode("No.: ".$ordenRab["orden_trabajo_rab"]), "LR", 1);
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(184, 3.5, utf8_decode("AV. KILLMAN 1691 COCHABAMBA-BOLIVIA"), "LR", 0);
$pdf->Cell(92, 3.5, utf8_decode(""), "LR", 1);

$pdf->SetFont('Arial','', 7);
$pdf->Cell(38, 3.5, utf8_decode("6. Ítem"), "TLR", 0);
$pdf->SetFont('Arial','', 7);
$pdf->Cell(38, 3.5, utf8_decode("7. Descripción"), "TLR", 0);
$pdf->SetFont('Arial','', 7);
$pdf->Cell(36, 3.5, utf8_decode("8. Numero de Parte"), "TLR", 0);
$pdf->SetFont('Arial','', 7);
$pdf->Cell(36, 3.5, utf8_decode("9. Cantidad"), "TLR", 0);
$pdf->SetFont('Arial','', 7);
$pdf->Cell(36, 3.5, utf8_decode("10. Número de Serie"), "TLR", 0);
$pdf->SetFont('Arial','', 7);
$pdf->Cell(92, 3.5, utf8_decode("11. Estado/Trabajo"), "TLR", 1);

$pdf->Cell(38, 3.5, utf8_decode("Item"), "LR", 0);
$pdf->Cell(38, 3.5, utf8_decode("Description"), "LR", 0);
$pdf->Cell(36, 3.5, utf8_decode("Part No."), "LR", 0);
$pdf->Cell(36, 3.5, utf8_decode("Qty."), "LR", 0);
$pdf->Cell(36, 3.5, utf8_decode("Serial No."), "LR", 0);
$pdf->Cell(92, 3.5, utf8_decode("Status/Work"), "LR", 1);

$pdf->SetFont('Arial','B', 7);
$pdf->Cell(38, 5, utf8_decode($ordenRab["item_rab"]), "TLR", 0);
$pdf->Cell(38, 5, utf8_decode($ordenRab["des_rab"]), "TLR", 0);
$pdf->Cell(36, 5, utf8_decode($ordenRab["num_parte_rab"]), "TLR", 0);
$pdf->Cell(36, 5, utf8_decode($ordenRab["cantidad_rab"]), "TLR", 0);
$pdf->Cell(36, 5, utf8_decode($ordenRab["num_serie_rab"]), "TLR", 0);
$pdf->Cell(92, 5, utf8_decode($ordenRab["estado_trabajo_rab"]), "TLR", 1);

$pdf->SetFont('Arial','', 7);

$pdf->Cell(276, 5, utf8_decode("12. Observaciones"), "TLR", 1);
$pdf->Cell(276, 3.5, utf8_decode("Remarks"), "LR", 1);
$pdf->Cell(10, 3.5, "", 0, 0);

$pdf->Line(10,10,10,150);

$pdf->SetFont('Arial','B', 7);
$pdf->MultiCell(266, 3.5, utf8_decode($ordenRab["obs_rab"]), "R", 0);
$pdf->SetFont('Arial','', 7);
$pdf->SetFillColor(217,217,217);
$pdf->Cell(138, 3.5, utf8_decode("13a. Se certifica que los ítems identificados más arriba fueron fabricados de conformidad con:"), "TLR", 0,"L",true);
$pdf->Cell(138, 3.5, utf8_decode("14a.       RAB 144.330(a) Conformidad de mantenimiento"), "TLR", 1);

$pdf->Cell(138, 3.5, utf8_decode("(Certificates that the ítems identificated above were manufactured in conformity to:)"), "LR", 0,"L",true);
$pdf->Cell(138, 3.5, utf8_decode("(LAR 144.330(a) Release to Service)"), "LR", 1);

$pdf->Cell(138, 3.5, utf8_decode("__Datos de Diseño Aprobados y están en Condiciones de Operación Segura"), "LR", 0,"L",true);
$pdf->Cell(138, 3.5, utf8_decode("      Otros reglamentos especificados en la casilla 12"), "LR", 1);

$pdf->Cell(138, 3.5, utf8_decode("(Approved design data and are in a conditions for safe operation)"), "LR", 0,"L",true);
$pdf->Cell(138, 3.5, utf8_decode("(Other regulation specified in block 12)"), "LR", 1);

$pdf->Cell(138, 3.5, utf8_decode("__Datos de Diseño No Aprobados Especificados en la Casilla N0. 12"), "LR", 0,"L",true);
$pdf->Cell(138, 3.5, utf8_decode(""), "LR", 1);
$pdf->Cell(138, 3.5, utf8_decode("(Non-approved desing data specified in block 12)"), "LR", 0,"L",true);

$pdf->MultiCell(138, 3.5, utf8_decode("Se certifica que a menos que se especifique lo contrario en la casilla 12, el trabajo identificado en la casilla 11 y descrito en la casilla 12 se efectuó de acuerdo con el RAB 144 y, con respecto a ese trabajo, se considera que los ítems están listos para ser liberados al servicio.
Certifies that unless otherwise specified in block 12, the work identified in block 11 and described in block 12, was accomplished in accordance with RAB 144 and with respect to that work the items are considered ready for release to service.
"), "LR", 1);

$pdf->Cell(69, 3.5, utf8_decode("13b. Firma Autorizada"), "TLR", 0,"L",true);
$pdf->Cell(69, 3.5, utf8_decode("13c. No. de Autorización/Aprobación"), "TLR", 0,"L",true);
$pdf->Cell(69, 3.5, utf8_decode("14b. Firma Autorizada"), "TLR", 0);
$pdf->Cell(69, 3.5, utf8_decode("14c. No. de Certificado/Ref. Aprobacion"), "TLR", 1);

$pdf->Cell(69, 3.5, utf8_decode("(Authorized Signature)"), "LR", 0,"L",true);
$pdf->Cell(69, 3.5, utf8_decode("(Approval/Authorisation Number)"), "LR", 0,"L",true);
$pdf->Cell(69, 3.5, utf8_decode("(Authorised Signature)"), "LR", 0);
$pdf->Cell(69, 3.5, utf8_decode("(Certificate/Approval Ref. No.)"), "LR", 1);

$pdf->SetFont('Arial','B', 7);
$pdf->Cell(69, 3.5, utf8_decode(""), "LR", 0,"L",true);
$pdf->Cell(69, 3.5, utf8_decode(""), "LR", 0,"L",true);
$pdf->Cell(69, 3.5, utf8_decode(""), "LR", 0);
$pdf->Cell(69, 3.5, utf8_decode("OMA No. N-017"), "LR", 1);

$pdf->SetFont('Arial','', 7);
$pdf->Cell(69, 3.5, utf8_decode("113d. Nombre"), "TLR", 0,"L",true);
$pdf->Cell(69, 3.5, utf8_decode("13e. Fecha (dd/mm/aa)"), "TLR", 0,"L",true);
$pdf->Cell(69, 3.5, utf8_decode("14d. Nombre"), "TLR", 0);
$pdf->Cell(69, 3.5, utf8_decode("14e. Fecha(dd/mm/aa)"), "TLR", 1);

$pdf->Cell(69, 3.5, utf8_decode("(Name)"), "LR", 0,"L",true);
$pdf->Cell(69, 3.5, utf8_decode("(Date [dd/mm/yy])"), "LR", 0,"L",true);
$pdf->Cell(69, 3.5, utf8_decode("(Name)"), "LR", 0);
$pdf->Cell(69, 3.5, utf8_decode("(Date [dd/mm/yy])"), "LR", 1);

$pdf->SetFont('Arial','B', 7);
$pdf->Cell(69, 3.5, utf8_decode(""), "LR", 0,"L",true);
$pdf->Cell(69, 3.5, utf8_decode(""), "LR", 0,"L",true);
$pdf->Cell(69, 3.5, utf8_decode($ordenRab["nombre_rab"]), "LR", 0);
$pdf->Cell(69, 3.5, utf8_decode($ordenRab["fecha_rab"]), "LR", 1);

$pdf->Cell(276, 3.5, utf8_decode("RESPONSABILIDADES DEL USUARIO/INSTALADOR"), "TLR", 1);

$pdf->SetFont('Arial','', 7);
$pdf->MultiCell(276, 3.5, utf8_decode("Este certificado no constituye una autorización automática de instalación. Cuando el usuario/instalador lleva a cabo el trabajo de acuerdo con el reglamento de una autoridad de aeronavegabilidad diferente de la autoridad de aeronavegabilidad especificada en la casilla 1, es esencial que el usuario/instalador asegure que su autoridad de aeronavegabilidad acepta ítems de la autoridad de aeronavegabilidad especificada en la casilla 1.
Las declaraciones de las casillas 13a y 14a no constituyen la certificación de la instalación en todos los casos, los registros de mantenimiento deben incluir una certificación de la instalación emitida de acuerdo con la normativa nacional del usuario/instalador antes de que se pueda operar la aeronave."), "LR", 1);
$pdf->SetFont('Arial','B', 7);
$pdf->Cell(276, 3.5, utf8_decode("USER/INSTALLER RESPONSIBILITIES"), "LR", 1);

$pdf->SetFont('Arial','', 7);
$pdf->Cell(276, 3.5,"This certificate does not automatically constitute authority to install the items(s).", "LR", 1);
$pdf->MultiCell(276, 3.5, utf8_decode("Where the user/installer performs work in accordance with regulations of an airworthiness authority different than the airworthiness authority specified in block 1, it is essential that the user/installer ensures that
his/her airworthiness authority accepts items from the airworthiness authority specified in block 1.
Statements in blocks 13a and 14a do not constitute installation certification. In all cases aircraft maintenance records must contain an installation certification issued in accordance with the national regulations by the user/installer before the aircraft may be flown.
"), "LRB", 1);
$pdf->Output();
?>