<?php
$ruta = parse_url( $_SERVER['REQUEST_URI'] );

if ( isset( $ruta["query"] ) ) {

  if ( $ruta["query"] == "ctrRegOrdenDeTrabajo" ||
      $ruta["query"] == "ctrEditOrdenDeTrabajo" ||
      $ruta["query"] == "ctrRegRegistrosMat" ||
      $ruta["query"] == "ctrEliArchivo" ||
      $ruta["query"] == "ctrEliOrdenDeTrabajo"
     ){
    $metodo = $ruta["query"];
    $Material = new ControladorOrdenDeTrabajo();
    $Material->$metodo();
  }
}

class ControladorOrdenDeTrabajo {

  static public function ctrInfoOrdenesDeTrabajos() {
    $respuesta = ModeloOrdenDeTrabajo::mdlInfoOrdenesDeTrabajos();
    return $respuesta;
  }

  static public function ctrRegOrdenDeTrabajo() {
    require_once "../modelo/ordendetrabajoModelo.php";

    $ordendetrabajonumeroOrdenes = $_POST["ordendetrabajonumeroOrdenes"];
    $nombrematriculaOrdenes = $_POST["nombrematriculaOrdenes"];
    $thOrdenes = $_POST["thOrdenes"];
    $tcOrdenes = $_POST["tcOrdenes"];
    $modelopnOrdenes = $_POST["modelopnOrdenes"];
    $snOrdenes = $_POST["snOrdenes"];
    $solicitadaporOrdenes = $_POST["solicitadaporOrdenes"];
    $nombreautorizadaorOrdenes = $_POST["nombreautorizadaorOrdenes"];
    $fechaOrdenes = $_POST["fechaOrdenes"];
    $fechafinOrdenes = $_POST["fechafinOrdenes"];
    $estadosOrdenes = $_POST["estadosOrdenes"];
    $documentosadjuntosrecibidosOrdenes = $_POST["documentosadjuntosrecibidosOrdenes"];
    $descripcionalcancetrabajoOrdenes = $_POST["descripcionalcancetrabajoOrdenes"];
    $descripciontrabajosOrdenes = $_POST["descripciontrabajosOrdenes"];
    $ordenesdetrabajosrelacionadasOrdenes = $_POST["ordenesdetrabajosrelacionadasOrdenes"];
    $documentosadjuntosentregadosOrdenes = $_POST["documentosadjuntosentregadosOrdenes"];
    $observacionesOrdenes = $_POST["observacionesOrdenes"];
    $caratulaOrdenes = $_POST["caratulaOrdenes"];
    $piepaginaOrdenes = $_POST["piepaginaOrdenes"];

    $data = array(
      "ordendetrabajonumeroOrdenes"=>$_POST["ordendetrabajonumeroOrdenes"],
      "nombrematriculaOrdenes"=>$_POST["nombrematriculaOrdenes"],
      "thOrdenes"=>$_POST["thOrdenes"],
      "tcOrdenes"=>$_POST["tcOrdenes"],
      "modelopnOrdenes"=>$_POST["modelopnOrdenes"],
      "snOrdenes"=>$_POST["snOrdenes"],
      "solicitadaporOrdenes"=>$_POST["solicitadaporOrdenes"],
      "nombreautorizadaorOrdenes"=>$_POST["nombreautorizadaorOrdenes"],
      "fechaOrdenes"=>$_POST["fechaOrdenes"],
      "fechafinOrdenes"=>$_POST["fechafinOrdenes"],
      "estadosOrdenes"=>$_POST["estadosOrdenes"],
      "documentosadjuntosrecibidosOrdenes"=>$_POST["documentosadjuntosrecibidosOrdenes"],
      "descripcionalcancetrabajoOrdenes"=>$_POST["descripcionalcancetrabajoOrdenes"],
      "descripciontrabajosOrdenes"=>$_POST["descripciontrabajosOrdenes"],
      "ordenesdetrabajosrelacionadasOrdenes"=>$_POST["ordenesdetrabajosrelacionadasOrdenes"],
      "documentosadjuntosentregadosOrdenes"=>$_POST["documentosadjuntosentregadosOrdenes"],
      "observacionesOrdenes"=>$_POST["observacionesOrdenes"],
      "caratulaOrdenes"=>$_POST["caratulaOrdenes"],
      "piepaginaOrdenes"=>$_POST["piepaginaOrdenes"]
    );

    $respuesta = ModeloOrdenDeTrabajo::mdlRegOrdenDeTrabajo( $data );
    echo $respuesta;
  }

  static public function ctrInfoOrdenDeTrabajo( $id ) {
    $respuesta = ModeloOrdenDeTrabajo::mdlInfoOrdenDeTrabajo( $id );
    return $respuesta;
  }

