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
                <h1 class="card-title">Log de Devolución Parcial o Total, de Herramientas</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="DataTableLogHerramienta" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Usuario Encargado Recepción</th>
                            <th>Nombre Tecnico</th>
                            <th>Fecha Hora | Devolución</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $logherramientas = ControladorLogHerramientas::ctrInfoLogDevolucion();

                        foreach ($logherramientas as $value) {
                            require_once "controlador/usuarioControlador.php";
                            require_once "modelo/usuarioModelo.php";
                            $usuario = ControladorUsuario::ctrInfoUsuario($value["usuario_recepciona"]);
                        ?>
                            <tr>
                                <td><?php echo $usuario["nombre_usuario"]; ?></td>
                                <td><?php echo $value["nombre_usuario"]; ?></td>
                                <td><?php echo $value["fecha_dev"]; ?></td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn-secondary" onclick="MVerLogDevolucion(<?php echo $value['id_log_dev']; ?>)">
                                            <i class="fas fa-eye"></i>
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