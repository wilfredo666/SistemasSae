<?php
require_once "conexion.php";

class ModeloBaseVVI
{
  static public function mdlInfoBasesVVI()
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM basescz");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlRegBaseVVI($data)
  {
    $fechvueloBaseScz = $data["fechvueloBaseScz"];
    $explotadorBaseScz = $data["explotadorBaseScz"];
    $arriboxitineBaseScz = $data["arriboxitineBaseScz"];
    $arriborealBaseScz = $data["arriborealBaseScz"];
    $puenteBaseScz = $data["puenteBaseScz"];
    $salioaBaseScz = $data["salioaBaseScz"];
    $salidaxitineBaseScz = $data["salidaxitineBaseScz"];
    $salidarealBaseScz = $data["salidarealBaseScz"];
    $serealizoBaseScz = $data["serealizoBaseScz"];
    $condBaseScz = $data["condBaseScz"];
    $diferidoBaseScz = $data["diferidoBaseScz"];
    $defectdesBaseScz = $data["defectdesBaseScz"];
    $actiontakenBaseScz = $data["actiontakenBaseScz"];
    $logbookBaseScz = $data["logbookBaseScz"];
    $coddiferidoBaseScz = $_POST["coddiferidoBaseScz"];
    $otexploBaseScz = $data["otexploBaseScz"];
    $otsaeBaseScz = $data["otsaeBaseScz"];
    $notaBaseScz = $data["notaBaseScz"];
    $aceitemot1BaseScz = $data["aceitemot1BaseScz"];
    $aceitemot2BaseScz = $data["aceitemot2BaseScz"];
    $aceitemotapuBaseScz = $data["aceitemotapuBaseScz"];
    $hydyBaseScz = $data["hydyBaseScz"];
    $hydgBaseScz = $data["hydgBaseScz"];
    $hydbBaseScz = $data["hydbBaseScz"];

    $stmt = Conexion::conectar()->prepare("insert into basescz(fech_vuelo_basescz, explotador_basescz, arribo_x_itine_basescz, arriba_real_basescz, puente_basescz, salio_a_basescz, salida_x_itine_basescz, salida_real_basescz, se_realizo_basescz, condicion_basescz, diferido_basescz, defect_description_basescz, action_taken_basescz, log_book_page_basescz, codigo_de_diferi_basescz, ot_explotador_basescz, ot_sae_basescz, nota_basescz, aceite_a_los_motores_1_basescz, aceite_a_los_motores_2_basescz, aceite_a_los_motores_apu_basescz, hyd_y_basescz, hyd_g_basescz, hyd_b_basescz) values('$fechvueloBaseScz', '$explotadorBaseScz', '$arriboxitineBaseScz', '$arriborealBaseScz', '$puenteBaseScz', '$salioaBaseScz', '$salidaxitineBaseScz', '$salidarealBaseScz', '$serealizoBaseScz', '$condBaseScz', '$diferidoBaseScz', '$defectdesBaseScz', '$actiontakenBaseScz', '$logbookBaseScz', '$coddiferidoBaseScz', '$otexploBaseScz', '$otsaeBaseScz', '$notaBaseScz', '$aceitemot1BaseScz', '$aceitemot2BaseScz', '$aceitemotapuBaseScz', '$hydyBaseScz', '$hydgBaseScz', '$hydbBaseScz')");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoBaseVVI($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM basescz where id_basescz=$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEditBaseVVI($data)
  {

    $idBaseScz = $data["idBaseScz"];
    $fechvueloBaseScz = $data["fechvueloBaseScz"];
    $explotadorBaseScz = $data["explotadorBaseScz"];
    $arriboxitineBaseScz = $data["arriboxitineBaseScz"];
    $arriborealBaseScz = $data["arriborealBaseScz"];
    $puenteBaseScz = $data["puenteBaseScz"];
    $salioaBaseScz = $data["salioaBaseScz"];
    $salidaxitineBaseScz = $data["salidaxitineBaseScz"];
    $salidarealBaseScz = $data["salidarealBaseScz"];
    $serealizoBaseScz = $data["serealizoBaseScz"];
    $condBaseScz = $data["condBaseScz"];
    $diferidoBaseScz = $data["diferidoBaseScz"];
    $defectdesBaseScz = $data["defectdesBaseScz"];
    $actiontakenBaseScz = $data["actiontakenBaseScz"];
    $logbookBaseScz = $data["logbookBaseScz"];
    $coddiferidoBaseScz = $_POST["coddiferidoBaseScz"];
    $otexploBaseScz = $data["otexploBaseScz"];
    $otsaeBaseScz = $data["otsaeBaseScz"];
    $notaBaseScz = $data["notaBaseScz"];
    $aceitemot1BaseScz = $data["aceitemot1BaseScz"];
    $aceitemot2BaseScz = $data["aceitemot2BaseScz"];
    $aceitemotapuBaseScz = $data["aceitemotapuBaseScz"];
    $hydyBaseScz = $data["hydyBaseScz"];
    $hydgBaseScz = $data["hydgBaseScz"];
    $hydbBaseScz = $data["hydbBaseScz"];

    $stmt = Conexion::conectar()->prepare("update basescz set fech_vuelo_basescz='$fechvueloBaseScz', explotador_basescz='$explotadorBaseScz',arribo_x_itine_basescz='$arriboxitineBaseScz', arriba_real_basescz='$arriborealBaseScz', puente_basescz='$puenteBaseScz', salio_a_basescz='$salioaBaseScz', salida_x_itine_basescz='$salidaxitineBaseScz', salida_real_basescz='$salidarealBaseScz', se_realizo_basescz='$serealizoBaseScz', condicion_basescz='$condBaseScz', diferido_basescz='$diferidoBaseScz', defect_description_basescz='$defectdesBaseScz', action_taken_basescz='$actiontakenBaseScz', log_book_page_basescz='$logbookBaseScz', codigo_de_diferi_basescz='$coddiferidoBaseScz', ot_explotador_basescz='$otexploBaseScz', ot_sae_basescz='$otsaeBaseScz', nota_basescz='$notaBaseScz', aceite_a_los_motores_1_basescz='$aceitemot1BaseScz', aceite_a_los_motores_2_basescz='$aceitemot2BaseScz', aceite_a_los_motores_apu_basescz='$aceitemotapuBaseScz', hyd_y_basescz='$hydyBaseScz', hyd_g_basescz ='$hydgBaseScz', hyd_b_basescz ='$hydbBaseScz' where id_basescz=$idBaseScz");

    if ($stmt->execute()) {

      return "ok";
    } else {

      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEliBaseVVI($data)
  {
    $stmt = Conexion::conectar()->prepare("delete from basescz where id_basescz=$data");

    if ($stmt->execute()) {
      return "correcto";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

  static public function mdlRepExcelBasesScz($columnas)
  {
    $stmt = Conexion::conectar()->prepare("SELECT $columnas FROM basescz");
    $stmt->execute();


    // Obtener los resultados
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultados;

    // Cerrar la conexión
    $stmt->closeCursor();
    $stmt->null;
  }
  
}
