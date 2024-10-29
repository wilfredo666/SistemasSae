<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="m-0">Work Order Panel</h3>
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
          <a class="btn btn-success ml-2 mr-2 mb-2" href="vista/reportes/repSemanalOrdenDeTrabajo.php" target="_blank"><i class="fas fa-print"> Print</i></a>
          <tr>
            <th>WORK ORDER N°</th>
            <th>REGISTRATION NAME</th>
            <th>TH</th>
            <th>MODEL P/N</th>
            <th>S/N</th>
            <th>REQUESTED BY</th>
            <th>AUTHORIZED NAME</th>
            <td>
              <button class="btn btn-primary" onclick="MNuevoOrdenDeTrabajoIng()">ADD</button>
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
                <button class="btn btn-secondary btn-sm" onclick="MVerOrdenDeTrabajoIng(<?php echo $value["id_ordendetrabajo"]; ?>)">
                  <i class="fas fa-eye"></i>
                </button>
                <button class="btn btn-warning btn-sm" onclick="MEditarOrdenDeTrabajoIng(<?php echo $value["id_ordendetrabajo"]; ?>)">
                  <i class="fas fa-edit"></i>
                </button>
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <span href="" class="dropdown-item" onclick="MEliOrdenDeTrabajoIng(<?php echo $value["id_ordendetrabajo"]; ?>)" style="cursor:pointer;">Delete <i class="fas fa-trash"></i></span>
                  </li>
                  <?php
            //eliminando los espacios de la orden de trabajo
            $numOrdenTrabajo=str_replace(' ', '', $value["numero_ordendetrabajo"])
                  ?>
                  <li><span href="" class="dropdown-item" onclick="MSubirArchivos('<?php echo $numOrdenTrabajo;?>')" style="cursor:pointer;">Upload Files <i class="fas fa-upload"></i></span></li>

                  <li><a href="VerArchivos?<?php echo $numOrdenTrabajo;?>" class="dropdown-item" style="cursor:pointer;">View Files <i class="fas fa-eye"></i></a></li>

                  <li>
                    <a class="dropdown-item" href="vista/reportes/repOrdenTrabajoIng.php?id=<?php echo $value["id_ordendetrabajo"]; ?>" target="_blank">Print <i class="fas fa-print"></i></a>
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