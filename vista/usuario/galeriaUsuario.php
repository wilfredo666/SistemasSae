<?php
//capturamos la url y separamos el id de usuario
$path = parse_url($_SERVER['REQUEST_URI']);

$idUsuario = $path["query"];

//Obtener informacion del usuario
/*require_once "../../controlador/usuarioControlador.php";
require_once "../../modelo/usuarioModelo.php";*/

$usuario=ControladorUsuario::ctrInfoUsuario($idUsuario);

$login=$usuario["email_usuario"];
$ruta="assest/dist/files/archivos/".$login;

?>


<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><?php echo $usuario["nombre_usuario"];?></h1>
        </div>
        <div class="col-sm-6">

        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <?php mostrar_archivos($ruta, $login);?>

      </div>
    </div>
  </section>
</div>
<?php

/**
* Funcion que muestra las imagenes que hay en la ruta pasada como parametro
*/
function mostrar_archivos($ruta, $login){
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
        <img class="img-fluid" src="assest/dist/img/logo.png" alt="User profile picture" style="width:150px; height:125px;">

        <?php
        }
        ?>

      </div>
      <h3 class="profile-username text-center"><?php echo preg_replace('[.pdf|.png|.jpg]', '', $archivo) ;?></h3>

      <a href="vista/lectorArchivo.php?archivo=<?php echo $archivo;?>&email=<?php echo $login;?>" class="btn btn-info btn-block"
         target="_blank"><b>Visualizar</b></a>

      <button class="btn btn-danger btn-block"
              onclick="EliArchivoUsuario('<?php echo $archivo;?>','<?php echo $login;?>')">Eliminar</button>
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
