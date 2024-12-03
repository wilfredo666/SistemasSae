<?php
require "../../assest/FPDF/fpdf.php";
require_once "../../controlador/controlherramientasControlador.php";
require_once "../../modelo/controlherramientasModelo.php";
$id=$_GET["idPE"];

//informacion del prestamo
$infoPE=ControladorHerramientas::ctrInfoPrestamoExt($id);

class PDF extends FPDF
{

  // Pie de página
  function Footer()
  {
    // Posición a 1.5 cm del final
    $this->SetY(-15);
    $this->SetX(8);
    $this->SetFont("times", "", 8);
    $this->Cell(87, 5, 'FORM SAEAL208', 1, 0, 'C');
    $this->Cell(87, 5, 'REV. 05', 1, 0, 'C');
    $this->Cell(87, 5, utf8_decode("FECHA: ") . date('d/m/Y'), 1, 2, 'C');

    $this->SetFont("times", "", 6);
  }


  // Formulario
  function CreateForm()
  {
    global $infoPE;
    $this->SetFont('Arial', '', 10);
    $this->Cell(30, 6, 'NOMBRE:',1, 0);
    $this->Cell(95, 6, utf8_decode($infoPE['nombre_empleado']), 1);
    $this->Cell(40, 6, 'C.I. FUNCIONARIO:',1, 0);
    $this->Cell(95, 6, utf8_decode($infoPE['ci_empleado']), 1, 1);
 
    $this->Cell(30, 6, 'CARGO:',1, 0);
    $this->Cell(95, 6, utf8_decode($infoPE['cargo_empleado']), 1);
    $this->Cell(40, 6, utf8_decode('TELÉFONO:'),1, 0);
    $this->Cell(95, 6, utf8_decode($infoPE['telefono_empleado']), 1, 1);

    $this->Cell(30, 6, utf8_decode('EMPRESA:'),1, 0);
    $this->Cell(95, 6, utf8_decode($infoPE['nombre_empresa']), 1);
    $this->Cell(40, 6, utf8_decode('DIRECCIÓN:'),1, 0);
    $this->Cell(95, 6, utf8_decode($infoPE['direccion_empleado']), 1,1);
    $this->Ln(5);
  }

  // Firmas
  function CreateSignatures()
  {
        // Agregar texto adicional al pie de página
    $this->SetFont("times", "", 8);
    $this->SetY(-48); // Ajuste de posición Y para mantener un buen margen
    $this->SetX(8);
    $this->Cell(65, 10, utf8_decode("FIRMA - RECIBÍ CONFORME"),'LRT', 0, "L");
    $this->Cell(65, 10, utf8_decode("FIRMA Vo.Bo."),'LRT', 0, "L");
    $this->Cell(65, 10, utf8_decode("RESPONSABLE ALMACÉN - FIRMA"), 'LRT', 0, "L");
    $this->Cell(65, 10, utf8_decode("DEVOLUCIÓN (FIRMA RESP.ALMACEN)"), 'LRT', 1, "L");
    
    $this->SetX(8);
    $this->Cell(65, 10, 'FECHA Y HORA:','LRB', 0, "L");
    $this->Cell(65, 10, '', 'LRB', 0, "L");
    $this->Cell(65, 10, 'FECHA:', 'LRB', 0, "L");
    $this->Cell(65, 10, 'FECHA Y HORA:', 'LRB', 1, "L");
    
    $this->SetX(8);
    $this->Cell(240, 5, utf8_decode("NOTA: EL SOLICITANTE DEBE LLENAR TODOS LOS DATOS NECESARIOS EN EL FORMULARIO. SI NO EXISTIERA ALGÚN DATO QUE COPIAR DE LA HERRAMIENTA, SE DEBE ANOTAR N/A") , 0, 1);
    
  }
}

//encabezado
$today = getdate();


$pdf = new PDF('L', 'mm', 'Letter');
$pdf->AliasNbPages();
$pdf->AddPage();


$pdf->SetFont('Arial', 'B', 16);
$pdf->Image('../../assest/imagenes/gota.jpg', 50, 50, 200);
$pdf->Image('../../assest/imagenes/saee.png', 10, 10, -190);

