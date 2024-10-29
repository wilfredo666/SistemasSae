<?php
$ruta = parse_url($_SERVER['REQUEST_URI']);

if (isset($ruta["query"])) {

  if (
    $ruta["query"] == "ctrCpcpAla" ||
    $ruta["query"] == "ctrEditSeguimiento" ||
    $ruta["query"] == "ctrEliSeguimiento"  ||
    $ruta["query"] == "ctrReporteEstados" ||
    $ruta["query"] == "ctrRegMovimiento" ||
    $ruta["query"] == "ctrEliMovimiento" ||
    $ruta["query"] == "ctrRegRegistros" ||
    $ruta["query"] == "ctrCambEstado" ||
    $ruta["query"] == "ctrBusSeguimiento"
  ) {
    $metodo = $ruta["query"];
    $informeAvance = new ControladorInformeAvance();
    $informeAvance->$metodo();
  }
}

class ControladorInformeAvance
{
  static public function ctrCpcpAla()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpAla();
    return $respuesta;
  }

  static public function ctrCpcpBuzones()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpBuzones();
    return $respuesta;
  }

  static public function ctrCpcpCabina()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpCabina();
    return $respuesta;
  }

  static public function ctrCpcpEmpenaje()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpEmpenaje();
    return $respuesta;
  }

  static public function ctrCpcpFuselaje()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpFuselaje();
    return $respuesta;
  }

  static public function ctrCpcpHidraulica()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpHidraulica();
    return $respuesta;
  }

  static public function ctrCpcpMotores()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpMotores();
    return $respuesta;
  }

  static public function ctrCpcpTotalesTerminados()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpTotalesTerminados();
    return $respuesta;
  }

  static public function ctrCpcpAlaEnProceso()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpAlaEnProceso();
    return $respuesta;
  }

  static public function ctrCpcpBuzonesEnProceso()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpBuzonesEnProceso();
    return $respuesta;
  }

  static public function ctrCpcpCabinaEnProceso()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpCabinaEnProceso();
    return $respuesta;
  }

  static public function ctrCpcpEmpenajeEnProceso()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpEmpenajeEnProceso();
    return $respuesta;
  }

  static public function ctrCpcpFuselajeEnProceso()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpFuselajeEnproceso();
    return $respuesta;
  }

  static public function ctrCpcpHidraulicaEnProceso()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpHidraulicaEnProceso();
    return $respuesta;
  }

  static public function ctrCpcpMotoresEnProceso()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpMotoresEnProceso();
    return $respuesta;
  }

  static public function ctrCpcpTotalesTerminadosEnProceso()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpTotalesTerminadosEnProceso();
    return $respuesta;
  }

  static public function ctrCpcpAlaParaCierreDeArea()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpAlaParaCierreDeArea();
    return $respuesta;
  }

  static public function ctrCpcpBuzonesParaCierreDeArea()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpBuzonesParaCierreDeArea();
    return $respuesta;
  }

  static public function ctrCpcpCabinaParaCierreDeArea()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpCabinaParaCierreDeArea();
    return $respuesta;
  }

  static public function ctrCpcpEmpenajeParaCierreDeArea()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpEmpenajeParaCierreDeArea();
    return $respuesta;
  }

  static public function ctrCpcpFuselajeParaCierreDeArea()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpFuselajeParaCierreDeArea();
    return $respuesta;
  }

  static public function ctrCpcpHidraulicaParaCierreDeArea()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpHidraulicaParaCierreDeArea();
    return $respuesta;
  }

  static public function ctrCpcpMotoresParaCierreDeArea()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpMotoresParaCierreDeArea();
    return $respuesta;
  }

  static public function ctrCpcpTotalesTerminadosParaCierreDeArea()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpTotalesTerminadosParaCierreDeArea();
    return $respuesta;
  }

  static public function ctrCpcpAlaPruebasFuc()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpAlaPruebasFuc();
    return $respuesta;
  }

  static public function ctrCpcpBuzonesPruebasFuc()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpBuzonesPruebasFuc();
    return $respuesta;
  }

  static public function ctrCpcpCabinaPruebasFuc()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpCabinaPruebasFuc();
    return $respuesta;
  }

  static public function ctrCpcpEmpenajePruebasFuc()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpEmpenajePruebasFuc();
    return $respuesta;
  }

  static public function ctrCpcpFuselajePruebasFuc()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpFuselajePruebasFuc();
    return $respuesta;
  }

  static public function ctrCpcpHidraulicaPruebasFuc()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpHidraulicaPruebasFuc();
    return $respuesta;
  }

  static public function ctrCpcpMotoresPruebasFuc()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpMotoresPruebasFuc();
    return $respuesta;
  }

  static public function ctrCpcpTotalesTerminadosPruebasFuc()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpTotalesTerminadosPruebasFuc();
    return $respuesta;
  }

  static public function ctrCpcpAlaParaInspeccion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpAlaParaInspeccion();
    return $respuesta;
  }

  static public function ctrCpcpBuzonesParaInspeccion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpBuzonesParaInspeccion();
    return $respuesta;
  }

  static public function ctrCpcpCabinaParaInspeccion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpCabinaParaInspeccion();
    return $respuesta;
  }

  static public function ctrCpcpEmpenajeParaInspeccion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpEmpenajeParaInspeccion();
    return $respuesta;
  }

  static public function ctrCpcpFuselajeParaInspeccion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpFuselajeParaInspeccion();
    return $respuesta;
  }

  static public function ctrCpcpHidraulicaParaInspeccion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpHidraulicaParaInspeccion();
    return $respuesta;
  }

  static public function ctrCpcpMotoresParaInspeccion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpMotoresParaInspeccion();
    return $respuesta;
  }

  static public function ctrCpcpTotalesTerminadosParaInspeccion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadCpcpTotalesTerminadosParaInspeccion();
    return $respuesta;
  }

  // MRBR TERMINADO
  static public function ctrMrbrTerminadoAla()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrTerminadoAla();
    return $respuesta;
  }

  static public function ctrMrbrTerminadoBuzones()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrTerminadoBuzones();
    return $respuesta;
  }

  static public function ctrMrbrTerminadoCabina()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrTerminadoCabina();
    return $respuesta;
  }

  static public function ctrMrbrTerminadoFuselaje()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrTerminadoFuselaje();
    return $respuesta;
  }

  static public function ctrMrbrTerminadoHidraulica()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrTerminadoHidraulica();
    return $respuesta;
  }

  static public function ctrMrbrTerminadoMotores()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrTerminadoAvionica();
    return $respuesta;
  }

  static public function ctrMrbrTotalesTerminados()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrTotalesTerminados();
    return $respuesta;
  }

  // MRBR En Proceso
  static public function ctrMrbrAlaEnProceso()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrAlaEnProceso();
    return $respuesta;
  }

  static public function ctrMrbrBuzonesEnProceso()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrBuzonesEnProceso();
    return $respuesta;
  }

  static public function ctrMrbrCabinaEnProceso()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrCabinaEnProceso();
    return $respuesta;
  }

  static public function ctrMrbrFuselajeEnProceso()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrFuselajeEnproceso();
    return $respuesta;
  }

  static public function ctrMrbrHidraulicaEnProceso()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrHidraulicaEnProceso();
    return $respuesta;
  }

  static public function ctrMrbrAvionicaEnProceso()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrAvionicaEnProceso();
    return $respuesta;
  }

  static public function ctrMrbrTotalesTerminadosEnProceso()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrTotalesTerminadosEnProceso();
    return $respuesta;
  }

  // MRBR En Cierre de Area
  static public function ctrMrbrAlaParaCierreDeArea()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrAlaParaCierreDeArea();
    return $respuesta;
  }

  static public function ctrMrbrBuzonesParaCierreDeArea()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrBuzonesParaCierreDeArea();
    return $respuesta;
  }

  static public function ctrMrbrCabinaParaCierreDeArea()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrCabinaParaCierreDeArea();
    return $respuesta;
  }

  static public function ctrMrbrFuselajeParaCierreDeArea()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrFuselajeParaCierreDeArea();
    return $respuesta;
  }

  static public function ctMrbrHidraulicaParaCierreDeArea()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrHidraulicaParaCierreDeArea();
    return $respuesta;
  }

  static public function ctrMrbrAvionicaParaCierreDeArea()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrAvionicaParaCierreDeArea();
    return $respuesta;
  }

  static public function ctrMrbrTotalesTerminadosParaCierreDeArea()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrTotalesTerminadosParaCierreDeArea();
    return $respuesta;
  }

  // MRBR PARA INSPECCION
  static public function ctrMrbrAlaParaInspeccion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrAlaParaInspeccion();
    return $respuesta;
  }

  static public function ctrMrbrBuzonesParaInspeccion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrBuzonesParaInspeccion();
    return $respuesta;
  }

  static public function ctrMrbrCabinaParaInspeccion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrCabinaParaInspeccion();
    return $respuesta;
  }

  static public function ctrMrbrFuselajeParaInspeccion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrFuselajeParaInspeccion();
    return $respuesta;
  }

  static public function ctrMrbrHidraulicaParaInspeccion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrHidraulicaParaInspeccion();
    return $respuesta;
  }

  static public function ctrMrbrAvionicaParaInspeccion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrAvionicaParaInspeccion();
    return $respuesta;
  }

  static public function ctrMrbrTotalesTerminadosParaInspeccion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrTotalesTerminadosParaInspeccion();
    return $respuesta;
  }

  // MRBR POR INSTALACION
  static public function ctrMrbrAlaParaPorInstalacion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrAlaPorInstalacion();
    return $respuesta;
  }

  static public function ctrMrbrBuzonesParaPorInstalacion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrBuzonesPorInstalacion();
    return $respuesta;
  }

  static public function ctrMrbrCabinaParaPorInstalacion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrCabinaPorInstalacion();
    return $respuesta;
  }

  static public function ctrMrbrFuselajeParaPorInstalacion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrFuselajePorInstalacion();
    return $respuesta;
  }

  static public function ctrMrbrHidraulicaParaPorInstalacion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrHidraulicaPorInstalacion();
    return $respuesta;
  }

  static public function ctrMrbrAvionicaParaPorInstalacion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrAvionicaPorInstalacion();
    return $respuesta;
  }

  static public function ctrMrbrTotalesTerminadosParaPorInstalacion()
  {
    $respuesta = ModeloInformeAvance::mdlCantidadMrbrTotalesTerminadosPorInstalacion();
    return $respuesta;
  }
}
