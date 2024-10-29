<?php
$ruta = parse_url( $_SERVER['REQUEST_URI'] );

if ( isset( $ruta["query"] ) ) {

  if ( $ruta["query"] == "ctrRegBaseLaPaz" ||
      $ruta["query"] == "ctrEditBaseLaPaz" ||
      $ruta["query"] == "ctrEliBaseLaPaz"
     ){
    $metodo = $ruta["query"];
    $BaseLaPaz = new ControladorBaseLaPaz();
    $BaseLaPaz->$metodo();
  }
}

class ControladorBaseLaPaz {

  static public function ctrInfoBasesLaPaz() {
    $respuesta = ModeloBaseLaPaz::mdlInfoBasesLapaz();
    return $respuesta;
  }

  static public function ctrRegBaseLaPaz() {
    require_once "../modelo/baselpzModelo.php";

    $fechvueloBaseLpz = $_POST["fechvueloBaseLpz"];
    $explotadorBaseLpz = $_POST["explotadorBaseLpz"];
    $arriboxitineBaseLpz = $_POST["arriboxitineBaseLpz"];
    $arriborealBaseLpz = $_POST["arriborealBaseLpz"];
    $puenteBaseLpz = $_POST["puenteBaseLpz"];
    $salioaBaseLpz = $_POST["salioaBaseLpz"];
    $salidaxitineBaseLpz = $_POST["salidaxitineBaseLpz"];
    $salidarealBaseLpz = $_POST["salidarealBaseLpz"];
    $serealizoBaseLpz = $_POST["serealizoBaseLpz"];
    $condBaseLpz = $_POST["condBaseLpz"];
    $diferidoBaseLpz = $_POST["diferidoBaseLpz"];
    $defectdesBaseLpz = $_POST["defectdesBaseLpz"];
    $actiontakenBaseLpz = $_POST["actiontakenBaseLpz"];
    $logbookBaseLpz = $_POST["logbookBaseLpz"];
    $coddiferidoBaseLpz = $_POST["coddiferidoBaseLpz"];
    $otexploBaseLpz = $_POST["otexploBaseLpz"];
    $otsaeBaseLpz = $_POST["otsaeBaseLpz"];
    $notaBaseLpz = $_POST["notaBaseLpz"];
    $aceitemot1BaseLpz = $_POST["aceitemot1BaseLpz"];
    $aceitemot2BaseLpz = $_POST["aceitemot2BaseLpz"];
    $aceitemotapuBaseLpz = $_POST["aceitemotapuBaseLpz"];
    $hydyBaseLpz = $_POST["hydyBaseLpz"];
    $hydgBaseLpz = $_POST["hydgBaseLpz"];
    $hydbBaseLpz = $_POST["hydbBaseLpz"];

    $data = array(
      "fechvueloBaseLpz"=>$_POST["fechvueloBaseLpz"],
      "explotadorBaseLpz"=>$_POST["explotadorBaseLpz"],
      "arriboxitineBaseLpz"=>$_POST["arriboxitineBaseLpz"],
      "arriborealBaseLpz"=>$_POST["arriborealBaseLpz"],
      "puenteBaseLpz"=>$_POST["puenteBaseLpz"],
      "salioaBaseLpz"=>$_POST["salioaBaseLpz"],
      "salidaxitineBaseLpz"=>$_POST["salidaxitineBaseLpz"],
      "salidarealBaseLpz"=>$_POST["salidarealBaseLpz"],
      "serealizoBaseLpz"=>$_POST["serealizoBaseLpz"],
      "condBaseLpz"=>$_POST["condBaseLpz"],
      "diferidoBaseLpz"=>$_POST["diferidoBaseLpz"],
      "defectdesBaseLpz"=>$_POST["defectdesBaseLpz"],
      "actiontakenBaseLpz"=>$_POST["actiontakenBaseLpz"],
      "logbookBaseLpz"=>$_POST["logbookBaseLpz"],
      "coddiferidoBaseLpz"=>$_POST["coddiferidoBaseLpz"],
      "otexploBaseLpz"=>$_POST["otexploBaseLpz"],
      "otsaeBaseLpz"=>$_POST["otsaeBaseLpz"],
      "notaBaseLpz"=>$_POST["notaBaseLpz"],
      "aceitemot1BaseLpz"=>$_POST["aceitemot1BaseLpz"],
      "aceitemot2BaseLpz"=>$_POST["aceitemot2BaseLpz"],
      "aceitemotapuBaseLpz"=>$_POST["aceitemotapuBaseLpz"],
      "hydyBaseLpz"=>$_POST["hydyBaseLpz"],
      "hydgBaseLpz"=>$_POST["hydgBaseLpz"],
      "hydbBaseLpz"=>$_POST["hydbBaseLpz"]
    );

    $respuesta = ModeloBaseLaPaz::mdlRegBaseLaPaz( $data );
    echo $respuesta;
  }

