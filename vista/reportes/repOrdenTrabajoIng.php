<?php
require "../../assest/FPDF/fpdf.php";
require_once "../../controlador/ordendetrabajoControlador.php";
require_once "../../modelo/ordendetrabajoModelo.php";

$id = $_GET["id"];
$orden = ControladorOrdenDeTrabajo::ctrRepOrdenTrabajo($id);
/* $today = getdate(); */
date_default_timezone_set('America/La_Paz');
$fecha;
$fecha = $orden['fecha_ordendetrabajo'];
$fecha= date("d/m/Y", strtotime($fecha));
class PDF extends FPDF
{
  private $primeraPagina = true;
  // Page footer
  function Footer()
  {
    if (!$this->primeraPagina) {
      $this->SetY(-15);
      $this->SetX(10);
      $this->SetFont("times", "", 9);
      $this->SetDrawColor(200, 200, 200);
      $this->Cell(62, 8, 'FORM SAESC001', 1, 0, 'C');
      $this->Cell(70, 8, 'REV.06', 1, 0, 'C');
      $this->Cell(63, 8, utf8_decode("FECHA: ") . date('31/01/2023'), 1, 0, 'C');

    }
  }
  
  // Función para marcar que ya no estamos en la primera página
    function SetPrimeraPagina($valor)
    {
        $this->primeraPagina = $valor;
    }
}

// Instanciation of inherited class
$pdf = new PDF('P','mm','Letter');
$pdf->SetMargins(10, 10, 10, 20);
$pdf->AddPage();

//$pdf->SetAutoPageBreak(true, 1);

$pdf->SetFont('Arial', 'B', 16);
$pdf->SetLineWidth(2.5);
$pdf->SetDrawColor(39, 73, 130);
$pdf->Cell(195, 248, '', 1,0);
$pdf->SetXY(12,13);
$pdf->SetLineWidth(0.5);
$pdf->Cell(191, 242, '', 1,0);

$pdf->Image('../../assest/imagenes/gotadeagua.jpg', 50, 30, 110);

$pdf->SetLineWidth(0.5);
$pdf->SetFont('Arial', 'B', 40);
$pdf->setY(100);
$pdf->setX(15);
/* $pdf->SetDrawColor(120,55,250); */
$pdf->Cell(180, 15, utf8_decode('WORK'), 0, 1, 'C');
$pdf->Cell(190, 15, utf8_decode('ORDER'), 0, 1, 'C');
$pdf->SetFont('Arial', '', 30);
$pdf->Cell(190, 12, utf8_decode($orden['numero_ordendetrabajo']), 0, 1, 'C');

$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 40);
$pdf->MultiCell(195, 18, utf8_decode($orden['titulocaratula_ordendetrabajo']), 0, 'C');

//$pdf->Ln(40);
$pdf->setY(230);
$pdf->setX(10);
$pdf->SetFont('Arial', '', 40);
$pdf->Cell(195, 12, utf8_decode($orden['piepaginacaratula_ordendetrabajo']), 0, 1, 'C');

$pdf->Ln(40);


//salto de linea
// Cambiar a la siguiente página
$pdf->AddPage();
// Establecer que ya no estamos en la primera página
$pdf->SetPrimeraPagina(false);

$pdf->Cell(0, 5, "", 0, 1);

$pdf->SetDrawColor(220, 220, 220);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Image('../../assest/imagenes/saee.png', 10, 10, -190);
$pdf->Cell(190, 20, 'WORK ORDER', 0, 2, 'C');


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
$pdf->Cell(35, 5, '1 of 2', 1, 2, 'C');

/* margenes de encabezado*/
$pdf->setY(10);
$pdf->SetX(8);
$pdf->Cell(60, 28, '', 1, 0, 'C');
$pdf->Cell(75, 28, '', 1, 0, 'C');
$pdf->Cell(66, 28, '', 1, 1, 'C');

