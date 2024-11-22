<?php
require_once "conexion.php";

class ModeloControlHerramientas
{

  static public function mdlInfoControlHerramientas()
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM control_herramientas");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoControlHerramientasFiltrado($rangoFecha)
  {
    // Separar la cadena en base a " - "
    $fechas = explode(" - ", $rangoFecha);

    // Asignar cada parte a variables
    $fecha_inicio = date("Y-m-d", strtotime($fechas[0]));
    $fecha_fin = date("Y-m-d", strtotime($fechas[1]));

    $stmt = Conexion::conectar()->prepare("SELECT * FROM control_herramientas WHERE fechacali_controlherramientas>=:fecha_inicio AND fechavenci_controlherramientas<=:fecha_fin");

    // Asignar los parámetros a la consulta
    $stmt->bindParam(':fecha_inicio', $fecha_inicio);
    $stmt->bindParam(':fecha_fin', $fecha_fin);

    $stmt->execute();

    // Obtener los resultados
    $resultados = $stmt->fetchAll();

    // Cerrar el cursor y la conexión
    $stmt->closeCursor();
    $stmt = null;

    // Retornar los resultados
    return $resultados;
  }

  static public function mdlInfoControlHerramientasUbic()
  {
    $stmt = Conexion::conectar()->prepare("SELECT DISTINCT ubicacion_controlherramientas FROM control_herramientas");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoControlEnvio()
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM control_herramientas WHERE email_envio=0");
    $stmt->execute();

    return $stmt->fetchAll();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoControlEnvioEstado($id)
  {
    $stmt = Conexion::conectar()->prepare("update control_herramientas set email_envio=1 where id_controlherramientas=$id");
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();
    $stmt->null;
  }


  static public function mdlRegControlHerramientas($data)
  {

    $desControlHerramientas = $data["desControlHerramientas"];
    $pnControlHerramientas = $data["pnControlHerramientas"];
    $pnaltControlHerramientas = $data["pnaltControlHerramientas"];
    $numserieControlHerramientas = $data["numserieControlHerramientas"];
    $codigoControlHerramientas = $data["codigoControlHerramientas"];
    $marcafabriControlHerramientas = $data["marcafabriControlHerramientas"];
    $cantidadControlHerramientas = $data["cantidadControlHerramientas"];
    $unidadControlHerramientas = $data["unidadControlHerramientas"];
    $obControlHerramientas = $data["obControlHerramientas"];
    $ubicacionControlHerramientas = $data["ubicacionControlHerramientas"];
    $fechacalControlHerramientas = $data["fechacalControlHerramientas"];
    $periodocalControlHerramientas = $data["periodocalControlHerramientas"];
    $fechavenciControlHerramientas = $data["fechavenciControlHerramientas"];
    $estadoControlHerramientas = $data["estadoControlHerramientas"];
    $diasalertaControlHerramientas = $data["diasalertaControlHerramientas"];
    $origencaliControlHerramientas = $data["origencaliControlHerramientas"];
    $propiedaControlHerramientas = $data["propiedaControlHerramientas"];
    $numcarpetaControlHerramientas = $data["numcarpetaControlHerramientas"];
    $numcertiControlHerramientas = $data["numcertiControlHerramientas"];
    $numregistroControlHerramientas = $data["numregistroControlHerramientas"];
    $alcaninstrucControlHerramientas = $data["alcaninstrucControlHerramientas"];
    $resinstruControlHerramientas = $data["resinstruControlHerramientas"];
    $ubicacionautoControlHerramientas = $data["ubicacionautoControlHerramientas"];
    $docsalidaControlHerramientas = $data["docsalidaControlHerramientas"];

    $stmt = Conexion::conectar()->prepare("insert into control_herramientas(descripcion_controlherramientas, 	pn_controlherramientas, pnalt_controlherramientas, numserie_controlherramientas, codigo_controlherramientas, marcaofabri_controlherramientas, cantidad_controlherramientas, unidad_controlherramientas, observacion_controlherramientas, ubicacion_controlherramientas, fechacali_controlherramientas, periodocali_controlherramientas, fechavenci_controlherramientas, estado_controlherramientas, diasalerta_controlherramientas, origencali_controlherramientas, 	propiedad_controlherramientas, numcarpeta_controlherramientas, numcertifi_controlherramientas, numregistro_controlherramientas, alcanceinstru_controlherramientas, resuinstru_controlherramientas, ubicacionautorizada_controlherramientas, docsalida_controlherramientas) values('$desControlHerramientas', '$pnControlHerramientas', '$pnaltControlHerramientas', '$numserieControlHerramientas', '$codigoControlHerramientas', '$marcafabriControlHerramientas', '$cantidadControlHerramientas', '$unidadControlHerramientas', '$obControlHerramientas', '$ubicacionControlHerramientas', '$fechacalControlHerramientas', '$periodocalControlHerramientas', '$fechavenciControlHerramientas', '$estadoControlHerramientas', '$diasalertaControlHerramientas', '$origencaliControlHerramientas', '$propiedaControlHerramientas', '$numcarpetaControlHerramientas', '$numcertiControlHerramientas', '$numregistroControlHerramientas', '$alcaninstrucControlHerramientas', '$resinstruControlHerramientas', '$ubicacionautoControlHerramientas', '$docsalidaControlHerramientas')");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoControlHerramienta($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM control_herramientas where id_controlherramientas=$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEditControlHerramienta($data)
  {

    $idControlHerramientas = $data["idControlHerramientas"];
    $desControlHerramientas = $data["desControlHerramientas"];
    $pnControlHerramientas = $data["pnControlHerramientas"];
    $pnaltControlHerramientas = $data["pnaltControlHerramientas"];
    $numserieControlHerramientas = $data["numserieControlHerramientas"];
    $codigoControlHerramientas = $data["codigoControlHerramientas"];
    $marcafabriControlHerramientas = $data["marcafabriControlHerramientas"];
    $cantidadControlHerramientas = $data["cantidadControlHerramientas"];
    $unidadControlHerramientas = $data["unidadControlHerramientas"];
    $obControlHerramientas = $data["obControlHerramientas"];
    $ubicacionControlHerramientas = $data["ubicacionControlHerramientas"];
    $fechacalControlHerramientas = $data["fechacalControlHerramientas"];
    $periodocalControlHerramientas = $data["periodocalControlHerramientas"];
    $fechavenciControlHerramientas = $data["fechavenciControlHerramientas"];
    $estadoControlHerramientas = $data["estadoControlHerramientas"];
    $diasalertaControlHerramientas = $data["diasalertaControlHerramientas"];
    $origencaliControlHerramientas = $data["origencaliControlHerramientas"];
    $propiedaControlHerramientas = $data["propiedaControlHerramientas"];
    $numcarpetaControlHerramientas = $data["numcarpetaControlHerramientas"];
    $numcertiControlHerramientas = $data["numcertiControlHerramientas"];
    $numregistroControlHerramientas = $data["numregistroControlHerramientas"];
    $alcaninstrucControlHerramientas = $data["alcaninstrucControlHerramientas"];
    $resinstruControlHerramientas = $data["resinstruControlHerramientas"];
    $ubicacionautoControlHerramientas = $data["ubicacionautoControlHerramientas"];
    $docsalidaControlHerramientas = $data["docsalidaControlHerramientas"];

    $stmt = Conexion::conectar()->prepare("update control_herramientas set descripcion_controlherramientas='$desControlHerramientas', pn_controlherramientas='$pnControlHerramientas',pnalt_controlherramientas='$pnaltControlHerramientas', numserie_controlherramientas='$numserieControlHerramientas', codigo_controlherramientas='$codigoControlHerramientas', marcaofabri_controlherramientas='$marcafabriControlHerramientas', cantidad_controlherramientas='$cantidadControlHerramientas', unidad_controlherramientas='$unidadControlHerramientas', observacion_controlherramientas='$obControlHerramientas', ubicacion_controlherramientas='$ubicacionControlHerramientas', fechacali_controlherramientas='$fechacalControlHerramientas', periodocali_controlherramientas='$periodocalControlHerramientas', fechavenci_controlherramientas='$fechavenciControlHerramientas', estado_controlherramientas='$estadoControlHerramientas', diasalerta_controlherramientas='$diasalertaControlHerramientas', origencali_controlherramientas='$origencaliControlHerramientas', propiedad_controlherramientas='$propiedaControlHerramientas', numcarpeta_controlherramientas='$numcarpetaControlHerramientas', numcertifi_controlherramientas='$numcertiControlHerramientas', numregistro_controlherramientas='$numregistroControlHerramientas', alcanceinstru_controlherramientas='$alcaninstrucControlHerramientas', resuinstru_controlherramientas='$resinstruControlHerramientas', ubicacionautorizada_controlherramientas='$ubicacionautoControlHerramientas', docsalida_controlherramientas='$docsalidaControlHerramientas' where id_controlherramientas=$idControlHerramientas");

    if ($stmt->execute()) {

      return "ok";
    } else {

      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  static public function mdlEliControlHerramienta($data)
  {
    $stmt = Conexion::conectar()->prepare("delete from control_herramientas where id_controlherramientas=$data");

    if ($stmt->execute()) {
      return "correcto";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

  static public function mdlRegRegistrosControlHerramientas($data)
  {
    $tipo = $data['registros']['type'];
    $tamanio = $data['registros']['size'];
    $archivotmp = $data['registros']['tmp_name'];
    $lineas = file($archivotmp);
    $i = 0;
    foreach ($lineas as $linea) {
      //$cantidad_registros = count($lineas);
      //$cantidad_regist_agregados = ($cantidad_registros - 1);

      //usamos el contador i para que no registre la primera fila
      if ($i != 0) {

        $datos = explode(";", $linea);

        $descripcion_controlherramientas = !empty($datos[0]) ? ($datos[0]) : '';
        $pn_controlherramientas = !empty($datos[1]) ? ($datos[1]) : '';
        $pnalt_controlherramientas = !empty($datos[2]) ? ($datos[2]) : '';
        $numserie_controlherramientas = !empty($datos[3]) ? ($datos[3]) : '';
        $codigo_controlherramientas = !empty($datos[4]) ? ($datos[4]) : '';
        $marcaofabri_controlherramientas = !empty($datos[5]) ? ($datos[5]) : '';
        $cantidad_controlherramientas = !empty($datos[6]) ? ($datos[6]) : '';
        $unidad_controlherramientas = !empty($datos[7]) ? ($datos[7]) : '';
        $ubicacion_controlherramientas = !empty($datos[8]) ? ($datos[8]) : '';
        $fechacali_controlherramientas = !empty($datos[9]) ? ($datos[9]) : '';
        $periodocali_controlherramientas = !empty($datos[10]) ? ($datos[10]) : '';
        $fechavenci_controlherramientas = !empty($datos[11]) ? ($datos[11]) : '';
        $estado_controlherramientas = !empty($datos[12]) ? ($datos[12]) : '';
        $diasalerta_controlherramientas = !empty($datos[13]) ? ($datos[13]) : '';
        $origencali_controlherramientas = !empty($datos[14]) ? ($datos[14]) : '';
        $propiedad_controlherramientas = !empty($datos[15]) ? ($datos[15]) : '';
        $numcarpeta_controlherramientas = !empty($datos[16]) ? ($datos[16]) : '';
        $numcertifi_controlherramientas = !empty($datos[17]) ? ($datos[17]) : '';
        $numregistro_controlherramientas = !empty($datos[18]) ? ($datos[18]) : '';
        $alcanceinstru_controlherramientas = !empty($datos[19]) ? ($datos[19]) : '';
        $resuinstru_controlherramientas = !empty($datos[20]) ? ($datos[20]) : '';
        $ubicacionautorizada_controlherramientas = !empty($datos[21]) ? ($datos[21]) : '';
        $docsalida_controlherramientas = !empty($datos[22]) ? ($datos[22]) : '';

        if (!empty($numcarpeta_controlherramientas)) {
          $mtr_duplicada = Conexion::conectar()->prepare("select numcarpeta_controlherramientas from control_herramientas where numcarpeta_controlherramientas='$numcarpeta_controlherramientas'");
          $mtr_duplicada->execute();
          $regDuplicado = $mtr_duplicada->rowCount();
        }

        if ($regDuplicado > 0) {

          $stmt = Conexion::conectar()->prepare("update control_herramientas set descripcion_controlherramientas, pn_controlherramientas,pnalt_controlherramientas, numserie_controlherramientas, codigo_controlherramientas, marcaofabri_controlherramientas, cantidad_controlherramientas, unidad_controlherramientas, ubicacion_controlherramientas, fechacali_controlherramientas, periodocali_controlherramientas, fechavenci_controlherramientas, estado_controlherramientas, diasalerta_controlherramientas, origencali_controlherramientas, propiedad_controlherramientas, numcarpeta_controlherramientas, numcertifi_controlherramientas, numregistro_controlherramientas, alcanceinstru_controlherramientas, resuinstru_controlherramientas, ubicacionautorizada_controlherramientas, docsalida_controlherramientas where numcarpeta_controlherramientas='$numcarpeta_controlherramientas'");
          $stmt->execute();
        } else {
          $stmt = Conexion::conectar()->prepare("insert into control_herramientas (descripcion_controlherramientas, pn_controlherramientas, pnalt_controlherramientas, numserie_controlherramientas, codigo_controlherramientas, marcaofabri_controlherramientas, cantidad_controlherramientas, unidad_controlherramientas, ubicacion_controlherramientas, fechacali_controlherramientas, periodocali_controlherramientas, fechavenci_controlherramientas, estado_controlherramientas, diasalerta_controlherramientas, origencali_controlherramientas, 	propiedad_controlherramientas, numcarpeta_controlherramientas, numcertifi_controlherramientas, numregistro_controlherramientas, alcanceinstru_controlherramientas, resuinstru_controlherramientas, ubicacionautorizada_controlherramientas, docsalida_controlherramientas) values('$descripcion_controlherramientas', '$pn_controlherramientas', '$pnalt_controlherramientas', '$numserie_controlherramientas', '$codigo_controlherramientas', '$marcaofabri_controlherramientas', '$cantidad_controlherramientas', '$unidad_controlherramientas', '$ubicacion_controlherramientas', '$fechacali_controlherramientas', '$periodocali_controlherramientas', '$fechavenci_controlherramientas', '$estado_controlherramientas', '$diasalerta_controlherramientas', '$origencali_controlherramientas', '$propiedad_controlherramientas', '$numcarpeta_controlherramientas', '$numcertifi_controlherramientas', '$numregistro_controlherramientas', '$alcanceinstru_controlherramientas', '$resuinstru_controlherramientas', '$ubicacionautorizada_controlherramientas', '$docsalida_controlherramientas')");
          $stmt->execute();
        }
      }
      $i++;
    }

    return "ok";
  }

  static public function mdlRepHerramienta($data)
  {
    $nom = $data["nomHerramienta"];
    if ($data["nomHerramienta"] == "Todos") {
      $stmt = Conexion::conectar()->prepare("select * from control_herramientas");
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt->close();
      $stmt->null;
    } else {
      $stmt = Conexion::conectar()->prepare("select * from control_herramientas where ubicacion_controlherramientas='$nom'");
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt->close();
      $stmt->null;
    }
  }

  static public function mdlHerramientas($data)
  {
    if ($data == "Todos") {
      $stmt = Conexion::conectar()->prepare("select * from control_herramientas");
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt->close();
      $stmt->null;
    } else {
      $stmt = Conexion::conectar()->prepare("select * from control_herramientas where ubicacion_controlherramientas='$data'");
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt->close();
      $stmt->null;
    }
  }

  static public function mdlPorHerramientas($id)
  {
    $stmt = Conexion::conectar()->prepare("select * from control_herramientas
    where id_controlherramientas=$id");
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();
    $stmt->null;
  }

  static public function mdlSelecHerramientas($id)
  {
    $stmt = Conexion::conectar()->prepare("select * from control_herramientas
      where id_controlherramientas=$id");
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();
    $stmt->null;
  }

  static public function mdlRegDatosInforme($data)
  {
    $seleccionados = $data["seleccionados"];
    $fechaInforme = $data["fechaInforme"];
    $numInforme = $data["numInforme"];
    $respAlmacen = $data["respAlmacen"];
    $repTecnico = $data["repTecnico"];
    $encargadoInforme = $data["encargadoInforme"];
    $asuntoInforme = $data["asuntoInforme"];
    $descInforme = $data["descInforme"];

    $stmt = Conexion::conectar()->prepare("insert into informes(fecha_informe, de_informe, a_informe, num_informe, asunto_informe, conclusion_informe, encargado_informe, herra_seleccionados) values('$fechaInforme', '$respAlmacen', '$repTecnico', '$numInforme', '$asuntoInforme', '$descInforme', '$encargadoInforme', '$seleccionados')");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoHerramienta()
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM informes");
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoInforme($id)
  {
    $stmt = Conexion::conectar()->prepare("select * from informes
      where id_informe=$id");
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoHerraCalibradaSelec($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM control_herramientas where id_controlherramientas=$id");
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoHerramientaCalibrada($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM control_herramientas where id_controlherramientas=$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlActualizarStockCalibrada($datos)
  {
    $herramientas = array($datos);
    foreach ($herramientas as $value) {
      $id = $value["id"];
      $cantidad = $value["cantidad"];
      $stmt = Conexion::conectar()->prepare("update control_herramientas set cantidad_controlherramientas='$cantidad' where id_controlherramientas='$id'");
      $stmt->execute();
    }
    return "ok";
  }

  /*====================
    Registro Log Herramientas
    =====================*/
  static public function mdlRegLogHerramientaCalibrada($data)
  {
    $nomLog = $data["nomLog"];
    $observacionesLog = $data["observacionesLog"];
    $nomServicio = $data["nomServicio"];
    $idUsuarioLog = $data["idUsuario"];
    $detalle = $data["detalle"];

    $detalle = json_encode($detalle);

    date_default_timezone_set("America/La_Paz");
    $fecha = date("Y-m-d");
    $hora = date("H:i:s");
    $fechaHora = $fecha . " " . $hora;

    $stmt = Conexion::conectar()->prepare("insert into mayor_herramientascalibradas(fecha_hora, usuario, tecnico, observacion, id_servicio, detalle, estado) values('$fechaHora', $idUsuarioLog, $nomLog , '$observacionesLog' ,$nomServicio, '$detalle', 'SALIDA')");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt->close();
    $stmt->null;
  }

  /*========================
    Informacion Log Herramientas CALOIBRADAS todos
    ========================*/
  static public function mdlLogHerraCalibradas()
  {
    $stmt = Conexion::conectar()->prepare("select * from mayor_herramientascalibradas join usuario on usuario.id_usuario=mayor_herramientascalibradas.tecnico");
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();
    $stmt->null;
  }
  /*========================
    Informacion Log Herramienta CALIBRADA
    ========================*/
  static public function mdlInfoLogHerraCalibrada($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM mayor_herramientascalibradas join usuario on usuario.id_usuario=mayor_herramientascalibradas.tecnico  where id_mayor_herramientascalibradas =$id");
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoLogHerraDesc($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM control_herramientas where id_controlherramientas =$id");
    $stmt->execute();
    return $stmt->fetch();
    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoUsuarioLog($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM mayor_herramientascalibradas  where id_mayor_herramientascalibradas =$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  /*====================
    Registro Log DEVOLUCION DE Herramientas CALIBRADAS
    =====================*/
  static public function mdlLogDevolucionCalibrada($data2)
  {
    $idPrestamo = $data2["idPrestamo"];
    $usuTecnico = $data2["usuTecnico"];
    $usuEncargado = $data2["usuEncargado"];
    $observacionesLog = $data2["observacionesLog"];

    $detalleDev = $data2["arregloCarrito3"];

    $detalle = json_encode($detalleDev);

    date_default_timezone_set("America/La_Paz");
    $fecha = date("Y-m-d");
    $hora = date("H:i:s");
    $fechaHora = $fecha . " " . $hora;

    $stmt = Conexion::conectar()->prepare("insert into menor_herramientascalibradas(fecha_hora_dev, observacion_dev, usuario_dev, tecnico_dev, detalle_dev, id_mayor_herramientascalibradas) values('$fechaHora', '$observacionesLog', '$usuEncargado', '$usuTecnico' ,'$detalle', '$idPrestamo')");

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

  static public function mdlDevolucionHerramientaCalibrada($data)
  {
    $id = $data["idPrestamo"];
    $items = json_encode($data["arregloCarrito2"]);

    $stmt = Conexion::conectar()->prepare("update mayor_herramientascalibradas set detalle = '$items' where id_mayor_herramientascalibradas=$id");
    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

  static public function mdlActualizaStock($id, $cantidad)
  {
    $stmt = Conexion::conectar()->prepare("update control_herramientas set cantidad_controlherramientas = (cantidad_controlherramientas+$cantidad) where id_controlherramientas =$id");
    if ($stmt->execute()) {
      return "ok";
    } else {

      return "error";
    }
    $stmt->close();
    $stmt->null;
  }

  /*========================
    Informacion Log Herramientas DEVOLUCION CALIBRADAS
    ========================*/
  static public function mdlInfoLogDevCalibradas()
  {
    $stmt = Conexion::conectar()->prepare("select * from menor_herramientascalibradas 
        join usuario on usuario.id_usuario=menor_herramientascalibradas.tecnico_dev");
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();
    $stmt->null;
  }
  /*========================
    Informacion Log Herramienta Devolucion CALIBRADA INDIVIDUAL
    ========================*/
  static public function mdlInfoLogLogDevCalibrada($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM menor_herramientascalibradas join usuario on usuario.id_usuario=menor_herramientascalibradas.tecnico_dev  where id_menor_herramientascalibradas =$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }

  static public function mdlInfoLogCalibrada($id)
  {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM control_herramientas where id_controlherramientas =$id");
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
    $stmt->null;
  }


  static public function mdlRepPresTecnico($data){
    $nom = $data["nomTecnico"];
    if ($nom == "todos") {
      $stmt = Conexion::conectar()->prepare("SELECT
    mh.id_mayor_herramientascalibradas,
    mh.fecha_hora, 
    tu.nombre_usuario AS tecnico_nombre, 
    uu.nombre_usuario AS usuario_nombre, 
    sr.cliente,
    mh.detalle,
    mh.estado
FROM 
    mayor_herramientascalibradas mh
JOIN 
    usuario tu ON mh.tecnico = tu.id_usuario
JOIN 
    usuario uu ON mh.usuario = uu.id_usuario
JOIN
	servicios sr ON mh.id_servicio = sr.id_servicio");
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt->close();
      $stmt->null;
    } else {
      $stmt = Conexion::conectar()->prepare("SELECT
	mh.id_mayor_herramientascalibradas,
    mh.fecha_hora, 
    tu.nombre_usuario AS tecnico_nombre, 
    uu.nombre_usuario AS usuario_nombre, 
    sr.cliente,
    mh.detalle,
    mh.estado
FROM 
    mayor_herramientascalibradas mh
JOIN 
    usuario tu ON mh.tecnico = tu.id_usuario
JOIN 
    usuario uu ON mh.usuario = uu.id_usuario
JOIN
	servicios sr ON mh.id_servicio = sr.id_servicio
WHERE
	tecnico=$nom");
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt->close();
      $stmt->null;
    }
  }

  static public function mdlRepPresTecnicoLh($data){
    $nom = $data["nomTecnico"];
    if ($nom == "todos") {
      $stmt = Conexion::conectar()->prepare("SELECT
      lh.codigo_herramientas,
    lh.id_log_herramientas,
    lh.fecha_hora, 
    tu.nombre_usuario AS tecnico_nombre, 
    uu.nombre_usuario AS usuario_nombre, 
    ar.empresa_aeronave, 
    lh.tipo
FROM 
    log_herramientas lh
JOIN 
    usuario tu ON lh.nombre_usuario = tu.id_usuario
JOIN 
    usuario uu ON lh.id_usuarioLog = uu.id_usuario
JOIN
	aeronaves ar ON lh.empresa_aeronave = ar.id_aeronave");
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt->close();
      $stmt->null;
    } else {
      $stmt = Conexion::conectar()->prepare("SELECT
      lh.codigo_herramientas,
    lh.id_log_herramientas,
    lh.fecha_hora, 
    tu.nombre_usuario AS tecnico_nombre, 
    uu.nombre_usuario AS usuario_nombre, 
    ar.empresa_aeronave, 
    lh.tipo
FROM 
    log_herramientas lh
JOIN 
    usuario tu ON lh.nombre_usuario = tu.id_usuario
JOIN 
    usuario uu ON lh.id_usuarioLog = uu.id_usuario
JOIN
	aeronaves ar ON lh.empresa_aeronave = ar.id_aeronave
WHERE
	lh.nombre_usuario=$nom");
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt->close();
      $stmt->null;
    }
  }



}

