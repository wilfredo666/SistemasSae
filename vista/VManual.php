<?php
$manual=ControladorManual::ctrInfoManuales();

// Determinar la plataforma (móvil o PC)
$plataforma = 'pc'; // Valor predeterminado: PC
if (isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od|s)|iris|kindle|lge |maemo|midp|mmp|mobile|opera m(ob|in)i|palm( os)?|phone|p(ixi|re|s|t|u)|symbian|treo|up.(browser|link)|vodafone|wap|windows ce|xda|xiino/i', $_SERVER['HTTP_USER_AGENT'])) {
  $plataforma = 'movil';
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
        <div class="card card-primary">
          <div class="page-description-actions">
          </div>
          <div class="card-header">
            <h3 class="card-title">Lista de Manuales</h3>
            <div class="card-tools">
              <button class="btn btn-success" onclick="MNuevoManual()">Agregar nuevo</button>
            </div>
          </div>

          <div class="card-body">
            <div class="row">
              <?php 
              foreach($manual as $value){
              ?>
              <div class="col-md-3">
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <a href="VArchivos?<?php echo $value["id_manual"];?>">
                        <img class="img-fluid" src="assest/dist/files/manual/manual-img-default.png"
                             style="width:100px;">
                      </a>
                    </div>
                    <h4 class="text-center"><?php echo $value["titulo_manual"];?></h4>
                    <hr>
                    <p class="text-center text-muted"><?php echo $value["descripcion_manual"];?></p>
                    <div class="text-center">

                      <?php if($plataforma=="pc"){
                      ?>
                      <a class="btn btn-info" href="vista/lectorManual.php?archivo=<?php echo $value["pdf"];?>" target="_blank"> <i class="fas fa-eye"></i></a>
                      <?php
              }else{
                      ?>
                      <a class="btn btn-info" href="vista/lectorArchivo.php?archivo=<?php echo $value["pdf"];?>&manual" target="_blank"> <i class="fas fa-eye"></i></a>
                      <?php
              }
                      ?>

                      <button class="btn btn-warning" onclick="MEditManual(<?php echo $value["id_manual"];?>)">
                        <i class="fas fa-edit"></i>
                      </button>

                      <button class="btn btn-danger" onclick="EliManual(<?php echo $value["id_manual"];?>)">
                        <i class="fas fa-trash"></i>
                      </button>

                    </div>

                  </div>
                </div>
              </div>
              <?php 
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

