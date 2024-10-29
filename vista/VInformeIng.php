<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">List of Reports</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <table id="DataTableInforme" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 10%;">Report Date</th>
                        <th style="width: 10%;">Nro Report</th>
                        <th style="width: 15%;">From:</th>
                        <th style="width: 15%;">To:</th>
                        <th style="width: 20%;">Affair</th>
                        <th style="width: 20%;">In charge</th>
                        <th style="width: 60%;">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $info = ControladorHerramientas::ctrInfoHerramienta();

                    foreach ($info as $value) {
                    ?>
                    <tr>
                        <td><?php echo $value["fecha_informe"]; ?></td>
                        <td><?php echo $value["num_informe"]; ?></td>
                        <td><?php echo $value["de_informe"]; ?></td>
                        <td><?php echo $value["a_informe"]; ?></td>
                        <td><?php echo $value['asunto_informe'];?></td>
                        <td><?php echo $value['encargado_informe'];?></td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-secondary" onclick="MVerInforme(<?php echo $value['id_informe']; ?>)">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <a class="btn btn-primary" href="vista/reportes/repHerramientaSelecSinFirmaIng.php?id=<?php echo $value["id_informe"]; ?>" target="_blank"><i class="fas fa-print"></i></a>
                                <a class="btn btn-success" href="vista/reportes/repHerramientaSelecIng.php?id=<?php echo $value["id_informe"]; ?>" target="_blank"><i class="fas fa-print"></i></a>
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

</div>

