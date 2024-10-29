<?php
$respuesta = ModeloGrafica::mdlMRBR();
$totalAD = '';
if (count($respuesta)) {
    $totalAD = $respuesta[0]['total'];
}
$respuestacpcp = ModeloGrafica::mdlCPCP();
$totalCPCP = '';
if (count($respuesta)) {
    $totalCPCP = $respuestacpcp[0]['total'];
}

$respuestatnrs = ModeloGrafica::mdlTNRs();
$totalTNRs = '';
if (count($respuesta)) {
    $totalTNRs = $respuestatnrs[0]['total'];
}

$cpcpala = ControladorInformeAvance::ctrCpcpAla();
$cpcpbuzones = ControladorInformeAvance::ctrCpcpBuzones();
$cpcpcabina = ControladorInformeAvance::ctrCpcpCabina();
$cpcpempenaje = ControladorInformeAvance::ctrCpcpEmpenaje();
$cpcpfuselaje = ControladorInformeAvance::ctrCpcpFuselaje();
$cpcphidraulica = ControladorInformeAvance::ctrCpcpHidraulica();
$cpcpmotores = ControladorInformeAvance::ctrCpcpMotores();
$cpcptotalterminados = ControladorInformeAvance::ctrCpcpTotalesTerminados();

$cpcpalaenproceso = ControladorInformeAvance::ctrCpcpAlaEnProceso();
$cpcpbuzonesenproceso = ControladorInformeAvance::ctrCpcpBuzonesEnProceso();
$cpcpcabinaenproceso = ControladorInformeAvance::ctrCpcpCabinaEnProceso();
$cpcpempenajeenproceso = ControladorInformeAvance::ctrCpcpEmpenajeEnProceso();
$cpcpfuselajeenproceso = ControladorInformeAvance::ctrCpcpFuselajeEnProceso();
$cpcphidraulicaenproceso = ControladorInformeAvance::ctrCpcpHidraulicaEnProceso();
$cpcpmotoresenproceso = ControladorInformeAvance::ctrCpcpMotoresEnProceso();
$cpcptotalterminadosenproceso = ControladorInformeAvance::ctrCpcpTotalesTerminadosEnProceso();

$cpcpalaparacierredearea = ControladorInformeAvance::ctrCpcpAlaParaCierreDeArea();
$cpcpbuzonesparacierredearea = ControladorInformeAvance::ctrCpcpBuzonesParaCierreDeArea();
$cpcpcabinaparacierredearea = ControladorInformeAvance::ctrCpcpCabinaParaCierreDeArea();
$cpcpempenajeparacierredearea = ControladorInformeAvance::ctrCpcpEmpenajeParaCierreDeArea();
$cpcpfuselajeparacierredearea = ControladorInformeAvance::ctrCpcpFuselajeParaCierreDeArea();
$cpcphidraulicaparacierredearea = ControladorInformeAvance::ctrCpcpHidraulicaParaCierreDeArea();
$cpcpmotoresparacierredearea = ControladorInformeAvance::ctrCpcpMotoresParaCierreDeArea();
$cpcptotalterminadosparacierredearea = ControladorInformeAvance::ctrCpcpTotalesTerminadosParaCierreDeArea();

$cpcpalapruebasfuc = ControladorInformeAvance::ctrCpcpAlaPruebasFuc();
$cpcpbuzonespruebasfuc = ControladorInformeAvance::ctrCpcpBuzonesPruebasFuc();
$cpcpcabinapruebasfuc = ControladorInformeAvance::ctrCpcpCabinaPruebasFuc();
$cpcpempenajepruebasfuc = ControladorInformeAvance::ctrCpcpEmpenajePruebasFuc();
$cpcpfuselajepruebasfuc = ControladorInformeAvance::ctrCpcpFuselajePruebasFuc();
$cpcphidraulicapruebasfuc = ControladorInformeAvance::ctrCpcpHidraulicaPruebasFuc();
$cpcpmotorespruebasfuc = ControladorInformeAvance::ctrCpcpMotoresPruebasFuc();
$cpcptotalterminadospruebasfuc = ControladorInformeAvance::ctrCpcpTotalesTerminadosPruebasFuc();

