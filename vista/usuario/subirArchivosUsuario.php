<?php
$email=$_GET["emailUsuario"];
$ruta = "../../assest/dist/files/archivos/".$email."/";

//comprobar la existencia del directorio
if(file_exists($ruta)==false){
  //creamos un directorio
  $directorio="../../assest/dist/files/archivos/".$email;
  mkdir($directorio, 0755);
}

$nombre=$_FILES["file"]["name"];
$archivo=$_FILES["file"]["tmp_name"];
move_uploaded_file($archivo, $ruta.$nombre);

//var_dump($_FILES["file"]);
?>