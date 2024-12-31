<div class="modal-header">
  <h4 class="modal-title">Registrar nuevo manual</h4>
  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <form id="FormRegManual" method="post" enctype="multipart/form-data">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <label for="">Titulo</label>
            <input type="text" class="form-control" id="tituloManual" name="tituloManual" required>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label for="">Prioridad</label>
            <select id="prioridadManual" name="prioridadManual" class="form-control">
              <option value="0">Ninguna</option>
              <option value="3">Alta</option>
              <option value="2">Media</option>
              <option value="1">Baja</option>
            </select>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="row">
          <div class="col-sm-6">
            <label for="">Manual en pdf</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="form-control" id="pdfManual" name="pdfManual" required>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <label for="">Foto portada</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="form-control" id="fotoManual" name="fotoManual">
              </div>
            </div>
          </div>
        </div>

      </div>
      <label>Descripcion del manual</label>
      <textarea id="editorManual" name="editorManual" class="form-control">
      </textarea>

    </div>
  </form>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
  <button type="button" class="btn btn-primary" onclick="RegManual()">Guardar</button>
</div>

