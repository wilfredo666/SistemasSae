<?php
require "../../assest/FPDF/fpdf.php";
require_once "../../controlador/controlherramientasControlador.php";
require_once "../../modelo/controlherramientasModelo.php";

$id = $_GET["idTec"];

//datos del tecnico
if($id == "todos"){
  $nombreTecnico= "TODOS LOS TÉCNICOS";
}else{
  require_once "../../controlador/usuarioControlador.php";
  require_once "../../modelo/usuarioModelo.php";
  $tecnico = ControladorUsuario::ctrInfoUsuario($id);
  $nombreTecnico=$tecnico["nombre_usuario"];
}

//consulta de items prestados
$reporte=ControladorHerramientas::ctrRepPresTecnicoPdf($id);


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
    $this->SetY(-48); // Ajuste de posición Y para mantener un buen margen
    $this->SetX(8);
    $this->Cell(87, 20, utf8_decode("FIRMA - RECIBÍ CONFORME"),1, 0, "C");
    $this->Cell(87, 20, utf8_decode("FIRMA RESP. ALMACÉN - PRÉSTAMO"), 1, 0, "C");
    $this->Cell(87, 20, utf8_decode("FIRMA RESP. ALMACÉN - DEVOLUCIÓN") . date('d/m/Y'), 1, 1, "C");
    $this->Cell(87, 1, '', 0, 1, "C");
    
    $this->SetX(8);
    $this->SetFont("times", "", 8);
    $this->Cell(87, 8, 'FORM SAEAL208', 1, 0, 'C');
    $this->Cell(87, 8, 'REV. 05', 1, 0, 'C');
    $this->Cell(87, 8, utf8_decode("FECHA: ") . date('d/m/Y'), 1, 2, 'C');

    $this->SetFont("times", "", 6);
    $this->SetX(8);
    $this->Cell(240, 5, utf8_decode("NOTA: EL SOLICITANTE DEBE LLENAR TODOS LOS DATOS NECESARIOS EN FORM; SI NO EXISTIERA ALGUN DATO QUE COPIAR DE LA HERRAMIENTA SE DEBE ESCRIBIR N/A (NO APLICA); SVC (SERVIBLE)") , 0, 1);
  }
}

$today = getdate();


$pdf = new PDF('L', 'mm', 'Letter');
$pdf->AliasNbPages();
$pdf->AddPage();


$pdf->SetFont('Arial', 'B', 11);
$pdf->Image('../../assest/imagenes/gota.jpg', 50, 50, 200);
$pdf->Image('../../assest/imagenes/saee.png', 10, 10, -190);

$pdf->SetX(88);
$pdf->Cell(100, 10, utf8_decode('PRÉSTAMO DE HERRAMIENTAS'), 1, 2, 'C');
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(100, 10, utf8_decode('NOMBRE: '. $nombreTecnico), 1, 2, 'L');
$pdf->Cell(100, 10, utf8_decode('CARGO:'), 1, 2, 'L');
$pdf->SetXY(188,10);
$pdf->Cell(80, 10, utf8_decode('NRO.:'), 1, 2, 'L');
$pdf->Cell(80, 10, utf8_decode('TELÉFONO:'), 1, 2, 'L');
$pdf->Cell(80, 10, utf8_decode('ESPECIALIDAD:'), 1, 1, 'L');


$pdf->SetFont('Arial', 'B', 9);
$pdf->Ln(3);
$pdf->setX(8);
$pdf->Cell(208, 8, 'DETALLE DE HERRAMIENTAS', 1, 0, 'C');
$pdf->SetFont('Arial', 'B', 6);
$pdf->Cell(52, 5, 'USO EXCLUSIVO DE ALMACENES', 1, 1, 'C');
$pdf->Ln(3);
$pdf->SetX(8);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(10, 7, 'No', 1, 0, 'C');
$pdf->Cell(15, 7, 'CANT.', 1, 0, 'C');
$pdf->Cell(30, 7, utf8_decode('NÚMERO DE PARTE'), 1, 0, 'C');
$pdf->MultiCell(35, 3.5, utf8_decode('NÚMERO DE SERIE Y/O CÓDIGO'), 1, 'C');
$pdf->setXY(98,51);
$pdf->Cell(55, 7, utf8_decode('DESCRIPCIÓN'), 1, 0, 'C');
$pdf->Cell(35, 7, utf8_decode('MARCA O FABRICANTE'), 1, 0, 'C');
$pdf->Cell(28, 7, utf8_decode('FECHA PRÉSTAMO'), 1, 0, 'C');

$pdf->setXY(216,48);
$pdf->MultiCell(21, 5, utf8_decode('FECHA DEVOLUCIÓN'), 1, 'C');
$pdf->setXY(237,48);
$pdf->Cell(9, 3, utf8_decode('P'), 1, 0, 'C');
$pdf->Cell(9, 3, utf8_decode('D'), 1, 0, 'C');
$pdf->Cell(13, 10, utf8_decode('SVC'), 1, 0, 'C');
$pdf->setXY(237,51);
$pdf->Cell(18, 7, utf8_decode('INICIALES'), 1, 1, 'C');


$cont=1; //contador
//de la tabla mayor_herramientascalibradas
foreach($reporte["calibradas"] as $value){

  //extraer info de los productos
  $producto=json_decode($value["detalle"], true);

  foreach($producto as $prd){
    $herramienta=ControladorHerramientas::ctrInfoControlHerramienta($prd["id"]);
    $pdf->setX(8);
    $pdf->Cell(10, 7, $cont, 1, 0, 'C');
    $pdf->Cell(15, 7, $prd["cantidad"], 1, 0, 'C');
    $pdf->Cell(30, 7, $herramienta["pn_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(35, 7, $herramienta["numserie_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(55, 7, $herramienta["descripcion_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(35, 7, $herramienta["marcaofabri_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(28, 7, $value["fecha_hora"], 1, 0, 'C');
    $pdf->Cell(21, 7, '', 1, 0, 'C');
    $pdf->Cell(13, 7, '', 1, 0, 'C');
    $pdf->Cell(18, 7, '', 1, 1, 'C');
    $cont=$cont+1;
  }

}

//de la tabla log_herramientas
foreach($reporte["log"] as $value){

  //extraer info de los productos
  $producto=json_decode($value["codigo_herramientas"], true);

  foreach($producto as $prd){
    $herramienta=ControladorHerramientas::ctrInfoControlHerramienta($prd["id"]);
    $pdf->setX(8);
    $pdf->Cell(10, 7, $cont, 1, 0, 'C');
    $pdf->Cell(15, 7, $prd["cantidad"], 1, 0, 'C');
    $pdf->Cell(30, 7, $herramienta["pn_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(35, 7, $herramienta["numserie_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(55, 7, $herramienta["descripcion_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(35, 7, $herramienta["marcaofabri_controlherramientas"], 1, 0, 'C');
    $pdf->Cell(28, 7, $value["fecha_hora"], 1, 0, 'C');
    $pdf->Cell(21, 7, '', 1, 0, 'C');
    $pdf->Cell(13, 7, '', 1, 0, 'C');
    $pdf->Cell(18, 7, '', 1, 1, 'C');
    $cont=$cont+1;
  }

}



$pdf->Ln(3);
$pdf->setX(8);
$pdf->Cell(260, 7, utf8_decode('OBSERVACIONES.......................................................................................................................................................................................................................................................................................'), 0, 1);

//celda para el logotipo del encabezado
$pdf->setXY(8,10);
$pdf->Cell(80, 30, '', 1, 1);
$pdf->Output();
