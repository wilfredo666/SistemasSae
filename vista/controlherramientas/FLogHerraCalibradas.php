<?php
$id = $_GET["ids"];
$idArreglos = trim($id, "{ }");
$resultado = explode(",", $idArreglos);

?>

<div class="modal-header">
  <h4 class="modal-title">Registrar prestamo de herramienta calibrada</h4>
  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <input type="hidden" class="form-control" id="seleccionados" name="seleccionados" value="">
</div>
<div class="modal-body">
  <form id="FRegLogHerramientasCalibradas">
    <div class="form-group">
      <label for="">Nombre Técnico</label>
      <?php
      require_once "../../controlador/usuarioControlador.php";
      require_once "../../modelo/usuarioModelo.php";
      $usuarios = ControladorUsuario::ctrInfoUsuarios();

      ?>
      <select class="form-control select2bs4" name="nomLog" id="nomLog">

        <?php foreach ($usuarios as $value) {
        ?>
          <option value="<?php echo $value["id_usuario"]; ?>"><?php echo $value["nombre_usuario"]; ?></option>
        <?php
        }
        ?>
      </select>
    </div>

    <div class="form-group">
      <label for="">Aerolinea</label>
      <?php
      require_once "../../controlador/servicioControlador.php";
      require_once "../../modelo/servicioModelo.php";
      $aerolinea = ControladorServicio::ctrInfoServicios();

      ?>
      <select class="form-control select2bs4" name="nomServicio" id="nomServicio">

        <?php foreach ($aerolinea as $value) {
        ?>
          <option value="<?php echo $value["id_servicio"]; ?>"><?php echo $value["cliente"]; ?></option>
        <?php
        }
        ?>
      </select>
    </div>

    <div class="form-group">
      <label for="">Observaciones</label>
      <textarea id="observacionesLog" name="observacionesLog" rows="4" class="form-control"></textarea>
    </div>
    <div class="row list-group-item list-group-item-dark mb-0 pb-0">
      <label class="col-8 text-center" for="">Herramientas & Codigo Seleccionadas</label>
      <label class="col-1" for=""></label>
      <label class="col-2 text-center" for="">Cantidad</label>
    </div>
    <div class="row mt-1 pt-1">

      <?php
      require_once "../../controlador/controlherramientasControlador.php";
      require_once "../../modelo/controlherramientasModelo.php";
      require_once "../../modelo/conexion.php";

      foreach ($resultado as $key => $resultado) {
        $herramienta = ControladorHerramientas::ctrInfoHerraCalibradaSelec($resultado);
        
      ?>
        <div class="col-1">
        </div>
        <div class="col-8">
          <div class="form-group">
            <input type="text" class="form-control" name="nomHerramienta[]" id="nomHerramienta[]" value="<?php echo $herramienta['descripcion_controlherramientas']." - ".$herramienta["codigo_controlherramientas"] ?>" readonly>
          </div>
        </div>
        <div class="col-2">
          <div class="form-group">
            <input type="number" class="form-control" name="cantidadHerramienta[]" id="cantidadHerramienta[]" value="0" max="<?php echo $herramienta['cantidad_controlherramientas'] ?>" >
            <input type="hidden" name="idHerramientas[]" id="idHerramientas[]" value="<?php echo $herramienta['id_controlherramientas'] ?>">
          </div>
        </div>
        <div class="col-1">
        </div>
      <?php
      }
      ?>
    </div>

  </form>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
  <button type="button" class="btn btn-primary" onclick="RegMayorLogCalibrados()">Guardar</button>
</div>

<script>
  $('.select2bs4').select2({
        theme: 'bootstrap4'
    })
</script>