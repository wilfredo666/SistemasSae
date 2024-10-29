<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header pb-0">
    <div class="container-fluid">
      <div class="row mb-2" style="display: flex; justify-content: space-between;">
        <div class="col-sm-6">
          <h3 class="m-0">Panel Control Herramientas Calibradas</h3>
        </div><!-- /.col -->
        <div class="col-sm-3">

        </div><!-- /.col -->
        <div class="col-sm-3">
          <h5>Filtrar por rango de fecha (M-D-Y)</h5>
        </div>

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="content">
    <div class="container-fluid">
      <form id="FormLogHerramientaSeleccionado" method="POST">
        <table id="DataTableControlHerramientas" class="table table-bordered table-striped">
          <thead>
            <div class="row">
              <div class="col-sm-6">
                <input type="button" class="btn btn-success mb-2" onclick="MCargarRegistrosControlHerramientas()" value="Importar Excel">
                <input type="button" class="btn btn-primary bg-dark ml-2 mr-2 mb-2" onclick="MDatosImpresion()" value="Imprimir Seleccionados">
                <input type="button" class="btn btn-primary bg-cyan ml-2 mr-2 mb-2" onclick="MMayorHerraCalibrada()" value="Seleccionar Tecnicos">
              </div>

              <div class="col-sm-2">

              </div>
              <div class="col-sm-1">

              </div>
              <!--seleccion de rango de fecha-->
              <div class="col-sm-3">
                <div class="form-group">

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <a href="VControlHerramientas" class="input-group-text">
                        <i class="fas fa-calendar-times"></i>
                      </a>
                    </div>
                    <input type="text" class="form-control float-right" id="reservation" name="reservation">
                    <div class="input-group-prepend">
                      <button class="btn btn-default btn-flat"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>

            </div>

            <tr>
              <th></th>
              <th style="width: 1%;">ITEM</th>
              <th>DESCRIPCION</th>
              <th>P/N</th>
              <th>S/N</th>
              <th>CODIGO</th>
              <th>UBICACION</th>
              <th style="width: 5%;" class="text-center">FECHA VENCIMIENTO</th>
              <th style="width: 5%;">DIAS ALERTA</th>
              <th style="width: 5%;">CANT.</th>
              <th style="width: 3%;">N° CARPETA</th>
              <td>
                <!-- <button class="btn btn-primary" onclick="MNuevoControlHerramientas()">Agregar</button> -->
                <input type="button" class="btn btn-primary" onclick="MNuevoControlHerramientas()" value="Agregar">
              </td>
            </tr>
          </thead>
          <tbody>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <?php
            if(isset($_POST["reservation"])){
              $rangoFecha=$_POST["reservation"];
              $controlherramienta = ControladorHerramientas::ctrInfoControlHerramientasFiltrado($rangoFecha);
              //var_dump($controlherramienta);
            }else{
              $controlherramienta = ControladorHerramientas::ctrInfoControlHerramientas();
            }
 
            $idHerra = 0;

            /* FECHA ACTUAL */
            date_default_timezone_set("America/La_Paz");
            $fecha1 = new DateTime($fecha = date("Y-m-d"));

            foreach ($controlherramienta as $value) {
              $idHerra = $idHerra + 1;

              $fecha2 = new DateTime($value["fechavenci_controlherramientas"]);
              $diferencia = $fecha1->diff($fecha2);
              $totalDias = $diferencia->days * ($diferencia->invert ? -1 : 1);
            ?>
            <tr>

              <td>
                <input type="checkbox" id="inlineCheckbox4" name="idclase[]" value="<?php echo $value["id_controlherramientas"] ?>">
                <!-- <input type="hidden" id="inlineCheckbox4" name="idclase[]" value="<?php echo $value["id_controlherramientas"] ?>"> -->
              </td>

              <td><?php echo $value["id_controlherramientas"]; ?></td>
              <td><?php echo $value["descripcion_controlherramientas"]; ?></td>
              <td><?php echo $value["pn_controlherramientas"]; ?></td>
              <td><?php echo $value["numserie_controlherramientas"]; ?></td>
              <td><?php echo $value["codigo_controlherramientas"]; ?></td>
              <td><?php echo $value["ubicacion_controlherramientas"]; ?></td>


              <?php
              if ($totalDias <= 10 and $totalDias >= 1) {
              ?>
              <td class="bg-warning"><?php echo $value["fechavenci_controlherramientas"]; ?></td>
              <script>
                function MEnviarEmail() {
                  /* console.log('enviado....'); */
                  var obj = "";
                  $.ajax({
                    type: "POST",
                    url: "vista/controlherramientas/EnvioCorreo.php",
                    data: obj,
                    success: function(data) {}
                  })
                }
                MEnviarEmail();
              </script>
              <?php

              } elseif ($totalDias < 1) {
              ?>
              <td class="bg-danger"><?php echo $value["fechavenci_controlherramientas"]; ?></td>
              <?php
              } else {
              ?>
              <td><?php echo $value["fechavenci_controlherramientas"]; ?></td>
              <?php
              }
              ?>

              <?php

              if ($totalDias <= 10 and $totalDias >= 1) {
              ?>
              <td class="bg-warning"><?php echo $totalDias; ?></td>
              <?php
              } elseif ($totalDias < 1) {
              ?>
              <td class="bg-danger"><?php echo $totalDias; ?></td>
              <?php
              } else {
              ?>
              <td><?php echo $totalDias; ?></td>
              <?php
              }
              ?>

              <td><?php echo $value["cantidad_controlherramientas"]; ?></td>
              <td><?php echo $value["numcarpeta_controlherramientas"] ?></td>
              <td>
                <div class="btn-group">
                  <a class="btn btn-sm btn-secondary" onclick="MVerControlHerramienta(<?php echo $value['id_controlherramientas']; ?>)"><i class="fas fa-eye"></i></a>

                  <a class="btn btn-sm btn-warning" onclick="MEditarControlHerramienta(<?php echo $value['id_controlherramientas']; ?>)"><i class="fas fa-edit"></i></a>

                  <a class="btn btn-sm btn-danger" onclick="MEliControlHerramienta(<?php echo $value['id_controlherramientas']; ?>)"><i class="fas fa-trash"></i></a>

                  <a class="btn btn-sm btn-success" href="vista/reportes/repPorHerramienta.php?id=<?php echo $value["id_controlherramientas"]; ?>" target="_blank"><i class="fas fa-print"></i></a>
                </div>
              </td>
            </tr>
            <?php
            }
            //destruyendo variables
            unset($_POST["reservation"]);
            ?>
            <!--  <button type="button" class="btn btn-primary bg-dark" onclick="impHerramientaSelec()">Enviar Selección</button> -->
            <!-- <button type="submit" class="btn btn-primary bg-dark" style="border: none;">Imprimir Selección</button> -->
          </tbody>
        </table>
      </form>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
