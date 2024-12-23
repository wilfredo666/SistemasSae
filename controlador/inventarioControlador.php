<?php
$ruta = parse_url( $_SERVER['REQUEST_URI'] );

if ( isset( $ruta["query"] ) ) {

  if ( $ruta["query"] == "ctrRegInventario" ||
      $ruta["query"] == "ctrEditInventario" ||
      $ruta["query"] == "ctrEliInventario"
     ){
    $metodo = $ruta["query"];
    $inventario = new ControladorInventarios();
    $inventario->$metodo();
  }
}

class ControladorInventarios {

  static public function ctrInfoInventarios() {
    $respuesta = ModeloInventarios::mdlInfoInventarios();
    return $respuesta;
  }

  static public function ctrRegInventario() {
    require_once "../modelo/inventarioModelo.php";

    $desInventario = $_POST["desInventario"];
    $pnInventario = $_POST["pnInventario"];
    $snInventario = $_POST["snInventario"];
    $qtyInventario = $_POST["qtyInventario"];
    $ubicacionInventario = $_POST["ubicacionInventario"];
    $custodiaInventario = $_POST["custodiaInventario"];
    $fechadeinspInventario = $_POST["fechadeinspInventario"];
    $periodoinspInventario = $_POST["periodoinspInventario"];
    $fechaproxinspInventario = $_POST["fechaproxinspInventario"];
    $estadoInventario = $_POST["estadoInventario"];
    $diasalertaInventario = $_POST["diasalertaInventario"];
    $observacionesInventario = $_POST["observacionesInventario"];
    $tareasarealizarInventario = $_POST["tareasarealizarInventario"];

    $data = array(
      "desInventario"=>$_POST["desInventario"],
      "pnInventario"=>$_POST["pnInventario"],
      "snInventario"=>$_POST["snInventario"],
      "qtyInventario"=>$_POST["qtyInventario"],
      "ubicacionInventario"=>$_POST["ubicacionInventario"],
      "custodiaInventario"=>$_POST["custodiaInventario"],
      "fechadeinspInventario"=>$_POST["fechadeinspInventario"],
      "periodoinspInventario"=>$_POST["periodoinspInventario"],
      "fechaproxinspInventario"=>$_POST["fechaproxinspInventario"],
      "estadoInventario"=>$_POST["estadoInventario"],
      "diasalertaInventario"=>$_POST["diasalertaInventario"],
      "observacionesInventario"=>$_POST["observacionesInventario"],
      "tareasarealizarInventario"=>$_POST["tareasarealizarInventario"],
    );

    $respuesta = ModeloInventarios::mdlRegInventarios( $data );
    echo $respuesta;
  }

  static public function ctrInfoCalibracion( $id ) {
    $respuesta = ModeloCalibraciones::mdlInfoCalibracion( $id );
    return $respuesta;
  }

  static public function ctrEditCalibracion() {

    require_once "../modelo/calibracionModelo.php";

    $desCalibracion = $_POST["desCalibracion"];
    $pnCalibracion = $_POST["pnCalibracion"];
    $pnaltCalibracion = $_POST["pnaltCalibracion"];
    $numserieCalibracion = $_POST["numserieCalibracion"];
    $codigoCalibracion = $_POST["codigoCalibracion"];
    $marcafabriCalibracion = $_POST["marcafabriCalibracion"];
    $cantidadCalibracion = $_POST["cantidadCalibracion"];
    $unidadCalibracion = $_POST["unidadCalibracion"];
    $observacionCalibracion = $_POST["observacionCalibracion"];
    $ubicacionCalibracion = $_POST["ubicacionCalibracion"];
    $fechacalCalibracion = $_POST["fechacalCalibracion"];
    $periodocalCalibracion = $_POST["periodocalCalibracion"];
    $fechavenciCalibracion = $_POST["fechavenciCalibracion"];
    $estadoCalibracion = $_POST["estadoCalibracion"];
    $diasalertaCalibracion = $_POST["diasalertaCalibracion"];
    $origencaliCalibracion = $_POST["origencaliCalibracion"];
    $propiedaCalibracion = $_POST["propiedaCalibracion"];
    $numcarpetaCalibracion = $_POST["numcarpetaCalibracion"];
    $numcertiCalibracion = $_POST["numcertiCalibracion"];
    $numregistroCalibracion = $_POST["numregistroCalibracion"];
    $alcaninstrucCalibracion = $_POST["alcaninstrucCalibracion"];
    $resinstruCalibracion = $_POST["resinstruCalibracion"];
    $ubicacionautoCalibracion = $_POST["ubicacionautoCalibracion"];
    $docsalidaCalibracion = $_POST["docsalidaCalibracion"];

    $data = array(
      "idCalibracion"=>$_POST["idCalibracion"],
      "desCalibracion" => $_POST["desCalibracion"],
      "pnCalibracion" => $_POST["pnCalibracion"],
      "pnaltCalibracion" => $_POST["pnaltCalibracion"],
      "numserieCalibracion" => $_POST["numserieCalibracion"],
      "codigoCalibracion" => $_POST["codigoCalibracion"],
      "marcafabriCalibracion" => $_POST["marcafabriCalibracion"],
      "cantidadCalibracion" => $_POST["cantidadCalibracion"],
      "unidadCalibracion" => $_POST["unidadCalibracion"],
      "observacionCalibracion" => $_POST["observacionCalibracion"],
      "ubicacionCalibracion" => $_POST["ubicacionCalibracion"],
      "fechacalCalibracion" => $_POST["fechacalCalibracion"],
      "periodocalCalibracion" => $_POST["periodocalCalibracion"],
      "fechavenciCalibracion" => $_POST["fechavenciCalibracion"],
      "estadoCalibracion" => $_POST["estadoCalibracion"],
      "diasalertaCalibracion" => $_POST["diasalertaCalibracion"],
      "origencaliCalibracion" => $_POST["origencaliCalibracion"],
      "propiedaCalibracion" => $_POST["propiedaCalibracion"],
      "numcarpetaCalibracion" => $_POST["numcarpetaCalibracion"],
      "numcertiCalibracion" => $_POST["numcertiCalibracion"],
      "numregistroCalibracion" => $_POST["numregistroCalibracion"],
      "alcaninstrucCalibracion" => $_POST["alcaninstrucCalibracion"],
      "resinstruCalibracion" => $_POST["resinstruCalibracion"],
      "ubicacionautoCalibracion" => $_POST["ubicacionautoCalibracion"],
      "docsalidaCalibracion" => $_POST["docsalidaCalibracion"]
    );

    $respuesta = ModeloCalibraciones::mdlEditCalibracion($data);
    echo $respuesta;
  }

  static public function ctrEliCalibracion(){
    require "../modelo/calibracionModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloCalibraciones::mdlEliCalibracion($data);

    echo $respuesta;
  }

  static public function ctrRegistrosCalibracion()
{
  require_once "../modelo/calibracionModelo.php";

  $data = array(
    "registros" => $_FILES['dataCalibraciones']
  );

  $respuesta = ModeloCalibraciones::mdlRegistrosCalibraciones($data);
  echo $respuesta;
}

static public function ctrPorCalibracion($id)
  {
    $respuesta = ModeloCalibraciones::mdlPorCalibracion($id);
    return $respuesta;
  }

}