$cpcpalaparainspeccion = ControladorInformeAvance::ctrCpcpAlaParaInspeccion();
$cpcpbuzonesparainspeccion = ControladorInformeAvance::ctrCpcpBuzonesParaInspeccion();
$cpcpcabinaparainspeccion = ControladorInformeAvance::ctrCpcpCabinaParaInspeccion();
$cpcpempenajeparainspeccion = ControladorInformeAvance::ctrCpcpEmpenajeParaInspeccion();
$cpcpfuselajeparainspeccion = ControladorInformeAvance::ctrCpcpFuselajeParaInspeccion();
$cpcphidraulicaparainspeccion = ControladorInformeAvance::ctrCpcpHidraulicaParaInspeccion();
$cpcpmotoresparainspeccion = ControladorInformeAvance::ctrCpcpMotoresParaInspeccion();
$cpcptotalterminadosparainspeccion = ControladorInformeAvance::ctrCpcpTotalesTerminadosParaInspeccion();
if ($cpcpalapruebasfuc == false) {
    $cpcpempenajeenproceso["totalterminadoscpcp"] = "0";
    $cpcpfuselajeenproceso["totalterminadoscpcp"] = "0";
    $cpcphidraulicaenproceso["totalterminadoscpcp"] = "0";
    $cpcpmotoresenproceso["totalterminadoscpcp"] = "0";
    $cpcpfuselajeparacierredearea["totalterminadoscpcp"] = "0";
    $cpcphidraulicaparacierredearea["totalterminadoscpcp"] = "0";
    $cpcpmotoresparacierredearea["totalterminadoscpcp"] = "0";
    $cpcpbuzonespruebasfuc["totalterminadoscpcp"] = "0";
    $cpcpcabinapruebasfuc["totalterminadoscpcp"] = "0";
    $cpcpfuselajepruebasfuc["totalterminadoscpcp"] = "0";
    $cpcpmotorespruebasfuc["totalterminadoscpcp"] = "0";
    $cpcpempenajepruebasfuc["totalterminadoscpcp"] = "0";
    $cpcpalapruebasfuc["totalterminadoscpcp"] = "0";
    $cpcpalaparainspeccion["totalterminadoscpcp"] = "0";
    $cpcpbuzonesparainspeccion["totalterminadoscpcp"] = "0";
    $cpcpempenajeparainspeccion["totalterminadoscpcp"] = "0";
    $cpcpfuselajeparainspeccion["totalterminadoscpcp"] = "0";
    $cpcphidraulicaparainspeccion["totalterminadoscpcp"] = "0";
    $cpcpmotoresparainspeccion["totalterminadoscpcp"] = "0";
}

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">INFORME AVANCE CP-3194</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row p-3">
                <div class="col-xs-12 col-xs-offset-1 col-md-12 col-md-offset-2">
                    <div class="table-responsive">
                        <div class="col-sm-6">
                            <h3 class="m-0">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#reporte_tarjetas_cpcp5">
                                Doughnut
                            </button>
                            </h3>
                        </div>
                        <table id="DataTableCPCP" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center">TERMINADO</th>
                                    <th class="text-center">EN PROCESO</th>
                                    <th class="text-center">PARA CIERRE DE AREA</th>
                                    <th class="text-center">PRUEBAS FUN/OP</th>
                                    <th class="text-center">PARA INSPECCION</th>
                                    <th class="text-center">TOTAL GENERAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> ALA
                                        </a>
                                    </td>
                                    <td class="text-right"><?php echo $cpcpala["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpalaenproceso["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpalaparacierredearea["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpalapruebasfuc["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpalaparainspeccion["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right">14</td>

                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> HIDRAULICA
                                        </a>
                                    </td>
                                    <td class="text-right"><?php echo $cpcphidraulica["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcphidraulicaenproceso["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcphidraulicaparacierredearea["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcphidraulicapruebasfuc["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcphidraulicaparainspeccion["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right">3</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> CABINA
                                        </a>
                                    </td>
                                    <td class="text-right"><?php echo $cpcpcabina["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpcabinaenproceso["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpcabinaparacierredearea["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpcabinapruebasfuc["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpcabinaparainspeccion["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right">16</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> FUSELAGE
                                        </a>
                                    </td>
                                    <td class="text-right"><?php echo $cpcpfuselaje["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpfuselajeenproceso["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpfuselajeparacierredearea["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpfuselajepruebasfuc["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpfuselajeparainspeccion["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right">10</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> BUZONES
                                        </a>
                                    </td>
                                    <td class="text-right"><?php echo $cpcpbuzones["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpbuzonesenproceso["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpbuzonesparacierredearea["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpbuzonespruebasfuc["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpbuzonesparainspeccion["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right">8</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> MOTORES
                                        </a>
                                    </td>
                                    <td class="text-right"><?php echo $cpcpmotores["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpmotoresenproceso["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpmotoresparacierredearea["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpmotorespruebasfuc["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpmotoresparainspeccion["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right">3</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> EMPENAGE
                                        </a>
                                    </td>
                                    <td class="text-right"><?php echo $cpcpempenaje["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpempenajeenproceso["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpempenajeparacierredearea["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpempenajepruebasfuc["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpempenajeparainspeccion["totalterminadoscpcp"]; ?></td>
                                    <td class="text-right"><?php echo $cpcpempenaje["totalterminadoscpcp"]; ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> Total General
                                        </a>
                                    </td>
                                    <td class="text-right"><?php echo $cpcptotalterminados["totalterminados"]; ?></td>
                                    <td class="text-right"><?php echo $cpcptotalterminadosenproceso["totalterminados"]; ?></td>
                                    <td class="text-right"><?php echo $cpcptotalterminadosparacierredearea["totalterminados"]; ?></td>
                                    <td class="text-right"><?php echo $cpcptotalterminadospruebasfuc["totalterminados"]; ?></td>
                                    <td class="text-right"><?php echo $cpcptotalterminadosparainspeccion["totalterminados"]; ?></td>
                                    <td class="text-right"><?php echo $cpcptotalterminadosenproceso["totalterminados"]; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-xs-offset-1 col-md-12 col-md-offset-2">
                    <div class="table-responsive">
                        <div class="col-sm-6">
                            <h3 class="m-0">
                                <a href="#" onclick="AbrirGraficaMRBR()">
                                    <span class="glyphicon glyphicon-signal"></span>TARJETAS DE SERVICIO (MRBR)
                                </a>
                            </h3>
                        </div>
                        <table id="DataTableMRBR" class="table table-condensed table-bordered table-striped table-hover table-charts">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center">TERMINADO</th>
                                    <th class="text-center">EN PROCESO</th>
                                    <th class="text-center">PARA CIERRE DE AREA</th>
                                    <th class="text-center">PARA INSPECCION</th>
                                    <th class="text-center">TOTAL GENERAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> ALA
                                        </a>
                                    </td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">3</td>

                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> AVIONICA
                                        </a>
                                    </td>
                                    <td class="text-right">12</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">12</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> FUSELAGE
                                        </a>
                                    </td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">1</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> BUZONES
                                        </a>
                                    </td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">4</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> CABINA
                                        </a>
                                    </td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">1</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> Total General
                                        </a>
                                    </td>
                                    <td class="text-right">14</td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">21</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-xs-offset-1 col-md-12 col-md-offset-2">
                    <div class="table-responsive">
                        <div class="col-sm-6">
                            <h3 class="m-0">
                                <a href="#" onclick="AbrirGraficaTNRs()">
                                    <span class="glyphicon glyphicon-signal"></span>TARJETAS NO RUTINARIAS(TNR´s)
                                </a>
                            </h3>
                        </div>
                        <table id="DataTableTNRs" class="table table-condensed table-bordered table-striped table-hover table-charts">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center">TERMINADO</th>
                                    <th class="text-center">PENDIENTE</th>
                                    <th class="text-center">EN PROCESO</th>
                                    <th class="text-center">VERIFICACION</th>
                                    <th class="text-center">PENDIENTE COMP</th>
                                    <th class="text-center">PARA INSPECCION</th>
                                    <th class="text-center">POR INSTALACION</th>
                                    <th class="text-center">TOTAL GENERAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> ALA
                                        </a>
                                    </td>
                                    <td class="text-right">10</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">10</td>

                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> AVIONICA
                                        </a>
                                    </td>
                                    <td class="text-right">5</td>
                                    <td class="text-right">7</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">13</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> BUZONES
                                        </a>
                                    </td>
                                    <td class="text-right">21</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">22</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> CABINA
                                        </a>
                                    </td>
                                    <td class="text-right">2</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">3</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> EMPENAJE
                                        </a>
                                    </td>
                                    <td class="text-right">8</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">5</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">2</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">16</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> HIDRAULICA
                                        </a>
                                    </td>
                                    <td class="text-right">7</td>
                                    <td class="text-right">4</td>
                                    <td class="text-right">4</td>
                                    <td class="text-right">4</td>
                                    <td class="text-right">2</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">23</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> MOTORES
                                        </a>
                                    </td>
                                    <td class="text-right">13</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">16</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> FUSELAGE
                                        </a>
                                    </td>
                                    <td class="text-right">7</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">7</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> Total General
                                        </a>
                                    </td>
                                    <td class="text-right">73</td>
                                    <td class="text-right">12</td>
                                    <td class="text-right">12</td>
                                    <td class="text-right">7</td>
                                    <td class="text-right">2</td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">1</td>
                                    <td class="text-right">110</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-xs-offset-1 col-md-12 col-md-offset-2">
                    <div class="table-responsive">
                        <div class="col-sm-6">
                            <h3 class="m-0">
                                <a href="#" onclick="AbrirGraficaAvancePorAreas()">
                                    <span class="glyphicon glyphicon-signal"></span>AVANCE POR AREAS
                                </a>
                            </h3>
                        </div>
                        <table id="AvancePorAreas" class="table table-condensed table-bordered table-striped table-hover table-charts">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-center">TASK CARD's</th>
                                    <th class="text-center">TNR's</th>
                                    <th class="text-center">TOTAL TASK CARD's + TNR's</th>
                                    <th class="text-center">PORCENTAJE DE AVANCE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> ALA
                                        </a>
                                    </td>
                                    <td class="text-right">17</td>
                                    <td class="text-right">10</td>
                                    <td class="text-right">21</td>
                                    <td class="text-right">100%</td>

                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> AVIONICA
                                        </a>
                                    </td>
                                    <td class="text-right">12</td>
                                    <td class="text-right">13</td>
                                    <td class="text-right">25</td>
                                    <td class="text-right">73%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> BUZONES
                                        </a>
                                    </td>
                                    <td class="text-right">12</td>
                                    <td class="text-right">22</td>
                                    <td class="text-right">34</td>
                                    <td class="text-right">92%</td>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> CABINA
                                        </a>
                                    </td>
                                    <td class="text-right">17</td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">20</td>
                                    <td class="text-right">92%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> EMPENAJE
                                        </a>
                                    </td>
                                    <td class="text-right">7</td>
                                    <td class="text-right">16</td>
                                    <td class="text-right">23</td>
                                    <td class="text-right">84%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> FUSELAGE
                                        </a>
                                    </td>
                                    <td class="text-right">11</td>
                                    <td class="text-right">7</td>
                                    <td class="text-right">18</td>
                                    <td class="text-right">100%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> HIDRAULICA
                                        </a>
                                    </td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">23</td>
                                    <td class="text-right">26</td>
                                    <td class="text-right">48%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> MOTORES
                                        </a>
                                    </td>
                                    <td class="text-right">3</td>
                                    <td class="text-right">16</td>
                                    <td class="text-right">19</td>
                                    <td class="text-right">85%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            <span class="glyphicon glyphicon-signal"></span> Total General
                                        </a>
                                    </td>
                                    <td class="text-right">82</td>
                                    <td class="text-right">110</td>
                                    <td class="text-right">192</td>
                                    <td class="text-right">0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- chart end -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->
<div class="modal fade" id="reporte_tarjetas_cpcp5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: red;color: white">
                <h4 class="modal-title" id="exampleModalLabel">Grafica Tarjetas Extendida</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Reportes Tarjetas CPCP <?php echo $totalCPCP; ?>
                <canvas id="report_tarjetas_cpcp5" height="150px"></canvas>
            </div>
        </div>
    </div>
</div>