$pdf->Cell(10, 10, '', 0, 1);

$pdf->SetFont('Arial', '', 10);
$pdf->SetDrawColor(0, 0, 0);
setlocale(LC_TIME, 'es');
$pdf->Cell(100, 8, utf8_decode("DATE: " .$fecha), 1, 0, "");
$pdf->Cell(95, 8, utf8_decode("WORK ORDER N°: ".$orden['numero_ordendetrabajo']), 1, 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(190, 12, utf8_decode("UNIT DESCRIPTION "), 0, 1, 'C');
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(55, 10, utf8_decode("NAME AVIANCA: ".$orden['nombrematricula_ordendetrabajo']),1,0,'');
$pdf->Cell(23, 10, utf8_decode("TH: ".$orden['th_ordendetrabajo'] ),"LTB",0,'');
$pdf->Cell(17, 10, utf8_decode("TC: " .$orden['tc_ordendetrabajo']),"TBR",0,'');

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(60, 10, utf8_decode("MODEL MANUFACTURER/PART NUMBER:"),1,0,'C');
$pdf->Cell(15, 10, utf8_decode($orden['modelo_pn_ordendetrabajo']),1,0,'C');
//$pdf->setXY(165,68);
$pdf->Cell(25, 10, utf8_decode("S/N: ".$orden['sn_ordendetrabajo']),1,0,'');


$pdf->Ln(18);
$pdf->Cell(195, 8, utf8_decode("REQUESTED BY: ".$orden['solicitadapor_ordendetrabajo']), 1, 1, "");

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(35, 11, utf8_decode("AUTHORIZED BY "), 0, 1, 'C');
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(98, 10, utf8_decode("NAME: ".$orden['nombreautorizado_ordendetrabajo']),1,0,'');
$pdf->Cell(97, 10, utf8_decode("SIGNATURE: "),1,1,'');

$pdf->Ln(5);
$ordenes = utf8_decode($orden['descripciondelalcancedeltrabajosolicitado_ordendetrabajo']);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(195, 6, utf8_decode("WORK ORDER DESCRIPTION: "),"LTR",1,'');
$pdf->SetFont('Arial', '', 8);
$pdf->MultiCell(195, 6,($ordenes),"LRB",1,"");


$pdf->Ln(2);
$descTrabajo = utf8_decode($orden['documentosadjuntosrecibidos_ordendetrabajo']);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(195, 6, utf8_decode("ATTACHED DOCUMENTS RECEIVED: "),"LTR",1,'');
$pdf->SetFont('Arial', '', 8);
$pdf->MultiCell(195, 6,($descTrabajo),"LR",1,"");
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(195, 6, utf8_decode("SERVICE GROUND HANDLING AGREEMENT (SGHA)"),"LRB",1,'');
$pdf->SetFont('Arial', '', 8);

/*
$pdf->Ln(2);

$texto2 = ("DESCRIPCION DE TRABAJOS EFECTUADOS:  \n". $descTrabajo);

*/
function espacioenBlanco($texto){
  global $pdf;
  if($texto==""){
    $contenido="\n\n";
  }else{
    $contenido=$texto;
  }
  return $contenido;
}
$pdf->Ln(2);
$ordenTrabajo = utf8_decode($orden['ordenesdetrabajosrelacionadas_ordendetrabajo']);
$texto3 = ("RELATED WORK ORDERS:  \n" . espacioenBlanco($ordenTrabajo));
$pdf->MultiCell(195, 6,($texto3),1,1,"");


$pdf->addPage();

$pdf->Cell(0, 5, "", 0, 1);

$pdf->SetDrawColor(220, 220, 220);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Image('../../assest/imagenes/saee.png', 10, 10, -190);
$pdf->Cell(190, 20, 'WORK ORDER', 0, 2, 'C');


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
$pdf->Cell(35, 5, '2 of 2', 1, 2, 'C');

/* margenes de encabezado pagina 2*/
$pdf->setY(10);
$pdf->SetX(8);
$pdf->Cell(60, 28, '', 1, 0, 'C');
$pdf->Cell(75, 28, '', 1, 0, 'C');
$pdf->Cell(66, 28, '', 1, 1, 'C');
$pdf->Ln(5);
$pdf->SetDrawColor(0, 0, 0);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(105, 8, "WORK PERFORMED",1,0,"C");
$pdf->Cell(45, 8, "STAMP",1,0,"C");
$pdf->Cell(45, 8, "SIGN",1,1,"C");

//preliminary
$pdf->SetFont('Arial', "", 8);
$pdf->Cell(105, 6, "PRELIMINARY:","RL",0);
$pdf->Cell(45, 6, "","RL",0);
$pdf->Cell(45, 6, "","RL",1);

$pdf->Cell(105, 18, "","BLR",0);
$pdf->Cell(45, 18, "","BLR",0);
$pdf->Cell(45, 18, "","BLR",1);

//hidden
$pdf->Cell(105, 6, "HIDDEN:","RL",0);
$pdf->Cell(45, 6, "","RL",0);
$pdf->Cell(45, 6, "","RL",1);

$pdf->Cell(105, 18, "","BLR",0);
$pdf->Cell(45, 18, "","BLR",0);
$pdf->Cell(45, 18, "","BLR",1);

//process
$pdf->Cell(105, 6, "IN PROCESS:","RL",0);
$pdf->Cell(45, 6, "","RL",0);
$pdf->Cell(45, 6, "","RL",1);

$pdf->Cell(105, 18, "","BLR",0);
$pdf->Cell(45, 18, "","BLR",0);
$pdf->Cell(45, 18, "","BLR",1);


$alturaBF=$pdf->GetY();

$descTrabajo = utf8_decode($orden['descripciondetrabajosefectuados_ordendetrabajo']);
$pdf->Cell(105, 8, "FINAL INSPECTION:","LRT",2);
$pdf->MultiCell(105, 6,$descTrabajo,"LRB",0);

$alturaAF=$pdf->GetY();

$pdf->SetXY(115,$alturaBF);
$pdf->Cell(45, $alturaAF-$alturaBF, "",1,0); //saco la diferencia de altura para definir el alto de celda
$pdf->Cell(45, $alturaAF-$alturaBF, "",1,1);

$pdf->Ln(2);
$ordenEntregado = utf8_decode($orden['documentosadjuntosentregados_ordendetrabajo']);
$texto4 = ("ATTACHED DOCUMENTS DELIVERED:  \n" . espacioenBlanco($ordenEntregado));
$pdf->MultiCell(195, 6,($texto4),1,1,"");

$pdf->SetFont('Arial', "", 8);
$pdf->Ln(2);
$observaciones = utf8_decode($orden['observaciones_ordendetrabajo']);
$texto5 = ("REMARKS:  \n" . $observaciones);
$pdf->MultiCell(195, 6,($texto5),1,1,"");


$pdf->Cell(195, 8, utf8_decode("FINISHED BY:  "),"LR",1,'');
$pdf->Cell(195, 8, utf8_decode("NAME:  "),"LR",1,'');
$pdf->Cell(195, 8, utf8_decode("N° LICENCIA:  "),"LR",1,'');
$pdf->Cell(195, 8, utf8_decode("SIGNATURE:  "),"LRB",1,'');


$pdf->Cell(195, 8, utf8_decode("APPROVED BY:  "),"LR",1,'');
$pdf->Cell(195, 8, utf8_decode("NAME:  "),"LR",1,'');
$pdf->Cell(195, 8, utf8_decode("N° LICENCIA:  "),"LR",1,'');
$pdf->Cell(195, 8, utf8_decode("SIGNATURE:  "),"LRB",1,'');

$pdf->Cell(100, 8, utf8_decode("CLOSING DATE: "),"LRB",1,'');
$pdf->Output();
?>