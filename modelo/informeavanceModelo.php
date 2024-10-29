<?php
require_once "conexion.php";

class ModeloInformeAvance
{
  static public function mdlCantidadCpcpAla()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='ALA' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpBuzones()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='BUZ' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpCabina()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='CAB' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpEmpenaje()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='EMP' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpFuselaje()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='FUS' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpHidraulica()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='HYD' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpMotores()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='MOT' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpTotalesTerminados()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminados FROM seguimiento
    WHERE estados_seguimiento='TERMINADO' AND tipo_tarjeta='CPCP'
    GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpAlaEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='ALA' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpBuzonesEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='BUZ' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpCabinaEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='CAB' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpEmpenajeEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='EMP' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpFuselajeEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='FUS' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpHidraulicaEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='HYD' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpMotoresEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='MOT' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpTotalesTerminadosEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminados FROM seguimiento
    WHERE estados_seguimiento='EN PROCESO' AND tipo_tarjeta='CPCP'
    GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpAlaParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='ALA' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpBuzonesParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='BUZ' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpCabinaParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='CAB' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpEmpenajeParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='EMP' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpFuselajeParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='FUS' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpHidraulicaParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='HYD' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpMotoresParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='MOT' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpTotalesTerminadosParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminados FROM seguimiento
    WHERE estados_seguimiento='PARA CIERRE DE AREA' AND tipo_tarjeta='CPCP'
    GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpAlaPruebasFuc()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PRUEBAS FUN/OP' AND area_seguimiento='ALA' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpBuzonesPruebasFuc()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PRUEBAS FUN/OP' AND area_seguimiento='BUZ' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpCabinaPruebasFuc()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PRUEBAS FUN/OP' AND area_seguimiento='CAB' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpEmpenajePruebasFuc()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PRUEBAS FUN/OP' AND area_seguimiento='EMP' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpFuselajePruebasFuc()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PRUEBAS FUN/OP' AND area_seguimiento='FUS' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpHidraulicaPruebasFuc()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PRUEBAS FUN/OP' AND area_seguimiento='HYD' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpMotoresPruebasFuc()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PRUEBAS FUN/OP' AND area_seguimiento='MOT' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpTotalesTerminadosPruebasFuc()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminados FROM seguimiento
    WHERE estados_seguimiento='PRUEBAS FUN/OP' AND tipo_tarjeta='CPCP'
    GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpAlaParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='ALA' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpBuzonesParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='BUZ' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpCabinaParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='CAB' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpEmpenajeParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='EMP' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpFuselajeParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='FUS' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpHidraulicaParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='HYD' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpMotoresParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadoscpcp FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='MOT' AND tipo_tarjeta='CPCP' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadCpcpTotalesTerminadosParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminados FROM seguimiento
    WHERE estados_seguimiento='PARA INSPECCION' AND tipo_tarjeta='CPCP'
    GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  // TERMINADO MRBR
  static public function mdlCantidadMrbrTerminadoAla()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='ALA' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrTerminadoBuzones()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='BUZ' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrTerminadoCabina()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='CAB' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrTerminadoFuselaje()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='FUS' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrTerminadoHidraulica()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='HYD' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrTerminadoAvionica()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='TERMINADO' AND area_seguimiento='AV' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrTotalesTerminados()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminados FROM seguimiento
    WHERE estados_seguimiento='TERMINADO' AND tipo_tarjeta='MRBR'
    GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  // En Proceso MRBR
  static public function mdlCantidadMrbrAlaEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='ALA' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrBuzonesEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='BUZ' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrCabinaEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='CAB' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrFuselajeEnproceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='FUS' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrHidraulicaEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='HYD' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrAvionicaEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='EN PROCESO' AND area_seguimiento='AV' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrTotalesTerminadosEnProceso()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminados FROM seguimiento
    WHERE estados_seguimiento='EN PROCESO' AND tipo_tarjeta='MRBR'
    GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  // Para cierre de area MRBR
  static public function mdlCantidadMrbrAlaParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='ALA' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrBuzonesParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='BUZ' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrCabinaParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='CAB' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrFuselajeParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='FUS' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrHidraulicaParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='HYD' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrAvionicaParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='PARA CIERRE DE AREA' AND area_seguimiento='MOT' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrTotalesTerminadosParaCierreDeArea()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminados FROM seguimiento
    WHERE estados_seguimiento='PARA CIERRE DE AREA' AND tipo_tarjeta='MRBR'
    GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  // MRBR PARA INSPECCION
  static public function mdlCantidadMrbrAlaParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='ALA' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrBuzonesParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='BUZ' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrCabinaParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='CAB' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrFuselajeParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='FUS' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrHidraulicaParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='HYD' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrAvionicaParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='PARA INSPECCION' AND area_seguimiento='AV' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrTotalesTerminadosParaInspeccion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminados FROM seguimiento
    WHERE estados_seguimiento='PARA INSPECCION' AND tipo_tarjeta='MRBR'
    GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  // MRBR POR INSTALACION
  static public function mdlCantidadMrbrAlaPorInstalacion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='POR INSTALACION' AND area_seguimiento='ALA' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrBuzonesPorInstalacion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='POR INSTALACION' AND area_seguimiento='BUZ' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrCabinaPorInstalacion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='POR INSTALACION' AND area_seguimiento='CAB' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrFuselajePorInstalacion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='POR INSTALACION' AND area_seguimiento='FUS' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrHidraulicaPorInstalacion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='POR INSTALACION' AND area_seguimiento='HYD' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrAvionicaPorInstalacion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminadosmrbr FROM seguimiento WHERE estados_seguimiento='POR INSTALACION' AND area_seguimiento='AV' AND tipo_tarjeta='MRBR' GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCantidadMrbrTotalesTerminadosPorInstalacion()
  {
    $stmt = Conexion::conectar()->prepare("SELECT tipo_tarjeta, COUNT(estados_seguimiento) as totalterminados FROM seguimiento
    WHERE estados_seguimiento='POR INSTALACION' AND tipo_tarjeta='MRBR'
    GROUP BY tipo_tarjeta");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }
}
