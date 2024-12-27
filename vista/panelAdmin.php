<?php
$seguimiento = ControladorSeguimiento::ctrCantidadEstados();
$proceso = ControladorSeguimiento::ctrCantidadProcesos();
$PendienteMaterial = ControladorSeguimiento::ctrCantidadPendienteMaterial();
$limpieza = ControladorSeguimiento::ctrCantidadLimpiezas();
$observacion = ControladorSeguimiento::ctrCantidadObservaciones();
$porinstalacion = ControladorSeguimiento::ctrCantidadPorInstalacion();
$pruebasfunop = ControladorSeguimiento::ctrCantidadPorPruebasFunc();
$verificacionfinal = ControladorSeguimiento::ctrCantidadVerFinal();
$terminado = ControladorSeguimiento::ctrCantidadTerminado();

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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Panel Principal</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">

        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="info-box">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-window-close"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">SIN EMPEZAR</span>
              <span class="info-box-number">
                <?php echo $seguimiento["seguimiento"]; ?>
              </span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="info-box">
            <span class="info-box-icon bg-secondary elevation-1"><i class="fa fa-tasks fa"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">EN PROCESO</span>
              <span class="info-box-number">
                <?php echo $proceso["seguimiento"]; ?>
              </span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="info-box">
            <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-book-open"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">PENDIENTE MATERIAL</span>
              <span class="info-box-number">
                <?php echo $PendienteMaterial["seguimiento"]; ?>
              </span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="info-box">
            <span class="info-box-icon bg-success elevation-1"><i class="fa fa-magic"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">PRUEBAS FUN/OP</span>
              <span class="info-box-number">
                <?php echo $pruebasfunop["seguimiento"]; ?>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="info-box">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-clipboard-list"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">PARA INSPECCION</span>
              <span class="info-box-number">
                <?php echo $observacion["seguimiento"]; ?>

              </span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-cog"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">POR INSTALACION</span>
              <span class="info-box-number">
                <?php echo $porinstalacion["seguimiento"]; ?>

              </span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="info-box">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-times"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">PARA CIERRE DE AREA</span>
              <span class="info-box-number">
                <?php echo $limpieza["seguimiento"]; ?>

              </span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fa fa-check"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">VERIFICACION FINAL</span>
              <span class="info-box-number">
                <?php echo $verificacionfinal["seguimiento"]; ?>

              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="info-box">
            <span class="info-box-icon bg-danger elevation-1"><i class="far fa-window-close"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">TERMINADO</span>
              <span class="info-box-number">
                <?php echo $terminado["seguimiento"]; ?>

              </span>
            </div>
          </div>
        </div>
      </div>

      <!--seccion de noticias-->
      <?php
      require_once "controlador/noticiaControlador.php";
      require_once "modelo/noticiaModelo.php";

      $noticia=ControladorNoticia::ctrInfoNoticias();
      $TotalNoticia=ControladorNoticia::ctrTotNoticias();
      ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-primary">
            <div class="card-header">
              <div class="user-block">
                <img src="assest/dist/img/noticia/noticia-img-default.png" alt="" class="img-circle">
                <div class="username">
                  <h3 class="card-title">Ultimas Noticias</h3>
                </div>
                <span class="description">Total: <?php echo $TotalNoticia["total_noticias"];?></span>
              </div>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>

              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">

                  <div class="row">
                    <div class="col-12">

                      <div id="noticias-content">
                        <?php
                        foreach($noticia as $value){
                        ?>
                        <!-- Attachment -->

                        <div class="attachment-block clearfix">
                          <?php if($value["foto_noticia"]==""){
                          ?>
                          <img class="attachment-img" src="assest/dist/img/noticia/noticia-img-default.png">
                          <?php
                        }else{
                          ?>
                          <img class="attachment-img" src="assest/dist/img/noticia/<?php echo $value["foto_noticia"];?>">
                          <?php }?>



                          <span class="text-muted float-right">
                            <?php
                          $timestamp=strtotime($value["fecha_noticia"]);
                          echo date("F j, Y, g:i a", $timestamp);?></span>


                          <div class="attachment-pushed">
                            <h4 class="attachment-heading"><?php echo $value["titulo_noticia"];?></h4>

                            <div class="attachment-text text-truncate">
                              <?php echo $value["descripcion_noticia"];?>
                              <br>
                              <button class="btn btn-link" onclick="MVerNoticia(<?php echo $value['id_noticia']; ?>)" style="padding:0;">Saber más...</button>

                            </div>
                            <!-- /.attachment-text -->
                          </div>         
                          <!-- /.attachment-pushed -->
                        </div>

                        <!-- /.attachment-block -->
                        <?php }?>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                  <h3 class="text-center">Buscar noticia</h3>
                  <div class="row">
                    <div class="col-md-12">
                      <form>
                        <div class="input-group">
                          <input type="search" class="form-control form-control-lg" placeholder="Escriba el titulo" name="txtBusNoticia" id="txtBusNoticia">
                          <div class="input-group-append">
                            <button type="button" class="btn btn-lg btn-default" onclick="busNoticia()">
                              <i class="fa fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="mt-5 mb-3">
                    <?php 
                    if(habilitado(1)!=null){
                    ?>
                    <button class="btn btn-sm btn-primary" onclick="MNuevaNoticia()">Agregar noticia</button>
                    <?php
                    }
                    ?>
                  </div>

                </div>

              </div>

            </div>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-lg-3">
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Reportes Tarjetas MRBR <?php echo $totalAD; ?></h3>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex">
                <p class="d-flex flex-column">

                </p>
              </div>
              <!-- /.d-flex -->

              <div class="position-relative mb-4">
                <canvas id="report_tarjetas_mrbr1" height="200px"></canvas>
              </div>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#report_tarjetas_mrbr">
                Barras
              </button>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#report_tarjetas_barra">
                Pie
              </button>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#report_tarjetas_torta">
                Dona
              </button>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#informeMRBR">
                Informe
              </button>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Reportes Tarjetas CPCP <?php echo $totalCPCP; ?></h3>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex">
                <p class="d-flex flex-column">

                </p>
              </div>
              <!-- /.d-flex -->

              <div class="position-relative mb-4">
                <canvas id="reporte_tarjetas_cpcp1" height="200"></canvas>
              </div>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reporte_tarjetas_cpcp2">
                Barras
              </button>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#reporte_tarjetas_cpcp3">
                Pie
              </button>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#reporte_tarjetas_cpcp4">
                Dona
              </button>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#informeCPCP">
                Informe
              </button>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Reportes Tarjetas TNRs <?php echo $totalTNRs; ?></h3>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex">
                <p class="d-flex flex-column">

                </p>
              </div>
              <!-- /.d-flex -->

              <div class="position-relative mb-4">
                <canvas id="reporte_tarjetas_tnrs1" height="200"></canvas>
              </div>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reportes_tarjetas_tnrs2">
                Barras
              </button>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#reportes_tarjetas_tnrs3">
                Pie
              </button>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#reportes_tarjetas_tnrs4">
                Dona
              </button>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#reportes_tarjetas_tnrs4">
                Informe
              </button>
            </div>
          </div>
        </div>
      </div>

    </div>
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


