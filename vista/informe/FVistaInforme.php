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
<div class="modal-header">
    <h4 class="modal-title">Cargar Registros en lote</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">

    <form enctype="multipart/form-data" id="FCargarRegistrosMat">
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="dataMaterial" name="dataMaterial">
                    <label class="custom-file-label" for="dataMaterial">Elegir archivo (.CSV)</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                </div>
            </div>
        </div>

    </form>

</div>

<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
    <button type="submit" class="btn btn-primary" onclick="CargarRegistrosMat()">Guardar</button>
</div>