<?php
$ruta = parse_url( $_SERVER['REQUEST_URI'] );

if ( isset( $ruta["query"] ) ) {

  if ( $ruta["query"] == "ctrRegNoticia" ||
      $ruta["query"] == "ctrEditNoticia" || 
      $ruta["query"] == "ctrBusNoticia" || 
      $ruta["query"] == "ctrEliNoticia"
     ){
    $metodo = $ruta["query"];
    $Noticia = new ControladorNoticia();
    $Noticia->$metodo();
  }
}

class ControladorNoticia {

  static public function ctrInfoNoticias() {

    $respuesta = ModeloNoticia::mdlInfoNoticias();
    return $respuesta;
  }

  static public function ctrRegNoticia() {
    require_once "../modelo/noticiaModelo.php";

    //imagen de noticia
    $noticia_img=$_FILES["fotoNoticia"];

    $nomImagenNot = $noticia_img["name"];
    $archImagenNot = $noticia_img["tmp_name"];

    move_uploaded_file($archImagenNot, "../assest/dist/img/noticia/" . $nomImagenNot);

    //fecha y hora segun zona horaria La Paz
    date_default_timezone_set("America/La_Paz");
    $fecha = date("Y-m-d H:i:s");

    session_start();
    $data = array(
      "tituloNoticia"=>$_POST["tituloNoticia"],
      "imagenNoticia"=>$nomImagenNot,
      "redaccionNoticia"=>$_POST["editorNoticia"],
      "fechaHora"=>$fecha,
      "usuario"=>$_SESSION["id"]
    );

    $respuesta = ModeloNoticia::mdlRegNoticia($data);
    echo $respuesta;

  }

  static public function ctrInfoNoticia($id) {
    $respuesta = ModeloNoticia::mdlInfoNoticia($id);
    return $respuesta;
  }

  static public function ctrEditNoticia() {

    require_once "../modelo/NoticiaModelo.php";

    $clienteNoticia = $_POST["clienteNoticia"];
    $matriculaNoticia = $_POST["matriculaNoticia"];
    $observacionNoticia = $_POST["observacionNoticia"];
    $horasminNoticia = $_POST["horasminNoticia"];
    $horasmaxNoticia = $_POST["horasmaxNoticia"];
    $data = array(
      "idNoticia"=>$_POST["idNoticia"],
      "clienteNoticia"=>$_POST["clienteNoticia"],
      "matriculaNoticia"=>$_POST["matriculaNoticia"],
      "observacionNoticia"=>$_POST["observacionNoticia"],
      "horasminNoticia"=>$_POST["horasminNoticia"],
      "horasmaxNoticia"=>$_POST["horasmaxNoticia"],
      "estadoNoticia"=>$_POST["estadoNoticia"]
    );

    $respuesta = ModeloNoticia::mdlEditNoticia( $data );
    echo $respuesta;
  }

  static public function ctrEliNoticia(){
    require "../modelo/noticiaModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloNoticia::mdlEliNoticia($data);

    echo $respuesta;
  }

  static public function ctrTotNoticias() {
    $respuesta = ModeloNoticia::mdlTotNoticias();
    return $respuesta;
  }

  static public function ctrCantidadProcesos() {
    $respuesta = ModeloNoticia::mdlCantidadProcesos();
    return $respuesta;
  }

  static public function ctrCantidadPendienteMaterial() {
    $respuesta = ModeloNoticia::mdlCantidadPendienteMaterial();
    return $respuesta;
  }

  static public function ctrBusNoticia() {
    require_once "../modelo/noticiaModelo.php";

    $textNoticia=$_POST["txtBusNoticia"];

    $noticia=ModeloNoticia::mdlBusNoticia($textNoticia);

?>


<div class="attachment-block clearfix">
  <?php if($noticia["foto_noticia"]==""){
  ?>
  <img class="attachment-img" src="assest/dist/img/noticia/noticia-img-default.png">
  <?php
    }else{
  ?>
  <img class="attachment-img" src="assest/dist/img/noticia/<?php echo $noticia["foto_noticia"];?>">
  <?php }?>



  <span class="text-muted float-right">
    <?php
    $timestamp=strtotime($noticia["fecha_noticia"]);
    echo date("F j, Y, g:i a", $timestamp);?></span>


  <div class="attachment-pushed">
    <h4 class="attachment-heading"><?php echo $noticia["titulo_noticia"];?></h4>

    <div class="attachment-text text-truncate">
      <?php echo $noticia["descripcion_noticia"];?>
      <br>
      <button class="btn btn-link" onclick="MVerNoticia(<?php echo $noticia['id_noticia']; ?>)" style="padding:0;">Saber más...</button>

    </div>
    <!-- /.attachment-text -->
  </div>         
  <!-- /.attachment-pushed -->
</div>

<!-- /.attachment-block -->
<?php

  }

  static public function ctrRegMovimiento(){
    require_once "../modelo/NoticiaModelo.php";

    $data = array(
      "codNoticia"=>$_POST["codNoticia"],
      "estadoNoticia"=>$_POST["estadoNoticia"],
      "descripcionNoticia"=>$_POST["descripcionNoticia"]
    );

    $respuesta = ModeloNoticia::mdlRegMovimiento( $data );
    echo $respuesta;
  }

  static public function ctrEliMovimiento(){
    require "../modelo/NoticiaModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloNoticia::mdlEliMovimiento($data);

    echo $respuesta;
  }
}
