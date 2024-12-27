<div class="modal-header">
  <h4 class="modal-title">Redactar noticia nueva</h4>
  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <form id="FormRegnoticia" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="">Titulo</label>
      <input type="text" class="form-control" id="tituloNoticia" name="tituloNoticia" required>
    </div>
    <div class="form-group">
      <label for="fotoNoticia">Foto de portada</label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="form-control" id="fotoNoticia" name="fotoNoticia"  accept="image/png, image/jpeg, image/jpg">
        </div>
      </div>
    </div>
    <textarea id="editorNoticia" name="editorNoticia" required class="form-control" placeholder="Redacción...">

    </textarea>

  </form>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
  <button type="button" class="btn btn-primary" onclick="RegNoticia()">Guardar</button>
</div>

