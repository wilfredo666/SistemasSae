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
      <table id="DataTableOrdenDeTrabajo" class="table table-bordered table-striped">
        <thead>
          <a class="btn btn-success ml-2 mr-2 mb-2" href="vista/reportes/repSemanalOrdenDeTrabajo.php" target="_blank"><i class="fas fa-print">Imprimir</i></a>
          <tr>
            <th>ORDEN DE TRABAJO N°</th>
            <th>NOMBRE MATRICULA</th>
            <th>TH</th>
            <th>MODELO P/N</th>
            <th>S/N</th>
            <th>SOLICITADA POR</th>
            <th>NOMBRE AUTORIZADA</th>
            <td>
              <button class="btn btn-primary" onclick="MNuevoOrdenDeTrabajo()">Agregar</button>
            </td>
          </tr>
        </thead>
        <tbody>

          <?php
          $ordendetrabajo = ControladorOrdenDeTrabajo::ctrInfoOrdenesDeTrabajos();
          foreach ($ordendetrabajo as $value) {
          ?>
          <tr>
            <td><?php echo $value["numero_ordendetrabajo"]; ?></td>
            <td><?php echo $value["nombrematricula_ordendetrabajo"]; ?></td>
            <td><?php echo $value["th_ordendetrabajo"]; ?></td>
            <td><?php echo $value["modelo_pn_ordendetrabajo"]; ?></td>
            <td><?php echo $value["sn_ordendetrabajo"]; ?></td>
            <td><?php echo $value["solicitadapor_ordendetrabajo"]; ?></td>      
            <td><?php echo $value["nombreautorizado_ordendetrabajo"]; ?></td>
            <td>
              <div class="btn-group">
                <button class="btn btn-secondary btn-sm" onclick="MVerOrdenDeTrabajo(<?php echo $value["id_ordendetrabajo"]; ?>)">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="btn btn-warning btn-sm" onclick="MEditarOrdenDeTrabajo(<?php echo $value["id_ordendetrabajo"]; ?>)">
                  <i class="fas fa-edit"></i>
                </button>
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <span href="" class="dropdown-item" onclick="MEliOrdenDeTrabajo(<?php echo $value["id_ordendetrabajo"]; ?>)" style="cursor:pointer;">Eliminar <i class="fas fa-trash"></i></span>
                  </li>
                  <?php
            //eliminando los espacios de la orden de trabajo
            $numOrdenTrabajo=str_replace(' ', '', $value["numero_ordendetrabajo"])
                  ?>
                  <li><span href="" class="dropdown-item" onclick="MSubirArchivos('<?php echo $numOrdenTrabajo;?>')" style="cursor:pointer;">Subir archivos <i class="fas fa-upload"></i></span></li>

                  <li><a href="VerArchivos?<?php echo $numOrdenTrabajo;?>" class="dropdown-item" style="cursor:pointer;">Ver archivos <i class="fas fa-eye"></i></a></li>

                  <li>
                    <a class="dropdown-item" href="vista/reportes/repOrdenTrabajo.php?id=<?php echo $value["id_ordendetrabajo"]; ?>" target="_blank">Imprimir <i class="fas fa-print"></i></a>
                  </li>

                </ul>

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