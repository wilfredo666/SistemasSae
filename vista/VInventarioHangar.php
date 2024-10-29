  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h3 class="m-0">Inventario de Equipos de Hangar</h3>
                  </div><!-- /.col -->
                  <div class="col-sm-6">

                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <div class="content">
          <div class="container-fluid">
              <table id="DataTableInventario" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                          <th>ITEM</th>
                          <th>DESCRIPCION</th>
                          <th>P/N</th>
                          <th>S/N-COD</th>
                          <th>UBICACION</th>
                          <th>CUSTODIA</th>
                          <th>FECHA DE INSP.</th>
                          <th>FECHA PROX. INSP.</th>
                          <th>DIAS ALERTA</th>
                          <th>TAREAS A REALIZAR</th>
                          <td>
                              <button class="btn btn-primary" onclick="MNuevoInventario()">Agregar</button>
                          </td>
                      </tr>
                  </thead>
                  <tbody>

                      <?php
                        $inventario = ControladorInventarios::ctrInfoInventarios();
                        foreach ($inventario as $value) {
                        ?>
                          <tr>
                              <td><?php echo $value["id_inventario"]; ?></td>
                              <td><?php echo $value["descripcion_inventario"]; ?></td>
                              <td><?php echo $value["pn_inventario"]; ?></td>
                              <td><?php echo $value["sn_cod_inventario"]; ?></td>
                              <td><?php echo $value["ubicacion_inventario"]; ?></td>
                              <td><?php echo $value["custodia_inventario"]; ?></td>
                              <td><?php echo $value["fecha_de_inspeccion_inventario"]; ?></td>
                              <td><?php echo $value["fecha_prox_inspeccion_inventario"]; ?></td>
                              <td><?php echo $value["dias_alerta_inventario"]; ?></td>
                              <td><?php echo $value["tareas_a_realizar"]; ?></td>
                              <td>
                                  <div class="btn-group">
                                      <button class="btn btn-secondary" onclick="MVerInventarios(<?php echo $value["id_inventario"]; ?>)">
                                          <i class="fas fa-eye"></i>
                                      </button>
                                      <button class="btn btn-warning" onclick="MEditarInventarios(<?php echo $value["id_inventario"]; ?>)">
                                          <i class="fas fa-edit"></i>
                                      </button>
                                      <button class="btn btn-danger" onclick="MEliInventarios(<?php echo $value["id_inventario"]; ?>)">
                                          <i class="fas fa-trash"></i>
                                      </button>
                                      <a class="btn btn-sm btn-success" href="vista/reportes/repPorCalibracion.php?id=<?php echo $value["id_inventario"]; ?>" target="_blank"><i class="fas fa-print"></i></a>
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