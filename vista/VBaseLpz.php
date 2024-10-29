  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">

          </div><!-- /.container-fluid -->
      </div>

      <div class="content-xl">
          <div class="container-fluid">
              <div class="card">
                  <div class="card-header">
                      <h3 class="m-0">Panel Base La Paz</h3>
                  </div>
                  <div class="card-body">
                      <button class="btn btn-outline-primary ml-2 mr-2 mb-2" onclick="MNuevoBaseLpz()"><i class="fas fa-save"> Registrar</i></button>
                      <button class="btn btn-outline-success ml-2 mr-2 mb-2" onclick="RepExcelLpz()"><i class="fas fa-file-excel"> Exportar Excel</i></button>
                      <a class="btn btn-outline-info ml-2 mr-2 mb-2" href="vista/reportes/exportarbaselpz.php" target="_blank"><i class="fas fa-print">Exportar Todo</i></a>
                      <table id="DataTableBaseLpz" class="table table-bordered table-striped">
                          <thead>

                              <th>FECHA DEL VUELO</th>
                              <th>EXPLOTADOR</th>
                              <th>ARRIBÓ REAL</th>
                              <th>SALIDA REAL</th>
                              <th>CONDICIÓN</th>
                              <th>OT SAE</th>
                              <th style="width: 9%;">ACCIONES</th>

                          </thead>
                          <tbody>

                              <?php
                                $baselpz = ControladorBaseLaPaz::ctrInfoBasesLapaz();
                                foreach ($baselpz as $value) {
                                ?>
                                  <tr>
                                      <td><?php echo $value["fech_vuelo_baselpz"]; ?></td>
                                      <td><?php echo $value["explotador_baselpz"]; ?></td>
                                      <td><?php echo $value["arriba_real_baselpz"]; ?></td>
                                      <td><?php echo $value["salida_real_baselpz"]; ?></td>
                                      <td><?php echo $value["condicion_baselpz"]; ?></td>
                                      <td><?php echo $value["ot_sae_baselpz"]; ?></td>
                                      <td>
                                          <div class="btn-group ">
                                              <button class="btn btn-secondary btn-sm" onclick="MVerBaseLpz(<?php echo $value["id_baselpz"]; ?>)">
                                                  <i class="fas fa-eye"></i>
                                              </button>
                                              <button class="btn btn-warning btn-sm" onclick="MEditarBaseLpz(<?php echo $value["id_baselpz"]; ?>)">
                                                  <i class="fas fa-edit"></i>
                                              </button>
                                              <button class="btn btn-danger btn-sm" onclick="MEliBaseLpz(<?php echo $value["id_baselpz"]; ?>)">
                                                  <i class="fas fa-trash"></i>
                                              </button>
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