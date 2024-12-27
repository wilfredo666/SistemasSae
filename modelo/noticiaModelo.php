<?php
require_once "conexion.php";

class ModeloNoticia
{

  static public function mdlInfoNoticias()
  {
    //horas maxima de tabla Noticias
    $stmt=Conexion::conectar()->prepare("SELECT id_noticia,titulo_noticia,descripcion_noticia,foto_noticia,fecha_noticia, nombre_usuario FROM noticia JOIN usuario ON usuario.id_usuario=noticia.usuario_autor");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }


  static public function mdlRegNoticia($data)
  {

    $tituloNoticia=$data["tituloNoticia"];
    $imagenNoticia=$data["imagenNoticia"];
    $redaccionNoticia=$data["redaccionNoticia"];
    $fechaHora=$data["fechaHora"];
    $usuario=$data["usuario"];

    $stmt = Conexion::conectar()->prepare("INSERT INTO noticia(titulo_noticia, descripcion_noticia, foto_noticia, fecha_noticia, usuario_autor) VALUES ('$tituloNoticia','$redaccionNoticia','$imagenNoticia','$fechaHora','$usuario')");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoNoticia($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT id_noticia,titulo_noticia,descripcion_noticia,foto_noticia,fecha_noticia, nombre_usuario FROM noticia JOIN usuario ON usuario.id_usuario=noticia.usuario_autor where id_noticia=$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEditNoticia($data)
  {

    $idNoticia = $data["idNoticia"];
    $clienteNoticia = $data["clienteNoticia"];
    $matriculaNoticia = $data["matriculaNoticia"];
    $observacionNoticia = $data["observacionNoticia"];
    $horasminNoticia = $data["horasminNoticia"];
    $horasmaxNoticia = $data["horasmaxNoticia"];
    $estadoNoticia = $data["estadoNoticia"];

    $stmt = Conexion::conectar()->prepare("update Noticias set cliente='$clienteNoticia', matricula='$matriculaNoticia',observacion_Noticia='$observacionNoticia', horasminimo='$horasminNoticia', horasmaximo='$horasmaxNoticia', estado='$estadoNoticia' where id_Noticia=$idNoticia");

    if ($stmt->execute()) {

      return "ok";
    } else {

      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEliNoticia($data)
  {
    $stmt = Conexion::conectar()->prepare("delete from noticia where id_noticia=$data");

    if ($stmt->execute()) {
      return "correcto";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

  static public function mdlTotNoticias()
  {
    $stmt = Conexion::conectar()->prepare("select COUNT(*) as total_noticias FROM noticia");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }


  static public function mdlBusNoticia($txt)
  {
    $stmt = Conexion::conectar()->prepare("SELECT id_noticia,titulo_noticia,descripcion_noticia,foto_noticia,fecha_noticia, nombre_usuario FROM noticia JOIN usuario ON usuario.id_usuario=noticia.usuario_autor where titulo_noticia like '%$txt%'");

    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlRegMovimiento($data){
    $codSeguimiento = $data["codSeguimiento"];
    $estadoSeguimiento = $data["estadoSeguimiento"];
    $descripcionSeguimiento = $data["descripcionSeguimiento"];

    date_default_timezone_set("America/La_Paz");
    $fecha = date("Y-m-d");
    $hora=date("H:i:s");
    $fechaHora=$fecha." ".$hora;

    $stmt = Conexion::conectar()->prepare("insert into log_seguimiento(cod_seguimiento, estado_seguimiento, fecha_log, descripcion_log) values('$codSeguimiento', '$estadoSeguimiento', '$fechaHora', '$descripcionSeguimiento')");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEliMovimiento($data){
    $stmt = Conexion::conectar()->prepare("delete from log_seguimiento where id_log_seguimiento=$data");

    if ($stmt->execute()) {
      return "correcto";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }
}
