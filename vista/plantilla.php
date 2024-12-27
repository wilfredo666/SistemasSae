<!DOCTYPE html>
<html lang = "es">

  <head>
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <title>SISTEMAS | S.A.E.</title>
    <link rel="shortcut icon" href="#">
    <!-- Google Font: Source Sans Pro -->
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--icono-->

    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->

    <link rel = "icon" href = "assest/dist/img/logosae.gif">
    <!-- Font Awesome -->
    <link rel = "stylesheet" href = "assest/plugins/fontawesome-free/css/all.min.css">
    
    <!-- Theme style -->
    <link rel = "stylesheet" href = "assest/dist/css/adminlte.css">
    <link rel = "stylesheet" href = "assest/dist/css/main.css">
    <link rel=  "stylesheet" href = "assest/dist/css/skins/_all-skins.min.css">

    <!-- DataTables -->
    <link rel = "stylesheet" href = "assest/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel = "stylesheet" href = "assest/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel = "stylesheet" href = "assest/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- BS Strrepper -->
    <link rel = "stylesheet" href = "assest/plugins/bs-stepper/css/bs-stepper.css">

    <!-- SweetAlert2 -->
    <link rel = "stylesheet" href = "assest/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <!-- Daterange picker -->
    <link rel="stylesheet" href="assest/plugins/daterangepicker/daterangepicker.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="assest/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="assest/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

 <!--   <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />
-->
    <!-- Theme style -->
  </head>

  <?php

  if(isset($_SESSION["ingreso"])&&$_SESSION["ingreso"]=="ok"){
    if(isset($_GET["ruta"])){
      include "vista/asideMenu.php";
      //usuario
      if($_GET["ruta"]=="permisos" ||
         $_GET["ruta"]=="galeriaUsuario"){
        $ruta="usuario/".$_GET["ruta"].".php";
      }

      if ( $_GET["ruta"] == "panelAdmin" ||
          $_GET["ruta"] == "VUsuario" ||
          $_GET["ruta"] == "CTramite" ||
          $_GET["ruta"] == "VSeguimiento" ||
          $_GET["ruta"] == "VCliente" |
          $_GET["ruta"] == "VServicio" ||
          $_GET["ruta"] == "VArchivos" ||
          $_GET["ruta"] == "VAutorizacion" ||
          $_GET["ruta"] == "VMaterial" ||
          $_GET["ruta"] == "VHerramientas" ||
          $_GET["ruta"] == "VLogHerramientas" ||
          $_GET["ruta"] == "VControlHerramientas" ||
          $_GET["ruta"] == "VCalibracion" ||
          $_GET["ruta"] == "VOrdenTrabajo" ||
          $_GET["ruta"] == "VOrdenTrabajoIng" ||
          $_GET["ruta"] == "VRab" ||
          $_GET["ruta"] == "VDBaja" ||
          $_GET["ruta"] == "BusTramite" ||
          $_GET["ruta"] == "VMarcaciones" ||
          $_GET["ruta"] == "VRepHerramientas" ||
          $_GET["ruta"] == "VRepHerramientasIng" ||
          $_GET["ruta"] == "VReportesGraficos" ||
          $_GET["ruta"] == "VInforme" ||
          $_GET["ruta"] == "VInformeIng" ||
          $_GET["ruta"] == "VLogDevolucion" ||
          $_GET["ruta"] == "VLogCalibradas" ||
          $_GET["ruta"] == "VLogDevCalibradas" ||
          $_GET["ruta"] == "VBaseLpz" ||
          $_GET["ruta"] == "VBaseScz" ||
          $_GET["ruta"] == "VInventarioHangar" ||
          $_GET["ruta"] == "VerArchivos" ||
          $_GET["ruta"] == "descargar" ||
          $_GET["ruta"] == "VRepTecnico" ||
          $_GET["ruta"] == "VRepPrestamosExternos" ||
          $_GET["ruta"] == "FNuevoPrestamoExt" ||
          $_GET["ruta"] == "salir" ) {
        $ruta=$_GET["ruta"].".php";

      }
      include $ruta;
      include "footer.php";

    }

  } else {
    include "login.php";
  }

  ?>