  static public function ctrInfoBaseLaPaz( $id ) {
    $respuesta = ModeloBaseLaPaz::mdlInfoBaseLaPaz( $id );
    return $respuesta;
  }

  static public function ctrEditBaseLaPaz() {

    require_once "../modelo/baselpzModelo.php";

    $fechvueloBaseLpz = $_POST["fechvueloBaseLpz"];
    $explotadorBaseLpz = $_POST["explotadorBaseLpz"];
    $arriboxitineBaseLpz = $_POST["arriboxitineBaseLpz"];
    $arriborealBaseLpz = $_POST["arriborealBaseLpz"];
    $puenteBaseLpz = $_POST["puenteBaseLpz"];
    $salioaBaseLpz = $_POST["salioaBaseLpz"];
    $salidaxitineBaseLpz = $_POST["salidaxitineBaseLpz"];
    $salidarealBaseLpz = $_POST["salidarealBaseLpz"];
    $serealizoBaseLpz = $_POST["serealizoBaseLpz"];
    $condBaseLpz = $_POST["condBaseLpz"];
    $diferidoBaseLpz = $_POST["diferidoBaseLpz"];
    $defectdesBaseLpz = $_POST["defectdesBaseLpz"];
    $actiontakenBaseLpz = $_POST["actiontakenBaseLpz"];
    $logbookBaseLpz = $_POST["logbookBaseLpz"];
    $coddiferidoBaseLpz = $_POST["coddiferidoBaseLpz"];
    $otexploBaseLpz = $_POST["otexploBaseLpz"];
    $otsaeBaseLpz = $_POST["otsaeBaseLpz"];
    $notaBaseLpz = $_POST["notaBaseLpz"];
    $aceitemot1BaseLpz = $_POST["aceitemot1BaseLpz"];
    $aceitemot2BaseLpz = $_POST["aceitemot2BaseLpz"];
    $aceitemotapuBaseLpz = $_POST["aceitemotapuBaseLpz"];
    $hydyBaseLpz = $_POST["hydyBaseLpz"];
    $hydgBaseLpz = $_POST["hydgBaseLpz"];
    $hydbBaseLpz = $_POST["hydbBaseLpz"];
    $data = array(
      "idBaseLpz"=>$_POST["idBaseLpz"],
      "fechvueloBaseLpz"=>$_POST["fechvueloBaseLpz"],
      "explotadorBaseLpz"=>$_POST["explotadorBaseLpz"],
      "arriboxitineBaseLpz"=>$_POST["arriboxitineBaseLpz"],
      "arriborealBaseLpz"=>$_POST["arriborealBaseLpz"],
      "puenteBaseLpz"=>$_POST["puenteBaseLpz"],
      "salioaBaseLpz"=>$_POST["salioaBaseLpz"],
      "salidaxitineBaseLpz"=>$_POST["salidaxitineBaseLpz"],
      "salidarealBaseLpz"=>$_POST["salidarealBaseLpz"],
      "serealizoBaseLpz"=>$_POST["serealizoBaseLpz"],
      "condBaseLpz"=>$_POST["condBaseLpz"],
      "diferidoBaseLpz"=>$_POST["diferidoBaseLpz"],
      "defectdesBaseLpz"=>$_POST["defectdesBaseLpz"],
      "actiontakenBaseLpz"=>$_POST["actiontakenBaseLpz"],
      "logbookBaseLpz"=>$_POST["logbookBaseLpz"],
      "coddiferidoBaseLpz"=>$_POST["coddiferidoBaseLpz"],
      "otexploBaseLpz"=>$_POST["otexploBaseLpz"],
      "otsaeBaseLpz"=>$_POST["otsaeBaseLpz"],
      "notaBaseLpz"=>$_POST["notaBaseLpz"],
      "aceitemot1BaseLpz"=>$_POST["aceitemot1BaseLpz"],
      "aceitemot2BaseLpz"=>$_POST["aceitemot2BaseLpz"],
      "aceitemotapuBaseLpz"=>$_POST["aceitemotapuBaseLpz"],
      "hydyBaseLpz"=>$_POST["hydyBaseLpz"],
      "hydgBaseLpz"=>$_POST["hydgBaseLpz"],
      "hydbBaseLpz"=>$_POST["hydbBaseLpz"]
    );

    $respuesta = ModeloBaseLaPaz::mdlEditBaseLaPaz( $data );
    echo $respuesta;
  }

  static public function ctrEliBaseLaPaz(){
    require "../modelo/baselpzModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloBaseLaPaz::mdlEliBaseLaPaz($data);

    echo $respuesta;
  }

  static public function ctrRepExcelBasesLapaz($columnas){
    $respuesta = ModeloBaseLaPaz::mdlRepExcelBasesLapaz($columnas);
    return $respuesta;
  }
  
}