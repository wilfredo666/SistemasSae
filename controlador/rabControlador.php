<?php
$ruta = parse_url($_SERVER['REQUEST_URI']);

if (isset($ruta["query"])) {

  if (
    $ruta["query"] == "ctrRegRab" ||
    $ruta["query"] == "ctrEditRab" ||
    $ruta["query"] == "ctrEliRab"
  ) {
    $metodo = $ruta["query"];
    $Servicio = new ControladorRab();
    $Servicio->$metodo();
  }
}

class ControladorRab
{

  static public function ctrInfoRabs()
  {

    $respuesta = ModeloRab::mdlInfoRabs();
    return $respuesta;
  }

  static public function ctrRegRab()
  {
    require_once "../modelo/rabModelo.php";

    $numseguiRab = $_POST["numseguiRab"];
    $ordentrabajoRab = $_POST["ordentrabajoRab"];
    $itemRab = $_POST["itemRab"];
    $desRab = $_POST["desRab"];
    $numparteRab = $_POST["numparteRab"];
    $cantidadRab = $_POST["cantidadRab"];
    $numserieRab = $_POST["numserieRab"];
    $estadotrabajoRab = $_POST["estadotrabajoRab"];
    $observacionesRab = $_POST["observacionesRab"];
    $nombreRab = $_POST["nombreRab"];
    $fechaRab = $_POST["fechaRab"];

    $data = array(
      "numseguiRab" => $_POST["numseguiRab"],
      "ordentrabajoRab" => $_POST["ordentrabajoRab"],
      "itemRab" => $_POST["itemRab"],
      "desRab" => $_POST["desRab"],
      "numparteRab" => $_POST["numparteRab"],
      "cantidadRab" => $_POST["cantidadRab"],
      "numserieRab" => $_POST["numserieRab"],
      "estadotrabajoRab" => $_POST["estadotrabajoRab"],
      "observacionesRab" => $_POST["observacionesRab"],
      "nombreRab" => $_POST["nombreRab"],
      "fechaRab" => $_POST["fechaRab"]
    );

    $respuesta = ModeloRab::mdlRegRab($data);
    echo $respuesta;
  }

  static public function ctrInfoRab($id)
  {
    $respuesta = ModeloRab::mdlInfoRab($id);
    return $respuesta;
  }

  static public function ctrEditRab()
  {

    require_once "../modelo/rabModelo.php";

    $numseguiRab = $_POST["numseguiRab"];
    $ordentrabajoRab = $_POST["ordentrabajoRab"];
    $itemRab = $_POST["itemRab"];
    $desRab = $_POST["desRab"];
    $numparteRab = $_POST["numparteRab"];
    $cantidadRab = $_POST["cantidadRab"];
    $numserieRab = $_POST["numserieRab"];
    $estadotrabajoRab = $_POST["estadotrabajoRab"];
    $observacionesRab = $_POST["observacionesRab"];
    $nombreRab = $_POST["nombreRab"];
    $fechaRab = $_POST["fechaRab"];

    $data = array(
      "idRab" => $_POST["idRab"],
      "numseguiRab" => $_POST["numseguiRab"],
      "ordentrabajoRab" => $_POST["ordentrabajoRab"],
      "itemRab" => $_POST["itemRab"],
      "desRab" => $_POST["desRab"],
      "numparteRab" => $_POST["numparteRab"],
      "cantidadRab" => $_POST["cantidadRab"],
      "numserieRab" => $_POST["numserieRab"],
      "estadotrabajoRab" => $_POST["estadotrabajoRab"],
      "observacionesRab" => $_POST["observacionesRab"],
      "nombreRab" => $_POST["nombreRab"],
      "fechaRab" => $_POST["fechaRab"]
    );

    $respuesta = ModeloRab::mdlEditRab($data);
    echo $respuesta;
  }

  static public function ctrEliRab()
  {
    require "../modelo/rabModelo.php";
    $data = $_POST["id"];

    $respuesta = ModeloRab::mdlEliRab($data);

    echo $respuesta;
  }

  static public function ctrRepRab($id){
    $respuesta = ModeloRab::mdlRepRab($id);
    return $respuesta;
  }

}