  static public function ctrEditOrdenDeTrabajo() {

    require_once "../modelo/ordendetrabajoModelo.php";

    $ordendetrabajonumeroOrdenes = $_POST["ordendetrabajonumeroOrdenes"];
    $nombrematriculaOrdenes = $_POST["nombrematriculaOrdenes"];
    $thOrdenes = $_POST["thOrdenes"];
    $tcOrdenes = $_POST["tcOrdenes"];
    $modelopnOrdenes = $_POST["modelopnOrdenes"];
    $snOrdenes = $_POST["snOrdenes"];
    $solicitadaporOrdenes = $_POST["solicitadaporOrdenes"];
    $nombreautorizadaorOrdenes = $_POST["nombreautorizadaorOrdenes"];
    $fechaOrdenes = $_POST["fechaOrdenes"];
    $fechafinOrdenes = $_POST["fechafinOrdenes"];
    $estadosOrdenes = $_POST["estadosOrdenes"];
    $documentosadjuntosrecibidosOrdenes = $_POST["documentosadjuntosrecibidosOrdenes"];
    $descripcionalcancetrabajoOrdenes = $_POST["descripcionalcancetrabajoOrdenes"];
    $descripciontrabajosOrdenes = $_POST["descripciontrabajosOrdenes"];
    $ordenesdetrabajosrelacionadasOrdenes = $_POST["ordenesdetrabajosrelacionadasOrdenes"];
    $documentosadjuntosentregadosOrdenes = $_POST["documentosadjuntosentregadosOrdenes"];
    $observacionesOrdenes = $_POST["observacionesOrdenes"];
    $caratulaOrdenes = $_POST["caratulaOrdenes"];
    $piepaginaOrdenes = $_POST["piepaginaOrdenes"];
    $data = array(
      "idOrdenTrabajo"=>$_POST["idOrdenTrabajo"],
      "ordendetrabajonumeroOrdenes"=>$_POST["ordendetrabajonumeroOrdenes"],
      "nombrematriculaOrdenes"=>$_POST["nombrematriculaOrdenes"],
      "thOrdenes"=>$_POST["thOrdenes"],
      "tcOrdenes"=>$_POST["tcOrdenes"],
      "modelopnOrdenes"=>$_POST["modelopnOrdenes"],
      "snOrdenes"=>$_POST["snOrdenes"],
      "solicitadaporOrdenes"=>$_POST["solicitadaporOrdenes"],
      "nombreautorizadaorOrdenes"=>$_POST["nombreautorizadaorOrdenes"],
      "fechaOrdenes"=>$_POST["fechaOrdenes"],
      "fechafinOrdenes"=>$_POST["fechafinOrdenes"],
      "estadosOrdenes"=>$_POST["estadosOrdenes"],
      "documentosadjuntosrecibidosOrdenes"=>$_POST["documentosadjuntosrecibidosOrdenes"],
      "descripcionalcancetrabajoOrdenes"=>$_POST["descripcionalcancetrabajoOrdenes"],
      "descripciontrabajosOrdenes"=>$_POST["descripciontrabajosOrdenes"],
      "ordenesdetrabajosrelacionadasOrdenes"=>$_POST["ordenesdetrabajosrelacionadasOrdenes"],
      "documentosadjuntosentregadosOrdenes"=>$_POST["documentosadjuntosentregadosOrdenes"],
      "observacionesOrdenes"=>$_POST["observacionesOrdenes"],
      "caratulaOrdenes"=>$_POST["caratulaOrdenes"],
      "piepaginaOrdenes"=>$_POST["piepaginaOrdenes"]
    );

    $respuesta = ModeloOrdenDeTrabajo::mdlEditOrdenDeTrabajo( $data );
    echo $respuesta;
  }

  static public function ctrEliOrdenDeTrabajo(){
    require "../modelo/ordendetrabajoModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloOrdenDeTrabajo::mdlEliOrdenDeTrabajo($data);

    echo $respuesta;
  }

  static public function ctrRepOrdenTrabajo($id){
    $respuesta = ModeloOrdenDeTrabajo::mdlRepOrdenTrabajo($id);
    return $respuesta;
  }

  static public function ctrRepOrdenTrabajoRab($id){
    $respuesta = ModeloOrdenDeTrabajo::mdlRepOrdenTrabajoRab($id);
    return $respuesta;
  }

  static public function ctrEliArchivo(){

    $numOrden=$_POST['numOrden'];
    $archivo=$_POST["archivo"];
    $ruta = "../assest/files/archivos/ordenTrabajo/".$numOrden;
    unlink($ruta."/".$archivo);

  }

}