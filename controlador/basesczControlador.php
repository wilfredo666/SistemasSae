<?php
$ruta = parse_url( $_SERVER['REQUEST_URI'] );

if ( isset( $ruta["query"] ) ) {

  if ( $ruta["query"] == "ctrRegBaseVVI" ||
      $ruta["query"] == "ctrEditBaseVVI" ||
      $ruta["query"] == "ctrEliBaseVVI"
     ){
    $metodo = $ruta["query"];
    $Basevvi = new ControladorBaseVVI();
    $Basevvi->$metodo();
  }
}

class ControladorBaseVVI {

  static public function ctrInfoBasesVVI() {
    $respuesta = ModeloBaseVVI::mdlInfoBasesVVI();
    return $respuesta;
  }

  static public function ctrRegBaseVVI() {
    require_once "../modelo/basesczModelo.php";

    $fechvueloBaseScz = $_POST["fechvueloBaseScz"];
    $explotadorBaseScz = $_POST["explotadorBaseScz"];
    $arriboxitineBaseScz = $_POST["arriboxitineBaseScz"];
    $arriborealBaseScz = $_POST["arriborealBaseScz"];
    $puenteBaseScz = $_POST["puenteBaseScz"];
    $salioaBaseScz = $_POST["salioaBaseScz"];
    $salidaxitineBaseScz = $_POST["salidaxitineBaseScz"];
    $salidarealBaseScz = $_POST["salidarealBaseScz"];
    $serealizoBaseScz = $_POST["serealizoBaseScz"];
    $condBaseScz = $_POST["condBaseScz"];
    $diferidoBaseScz = $_POST["diferidoBaseScz"];
    $defectdesBaseScz = $_POST["defectdesBaseScz"];
    $actiontakenBaseScz = $_POST["actiontakenBaseScz"];
    $logbookBaseScz = $_POST["logbookBaseScz"];
    $coddiferidoBaseScz = $_POST["coddiferidoBaseScz"];
    $otexploBaseScz = $_POST["otexploBaseScz"];
    $otsaeBaseScz = $_POST["otsaeBaseScz"];
    $notaBaseScz = $_POST["notaBaseScz"];
    $aceitemot1BaseScz = $_POST["aceitemot1BaseScz"];
    $aceitemot2BaseScz = $_POST["aceitemot2BaseScz"];
    $aceitemotapuBaseScz = $_POST["aceitemotapuBaseScz"];
    $hydyBaseScz = $_POST["hydyBaseScz"];
    $hydgBaseScz = $_POST["hydgBaseScz"];
    $hydbBaseScz = $_POST["hydbBaseScz"];

    $data = array(
      "fechvueloBaseScz"=>$_POST["fechvueloBaseScz"],
      "explotadorBaseScz"=>$_POST["explotadorBaseScz"],
      "arriboxitineBaseScz"=>$_POST["arriboxitineBaseScz"],
      "arriborealBaseScz"=>$_POST["arriborealBaseScz"],
      "puenteBaseScz"=>$_POST["puenteBaseScz"],
      "salioaBaseScz"=>$_POST["salioaBaseScz"],
      "salidaxitineBaseScz"=>$_POST["salidaxitineBaseScz"],
      "salidarealBaseScz"=>$_POST["salidarealBaseScz"],
      "serealizoBaseScz"=>$_POST["serealizoBaseScz"],
      "condBaseScz"=>$_POST["condBaseScz"],
      "diferidoBaseScz"=>$_POST["diferidoBaseScz"],
      "defectdesBaseScz"=>$_POST["defectdesBaseScz"],
      "actiontakenBaseScz"=>$_POST["actiontakenBaseScz"],
      "logbookBaseScz"=>$_POST["logbookBaseScz"],
      "coddiferidoBaseScz"=>$_POST["coddiferidoBaseScz"],
      "otexploBaseScz"=>$_POST["otexploBaseScz"],
      "otsaeBaseScz"=>$_POST["otsaeBaseScz"],
      "notaBaseScz"=>$_POST["notaBaseScz"],
      "aceitemot1BaseScz"=>$_POST["aceitemot1BaseScz"],
      "aceitemot2BaseScz"=>$_POST["aceitemot2BaseScz"],
      "aceitemotapuBaseScz"=>$_POST["aceitemotapuBaseScz"],
      "hydyBaseScz"=>$_POST["hydyBaseScz"],
      "hydgBaseScz"=>$_POST["hydgBaseScz"],
      "hydbBaseScz"=>$_POST["hydbBaseScz"]
    );

    $respuesta = ModeloBaseVVI::mdlRegBaseVVI( $data );
    echo $respuesta;
  }

