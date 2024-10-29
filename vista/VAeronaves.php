<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Lista de Aeronaves</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="DataTableAeronaves" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Empresa(s)</th>
                            <th>Matricula</th>
                            <td>
                                <button class="btn btn-primary" onclick="MNuevoAeronaves()">Agregar</button>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $aeronave = ControladorAeronave::ctrInfoAeronaves();

                        foreach ($aeronave as $value) {
                        ?>
                        <tr>

                            <td><?php echo $value["id_aeronave"]; ?></td>
                            <td><?php echo $value["empresa_aeronave"]; ?></td>
                            <td><?php echo $value["matricula_aeronave"]; ?></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-warning" onclick="MEditarAeronaves(<?php echo $value["id_aeronave"];?>)">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-danger" onclick="MEliAeronaves(<?php echo $value["id_aeronave"]; ?>)">
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
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
