<?php
require_once "../../controlador/baselpzControlador.php";
require_once "../../modelo/baselpzModelo.php";

$reporte = new ControladorBaseLaPaz();
$reporte -> ctrDescargarReporte();