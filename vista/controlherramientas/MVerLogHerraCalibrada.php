<?php
require_once "../../controlador/controlherramientasControlador.php";
require_once "../../modelo/controlherramientasModelo.php";

$id = $_GET["id"];

$herramientas = ControladorHerramientas::ctrInfoLogHerraCalibrada($id);

$herra = json_decode($herramientas["detalle"]);

?>

<div class="modal-header bg-dark">
    <h4 class="modal-title text-light">Información Comprobante Herramienta Calibrada Prestada/Entregada</h4>
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
                    <td><?php echo $herramientas["fecha_hora"]; ?></td>
                </tr>
                <tr>
                    <th>TIPO</th>
                    <td><?php echo $herramientas["estado"]; ?></td>
                </tr>
                <tr>
                    <th>USUARIO</th>
                    <td><?php echo $herramientas["nombre_usuario"]; ?></td>
                </tr>
                <tr>
                    <th>OBSERVACIONES</th>
                    <td><?php echo $herramientas["observacion"]; ?></td>
                </tr>
            </table>
            <table class="table" style="width: 80%; margin: auto;">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>UBICACION HERRA.</th>
                        <th>DESCRIPCION & CODIGO HERRAMIENTA</th>
                        <th>CANTIDAD</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($herra as $value) {
                        $herraDesc = ControladorHerramientas::ctrInfoLogHerraDesc($value->id);
                    ?>
                        <tr>
                            <td><?php echo $herraDesc['ubicacion_controlherramientas'] ?></td>
                            <td><?php echo $herraDesc['descripcion_controlherramientas']." - ".$herraDesc["codigo_controlherramientas"] ?></td>
                            <td><?php echo $value->cantidad ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal-footer">
<a class="btn btn-success" href="vista/reportes/repLogHerraCalibrada.php?id=<?php echo $id;?>" target="_blank"><i class="fas fa-print"></i> Imprimir</a>
</div>