  static public function ctrInfoBaseVVI( $id ) {
    $respuesta = ModeloBaseVVI::mdlInfoBaseVVI( $id );
    return $respuesta;
  }

  static public function ctrEditBaseVVI() {

    require_once "../modelo/basesczModelo.php";

    $fechvueloBaseScz = $_POST["fechvueloBaseScz"];
    $explotadorBaseScz = $_POST["explotadorBaseScz"];
    $arriboxitineBaseScz = $_POST["arriboxitineBaseScz"];
    $arriborealBaseScz = $_POST["arriborealBaseScz"];
    $puenteBaseScz = $_POST["puenteBaseScz"];
    $salioaBaseScz = $_POST["salioaBaseScz"];
    $salidaxitineBaseScz = $_POST["salidaxitineBaseScz"];
    $salidarealBaseScz = $_POST["salidarealBaseScz"];
    $serealizoBaseScz = $_POST["serealizoBaseScz"];
    $condBaseScz = $_POST["condBaseScz"];
    $diferidoBaseScz = $_POST["diferidoBaseScz"];
    $defectdesBaseScz = $_POST["defectdesBaseScz"];
    $actiontakenBaseScz = $_POST["actiontakenBaseScz"];
    $logbookBaseScz = $_POST["logbookBaseScz"];
    $coddiferidoBaseScz = $_POST["coddiferidoBaseScz"];
    $otexploBaseScz = $_POST["otexploBaseScz"];
    $otsaeBaseScz = $_POST["otsaeBaseScz"];
    $notaBaseScz = $_POST["notaBaseScz"];
    $aceitemot1BaseScz = $_POST["aceitemot1BaseScz"];
    $aceitemot2BaseScz = $_POST["aceitemot2BaseScz"];
    $aceitemotapuBaseScz = $_POST["aceitemotapuBaseScz"];
    $hydyBaseScz = $_POST["hydyBaseScz"];
    $hydgBaseScz = $_POST["hydgBaseScz"];
    $hydbBaseScz = $_POST["hydbBaseScz"];
    $data = array(
      "idBaseScz"=>$_POST["idBaseScz"],
      "fechvueloBaseScz"=>$_POST["fechvueloBaseScz"],
      "explotadorBaseScz"=>$_POST["explotadorBaseScz"],
      "arriboxitineBaseScz"=>$_POST["arriboxitineBaseScz"],
      "arriborealBaseScz"=>$_POST["arriborealBaseScz"],
      "puenteBaseScz"=>$_POST["puenteBaseScz"],
      "salioaBaseScz"=>$_POST["salioaBaseScz"],
      "salidaxitineBaseScz"=>$_POST["salidaxitineBaseScz"],
      "salidarealBaseScz"=>$_POST["salidarealBaseScz"],
      "serealizoBaseScz"=>$_POST["serealizoBaseScz"],
      "condBaseScz"=>$_POST["condBaseScz"],
      "diferidoBaseScz"=>$_POST["diferidoBaseScz"],
      "defectdesBaseScz"=>$_POST["defectdesBaseScz"],
      "actiontakenBaseScz"=>$_POST["actiontakenBaseScz"],
      "logbookBaseScz"=>$_POST["logbookBaseScz"],
      "coddiferidoBaseScz"=>$_POST["coddiferidoBaseScz"],
      "otexploBaseScz"=>$_POST["otexploBaseScz"],
      "otsaeBaseScz"=>$_POST["otsaeBaseScz"],
      "notaBaseScz"=>$_POST["notaBaseScz"],
      "aceitemot1BaseScz"=>$_POST["aceitemot1BaseScz"],
      "aceitemot2BaseScz"=>$_POST["aceitemot2BaseScz"],
      "aceitemotapuBaseScz"=>$_POST["aceitemotapuBaseScz"],
      "hydyBaseScz"=>$_POST["hydyBaseScz"],
      "hydgBaseScz"=>$_POST["hydgBaseScz"],
      "hydbBaseScz"=>$_POST["hydbBaseScz"]
    );

    $respuesta = ModeloBaseVVI::mdlEditBaseVVI( $data );
    echo $respuesta;
  }

  static public function ctrEliBaseVVI(){
    require "../modelo/basesczModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloBaseVVI::mdlEliBaseVVI($data);

    echo $respuesta;
  }

  static public function ctrRepExcelBasesScz($columnas){
    $respuesta = ModeloBaseVVI::mdlRepExcelBasesScz($columnas);
    return $respuesta;
  }
  
}