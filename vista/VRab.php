<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Panel Certificados RAB 001</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <table id="DataTableRab" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Numero Seguimiento</th>
                        <th>Orden de Trabajo</th>
                        <th>Descripción</th>
                        <th>Numero de Parte</th>
                        <th>Numero de Serie</th>
                        <th>Estado/Trabajo</th>
                        <td>
                            <button class="btn btn-primary" onclick="MNuevoRab()">Nuevo</button>
                        </td>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $rab = ControladorRab::ctrInfoRabs();

                    foreach ($rab as $value) {
                    ?>
                        <tr>
                            <td><?php echo $value["num_seguimiento_rab"]; ?></td>
                            <td><?php echo $value["orden_trabajo_rab"]; ?></td>
                            <td><?php echo $value["des_rab"]; ?></td>
                            <td><?php echo $value['num_parte_rab']; ?></td>
                            <td><?php echo $value["num_serie_rab"]; ?></td>
                            <td><?php echo $value["estado_trabajo_rab"]; ?></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-secondary" onclick="MVerRab(<?php echo $value["id_rab"]; ?>)">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-warning" onclick="MEditRab(<?php echo $value["id_rab"]; ?>)">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger" onclick="MEliRab(<?php echo $value["id_rab"]; ?>)">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <a class="btn btn-sm btn-success" href="vista/reportes/CertificadoRab.php?id=<?php echo $value["id_rab"]; ?>" target="_blank"><i class="fas fa-print"></i></a>
                                    <a class="btn btn-sm btn-info" href="vista/reportes/CertificadoRabCopy.php?id=<?php echo $value["id_rab"]; ?>" target="_blank"><i class="fas fa-print"></i></a>
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