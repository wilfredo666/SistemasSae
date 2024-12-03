<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header pb-0">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-5">
          <h3 class="m-0">Prestamos a externos</h3>
        </div>
        <div class="col-sm-7" style="text-align:right;">
          
        </div>

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <div class="containter row">
      <div class="col-sm-5">

      </div><!-- /.col -->
      <div class="col-sm-7 row">
        <form id="ReportePresTecnico">
          <div class="form-group col-sm-12">
            <div class="input-group mb-0">
            </div>
          </div>
        </form>
      </div><!-- /.col -->
    </div>

  </div>
  <div class="content">
    <div class="container-fluid">
     
      <table id="DataTableHerramientas" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Usuario</th>
            <th>Persona externa</th>
            <th>Empresa</th>
            <th>Fecha y hora</th>
            <th>Estado</th>
            <th>
             <a class="btn btn-primary" href="FNuevoPrestamoExt">Nuevo</a>
            </th>

          </tr>
        </thead>
        <tbody>

          <?php
          $usuario=ControladorHerramientas::ctrInfoPrestamosExternos();
          foreach($usuario as $value){
          ?>
          <tr>
            <td><?php echo $value["nombre_usuario"];?></td>
            <td><?php echo $value["nombre_empleado"];?></td>
            <td><?php echo $value["nombre_empresa"];?></td>
            <td><?php echo $value["fecha_prestamo"];?></td>
            <td><?php if($value["estado_prestamo"]==1){
              ?>
              <span class="badge badge-success">Vigente</span>
              <?php
          }else{
              ?>
              <span class="badge badge-danger">Finalizado</span>
              <?php
          }?>
            </td>

            <td>
              <div class="btn-group">
                <button class="btn btn-secondary btn-sm" onclick="MVerPrestamoExt(<?php echo $value["id_prestamos_ext"];?>)">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="btn btn-danger btn-sm" onclick="MEliPrestamoExt(<?php echo $value["id_prestamos_ext"];?>)">
                  <i class="fas fa-trash"></i>
                </button>
                <a id="#" class="btn btn-success btn-sm" href="vista/herramientas/ImpReportePrestamoExt.php?idPE=<?php echo $value["id_prestamos_ext"];?>" target="_blank"><i class="fas fa-print"></i></a>
              </div>
            </td>
          </tr>

          <?php 
          }
          ?>

        </tbody>

      </table>
    
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