<!-- Modal 1 -->
<div class="modal fade" id="report_tarjetas_mrbr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: red;color: white">
        <h4 class="modal-title" id="exampleModalLabel">Grafica Tarjetas Extendida</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Reportes Tarjetas MRBR <?php echo $totalAD; ?>
        <canvas id="report_tarjetas_mrbr2" height="150px"></canvas>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="report_tarjetas_barra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: red;color: white">
        <h4 class="modal-title" id="exampleModalLabel">Grafica Tarjetas Extendida</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Reportes Tarjetas MRBR <?php echo $totalAD; ?>
        <canvas id="report_tarjetas_mrbr4" height="150px"></canvas>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="report_tarjetas_torta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: red;color: white">
        <h4 class="modal-title" id="exampleModalLabel">Grafica Tarjetas Extendida</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Reportes Tarjetas MRBR <?php echo $totalAD; ?>
        <canvas id="report_tarjetas_mrbr3" height="150px"></canvas>
      </div>
    </div>
  </div>
</div>
<!-- Modal end 1 -->

<!-- Modal 2 -->
<div class="modal fade" id="reporte_tarjetas_cpcp2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <canvas id="report_tarjetas_cpcp2" height="150px"></canvas>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="reporte_tarjetas_cpcp3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <canvas id="report_tarjetas_cpcp3" height="150px"></canvas>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="reporte_tarjetas_cpcp4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <canvas id="report_tarjetas_cpcp4" height="150px"></canvas>
      </div>
    </div>
  </div>
</div>
<!-- Modal end 2 -->

