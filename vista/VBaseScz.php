  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">

          </div><!-- /.container-fluid -->
      </div>

      <div class="content">
          <div class="container-fluid">
              <div class="card">
                  <div class="card-header">
                      <h3 class="m-0">Panel Base Santa Cruz</h3>
                  </div>
                  <div class="card-body">
                      <button class="btn btn-outline-primary ml-2 mr-2 mb-2" onclick="MNuevoBaseScz()"><i class="fas fa-save"> Registrar</i></button>
                      <button class="btn btn-outline-success ml-2 mr-2 mb-2" onclick="RepExcelScz()"><i class="fas fa-file-excel"> Exportar Excel</i></button>
                      <a class="btn btn-outline-info ml-2 mr-2 mb-2" href="vista/reportes/exportarbasescz.php" target="_blank"><i class="fas fa-print">Exportar Todo</i></a>
                      <table id="DataTableBaseScz" class="table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <th>FECHA DEL VUELO</th>
                                  <th>EXPLOTADOR</th>
                                  <th>ARRIBÓ REAL</th>
                                  <th>SALIDA REAL</th>
                                  <th>CONDICIÓN</th>
                                  <th>OT SAE</th>
                                  <th style="width: 9%;">ACCIONES</th>
                              </tr>
                          </thead>
                          <tbody>

                              <?php
                                $basescz = ControladorBaseVVI::ctrInfoBasesVVI();
                                foreach ($basescz as $value) {
                                ?>
                                  <tr>
                                      <td><?php echo $value["fech_vuelo_basescz"]; ?></td>
                                      <td><?php echo $value["explotador_basescz"]; ?></td>
                                      <td><?php echo $value["arriba_real_basescz"]; ?></td>
                                      <td><?php echo $value["salida_real_basescz"]; ?></td>
                                      <td><?php echo $value["condicion_basescz"]; ?></td>
                                      <td><?php echo $value["ot_sae_basescz"]; ?></td>
                                      <td>
                                          <div class="btn-group ">
                                              <button class="btn btn-secondary btn-sm" onclick="MVerBaseScz(<?php echo $value["id_basescz"]; ?>)">
                                                  <i class="fas fa-eye"></i>
                                              </button>
                                              <button class="btn btn-warning btn-sm" onclick="MEditarBaseScz(<?php echo $value["id_basescz"]; ?>)">
                                                  <i class="fas fa-edit"></i>
                                              </button>
                                              <button class="btn btn-danger btn-sm" onclick="MEliBaseScz(<?php echo $value["id_basescz"]; ?>)">
                                                  <i class="fas fa-trash"></i>
                                              </button>
                                              <a class="btn btn-sm btn-success" href="vista/reportes/repOrdenTrabajo.php?id=<?php echo $value["id_basescz"]; ?>" target="_blank"><i class="fas fa-file-excel"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                              <?php
                                }
                                ?>
                          </tbody>

                      </table>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->