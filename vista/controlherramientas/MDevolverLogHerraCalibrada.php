<?php
require_once "../../controlador/usuarioControlador.php";
require_once "../../modelo/usuarioModelo.php";
require_once "../../controlador/controlherramientasControlador.php";
require_once "../../modelo/controlherramientasModelo.php";

$id = $_GET["id"];

$herramientas = ControladorHerramientas::ctrInfoLogHerraCalibrada($id);
$usuario = ControladorHerramientas::ctrInfoUsuarioLog($id);

$herra = json_decode($herramientas["detalle"]);

session_start();
?>

<div class="modal-header bg-dark">
  <h4 class="modal-title text-light">Devolución de Herramientas Calibrada</h4>
  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <div class="row">
    <div class="col-sm-12">
      <form id="FDevHerramientas">
        <input type="hidden" name="idPrestamo" id="idPrestamo" value="<?php echo $id ?>">

        <div class="form-group">
          <label for="">Nombre Técnico (El que realiza la devolución)</label>
          <?php
  $usuarios = ControladorUsuario::ctrInfoUsuarios();
          ?>
          <select class="form-control select2bs4" name="usuTecnico" id="usuTecnico">

            <?php foreach ($usuarios as $value) {
            ?>
            <option value="<?php echo $value["id_usuario"]; ?>" <?php if ($usuario["tecnico"] == $value["id_usuario"]) : ?> selected <?php endif ?>><?php echo $value["nombre_usuario"]; ?></option>

            <?php
}
            ?>
          </select>
        </div>

        <div class="form-group">
          <label for="">Usuario encargado de recepcionar</label>
          <input type="text" class="form-control" id="usuEnc" name="usuEnc" value="<?php echo $_SESSION['nombreUsuario'] ?>" readonly>
          <input type="hidden" class="form-control" id="usuEncargado" name="usuEncargado" value="<?php echo $_SESSION['id']?>">
        </div>

        <div class="form-group">
          <label for="">Observaciones</label>
          <textarea id="observacionesLog" name="observacionesLog" rows="3" class="form-control"></textarea>
        </div>
        <br>

        <table class="table" style="width: 80%; margin: auto;">
          <thead>
            <tr>
              <th style="background-color: #000000; color: white;">UBICACION HERRA.</th>
              <th style="background-color: #000000; color: white;">DESCRIPCION & CODIGO HERRAMIENTA</th>
              <th style="background-color: #000000; color: white;">CANTIDAD</th>
            </tr>
          </thead>
          <tbody>
            <?php
  foreach ($herra as $value) {
    $herraDesc = ControladorHerramientas::ctrInfoLogHerraDesc($value->id);
            ?>
            <tr>
              <td><?php echo $herraDesc['ubicacion_controlherramientas'] ?></td>
              <td><?php echo $herraDesc['descripcion_controlherramientas'] . " - " . $herraDesc["codigo_controlherramientas"] ?></td>
              <td><input class="text-center" type="number" name="cantidad[]" id="cantHerramienta" value="<?php echo $value->cantidad ?>" max="<?php echo $value->cantidad ?>" min="0"></td>

              <input type="hidden" name="cantidadActual[]" value="<?php echo $value->cantidad ?>">

              <td><input class="text-center" type="hidden" name="ids[]" value="<?php echo $herraDesc["id_controlherramientas"] ?>"></td>
            </tr>
            <?php
  }
            ?>
          </tbody>
        </table>
      </form>

    </div>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cerrar</button>
  <button type="button" class="btn btn-primary" onclick="RegDevHerraCalibrada()">Realizar Devolución</button>
</div>