<?php
//capturamos la url y separamos el nombre del directorio
$path=parse_url($_SERVER['REQUEST_URI']);

//comprobamos si existe un path de carpeta en la url
if(isset($path["query"])){
  global $directorio;
  $directorio=$path["query"]; //donde directorio es la carpeta en la que se encuentra

  $ruta="assest/files/archivos/".$directorio;
}else{
  $directorio='';
  $ruta="assest/files/archivos/";
}
?>


<div class="content-wrapper">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">

      </div><!-- /.col -->
      <div class="col-sm-6">

      </div><!-- /.col -->
    </div><!-- /.row -->
    <div class="row">
      <div class="col-md-12">
        <div class="card card-info">
          <div class="page-description-actions">
          </div>
          <div class="card-header">
            <h3 class="card-title">Gestion de Archivos</h3>
            <div class="card-tools">
              <button class="btn btn-success" onclick="MNuevoCarpeta('<?php echo $directorio;?>')">Crear Carpeta</button>
            </div>
          </div>

          <div class="card-body">
            <div class="row">
              <?php

              mostrar_archivos($ruta);

              function mostrar_archivos($ruta){
              ?>
              <!-- inicio-->
              <div class="col-md-3">
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <a href="VArchivos">
                        <img class="img-fluid" src="assest/dist/img/folder.png"
                             alt="User profile picture" style="width:100px;">
                      </a>
                    </div>
                    <h3 class="profile-username text-center">Inicio</h3>
                    <div style="margin:11px"><br></div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <a href="javascript:history.back()">
                        <img class="img-fluid" src="assest/dist/img/back_folder.png"
                             alt="User profile picture" style="width:100px;">
                      </a>
                    </div>
                    <h3 class="profile-username text-center">Atras</h3>
                    <div style="margin:11px"><br></div>
                  </div>
                </div>
              </div>
              <?php

                //recuperamos el directorio anterior
                global $directorio;
                $dirSuperior=$directorio."/";

                //comprobar si es un directorio
                if(is_dir($ruta)){
                  //abrir el directorio
                  $gestor=opendir($ruta);

                  while(($archivo=readdir($gestor))!=false){

                    if($archivo!=".." and $archivo!="."){
                      $divArchivo=explode(".",$archivo);
                      if(count($divArchivo)<2){
              ?>
              <div class="col-md-3">
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <a href="VArchivos?<?php echo $dirSuperior.$archivo;?>">
                        <img class="img-fluid" src="assest/dist/img/folder_default.png"
                             alt="User profile picture" style="width:100px;">
                      </a>
                    </div>
                    <h3 class="profile-username text-center"><?php echo $archivo;?></h3>
                    <div class="text-center">
                      <button class="btn btn-success" onclick="MSubirArchivos('<?php echo $ruta."-".$archivo;?>')">
                        <i class="fas fa-upload"></i>
                      </button>
                      <button class="btn btn-danger" onclick="eliminarCarpeta('<?php echo $ruta."-".$archivo;?>')">
                        <i class="fas fa-trash"></i>
                      </button>
                      <input type="hidden" value="" id="manualPdf">

                    </div>

                  </div>
                </div>
              </div>
              <?php
                      }else{
              ?>
              <div class="col-md-3">
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <a href="">
                        <?php
                        // Obtén la extensión del archivo
                        $extension = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

                        // Condicional para verificar si es un archivo PDF
                        if ($extension === 'pdf') {
                        ?>
                        <img class="img-fluid" src="assest/dist/img/document.png"
                             alt="User profile picture" style="width:100px;">
                        <?php
                        }else{
                        ?>
                        <img class="img-fluid" src="assest/dist/img/files_icon.png"
                             alt="User profile picture" style="width:100px;">
                        <?php   
                        }
                        ?>
                      </a>
                    </div>
                    <h3 class="profile-username text-center"><?php echo $archivo;?></h3>
                    <div class="text-center">
                      <?php
                        // Obtén la extensión del archivo
                        $extension = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

                        // Condicional para verificar si es un archivo PDF
                        if ($extension === 'pdf') {
                      ?>
                      <a class="btn btn-info" href="lectorArchivos.php?ruta=<?php echo $ruta;?>&archivo=<?php echo $archivo;?>" target="_blank">
                        <i class="fas fa-eye"></i>
                      </a>
                      <?php
                        } else {
                      ?>
                      <a class="btn btn-default" href="vista/descargar.php?ruta=<?php echo $ruta;?>&archivo=<?php echo $archivo;?>">
                        <i class="fas fa-download"></i>
                      </a>
                      <?php
                        }

                      ?>

                      <button class="btn btn-danger" onclick="eliminarArchivo('<?php echo $ruta."@@".$archivo;?>')">
                        <i class="fas fa-trash"></i>
                      </button>
                      <input type="hidden" value="" id="manualPdf">

                    </div>

                  </div>
                </div>
              </div>
              <?php
                      }

              ?>


              <?php
                    }
                  }
                }
              }

              ?>
              <!-- fin-->

            </div>

          </div>
        </div>

      </div>
      <div class="card-footer clearfix">

      </div>
    </div>

  </div>
</div>

