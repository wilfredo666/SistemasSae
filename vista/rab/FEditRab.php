<?php
require_once "../../controlador/rabControlador.php";
require_once "../../modelo/rabModelo.php";

$id = $_GET["id"];

$rab = ControladorRab::ctrInfoRab($id);

?>


<div class="modal-header">
    <h4 class="modal-title">Actualizar Formulario de Registro Certificado RAB 001</h4>
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <form id="FormEditRab" enctype="multipart/form-data">
    <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">NUMERO DE SEGUIMIENTO DEL FORMULARIO</label>
                     <input type="text" class="form-control" id="numseguiRab" name="numseguiRab" value="<?php echo $rab["num_seguimiento_rab"]; ?>">
                     <input type="hidden" name="idRab" value="<?php echo $id; ?>">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">ORDEN DE TRABAJO/CONTRATO/FACTURA</label>
                     <input type="text" class="form-control" id="ordentrabajoRab" name="ordentrabajoRab" value="<?php echo $rab["orden_trabajo_rab"]; ?>">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">ITEM</label>
                     <input type="text" class="form-control" id="itemRab" name="itemRab" value="<?php echo $rab["item_rab"]; ?>">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">DESCRIPCIÓN</label>
                     <input type="text" class="form-control" id="desRab" name="desRab" value="<?php echo $rab["des_rab"]; ?>">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">NUMERO DE PARTE</label>
                     <input type="text" class="form-control" id="numparteRab" name="numparteRab" value="<?php echo $rab["num_parte_rab"]; ?>">
                 </div>
             </div>
             <div class="col-sm-4">
                 <div class="form-group">
                     <label for="">CANTIDAD</label>
                     <input type="text" class="form-control" id="cantidadRab" name="cantidadRab" value="<?php echo $rab["cantidad_rab"]; ?>">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="">NÚMERO DE SERIE</label>
                     <input type="text" class="form-control" id="numserieRab" name="numserieRab" value="<?php echo $rab["num_serie_rab"]; ?>">
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="">ESTADO/TRABAJO</label>
                     <input type="text" class="form-control" id="estadotrabajoRab" name="estadotrabajoRab" value="<?php echo $rab["estado_trabajo_rab"]; ?>">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-12">
                 <div class="form-group">
                     <label for="">OBSERVACIONES</label>
                     <textarea class="form-control" name="observacionesRab" id="observacionesRab" cols="30" rows="3"><?php echo $rab["obs_rab"]; ?></textarea>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="">NOMBRE</label>
                     <input type="text" class="form-control" id="nombreRab" name="nombreRab" value="<?php echo $rab["nombre_rab"]; ?>">
                 </div>
             </div>
             <div class="col-sm-6">
                 <div class="form-group">
                     <label for="">FECHA</label>
                     <input type="date" class="form-control" id="fechaRab" name="fechaRab" value="<?php echo $rab["fecha_rab"]; ?>">
                 </div>
             </div>
         </div>
    </form>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" onclick="EditRab()">Guardar</button>
</div>