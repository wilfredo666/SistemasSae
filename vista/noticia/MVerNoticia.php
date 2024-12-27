<?php
require_once "../../controlador/noticiaControlador.php";
require_once "../../modelo/noticiaModelo.php";

$id = $_GET["id"];

$noticia = ControladorNoticia::ctrInfoNoticia($id);

?>
<div class="modal-header">
  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <div class="row">
    <div class="col-12 col-sm-6 text-center">
      <?php if($noticia["foto_noticia"]==""){
      ?>
      <img  width="500" src="assest/dist/img/noticia/noticia-img-default.png">
      <?php
}else{
      ?>
      <img width="500" src="assest/dist/img/noticia/<?php echo $noticia["foto_noticia"];?>">
      <?php }?>

    </div>
    <div class="col-12 col-sm-6">
      <h3 class="my-3"><?php echo $noticia["titulo_noticia"];?></h3>
        <p class="float-left">
        Autor: <span class="text-muted"><?php echo $noticia["nombre_usuario"];?>
        </span></p>
      <p class="text-muted text-right">
        <?php
        $timestamp=strtotime($noticia["fecha_noticia"]);
        echo date("F j, Y, g:i a", $timestamp);?></p>


      <p><?php echo $noticia["descripcion_noticia"];?></p>
      <div class="mt-4">
        <button class="btn btn-danger btn-lg btn-flat" onclick="EliNoticia(<?php echo $id;?>)">
          <i class="fas fa-trash fa-lg mr-2"></i>
          Eliminar
        </button>
      </div>
    </div>
  </div>
</div>


