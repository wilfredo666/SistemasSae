<?php
require_once "conexion.php";

class ModeloGrafica {

  static public function mdlInfoGraficasMRBR() {
    $stmt = Conexion::conectar()->prepare( "SELECT COUNT(*) as total, estados_seguimiento FROM seguimiento WHERE tipo_tarjeta='MRBR' GROUP BY estados_seguimiento");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlMRBR() {
    $stmt = Conexion::conectar()->prepare( "SELECT COUNT(*) as total FROM seguimiento WHERE tipo_tarjeta='MRBR'");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoGraficasCPCP() {
    $stmt = Conexion::conectar()->prepare( "SELECT COUNT(*) as total, estados_seguimiento FROM seguimiento WHERE tipo_tarjeta='CPCP' GROUP BY estados_seguimiento");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlCPCP() {
    $stmt = Conexion::conectar()->prepare( "SELECT COUNT(*) as total FROM seguimiento WHERE tipo_tarjeta='CPCP'");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoGraficasTNRs() {
    $stmt = Conexion::conectar()->prepare( "SELECT COUNT(*) as total, estados_seguimiento FROM seguimiento WHERE tipo_tarjeta='TNRs' GROUP BY estados_seguimiento");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlTNRs() {
    $stmt = Conexion::conectar()->prepare( "SELECT COUNT(*) as total FROM seguimiento WHERE tipo_tarjeta='TNRs'");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }


}
