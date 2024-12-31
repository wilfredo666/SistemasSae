<?php
require_once "conexion.php";
class ModeloManual{


  static public function mdlInfoManuales(){

    $stmt = Conexion::conectar()->prepare("select * from manual");
    $stmt->execute();
    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  /*====================
    Registro Manual
    =====================*/
  static public function mdlRegManual($data){

    $tituloManual=$data['tituloManual'];
    $prioridadManual=$data['prioridadManual'];
    $descripcionManual=$data['descripcionManual'];
    $fotoManual=$data['fotoManual'];
    $manualPdf=$data['manualPdf'];

    $stmt = Conexion::conectar()->prepare("INSERT INTO manual(titulo_manual, descripcion_manual, foto_manual, pdf, prioridad) VALUES ('$tituloManual','$descripcionManual','$fotoManual','$manualPdf','$prioridadManual')");

    if($stmt->execute()){
      return "ok";
    }else{
      return "error";
    }
    $stmt->close();
    $stmt->null;

  }


  static public function mdlInfoManual($idManual){

    $stmt = Conexion::conectar()->prepare("select * from manual where id_manual = $idManual");

    $stmt->execute();
    return $stmt->fetch();

    $stmt->close();
    $stmt->null;

  }


  static public function mdlEliManual($data){

    $stmt = Conexion::conectar()->prepare("delete from manual where id_manual = $data");

    if($stmt->execute()){

      return "eliminado";
    }else{
      return "error";
    } 

    $stmt->close();
    $stmt->null;

  }

  /*========================
     Editar usuario Manual
    ========================*/
  static public function mdlEditManual($data){

    $tituloManual=$data['tituloManual'];
    $prioridadManual=$data['prioridadManual'];
    $descripcionManual=$data['descripcionManual'];
    $idManual=$data['idManual'];

    $stmt = Conexion::conectar()->prepare("UPDATE manual SET titulo_manual='$tituloManual',descripcion_manual='$descripcionManual',prioridad='$prioridadManual' WHERE id_manual=$idManual");

    if($stmt->execute()){
      return "ok";
    }else{
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }
}
