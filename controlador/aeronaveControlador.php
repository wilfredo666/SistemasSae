<?php
//capturamos la url
$ruta = parse_url($_SERVER['REQUEST_URI']);

if (isset($ruta["query"])) {
    if (
        $ruta["query"] == "ctrRegAeronave" ||
        $ruta["query"] == "ctrEliAeronave" ||
        $ruta["query"] == "ctrEditAeronave"
    ) {

        $metodo = $ruta["query"];
        $cliente = new ControladorAeronave();
        $cliente->$metodo();
    }
}

class ControladorAeronave
{
    /*==========================
    Informacion de aeronaves todos 
    ============================*/
    static public function ctrInfoAeronaves()
    {
        $respuesta = ModeloAeronave::mdlInfoAeronaves();
        return $respuesta;
    }

    /*====================
    Registro nuevo aeronaves
    =====================*/
    static public function ctrRegAeronave()
    {
        require_once "../modelo/aeronaveModelo.php";

        $empresaAeronave = trim($_POST["empresaAeronave"]);
        $matriculaAeronave = trim($_POST["matriculaAeronave"]);

        $data = array(
            "empresaAeronave" => $empresaAeronave,
            "matriculaAeronave" => $matriculaAeronave
        );

        $respuesta = ModeloAeronave::mdlRegAeronave($data);

        echo $respuesta;
    }

    /*========================
    Ver Info aeronave
    ========================*/
    static public function ctrInfoAeronave($idAeronave)
    {
        $respuesta = ModeloAeronave::mdlInfoAeronave($idAeronave);
        return $respuesta;
    }

    /*=======================
    Eliminar usuario aeronaves
    ========================*/
    static public function ctrEliAeronave()
    {
        require_once "../modelo/aeronaveModelo.php";
        $data = $_POST["id"];
        $respuesta = ModeloAeronave::mdlEliAeronave($data);
        echo $respuesta;
    }

    /*====================
    Editar Personal
    =====================*/
    static public function ctrEditAeronave()
    {
        require_once "../modelo/aeronaveModelo.php";

        $idAeronave = trim($_POST["idAeronave"]);
        $empresaAeronave = trim($_POST["empresaAeronave"]);
        $matriculaAeronave = trim($_POST["matriculaAeronave"]);

        $data = array(
            "idAeronave" => $idAeronave,
            "empresaAeronave" => $empresaAeronave,
            "matriculaAeronave" => $matriculaAeronave
        );

        $respuesta = ModeloAeronave::mdlEditAeronave($data);

        echo $respuesta;
    }
}
