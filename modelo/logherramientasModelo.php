<?php
require_once "conexion.php";
class ModeloLogHerramientas
{

    /*========================
    Informacion Log Herramientas todos
    ========================*/
    static public function mdlInfoLogHerramientas()
    {

        $stmt = Conexion::conectar()->prepare("select * from log_herramientas join usuario on usuario.id_usuario=log_herramientas.nombre_usuario");
        $stmt->execute();
        return $stmt->fetchAll();

        $stmt->close();
        $stmt->null;
    }

    /*====================
    Registro Log Herramientas
    =====================*/
    static public function mdlRegLogHerramienta($data)
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

        $stmt = Conexion::conectar()->prepare("insert into log_herramientas(codigo_herramientas, fecha_hora, tipo, nombre_usuario, observaciones, id_servicio, id_usuarioLog) values('$detalle', '$fechaHora', 'SALIDA', '$nomLog' ,'$observacionesLog', $nomServicio, $idUsuarioLog)");

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }

        $stmt->close();
        $stmt->null;
        /*======================================
    comprobar si salio o ingreso o si existe
    =======================================*/
        /*  $herramientas = Conexion::conectar()->prepare("select * from herramientas where  codigo_herramientas='$codigo'");

        $herramientas->execute();
        $estado = $herramientas->fetch();

        if ($estado == false) {
            return "error";
        } else {

            if ($estado["disponible"] == 1) {
                //marcando salida
                $stmt = Conexion::conectar()->prepare("insert into log_herramientas(codigo_herramientas, fecha_hora, tipo, nombre_usuario, observaciones) values('$codigo', '$fechaHora', 'SALIDA', '$nomLog', '$observacionesLog')");

                //actualizando a no disponible
                $herramientas_act = Conexion::conectar()->prepare("update herramientas set disponible=0 where  codigo_herramientas='$codigo'");
                $movimiento = "salida";
            } else {
                //marcando entrada
                $stmt = Conexion::conectar()->prepare("insert into log_herramientas(codigo_herramientas, fecha_hora, tipo, nombre_usuario, observaciones) values('$codigo', '$fechaHora', 'ENTRADA', '$nomLog', '$observacionesLog')");

                //actualizando a disponible
                $herramientas_act = Conexion::conectar()->prepare("update herramientas set disponible=1 where  codigo_herramientas='$codigo'");
                $movimiento = "entrada";
            }


            if ($stmt->execute() && $herramientas_act->execute()) {
                return $movimiento;
            } else {
                return "error";
            }


            $stmt->close();
            $stmt->null;
        } */
    }

    /*========================
    Informacion Log Herramienta
    ========================*/
    static public function mdlInfoLogHerramienta($id)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM log_herramientas join usuario on usuario.id_usuario=log_herramientas.nombre_usuario  where id_log_herramientas=$id");
        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();
        $stmt->null;
    }

    static public function mdlInfoLogHerramientaSelec($id)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM log_herramientas  where id_log_herramientas=$id");
        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();
        $stmt->null;
    }

    static public function mdlInfoLogHerramientaDesc($id)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM herramientas where id_herramientas=$id");
        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();
        $stmt->null;
    }


    static public function mdlDevHerramienta($data)
    {

        $stmt = Conexion::conectar()->prepare("update log_herramientas set tipo='ENTRADA' where id_log_herramientas=$data");

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
        $stmt = Conexion::conectar()->prepare("update herramientas set cantidad_herramientas = (cantidad_herramientas+$cantidad) where id_herramientas=$id");
        if ($stmt->execute()) {

            return "ok";
        } else {

            return "error";
        }

        $stmt->close();
        $stmt->null;
    }

    static public function mdlInfoLogEnvioEstado($id)
    {
        $stmt = Conexion::conectar()->prepare("update log_herramientas set email_envio=1 where id_log_herramientas=$id");
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();
        $stmt->null;
    }


    static public function mdlDevolucionHerramienta($data)
    {
        $id = $data["idPrestamo"];
        $items = json_encode($data["arregloCarrito2"]);

        $stmt = Conexion::conectar()->prepare("update log_herramientas set codigo_herramientas = '$items' where id_log_herramientas=$id");
        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
        $stmt->close();
        $stmt->null;
    }

/*====================
    Registro Log DEVOLUCION DE Herramientas
    =====================*/
    static public function mdlLogDevolucion($data2)
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

        $stmt = Conexion::conectar()->prepare("insert into log_devolucion(fecha_dev, observacion_dev, usuario_recepciona, tecnico_dev, detalle_dev, id_log_herramienta) values('$fechaHora', '$observacionesLog', '$usuEncargado', '$usuTecnico' ,'$detalle', '$idPrestamo')");

        if ($stmt->execute()) {
            return "ok";
        } else {
            return "error";
        }
        $stmt->close();
        $stmt->null;
    }

    /*========================
    Informacion Log Herramientas DEVOLUCION
    ========================*/
    static public function mdlInfoLogDevolucion()
    {
        $stmt = Conexion::conectar()->prepare("select * from log_devolucion 
        join usuario on usuario.id_usuario=log_devolucion.tecnico_dev");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt->null;
    }

    /*========================
    Informacion Log Herramienta Devolucion
    ========================*/
    static public function mdlInfoLogDevoluciones($id)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM log_devolucion join usuario on usuario.id_usuario=log_devolucion.tecnico_dev  where id_log_dev =$id");
        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();
        $stmt->null;
    }
    
}
