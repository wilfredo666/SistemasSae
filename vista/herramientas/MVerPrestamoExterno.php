<?php
/*require_once "../../controlador/usuarioControlador.php";
require_once "../../modelo/usuarioModelo.php";*/
require_once "../../controlador/controlherramientasControlador.php";
require_once "../../modelo/controlherramientasModelo.php";

//id del prestamo externo
$id = $_GET["id"];

$prestamoExt = ControladorHerramientas::ctrInfoPrestamoExt($id);
$herra = json_decode($prestamoExt["detalle_prestamo"]);
?>
<div class="modal-header bg-dark">
  <h4 class="modal-title text-light">Información sobre el prestamo a externo</h4>
  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <div class="row">
    <div class="col-sm-12">
      <table class="table">
        <tr>
          <th>FECHA - HORA:</th>
          <td><?php echo $prestamoExt["fecha_prestamo"]; ?></td>
          <th>USUARIO ENCARGADO</th>
          <td><?php echo $prestamoExt["nombre_usuario"]; ?></td>
        </tr>
        <tr>
          <th>Nombre del empleado:</th>
          <td><?php echo $prestamoExt["nombre_empleado"]; ?></td>
          <th>Cargo:</th>
          <td><?php echo $prestamoExt["cargo_empleado"]; ?></td>
        </tr>

        <tr>
          <th>C.I.:</th>
          <td><?php echo $prestamoExt["ci_empleado"]; ?></td>
          <th>Empresa:</th>
          <td><?php echo $prestamoExt["nombre_empresa"]; ?></td>
        </tr>

        <tr>
          <th>Direccion:</th>
          <td><?php echo $prestamoExt["direccion_empleado"]; ?></td>
          <th>Telefono(s):</th>
          <td><?php echo $prestamoExt["telefono_empleado"]; ?></td>
        </tr>
        <tr>

        </tr>
        <tr>
          <th>Estado:</th>
          <td><?php if($prestamoExt["estado_prestamo"]==1){
            ?>
            <span class="badge badge-success">Vigente</span>
            <?php
}else{
            ?>
            <span class="badge badge-danger">Finalizado</span>
            <?php
}?></td>
                 <th>OBSERVACIONES</th>
          <td><?php echo $prestamoExt["observacion"]; ?></td>
        </tr>

      </table>
      <table class="table" style="width: 80%; margin: auto;">
        <thead class="bg-primary text-white">
          <tr>
            <th class="bg-primary text-white"># Carpeta</th>
            <th class="bg-primary text-white">DESCRIPCION</th>
            <th class="bg-primary text-white">CANTIDAD</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($herra as $value) {
          ?>
          <tr>
            <td><?php echo $value->numCarpeta;?></td>
            <td><?php echo $value->descHerramienta;?></td>
            <td><?php echo $value->cantHerramienta;?></td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
    <div class="col-sm-3">
      <table class="table">


      </table>

    </div>
  </div>
</div>