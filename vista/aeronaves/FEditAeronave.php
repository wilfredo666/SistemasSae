<?php
require_once "../../controlador/aeronaveControlador.php";
require_once "../../modelo/aeronaveModelo.php";

$idAeronave = $_GET["idAeronave"];

$aeronave = ControladorAeronave::ctrInfoAeronave($idAeronave);
?>


<form action="" id="EditAeronave" enctype="multipart/form-data">
    <div class="modal-header">
        <h4 class="modal-title">Editar Aeronave</h4>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">

        <div class="row">
            <div class="col-6">
                <div class="form-group">
                <label for="">Empresa(s)</label>
                    <input type="text" class="form-control" name="empresaAeronave" id="empresaAeronave" value="<?php echo $aeronave["empresa_aeronave"]; ?>">
                    <input type="hidden" name="idAeronave" id="idAeronave" value="<?php echo $idAeronave; ?>">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Matricula(s)</label>
                    <input type="text" class="form-control" name="matriculaAeronave" id="matriculaAeronave" value="<?php echo $aeronave["matricula_aeronave"]; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="EditarAeronave()">Actualizar</button>
    </div>
</form>