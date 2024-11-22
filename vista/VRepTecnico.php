<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header pb-0">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-5">
          <h3 class="m-0">Reporte de Tecnicos</h3>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <div class="containter row">
      <div class="col-sm-5">

      </div><!-- /.col -->
      <div class="col-sm-7 row">
        <form id="ReportePresTecnico">
          <div class="form-group col-sm-12">
            <div class="input-group mb-0">
              <div class="input group-prepend">
                <span class="input-group-text">Por Tecnico: </span>
              </div>

              <select class="form-control" name="nomTecnico" id="nomTecnico">
               <option value="todos">TODOS</option>
                <?php
                require_once "./controlador/usuarioControlador.php";
                require_once "./modelo/usuarioModelo.php";
                $usuarios = ControladorUsuario::ctrInfoUsuarios();
                foreach ($usuarios as $value) {
                ?>
                <option value="<?php echo $value["id_usuario"]; ?>"><?php echo $value["nombre_usuario"]; ?></option>
                <?php
                }
                ?>
              </select>
              <div class="input-group-append">
                <button type="button" class="btn btn-navbar bg-secondary" onclick="reportePresTecnico();">
                  <i class="fas fa-search "></i>
                </button>
              </div>
              <a id="impRepTecnico" style="margin-left: 10px;" class="btn btn-success" href="" target="_blank"><i class="fas fa-print">Imprimir</i></a>
            </div>
          </div>
        </form>
      </div><!-- /.col -->
    </div>

  </div>
  <div class="content">
    <div class="container-fluid">
      <table id="DataTableHerramientas" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Tecnico</th>
            <th>Prestamista</th>
            <th>Aeronave</th>
            <th>Fecha y hora</th>
            <th>Tipo</th>

          </tr>
        </thead>
        <tbody id="repPrestamosTecnico">

        </tbody>
      </table>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
  $('#nomTecnico').on('change', function() {
    var valor_seleccionado = this.value;
    $("#impRepTecnico").attr("href", "vista/reportes/repPrestamosTecnico.php?idTec=" + valor_seleccionado);
  })
</script>