<?php
require_once "../../controlador/ordendetrabajoControlador.php";
require_once "../../modelo/ordendetrabajoModelo.php";

$id = $_GET["id"];

$ordendetrabajo = ControladorOrdenDeTrabajo::ctrInfoOrdenDeTrabajo($id);

?>
<div class="modal-header">
    <h4 class="modal-title">Actualizar Orden de Trabajo</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FormEditOrdenDeTrabajo" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">WORK ORDER Nº</label>
                    <input type="text" class="form-control" id="ordendetrabajonumeroOrdenes" name="ordendetrabajonumeroOrdenes" value="<?php echo $ordendetrabajo["numero_ordendetrabajo"]; ?>">
                    <input type="hidden" name="idOrdenTrabajo" value="<?php echo $id; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">REGISTRATION NAME</label>
                    <input type="text" class="form-control" id="nombrematriculaOrdenes" name="nombrematriculaOrdenes" value="<?php echo $ordendetrabajo["nombrematricula_ordendetrabajo"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">TH</label>
                    <input type="text" class="form-control" id="thOrdenes" name="thOrdenes" value="<?php echo $ordendetrabajo["th_ordendetrabajo"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">TC</label>
                    <input type="text" class="form-control" id="tcOrdenes" name="tcOrdenes" value="<?php echo $ordendetrabajo["tc_ordendetrabajo"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">MODEL / MANUFACTURER / PART NUMBER</label>
                    <input type="text" class="form-control" id="modelopnOrdenes" name="modelopnOrdenes" value="<?php echo $ordendetrabajo["modelo_pn_ordendetrabajo"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">S/N</label>
                    <input type="text" class="form-control" id="snOrdenes" name="snOrdenes" value="<?php echo $ordendetrabajo["sn_ordendetrabajo"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">REQUESTED BY</label>
                    <input type="text" class="form-control" id="solicitadaporOrdenes" name="solicitadaporOrdenes" value="<?php echo $ordendetrabajo["solicitadapor_ordendetrabajo"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">NOMBRE AUTORIZADA</label>
                    <input type="text" class="form-control" id="nombreautorizadaorOrdenes" name="nombreautorizadaorOrdenes" value="<?php echo $ordendetrabajo["nombreautorizado_ordendetrabajo"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">WORK ORDER DATE</label>
                    <input type="date" class="form-control" id="fechaOrdenes" name="fechaOrdenes" value="<?php echo $ordendetrabajo["fecha_ordendetrabajo"]; ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">WORK ORDER CLOSING DATE</label>
                    <input type="date" class="form-control" id="fechafinOrdenes" name="fechafinOrdenes" value="<?php echo $ordendetrabajo["fechacierre_ordendetrabajo"]; ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">STATES WORK ORDER</label>
                    <select name="estadosOrdenes" id="estadosOrdenes" class="form-control">
                        <option value="EN PROCESO" <?php if ($ordendetrabajo["estados_ordendetrabajo"] == "EN PROCESO") : ?>selected<?php endif; ?>>IN PROGRESS</option>
                        <option value="CANCELADO" <?php if ($ordendetrabajo["estados_ordendetrabajo"] == "CANCELADO") : ?>selected<?php endif; ?>>CANCELED</option>
                        <option value="TERMINADO" <?php if ($ordendetrabajo["estados_ordendetrabajo"] == "TERMINADO") : ?>selected<?php endif; ?>>FINISHED</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">ATTACHED DOCUMENTS RECEIVED</label>
                    <textarea class="form-control" name="documentosadjuntosrecibidosOrdenes" id="documentosadjuntosrecibidosOrdenes" cols="30" rows="3"><?php echo $ordendetrabajo["documentosadjuntosrecibidos_ordendetrabajo"]; ?></textarea>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">SCOPE OF WORK DESCRIPTION</label>
                    <textarea class="form-control" name="descripcionalcancetrabajoOrdenes" id="descripcionalcancetrabajoOrdenes" cols="30" rows="3"><?php echo $ordendetrabajo["descripciondelalcancedeltrabajosolicitado_ordendetrabajo"]; ?></textarea>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">DESCRIPTION OF WORK PERFORMED</label>
                    <textarea class="form-control" name="descripciontrabajosOrdenes" id="descripciontrabajosOrdenes" cols="30" rows="3"><?php echo $ordendetrabajo["descripciondetrabajosefectuados_ordendetrabajo"]; ?></textarea>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">RELATED WORK ORDERS</label>
                    <textarea class="form-control" name="ordenesdetrabajosrelacionadasOrdenes" id="ordenesdetrabajosrelacionadasOrdenes" cols="30" rows="3"><?php echo $ordendetrabajo["ordenesdetrabajosrelacionadas_ordendetrabajo"]; ?></textarea>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">ATTACHED DOCUMENTS DELIVERED</label>
                    <textarea class="form-control" name="documentosadjuntosentregadosOrdenes" id="documentosadjuntosentregadosOrdenes" cols="30" rows="3"><?php echo $ordendetrabajo["documentosadjuntosentregados_ordendetrabajo"]; ?></textarea>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">OBSERVATIONS</label>
                    <textarea class="form-control" name="observacionesOrdenes" id="observacionesOrdenes" cols="30" rows="3"><?php echo $ordendetrabajo["observaciones_ordendetrabajo"]; ?></textarea>
                </div>
            </div>
        </div>
        <div class="modal-header">
            <h4 class="modal-title">Work Order Cover</h4>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">COVER WORK ORDER TITLE</label>
                    <input type="text" class="form-control" id="caratulaOrdenes" name="caratulaOrdenes" value="<?php echo $ordendetrabajo["titulocaratula_ordendetrabajo"]; ?>">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="">FOOTER WORK ORDER COVER</label>
                    <input type="text" class="form-control" id="piepaginaOrdenes" name="piepaginaOrdenes" value="<?php echo $ordendetrabajo["piepaginacaratula_ordendetrabajo"]; ?>">
                </div>
            </div>
        </div>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary" onclick="EditOrdenTrabajo()">Save</button>
</div>