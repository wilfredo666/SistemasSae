<?php
$path = parse_url($_SERVER['REQUEST_URI']);
//numero de orden de trabajo
$numOrden = $path["query"];

$ruta="assest/files/archivos/ordenTrabajo/".$numOrden;


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="m-0">Panel Orden de Trabajo</h3>
        </div><!-- /.col -->
        <div class="col-sm-6">

        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <?php mostrar_archivos($ruta, $numOrden);?>

      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
/**
* Funcion que muestra las imagenes que hay en la ruta pasada como parametro
*/
function mostrar_archivos($ruta, $numOrden){
  // Se comprueba que realmente sea la ruta de un directorio
  if (is_dir($ruta)){
    // Abre un gestor de directorios para la ruta indicada
    $gestor = opendir($ruta);

    // Recorre todos los archivos del directorio
    while (($archivo = readdir($gestor)) !== false)  {
      // Solo buscamos archivos sin entrar en subdirectorios
      if (is_file($ruta."/".$archivo)) {
?>

<div class="col-md-3">
  <div class="card card-primary card-outline">
    <div class="card-body box-profile">
      <div class="text-center">
        <?php
        $trozos=explode(".",$archivo);
        $extension=end($trozos);
        if($extension=="jpg" || $extension=="png"){
        ?>
        <img class="img-fluid" src="<?php echo $ruta."/".$archivo;?>" style="width:150px;">
        <?php
        }else{
        ?>
        <img class="img-fluid" src="assest/dist/img/manual-img-default.png" style="width:150px;">

        <?php
        }
        ?>

      </div>
      <h3 class="profile-username text-center"><?php echo preg_replace('[.pdf|.png]', '', $archivo) ;?></h3>

      <a href="vista/lectorArchivo.php?archivo=<?php echo $archivo;?>&numOrden=<?php echo $numOrden;?>" class="btn btn-info btn-block"
         target="_blank"><b>Visualizar</b></a>

      <a href="vista/descargar.php?ruta=<?php echo $ruta;?>&archivo=<?php echo $archivo;?>" class="btn btn-warning btn-block" target="_blank"><b>Descargar</b></a>


      <button class="btn btn-danger btn-block"
              onclick="EliArchivo('<?php echo $archivo;?>','<?php echo $numOrden;?>')">Eliminar</button>
      <input type="hidden" value="" id="manualPdf">

    </div>
  </div>
</div>


<?php
      }            
    }

    // Cierra el gestor de directorios
    closedir($gestor);
  } else {
    echo "No es una ruta de directorio valida<br/>";
  }
}

?>
