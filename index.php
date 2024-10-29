<?php
session_start();
/*Controladores*/
require_once "controlador/plantillaControlador.php";
require_once "controlador/usuarioControlador.php";
require_once "controlador/seguimientoControlador.php";
require_once "controlador/marcacionControlador.php";
require_once "controlador/clienteControlador.php";
require_once "controlador/autorizacionControlador.php";
require_once "controlador/carpetaControlador.php";
require_once "controlador/servicioControlador.php";
require_once "controlador/materialControlador.php";
require_once "controlador/controlherramientasControlador.php";
require_once "controlador/herramientasControlador.php";
require_once "controlador/logherramientasControlador.php";
require_once "controlador/calibracionControlador.php";
require_once "controlador/dbajaControlador.php";
require_once "controlador/ordendetrabajoControlador.php";
require_once "controlador/rabControlador.php";
require_once "controlador/baselpzControlador.php";
require_once "controlador/basesczControlador.php";
require_once "controlador/inventarioControlador.php";
require_once "controlador/informeavanceControlador.php";

/*modelos*/
require_once "modelo/usuarioModelo.php";
require_once "modelo/seguimientoModelo.php";
require_once "modelo/marcacionModelo.php";
require_once "modelo/clienteModelo.php";
require_once "modelo/autorizacionModelo.php";
require_once "modelo/carpetaModelo.php";
require_once "modelo/servicioModelo.php";
require_once "modelo/materialModelo.php";
require_once "modelo/controlherramientasModelo.php";
require_once "modelo/herramientasModelo.php";
require_once "modelo/logherramientasModelo.php";
require_once "modelo/calibracionModelo.php";
require_once "modelo/dbajaModelo.php";
require_once "modelo/ordendetrabajoModelo.php";
require_once "modelo/rabModelo.php";
require_once "modelo/baselpzModelo.php";
require_once "modelo/basesczModelo.php";
require_once "modelo/inventarioModelo.php";
require_once "modelo/graficaModelo.php";
require_once "modelo/informeavanceModelo.php";


$plantilla=new ControladorPlantilla();
$plantilla->ctrPlantilla();
