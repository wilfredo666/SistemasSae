<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header pb-0">
    <div class="container-fluid">
      <div class="row mb-12">
        <div class="col-sm-12">
          <h3 class="m-0">Registro nuevo prestamo a externos</h3>
          <hr>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <div class="containter row">
      <div class="col-md-6">

        <div class="form-group col-md-12">
          <table id="DataTableDefault" class="table table-bordered table-striped display">
            <thead class="bg-success">
              <tr>
                <th># Carpeta</th>
                <th>Descripción</th>
                <th>Acción</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $herramienta = ControladorHerramientas::ctrInfoVistaHerramientas();
              foreach ($herramienta as $value) {
              ?>
              <tr>
                <td><?php echo $value["numcarpeta"]; ?></td>
                <td><?php echo $value["descripcion"]; ?></td>
                <td class="text-center">
                  <button type="button" class="btn btn-success btn-sm" onclick="agregarCarritoPE('<?php echo $value['numcarpeta']; ?>')">
                    <i class="fas fa-plus"></i>
                  </button>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>

        </div>

      </div>

      <div class="col-sm-6">
        <form id="FormRegPrestamoExt" class="row">
          <div class="form-group col-sm-6">
            <label for="">Quien presta</label>

            <select class="form-control" name="usuarioPresta" id="usuarioPresta">
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
          </div>

          <div class="form-group col-sm-6">
            <label for="">Nombre empleado</label>
            <input type="text" class="form-control" id="nomEmpleado" name="nomEmpleado" placeholder="A quien se concede el prestamo">
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Cargo Empleado</label>
              <input type="text" class="form-control" id="cargoEmple" name="cargoEmple">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">C.I. de empleado</label>
              <input type="text" class="form-control" id="ciEmpleado" name="ciEmpleado">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Empresa</label>
              <input type="text" class="form-control" id="nomEmpresa" name="nomEmpresa">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Teléfono Empleado</label>
              <input type="text" class="form-control" id="telEmpleado" name="telEmpleado">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Dirección Empleado</label>
              <input type="text" class="form-control" id="dirEmpleado" name="dirEmpleado">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Fecha de prestamo</label>
              <input type="date" class="form-control" id="fechaPrestamo" name="fechaPrestamo">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label for="">Observaciones</label>
              <input type="text" class="form-control" id="observacionPE" name="observacionPE">
            </div>
          </div>

          <table class="table">
            <thead>
              <tr>
                <th>Descripción</th>
                <th># Carpeta</th>
                <th style="width:15px">Cantidad</th>
                <td>&nbsp;</td>
              </tr>
            </thead>
            <tbody id="listaDetallePE">
            </tbody>

          </table>
          <div  class="col-sm-12">
            <button class="btn btn-primary float-right">Guardar</button>
          </div>

        </form>
      </div><!-- /.col -->

    </div>

  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
