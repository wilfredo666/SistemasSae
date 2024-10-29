 <?php
require_once "../../controlador/carpetaControlador.php";
require_once "../../modelo/carpetaModelo.php";

$id=$_GET["id"];

$carpeta=ControladorCarpeta::ctrInfoCarpeta($id);
?>
    <div class="modal-header">
     <h4 class="modal-title">Editar Carpeta</h4>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
 </div>
 <div class="modal-body">
     <form id="EditCarpeta" enctype="multipart/form-data">
         <div class="row">
             <div class="col-sm-12">
                 <div class="form-group">
                     <label for="">Nombre Carpeta</label>
                     <input type="text" class="form-control" id="nomCarpeta" name="nomCarpeta" value="<?php echo $carpeta["nombre_carpeta"];?>">
                     <input type="hidden" name="idCarpeta" value="<?php echo $id; ?>">
                 </div>
             </div>
         </div>
     </form>

 </div>
 <div class="modal-footer justify-content-between">
     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
     <button type="button" class="btn btn-primary" onclick="EditCarpeta()">Guardar</button>
 </div>