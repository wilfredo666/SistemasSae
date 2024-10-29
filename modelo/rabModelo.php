<?php
require_once "conexion.php";

class ModeloRab
{

    static public function mdlInfoRabs()
    {
      $stmt = Conexion::conectar()->prepare("SELECT * FROM rab");
      $stmt->execute();
  
      return $stmt->fetchAll();
  
      $stmt->close();
      $stmt->null;
    }

    static public function mdlRegRab($data)
    {
        $numseguiRab = $data["numseguiRab"];
        $ordentrabajoRab = $data["ordentrabajoRab"];
        $itemRab = $data["itemRab"];
        $desRab = $data["desRab"];
        $numparteRab = $data["numparteRab"];
        $cantidadRab = $data["cantidadRab"];
        $numserieRab = $data["numserieRab"];
        $estadotrabajoRab = $data["estadotrabajoRab"];
        $observacionesRab = $data["observacionesRab"];
        $nombreRab = $data["nombreRab"];
        $fechaRab = $data["fechaRab"];

        $stmt = Conexion::conectar()->prepare("insert into rab(num_seguimiento_rab, orden_trabajo_rab, item_rab, des_rab, num_parte_rab, cantidad_rab, num_serie_rab, estado_trabajo_rab, obs_rab, nombre_rab, fecha_rab) values('$numseguiRab', '$ordentrabajoRab', '$itemRab', '$desRab', '$numparteRab', '$cantidadRab', '$numserieRab', '$estadotrabajoRab', '$observacionesRab', '$nombreRab', '$fechaRab')");

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }

        $stmt->close();
        $stmt->null;
    }

    static public function mdlInfoRab($id)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM rab where id_rab=$id");
        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();
        $stmt->null;
    }

    static public function mdlEditRab($data)
    {

        $idRab = $data["idRab"];
        $numseguiRab = $data["numseguiRab"];
        $ordentrabajoRab = $data["ordentrabajoRab"];
        $itemRab = $data["itemRab"];
        $desRab = $data["desRab"];
        $numparteRab = $data["numparteRab"];
        $cantidadRab = $data["cantidadRab"];
        $numserieRab = $data["numserieRab"];
        $estadotrabajoRab = $data["estadotrabajoRab"];
        $observacionesRab = $data["observacionesRab"];
        $nombreRab = $data["nombreRab"];
        $fechaRab = $data["fechaRab"];

        $stmt = Conexion::conectar()->prepare("update rab set num_seguimiento_rab='$numseguiRab', orden_trabajo_rab='$ordentrabajoRab',item_rab='$itemRab', des_rab='$desRab', num_parte_rab='$numparteRab', cantidad_rab='$cantidadRab', num_serie_rab='$numserieRab', estado_trabajo_rab='$estadotrabajoRab', obs_rab='$observacionesRab', nombre_rab='$nombreRab', fecha_rab='$fechaRab' where id_rab=$idRab");

        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();
        $stmt->null;
    }

    static public function mdlEliRab($data)
    {
        $stmt = Conexion::conectar()->prepare("delete from rab where id_rab=$data");

        if ($stmt->execute()) {
            return "correcto";
        } else {
            return "error";
        }
        $stmt->close();
        $stmt->null;
    }

    static public function mdlRepRab($id){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM rab where id_rab=$id");
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();
        $stmt->null;
      }

}
