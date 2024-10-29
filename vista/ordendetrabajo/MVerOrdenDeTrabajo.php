<?php
require_once "../../controlador/ordendetrabajoControlador.php";
require_once "../../modelo/ordendetrabajoModelo.php";

$id = $_GET["id"];

$ordendetrabajo = ControladorOrdenDeTrabajo::ctrInfoOrdenDeTrabajo($id);
$fecha;
$fecha = $ordendetrabajo['fecha_ordendetrabajo'];
$fecha= date("d/m/Y", strtotime($fecha));

$fechafin;
$fechafin = $ordendetrabajo['fechacierre_ordendetrabajo'];
$fechafin = date("d/m/Y", strtotime($fechafin));
?>


<div class="modal-header bg-dark">
    <h4 class="modal-title text-light">Información Orden De Trabajo</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-sm-6">
            <table class="table">
                <tr>
                    <th>ORDEN DE TRABAJO Nº</th>
                    <td><?php echo $ordendetrabajo["numero_ordendetrabajo"]; ?></td>
                </tr>

                <tr>
                    <th>NOMBRE MATRICULA</th>
                    <td><?php echo $ordendetrabajo["nombrematricula_ordendetrabajo"]; ?></td>
                </tr>

                <tr>
                    <th>TH</th>
                    <td><?php echo $ordendetrabajo["th_ordendetrabajo"]; ?></td>
                </tr>

                <tr>
                    <th>TC</th>
                    <td><?php echo $ordendetrabajo["tc_ordendetrabajo"]; ?></td>
                </tr>

                <tr>
                    <th>MODELO P/N</th>
                    <td><?php echo $ordendetrabajo["modelo_pn_ordendetrabajo"]; ?></td>
                </tr>

                <tr>
                    <th>S/N</th>
                    <td><?php echo $ordendetrabajo["sn_ordendetrabajo"]; ?></td>
                </tr>

                <tr>
                    <th>SOLICITADA POR</th>
                    <td><?php echo $ordendetrabajo["solicitadapor_ordendetrabajo"]; ?></td>
                </tr>

                <tr>
                    <th>NOMBRE AUTORIZADA</th>
                    <td><?php echo $ordendetrabajo["nombreautorizado_ordendetrabajo"]; ?></td>
                </tr>

                <tr>
                    <th>FECHA ORDEN DE TRABAJO</th>
                    <td><?php echo $fecha; ?></td>
                </tr>

                <tr>
                    <th>FECHA CIERRE ORDEN DE TRABAJO</th>
                    <td><?php echo $fechafin; ?></td>
                </tr>
            </table>
        </div>
        <div class="col-sm-6">
            <table class="table">

                <tr>
                    <th>ESTADOS ORDEN DE TRABAJO</th>
                    <td><?php echo $ordendetrabajo["documentosadjuntosrecibidos_ordendetrabajo"]; ?></td>
                </tr>

                <tr>
                    <th>DOCUMENTOS ADJUNTOS RECIBIDOS</th>
                    <td><?php echo $ordendetrabajo["documentosadjuntosrecibidos_ordendetrabajo"]; ?></td>
                </tr>

                <tr>
                    <th>DESCRIPCION DEL ALCANCE DEL TRABAJO</th>
                    <td><?php echo $ordendetrabajo["descripciondelalcancedeltrabajosolicitado_ordendetrabajo"]; ?></td>
                </tr>

                <tr>
                    <th>DESCRIPCION DE TRABAJOS EFECTUADOS</th>
                    <td><?php echo $ordendetrabajo["descripciondetrabajosefectuados_ordendetrabajo"]; ?></td>
                </tr>

                <tr>
                    <th>ÓRDENES DE TRABAJO RELACIONADAS</th>
                    <td><?php echo $ordendetrabajo["ordenesdetrabajosrelacionadas_ordendetrabajo"]; ?></td>
                </tr>

                <tr>
                    <th>DOCUMENTOS ADJUNTOS ENTREGADOS</th>
                    <td><?php echo $ordendetrabajo["documentosadjuntosentregados_ordendetrabajo"]; ?></td>
                </tr>

                <tr>
                    <th>OBSERVACIONES</th>
                    <td><?php echo $ordendetrabajo["observaciones_ordendetrabajo"]; ?></td>
                </tr>

            </table>

        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
</div>