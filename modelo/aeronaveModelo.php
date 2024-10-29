<?php
require_once "conexion.php";
class ModeloAeronave
{

    /*========================
    Informacion Aeronaves todos
    ========================*/
    static public function mdlInfoAeronaves()
    {

        $stmt = Conexion::conectar()->prepare("select * from aeronaves");
        $stmt->execute();
        return $stmt->fetchAll();

        $stmt->close();
        $stmt->null;
    }

    /*====================
    Registro Aeronave
    =====================*/
    static public function mdlRegAeronave($data)
    {

        $empresaAeronave = $data["empresaAeronave"];
        $matriculaAeronave = $data["matriculaAeronave"];

        $stmt = Conexion::conectar()->prepare("insert into aeronaves (empresa_aeronave, matricula_aeronave) values('$empresaAeronave', '$matriculaAeronave')");

        if ($stmt->execute()) {
            return "correcto";
        } else {
            return "error";
        }
        $stmt->close();
        $stmt->null;
    }

    /*========================
     Ver Info usuario aeronave
    ========================*/
    static public function mdlInfoAeronave($idAeronave)
    {

        $stmt = Conexion::conectar()->prepare("select * from aeronaves where id_aeronave = $idAeronave");

        $stmt->execute();
        return $stmt->fetch();

        $stmt->close();
        $stmt->null;
    }

    /*========================
     Elimnar usuario Aeronave
    ========================*/
    static public function mdlEliAeronave($data)
    {

        $stmt = Conexion::conectar()->prepare("delete from aeronaves where id_aeronave = $data");

        if ($stmt->execute()) {

            return "eliminado";
        } else {
            return "error";
        }

        $stmt->close();
        $stmt->null;
    }

    /*========================
     Editar usuario aeronave
    ========================*/
    static public function mdlEditAeronave($data)
    {

        $idAeronave = $data["idAeronave"];
        $empresaAeronave = $data["empresaAeronave"];
        $matriculaAeronave = $data["matriculaAeronave"];

        $stmt = Conexion::conectar()->prepare("update aeronaves set empresa_aeronave = '$empresaAeronave', matricula_aeronave = '$matriculaAeronave' where id_aeronave =$idAeronave");

        if ($stmt->execute()) {
            return "correcto";
        } else {
            return "error";
        }
        $stmt->close();
        $stmt->null;
    }
}