<!-- Modal 3 -->
<div class="modal fade" id="reportes_tarjetas_tnrs2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: red;color: white">
        <h4 class="modal-title" id="exampleModalLabel">Grafica Tarjetas Extendida</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Reportes Tarjetas TNRs 110
        <canvas id="reportes_tarjetas_tnr2" height="150px"></canvas>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="reportes_tarjetas_tnrs3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: red;color: white">
        <h4 class="modal-title" id="exampleModalLabel">Grafica Tarjetas Extendida</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Reportes Tarjetas TNRs 110
        <canvas id="reportes_tarjetas_tnr3" height="150px"></canvas>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="reportes_tarjetas_tnrs4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: red;color: white">
        <h4 class="modal-title" id="exampleModalLabel">Grafica Tarjetas Extendida</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Reportes Tarjetas TNRs 110
        <canvas id="reportes_tarjetas_tnr4" height="150px"></canvas>
      </div>
    </div>
  </div>
</div>
<!-- Modal end 3 -->

<!-- Informes MRBR-->
<div class="modal fade" id="informeMRBR" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header" style="background-color: red;color: white">
        <h4 class="modal-title" id="exampleModalLabel">Informe Tarjetas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="DataTableMRBR" class="table table-bordered border-primary">
          <thead>
            <tr>
              <th></th>
              <th>TERMINADO</th>
              <th>EN PROCESO</th>
              <th>PARA CIERRE DE AREA</th>
              <th>PRUEBAS FUN/OP</th>
              <th>PARA INSPECCION</th>
              <th>TOTAL GENERAL</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center text-primary">ALA</td>
              <td class="text-center"><?php echo $cpcpala["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpalaenproceso["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpalaparacierredearea["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpalapruebasfuc["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpalaparainspeccion["totalterminadoscpcp"]; ?></td>
              <td class="text-center">14</td>

            </tr>
            <tr>
              <td class="text-center text-primary">HIDRAULICA</td>
              <td class="text-center"><?php echo $cpcphidraulica["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcphidraulicaenproceso["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcphidraulicaparacierredearea["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcphidraulicapruebasfuc["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcphidraulicaparainspeccion["totalterminadoscpcp"]; ?></td>
              <td class="text-center">3</td>
            </tr>
            <tr>
              <td class="text-center text-primary">CABINA</td>
              <td class="text-center"><?php echo $cpcpcabina["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpcabinaenproceso["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpcabinaparacierredearea["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpcabinapruebasfuc["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpcabinaparainspeccion["totalterminadoscpcp"]; ?></td>
              <td class="text-center">16</td>
            </tr>
            <tr>
              <td class="text-center text-primary">FUSELAGE</td>
              <td class="text-center"><?php echo $cpcpfuselaje["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpfuselajeenproceso["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpfuselajeparacierredearea["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpfuselajepruebasfuc["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpfuselajeparainspeccion["totalterminadoscpcp"]; ?></td>
              <td class="text-center">10</td>
            </tr>
            <tr>
              <td class="text-center text-primary">BUZONES</td>
              <td class="text-center"><?php echo $cpcpbuzones["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpbuzonesenproceso["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpbuzonesparacierredearea["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpbuzonespruebasfuc["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpbuzonesparainspeccion["totalterminadoscpcp"]; ?></td>
              <td class="text-center">8</td>
            </tr>
            <tr>
              <td class="text-center text-primary">MOTORES</td>
              <td class="text-center"><?php echo $cpcpmotores["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpmotoresenproceso["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpmotoresparacierredearea["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpmotorespruebasfuc["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpmotoresparainspeccion["totalterminadoscpcp"]; ?></td>
              <td class="text-center">3</td>
            </tr>
            <tr>
              <td class="text-center text-primary">EMPENAGE</td>
              <td class="text-center"><?php echo $cpcpempenaje["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpempenajeenproceso["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpempenajeparacierredearea["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpempenajepruebasfuc["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpempenajeparainspeccion["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpempenaje["totalterminadoscpcp"]; ?></td>
            </tr>
            <tr>
              <td class="text-center text-primary">TOTAL GENERAL</td>
              <td class="text-center"><?php echo $cpcptotalterminados["totalterminados"]; ?></td>
              <td class="text-center"><?php echo $cpcptotalterminadosenproceso["totalterminados"]; ?></td>
              <td class="text-center"><?php echo $cpcptotalterminadosparacierredearea["totalterminados"]; ?></td>
              <td class="text-center"><?php echo $cpcptotalterminadospruebasfuc["totalterminados"]; ?></td>
              <td class="text-center"><?php echo $cpcptotalterminadosparainspeccion["totalterminados"]; ?></td>
              <td class="text-center"><?php echo $cpcptotalterminadosenproceso["totalterminados"]; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Informes end MRBR -->

<!-- Informes CPCP-->
<div class="modal fade" id="informeCPCP" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header" style="background-color: red;color: white">
        <h4 class="modal-title" id="exampleModalLabel">Informe Tarjetas</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="DataTableCPCP" class="table table-bordered border-primary">
          <thead>
            <tr>
              <th></th>
              <th>TERMINADO</th>
              <th>EN PROCESO</th>
              <th>PARA CIERRE DE AREA</th>
              <th>PRUEBAS FUN/OP</th>
              <th>PARA INSPECCION</th>
              <th style="background-color: yellow;">TOTAL GENERAL</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center text-primary">ALA</td>
              <td class="text-center"><?php echo $cpcpala["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpalaenproceso["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpalaparacierredearea["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpalapruebasfuc["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpalaparainspeccion["totalterminadoscpcp"]; ?></td>
              <td class="text-center" style="background-color: yellow;">14</td>

            </tr>
            <tr>
              <td class="text-center text-primary">HIDRAULICA</td>
              <td class="text-center"><?php echo $cpcphidraulica["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcphidraulicaenproceso["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcphidraulicaparacierredearea["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcphidraulicapruebasfuc["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcphidraulicaparainspeccion["totalterminadoscpcp"]; ?></td>
              <td class="text-center" style="background-color: yellow;">3</td>
            </tr>
            <tr>
              <td class="text-center text-primary">CABINA</td>
              <td class="text-center"><?php echo $cpcpcabina["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpcabinaenproceso["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpcabinaparacierredearea["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpcabinapruebasfuc["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpcabinaparainspeccion["totalterminadoscpcp"]; ?></td>
              <td class="text-center" style="background-color: yellow;">16</td>
            </tr>
            <tr>
              <td class="text-center text-primary">FUSELAGE</td>
              <td class="text-center"><?php echo $cpcpfuselaje["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpfuselajeenproceso["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpfuselajeparacierredearea["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpfuselajepruebasfuc["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpfuselajeparainspeccion["totalterminadoscpcp"]; ?></td>
              <td class="text-center" style="background-color: yellow;">10</td>
            </tr>
            <tr>
              <td class="text-center text-primary">BUZONES</td>
              <td class="text-center"><?php echo $cpcpbuzones["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpbuzonesenproceso["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpbuzonesparacierredearea["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpbuzonespruebasfuc["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpbuzonesparainspeccion["totalterminadoscpcp"]; ?></td>
              <td class="text-center" style="background-color: yellow;">8</td>
            </tr>
            <tr>
              <td class="text-center text-primary">MOTORES</td>
              <td class="text-center"><?php echo $cpcpmotores["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpmotoresenproceso["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpmotoresparacierredearea["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpmotorespruebasfuc["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpmotoresparainspeccion["totalterminadoscpcp"]; ?></td>
              <td class="text-center" style="background-color: yellow;">3</td>
            </tr>
            <tr>
              <td class="text-center text-primary">EMPENAGE</td>
              <td class="text-center"><?php echo $cpcpempenaje["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpempenajeenproceso["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpempenajeparacierredearea["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpempenajepruebasfuc["totalterminadoscpcp"]; ?></td>
              <td class="text-center"><?php echo $cpcpempenajeparainspeccion["totalterminadoscpcp"]; ?></td>
              <td class="text-center" style="background-color: yellow;">7</td>
            </tr>
            <tr>
              <td class="text-center text-primary">TOTAL GENERAL</td>
              <td class="text-center"><?php echo $cpcptotalterminados["totalterminados"]; ?></td>
              <td class="text-center"><?php echo $cpcptotalterminadosenproceso["totalterminados"]; ?></td>
              <td class="text-center"><?php echo $cpcptotalterminadosparacierredearea["totalterminados"]; ?></td>
              <td class="text-center"><?php echo $cpcptotalterminadospruebasfuc["totalterminados"]; ?></td>
              <td class="text-center"><?php echo $cpcptotalterminadosparainspeccion["totalterminados"]; ?></td>
              <td class="text-center" style="background-color: red;">61</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Informes end CPCP -->


<!--llamar al baner de politicas-->
<script>
document.addEventListener('DOMContentLoaded', (event) => { BannerNoticia(); });
</script>