$pdf->SetX(88);
$pdf->Cell(100, 12, utf8_decode('PRÉSTAMO Y DEVOLUCIÓN'), 'LRT', 2, 'C');
$pdf->Cell(100, 12, utf8_decode('HERRAMIENTAS A TERCEROS'), 'LRB', 2, 'C');
//celdas para el logotipo del encabezado
$pdf->setXY(8,10);
$pdf->Cell(80, 24, '', 1, 1);

$pdf->SetXY(188,10);
$pdf->SetFont('Arial', 'B', 6);
$pdf->Cell(84, 3, utf8_decode('CERTIFICACIONES'), 'LTR', 2, 'C');
$pdf->SetFont('Arial', '', 6);
$pdf->Cell(84, 3, utf8_decode('DGAC BOLIVIA OMA No. N-017'), 'R', 2, 'C');
$pdf->Cell(84, 3, utf8_decode('AEROCIVIL COLOMBIA TARE No. 042'), 'R', 2, 'C');
$pdf->Cell(84, 3, utf8_decode('DGAC CHILE CMAE-448'), 'R', 2, 'C');
$pdf->Cell(84, 3, utf8_decode('DGAC ECUADOR No. 077'), 'R', 2, 'C');
$pdf->Cell(84, 3, utf8_decode('DGAC PERU OMAE No. 019'), 'R', 2, 'C');
$pdf->Cell(84, 3, utf8_decode('DGAC CHILE CMAE-448'), 'R', 2, 'C');
$pdf->Cell(84, 3, utf8_decode('AHAC HONDURAS No. CTAE-145-032 HR'), 'LRB', 1, 'C');
$pdf->Ln(3);


$pdf->CreateForm();

//tabla - encabezado
$pdf->SetFont('Arial', 'b', 11);
$pdf->Cell(260, 8, 'DETALLES DE LA HERRAMIENTA', 1, 1, 'C');
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(10, 8, utf8_decode('ÍTEM'), 1, 0, 'C');
$pdf->Cell(10, 8, utf8_decode('CANT.'), 1, 0, 'C');
$pdf->Cell(25, 8, utf8_decode('P/N'), 1, 0, 'C');
$pdf->Cell(25, 8, utf8_decode('S/N'), 1, 0, 'C');
$pdf->Cell(25, 8, utf8_decode('CÓDIGO'), 1, 0, 'C');
$pdf->Cell(85, 8, utf8_decode('DESCRIPCIÓN'), 1, 0, 'C');
$pdf->Cell(40, 8, utf8_decode('MARCA/FABRICANTE'), 1, 0, 'C');
$pdf->Cell(20, 8, utf8_decode('SVC'), 1, 0, 'C');
$pdf->Cell(20, 8, utf8_decode('NSVC '), 1, 1, 'C');

//tabla - cuerpo
$cont=1; //contador
//informacion de los items prestados
$item=json_decode($infoPE["detalle_prestamo"], true);
foreach($item as $value){

  //extraer info de las herramientas
  $herramienta=ControladorHerramientas::ctrInfoControlHerramientaPE($value["numCarpeta"]);
  
    //$pdf->setX(8);
    $pdf->Cell(10, 8, $cont, 1, 0, 'C');
    $pdf->Cell(10, 8, $value["cantHerramienta"], 1, 0, 'C');
    $pdf->Cell(25, 8, $herramienta["pn"], 1, 0, 'C');
    $pdf->Cell(25, 8, $herramienta["sn"], 1, 0, 'C');
    $pdf->Cell(25, 8, $herramienta["codigo"], 1, 0, 'C');
    $pdf->Cell(85, 8, $herramienta["descripcion"], 1, 0, 'C');
    $pdf->Cell(40, 8, $herramienta["marca"], 1, 0, 'C');
    $pdf->Cell(20, 8, '', 1, 0, 'C');
    $pdf->Cell(20, 8, '', 1, 1, 'C');
    $cont=$cont+1;

}
$pdf->Ln(3);

$pdf->Cell(260, 7, utf8_decode('OBSERVACIONES...........................................................................................................................................................................................................................................................................................................'), 0, 1);
$pdf->CreateSignatures();
$pdf->Output();
?>
