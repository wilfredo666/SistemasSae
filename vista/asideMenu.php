<?php

function habilitado($idPermiso)
{
  $id = $_SESSION["id"];
  $permiso = ControladorUsuario::ctrUsuarioPermiso($id, $idPermiso);
  return $permiso;
}
?>

<style>
  .navbar-nav {
    flex-wrap: wrap;
  }
  .nav-item {
    flex: 1 1 auto; /* Permite que los elementos se ajusten automáticamente */
  }
</style>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container-fluid">
        <a href="panelAdmin" class="navbar-brand">
          <img src="assest/imagenes/logosae.png" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">SISTEMAS SAE</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-bs-target="#menu" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
          <!-- Left navbar links -->
          <ul class="navbar-nav me-auto">
            <!--inio Herramientas Origen o Calibracion-->
            <?php if (habilitado(11) != null) {
            ?>
            <li class="nav-item dropdown dropdown-hover">
              <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Control Herramientas</a>
              <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                <li><a href="VControlHerramientas" class="dropdown-item">Herramientas Completas</a></li>
                <li><a href="VCalibracion" class="dropdown-item">Herramientas Origen o Calibracion</a></li>
                <li><a href="VDBaja" class="dropdown-item">Herramientas Dados De Baja</a></li>
                <li><a href="VRepHerramientas" class="dropdown-item">Herramientas Reporte</a></li>
                <li><a href="VInforme" class="dropdown-item">Informe Reporte</a></li>
                <li><a href="VLogCalibradas" class="dropdown-item">Log Herramientas Calibradas</a></li>
                <li><a href="VLogDevCalibradas" class="dropdown-item">Log Devolucion Calibradas</a></li>
                <li><a href="VRepTecnico" class="dropdown-item">Reporte por tecnico</a></li>
              </ul>
            </li>
            <?php } ?>
            <!--fin Herramientas Origen o Calibracion-->

            <!--inio Herramientas Salientes Entrantes-->
            <?php if (habilitado(10) != null) {
            ?>
            <li class="nav-item dropdown dropdown-hover">
              <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Herramienta Reci/Entre</a>
              <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                <li><a href="VHerramientas" class="dropdown-item">Herramientas SAE-LAB</a></li>
                <li><a href="VLogHerramientas" class="dropdown-item">Log Herramientas</a></li>
                <li><a href="VLogDevolucion" class="dropdown-item">Log Devoluciones</a></li>
              </ul>
            </li>
            <?php } ?>
            <!--fin Herramientas Salientes Entrantes-->

            <!--inio Inventario Equipos Hangar-->
            <?php if (habilitado(16) != null) {
            ?>
            <li class="nav-item dropdown dropdown-hover">
              <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Inventario Equipos Hangar</a>
              <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                <li><a href="VInventarioHangar" class="dropdown-item">Herramientas y Equipos</a></li>
                <li><a href="VLogHerramientas" class="dropdown-item">Log Herramientas</a></li>
                <li><a href="VLogDevolucion" class="dropdown-item">Log Devoluciones</a></li>
              </ul>
            </li>
            <?php } ?>
            <!--fin Inventario Equipos Hangar-->

            <!--inicio ordenes de trabajo-->
            <?php if (habilitado(16) != null) {
            ?>
            <li class="nav-item dropdown dropdown-hover">
              <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Ordenes De Trabajo</a>
              <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                <li><a href="VOrdenTrabajo" class="dropdown-item">Orden De Trabajo</a></li>
                <li><a href="VRab" class="dropdown-item">Certificados RAB 001</a></li>
              </ul>
            </li>
            <?php } ?>
            <!--fin ordenes de trabajo-->


            <!--inicio bases informes -->
            <?php if (habilitado(17) != null) {
            ?>
            <li class="nav-item dropdown dropdown-hover">
              <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Bases Informe</a>
              <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                <?php if (habilitado(18) != null) {
                ?>
                <li><a href="VBaseLpz" class="dropdown-item">Base La Paz</a></li>
                <?php } ?>

                <?php if (habilitado(19) != null) {
                ?>
                <li><a href="VBaseScz" class="dropdown-item">Base Santa Cruz</a></li>
                <?php } ?>
              </ul>
            </li>
            <?php } ?>
            <!--fin bases informes-->

            <!--inicio Paquete Servicio-->
            <?php if (habilitado(12) != null) {
            ?>
            <li class="nav-item dropdown dropdown-hover">
              <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Paquete Servicio</a>
              <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                <li><a href="VServicio" class="dropdown-item">Lista Paquete Servicio</a></li>
              </ul>
            </li>
            <?php } ?>
            <!--fin Paquete Servicio-->

            <!--inio Registro Tarjetas-->
            <?php if (habilitado(5) != null) {
            ?>
            <li class="nav-item dropdown dropdown-hover">
              <a href="#" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" class="nav-link dropdown-toggle">Registro Tarjetas</a>
              <ul aria-labelledby="navbarDropdown" class="dropdown-menu border-0 shadow">
                <?php if (habilitado(9) != null) {
                ?>
                <li><a href="CTramite" class="dropdown-item">Salidas/Entradas</a></li>
                <?php } ?>
                <li><a href="VSeguimiento" class="dropdown-item">Registrar</a></li>
                <li><a href="BusTramite" class="dropdown-item">Buscar</a></li>
                <li><a href="BusTramite" class="dropdown-item" onclick="MRegMovSeguimiento()">Movimiento</a></li>
                <li><a href="VMarcaciones" class="dropdown-item">Reporte Tarjetas</a></li>
                <li><a href="#" class="dropdown-item" onclick="MCargarRegistros()">Cargar Registros Tarjetas</a></li>
                <?php if (habilitado(13) != null) {
                ?>
                <li><a href="VReportesGraficos" class="dropdown-item">Informe Avance</a></li>
                <?php } ?>
              </ul>
            </li>
            <?php } ?>
            <!--fin Registro Tarjetas-->

            <!--inio Materiales-->
            <?php if (habilitado(8) != null) {
            ?>
            <li class="nav-item dropdown dropdown-hover">
              <a href="#" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" class="nav-link dropdown-toggle">Materiales</a>
              <ul aria-labelledby="navbarDropdown" class="dropdown-menu border-0 shadow">
                <li><a href="VMaterial" class="dropdown-item">Lista Materiales</a></li>
                <li><a href="#" class="dropdown-item" onclick="MCargarRegistrosMateriales()">Cargar Registros Materiales</a></li>
              </ul>
            </li>
            <?php } ?>
            <!--fin Materiales-->

            <!--inio Gestor Archivos-->
            <?php if (habilitado(6) != null) {
            ?>
            <li class="nav-item dropdown dropdown-hover">
              <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Gestor Archivos</a>
              <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                <li><a href="VArchivos" class="dropdown-item">Subir Archivos</a></li>
                <li><a href="#" class="dropdown-item">Archivos Compartidos</a></li>
              </ul>
            </li>
            <?php } ?>
            <!--fin Gestor Archivos-->

            <!--inicio Usuarios-->
            <?php if (habilitado(1) != null) {
            ?>
            <li class="nav-item dropdown dropdown-hover">
              <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Usuarios</a>
              <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                <li><a href="VUsuario" class="dropdown-item">Lista Usuarios</a></li>
                <li><a href="#" class="dropdown-item" onclick="MCargarRegistrosUsuarios()">Carga Usuarios Masivos</a></li>
                <!--<li class="dropdown-divider"></li> este line division-->
              </ul>
            </li>
            <?php } ?>
            <!--fin usuarios-->

            <!--area de seleccion de idioma-->
            <li class="nav-item dropdown dropdown-hover">
              <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fas fa-language" style="
                font-size: 25px;"></i></a>
              <?php
              //capturar la ruta
              $array=explode("/", $_SERVER["REQUEST_URI"]);
              $ruta=array_filter($array)[2];

              //versiones de idiomas
              if(substr($ruta, -3)=="Ing"){
                $espanol=substr($ruta, 0, -3);
                $ingles=$ruta;
              }else{
                $ingles=$ruta."Ing";
                $espanol=$ruta;
              }

              ?>
              <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                <li><a href="<?php echo $espanol; ?>" class="dropdown-item">Español</a></li>
                <li><a href="<?php echo $ingles; ?>" class="dropdown-item">Ingles</a></li>
                <!--<li class="dropdown-divider"></li> este line division-->
              </ul>
            </li>

            <!--inicio Menu perfil-->
            <li class="dropdown user user-menu" style="margin-top: 5px;">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="assest/dist/img/usuarios/<?php echo $_SESSION["imgUsuario"]; ?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $_SESSION["nombreUsuario"]; ?></span>
              </a>

              <!-- Sub Menu Imagen -->
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="assest/dist/img/usuarios/<?php echo $_SESSION["imgUsuario"]; ?>" class="user-image" alt="User Image">

                  <p>
                    <?php echo $_SESSION["nombreUsuario"]; ?>
                    <small><?php echo $_SESSION["rol"]; ?></small>
                  </p>
                </li>

                <li class="user-footer">
                  <div class="float-start">
                    <a href="#" class="btn btn-default btn-flat">Perfil</a>
                  </div>
                  <div class="float-end">
                    <a href="salir" class="btn btn-default btn-flat">Salir</a>
                  </div>
                </li>
              </ul>
              <!--end Sub Menu Imagen -->
            </li>
            <!--fin Menu perfil-->
          </ul>
          <!--fin dropp-->
        </div>
        <!-- Right navbar links -->
      </div>
    </nav>
    <!-- /.navbar -->