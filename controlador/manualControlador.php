<?php
//capturamos la url
$ruta=parse_url($_SERVER['REQUEST_URI']);

if(isset($ruta["query"])){
  if($ruta["query"]=="ctrRegManual"||
     $ruta["query"]=="ctrEliManual"||
     $ruta["query"]=="ctrEditManual"){

    $metodo=$ruta["query"];
    $Manual = new ControladorManual();
    $Manual->$metodo();
  }
}

class ControladorManual{

  static public function ctrInfoManuales(){
    $respuesta = ModeloManual::mdlInfoManuales();
    return $respuesta;
  } 

  static public function ctrRegManual(){
    require_once "../modelo/manualModelo.php";

    $tituloManual = trim($_POST["tituloManual"]);
    $prioridadManual = trim($_POST["prioridadManual"]);
    $descripcionManual = trim($_POST["editorManual"]);

    //guardado de manual en pdf
    $pdfManual = $_FILES["pdfManual"];
    $pdfManual_name = $pdfManual["name"];
    $pdfManual_archivo = $pdfManual["tmp_name"];
    $rutaGuardado = "../assest/dist/files/manual/";
    move_uploaded_file($pdfManual_archivo,$rutaGuardado.$pdfManual_name);

    //guardado de foto de manual
    $fotoManual = $_FILES["fotoManual"];
    $fotoManual_name = $fotoManual["name"];
    $fotoManual_archivo = $fotoManual["tmp_name"];
    $rutaGuardado_foto = "../assest/dist/files/manual/";
    move_uploaded_file($fotoManual_archivo,$rutaGuardado_foto.$fotoManual_name);

    $data = array(
      "tituloManual"=>$tituloManual,
      "prioridadManual"=>$prioridadManual,
      "descripcionManual"=>$descripcionManual,
      "fotoManual"=>$fotoManual_name,
      "manualPdf"=>$pdfManual_name
    );

    $respuesta = ModeloManual::mdlRegManual($data);

    echo $respuesta;
  }

  static public function ctrInfoManual($idManual){
    $respuesta = ModeloManual::mdlInfoManual($idManual);
    return $respuesta;
  }

  static public function ctrEliManual(){
    require_once "../modelo/manualModelo.php";
    $data = $_POST["id"];
    $respuesta = ModeloManual::mdlEliManual($data);
    echo $respuesta;

  }

  static public function ctrEditManual(){
    require_once "../modelo/manualModelo.php";

    $tituloManual = trim($_POST["tituloManual"]);
    $prioridadManual = trim($_POST["prioridadManual"]);
    $descripcionManual = trim($_POST["editorManual"]);
    $idManual = trim($_POST["idManual"]);

    $data = array(
      "tituloManual"=>$tituloManual,
      "prioridadManual"=>$prioridadManual,
      "descripcionManual"=>$descripcionManual,
      "idManual"=>$idManual
    );

    $respuesta = ModeloManual::mdlEditManual($data);

    echo $respuesta;
  }
}
