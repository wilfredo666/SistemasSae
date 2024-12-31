<?php
require_once "../../controlador/manualControlador.php";
require_once "../../modelo/manualModelo.php";

$id = $_GET["id"];

$manual = ControladorManual::ctrInfoManual($id);

?>
<div class="modal-header">
  <h4 class="modal-title">Editar manual</h4>
  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <form id="FormEditManual" method="post">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="">Titulo</label>
            <input type="text" class="form-control" id="tituloManual" name="tituloManual" required value="<?php echo $manual["titulo_manual"]?>">
            <input type="hidden" name="idManual" value="<?php echo $id;?>">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="">Prioridad</label>
            <select id="prioridadManual" name="prioridadManual" class="form-control">
              <option value="0" <?php if($manual["prioridad"]==0):?>selected<?php endif;?>>Ninguna</option>
              <option value="3" <?php if($manual["prioridad"]==3):?>selected<?php endif;?>>Alta</option>
              <option value="2" <?php if($manual["prioridad"]==2):?>selected<?php endif;?>>Media</option>
              <option value="1" <?php if($manual["prioridad"]==1):?>selected<?php endif;?>>Baja</option>
            </select>
          </div>
        </div>
      </div>

      <label>Descripcion del manual</label>
      <textarea id="editorManual" name="editorManual" class="form-control">
      <?php echo $manual["descripcion_manual"]?>
      </textarea>

    </div>
  </form>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
  <button type="button" class="btn btn-primary" onclick="EditManual()">Guardar</button>
</div>

