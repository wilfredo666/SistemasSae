<?php

$numOrden = $_GET["numOrden"];
$ruta = "../../assest/files/archivos/ordenTrabajo/".$numOrden."/";

// comprobar la existencia del directorio
if (!file_exists($ruta)) {
    // creamos un directorio
    mkdir($ruta, 0755, true);
}

$nombre = $_FILES["file"]["name"];
$archivo = $_FILES["file"]["tmp_name"];
move_uploaded_file($archivo, $ruta.$nombre);
?>