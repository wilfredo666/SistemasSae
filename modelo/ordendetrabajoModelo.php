<?php
require_once "conexion.php";

class ModeloOrdenDeTrabajo
{
  static public function mdlInfoOrdenesDeTrabajos()
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM orden_de_trabajo");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlRegOrdenDeTrabajo($data)
  {
    $ordendetrabajonumeroOrdenes = $data["ordendetrabajonumeroOrdenes"];
    $nombrematriculaOrdenes = $data["nombrematriculaOrdenes"];
    $thOrdenes = $data["thOrdenes"];
    $tcOrdenes = $data["tcOrdenes"];
    $modelopnOrdenes = $data["modelopnOrdenes"];
    $snOrdenes = $data["snOrdenes"];
    $solicitadaporOrdenes = $data["solicitadaporOrdenes"];
    $nombreautorizadaorOrdenes = $data["nombreautorizadaorOrdenes"];
    $fechaOrdenes = $data["fechaOrdenes"];
    $fechafinOrdenes = $data["fechafinOrdenes"];
    $estadosOrdenes = $data["estadosOrdenes"];
    $documentosadjuntosrecibidosOrdenes = $data["documentosadjuntosrecibidosOrdenes"];
    $descripcionalcancetrabajoOrdenes = $data["descripcionalcancetrabajoOrdenes"];
    $descripciontrabajosOrdenes = $_POST["descripciontrabajosOrdenes"];
    $ordenesdetrabajosrelacionadasOrdenes = $data["ordenesdetrabajosrelacionadasOrdenes"];
    $documentosadjuntosentregadosOrdenes = $data["documentosadjuntosentregadosOrdenes"];
    $observacionesOrdenes = $data["observacionesOrdenes"];
    $caratulaOrdenes = $data["caratulaOrdenes"];
    $piepaginaOrdenes = $data["piepaginaOrdenes"];

    $stmt = Conexion::conectar()->prepare("insert into orden_de_trabajo(numero_ordendetrabajo, nombrematricula_ordendetrabajo, th_ordendetrabajo, tc_ordendetrabajo, modelo_pn_ordendetrabajo, sn_ordendetrabajo, solicitadapor_ordendetrabajo, nombreautorizado_ordendetrabajo, fecha_ordendetrabajo, fechacierre_ordendetrabajo, estados_ordendetrabajo, documentosadjuntosrecibidos_ordendetrabajo, descripciondelalcancedeltrabajosolicitado_ordendetrabajo, descripciondetrabajosefectuados_ordendetrabajo, ordenesdetrabajosrelacionadas_ordendetrabajo, documentosadjuntosentregados_ordendetrabajo, observaciones_ordendetrabajo, titulocaratula_ordendetrabajo, piepaginacaratula_ordendetrabajo) values('$ordendetrabajonumeroOrdenes', '$nombrematriculaOrdenes', '$thOrdenes', '$tcOrdenes', '$modelopnOrdenes', '$snOrdenes', '$solicitadaporOrdenes', '$nombreautorizadaorOrdenes', '$fechaOrdenes', '$fechafinOrdenes', '$estadosOrdenes', '$documentosadjuntosrecibidosOrdenes', '$descripcionalcancetrabajoOrdenes', '$descripciontrabajosOrdenes', '$ordenesdetrabajosrelacionadasOrdenes', '$documentosadjuntosentregadosOrdenes', '$observacionesOrdenes', '$caratulaOrdenes', '$piepaginaOrdenes')");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoOrdenDeTrabajo($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM orden_de_trabajo where id_ordendetrabajo=$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEditOrdenDeTrabajo($data)
  {

    $idOrdenTrabajo = $data["idOrdenTrabajo"];
    $ordendetrabajonumeroOrdenes = $data["ordendetrabajonumeroOrdenes"];
    $nombrematriculaOrdenes = $data["nombrematriculaOrdenes"];
    $thOrdenes = $data["thOrdenes"];
    $tcOrdenes = $data["tcOrdenes"];
    $modelopnOrdenes = $data["modelopnOrdenes"];
    $snOrdenes = $data["snOrdenes"];
    $solicitadaporOrdenes = $data["solicitadaporOrdenes"];
    $nombreautorizadaorOrdenes = $data["nombreautorizadaorOrdenes"];
    $fechaOrdenes = $data["fechaOrdenes"];
    $fechafinOrdenes = $data["fechafinOrdenes"];
    $estadosOrdenes = $data["estadosOrdenes"];
    $documentosadjuntosrecibidosOrdenes = $data["documentosadjuntosrecibidosOrdenes"];
    $descripcionalcancetrabajoOrdenes = $data["descripcionalcancetrabajoOrdenes"];
    $descripciontrabajosOrdenes = $_POST["descripciontrabajosOrdenes"];
    $ordenesdetrabajosrelacionadasOrdenes = $data["ordenesdetrabajosrelacionadasOrdenes"];
    $documentosadjuntosentregadosOrdenes = $data["documentosadjuntosentregadosOrdenes"];
    $observacionesOrdenes = $data["observacionesOrdenes"];
    $caratulaOrdenes = $data["caratulaOrdenes"];
    $piepaginaOrdenes = $data["piepaginaOrdenes"];

    $stmt = Conexion::conectar()->prepare("update orden_de_trabajo set numero_ordendetrabajo='$ordendetrabajonumeroOrdenes', nombrematricula_ordendetrabajo='$nombrematriculaOrdenes',th_ordendetrabajo='$thOrdenes', tc_ordendetrabajo='$tcOrdenes', modelo_pn_ordendetrabajo='$modelopnOrdenes', sn_ordendetrabajo='$snOrdenes', solicitadapor_ordendetrabajo='$solicitadaporOrdenes', nombreautorizado_ordendetrabajo='$nombreautorizadaorOrdenes', fecha_ordendetrabajo='$fechaOrdenes', fechacierre_ordendetrabajo='$fechafinOrdenes', estados_ordendetrabajo='$estadosOrdenes', documentosadjuntosrecibidos_ordendetrabajo='$documentosadjuntosrecibidosOrdenes', descripciondelalcancedeltrabajosolicitado_ordendetrabajo='$descripcionalcancetrabajoOrdenes', descripciondetrabajosefectuados_ordendetrabajo='$descripciontrabajosOrdenes', ordenesdetrabajosrelacionadas_ordendetrabajo='$ordenesdetrabajosrelacionadasOrdenes', documentosadjuntosentregados_ordendetrabajo='$documentosadjuntosentregadosOrdenes', observaciones_ordendetrabajo='$observacionesOrdenes', titulocaratula_ordendetrabajo='$caratulaOrdenes', piepaginacaratula_ordendetrabajo='$piepaginaOrdenes' where id_ordendetrabajo=$idOrdenTrabajo");

    if ($stmt->execute()) {

      return "ok";
    } else {

      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEliOrdenDeTrabajo($data)
  {
    $stmt = Conexion::conectar()->prepare("delete from orden_de_trabajo where id_ordendetrabajo=$data");

    if ($stmt->execute()) {
      return "correcto";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

  static public function mdlRepOrdenTrabajo($id){
    $stmt = Conexion::conectar()->prepare("SELECT * FROM orden_de_trabajo where id_ordendetrabajo=$id");
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();
    $stmt->null;
  }
  
  static public function mdlRepOrdenTrabajoRab($id){
    $stmt = Conexion::conectar()->prepare("SELECT * FROM rab where id_rab=$id");
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();
    $stmt->null;
  }

}
