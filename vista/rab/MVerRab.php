<?php
require_once "../../controlador/rabControlador.php";
require_once "../../modelo/rabModelo.php";

$id = $_GET["id"];

$rab = ControladorRab::ctrInfoRab($id);
// $fecha;
// $fecha = $rab['fecha_ordendetrabajo'];
// $fecha= date("d/m/Y", strtotime($fecha));

// $fechafin;
// $fechafin = $ordendetrabajo['fechacierre_ordendetrabajo'];
// $fechafin = date("d/m/Y", strtotime($fechafin));
?>


<div class="modal-header bg-dark">
    <h4 class="modal-title text-light">Información Certificado RAB 001</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-sm-6">
            <table class="table">
                <tr>
                    <th>NUMERO DE SEGUIMIENTO DEL FORMULARIO</th>
                    <td><?php echo $rab["num_seguimiento_rab"]; ?></td>
                </tr>

                <tr>
                    <th>ORDEN DE TRABAJO/CONTRATO/FACTURA</th>
                    <td><?php echo $rab["orden_trabajo_rab"]; ?></td>
                </tr>

                <tr>
                    <th>ITEM</th>
                    <td><?php echo $rab["item_rab"]; ?></td>
                </tr>

                <tr>
                    <th>DESCRIPCIÓN</th>
                    <td><?php echo $rab["des_rab"]; ?></td>
                </tr>

                <tr>
                    <th>NUMERO DE PARTE</th>
                    <td><?php echo $rab["num_parte_rab"]; ?></td>
                </tr>

                <tr>
                    <th>CANTIDAD</th>
                    <td><?php echo $rab["cantidad_rab"]; ?></td>
                </tr>

                <tr>
                    <th>NÚMERO DE SERIE</th>
                    <td><?php echo $rab["num_serie_rab"]; ?></td>
                </tr>
            </table>
        </div>
        <div class="col-sm-6">
            <table class="table">

                <tr>
                    <th>ESTADO/TRABAJO</th>
                    <td><?php echo $rab["estado_trabajo_rab"]; ?></td>
                </tr>

                <tr>
                    <th>NOMBRE</th>
                    <td><?php echo $rab["nombre_rab"]; ?></td>
                </tr>

                <tr>
                    <th>FECHA</th>
                    <td><?php echo $rab["fecha_rab"]; ?></td>
                </tr>

                <tr>
                    <th>OBSERVACIONES</th>
                    <td><?php echo $rab["obs_rab"]; ?></td>
                </tr>
            </table>

        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
</div>