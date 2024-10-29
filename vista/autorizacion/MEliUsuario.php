<?php
require_once "../../controlador/usuarioControlador.php";
require_once "../../modelo/usuarioModelo.php";
    
$idUsuario = $_GET["idUsuario"];

?>
<div class="modal-header">
    <h4 class="modal-title">Eliminar usuario</h4>
</div>
<div class="modal-body">
   <h2 class="text-danger">Estas seguro de eliminar este usuario?</h2>
</div>

<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="button" class="btn btn-primary" onclick="EliUsuario(<?php echo $idUsuario; ?>)">Confirmar</button>
</div>
