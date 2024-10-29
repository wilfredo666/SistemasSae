  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header pb-0">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-5">
                      <h3 class="m-0">Report by Tools</h3>
                  </div><!-- /.col -->

              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
          <div class="containter row">
              <div class="col-sm-5">

              </div><!-- /.col -->
              <div class="col-sm-7 row">
                  <form id="ReporteDeHerramientas">
                      <div class="form-group col-sm-12">
                          <div class="input-group mb-0">
                              <div class="input group-prepend">
                                  <span class="input-group-text">By Location: </span>
                              </div>

                              <select class="form-control input-group-append" name="nomHerramienta" id="nomHerramienta">
                                  <option value="">-- Select --</option>
                                  <option value="Todos">A L L S</option>
                                  <?php
                                    $herra = ControladorHerramientas::ctrInfoControlHerramientasUbic();
                                    foreach ($herra as $value) {

                                        $ubicacionHerramienta = $value["ubicacion_controlherramientas"];
                                    ?>
                                      <option value="<?php echo $ubicacionHerramienta ?>"> <?php echo $ubicacionHerramienta ?> </option>
                                  <?php
                                    }
                                    ?>
                              </select>
                              <div class="input-group-append">
                                  <button type="button" class="btn btn-navbar bg-secondary" onclick="reporteHerramienta();">
                                      <i class="fas fa-search "></i>
                                  </button>
                              </div>
                              <a id="link" style="margin-left: 10px;" class="btn btn-success" href="" target="_blank"><i class="fas fa-print"> Print</i></a>
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
                          <th>ITEM</th>
                          <th>ESCRIPTIONS</th>
                          <th>PART NUMBER</th>
                          <th>SERIAL NUMBER</th>
                          <th>CODE</th>
                          <th>DATA CAL.</th>
                          <th>DATA VEN</th>
                          <th>UBICATION</th>
                          <th>FOLDER NUMBER</th>
                      </tr>
                  </thead>
                  <tbody id="repHerramientas">

                  </tbody>
              </table>
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>
      $('#nomHerramienta').on('change', function() {
          var valor_seleccionado = this.value;
          $("#link").attr("href", "vista/reportes/repHerramientasUbicacionIng.php?id=" + valor_seleccionado);
      })
  </script>