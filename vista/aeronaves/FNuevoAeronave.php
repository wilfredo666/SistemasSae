<form action="" id="RegNuevoAeronave" enctype="multipart/form-data">
    <div class="modal-header">
        <h4 class="modal-title">Registro de Aeronaves</h4>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">

        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Empresa(s)</label>
                    <input type="text" class="form-control" name="empresaAeronave" id="empresaAeronave">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Matricula</label>
                    <input type="text" class="form-control" name="matriculaAeronave" id="matriculaAeronave">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="RegNuevoAeronaves()">Guardar</button>
    </div>
</form>