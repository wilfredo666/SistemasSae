<!-- Main Footer -->
<footer class="main-footer">
  <!-- To the right -->
  <div class="float-right d-none d-sm-inline">
    Luis Ponce Rodriguez
  </div>
  <!-- Default to the left -->
  <strong>Copyright &copy; 2023 <a href="https://sae.aero">SAE</a>.</strong> Derechos Reservados
</footer>
</div>

<!-- jQuery -->
<script src="assest/plugins/jquery/jquery.min.js"></script>
<!--<script src="assest/plugins/chart.js/Chart.min.js"></script>-->
<script src="assest/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- ChartJS -->
<script src="assest/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE App -->
<script src="assest/dist/js/adminlte.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="assest/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assest/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assest/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assest/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assest/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assest/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assest/plugins/jszip/jszip.min.js"></script>
<script src="assest/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assest/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assest/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assest/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assest/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Select2 -->
<script src="assest/plugins/select2/js/select2.full.min.js"></script>

<!-- BS Strrepper -->
<script src="assest/plugins/bs-stepper/js/bs-stepper.js"></script>
<!-- dropzonejs -->
<script src="assest/plugins/dropzone/min/dropzone.min.js"></script>
<!-- SweetAlert2 -->
<script src="assest/plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- daterangepicker -->
<script src="assest/plugins/moment/moment.min.js"></script>
<script src="assest/plugins/daterangepicker/daterangepicker.js"></script>


<script src="assest/js/usuario.js"></script>
<script src="assest/js/cliente.js"></script>
<script src="assest/js/seguimiento.js"></script>
<script src="assest/js/controltramite.js"></script>
<script src="assest/js/autorizacion.js"></script>
<script src="assest/js/carpeta.js"></script>
<script src="assest/js/material.js"></script>
<script src="assest/js/controlherramientas.js"></script>
<script src="assest/js/calibracion.js"></script>
<script src="assest/js/dbaja.js"></script>
<script src="assest/js/herramientas.js"></script>
<script src="assest/js/logherramientas.js"></script>
<script src="assest/js/servicios.js"></script>
<script src="assest/js/ordenesdetrabajo.js"></script>
<!--<script src="assest/js/informes.js"></script>-->
<script src="assest/js/rab.js"></script>
<script src="assest/js/baselpz.js"></script>
<script src="assest/js/basescz.js"></script>
<script src="assest/js/inventario.js"></script>
<script src="assest/js/graficaopen.js"></script>
<!--<script src="assest/js/graficas/graficas.php"></script>
<script src="assest/js/graficas/graficascpcp.php"></script>
<script src="assest/js/graficas/graficastnrs.php"></script>-->
<!--
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
-->

<!--====================
Seccion  de Modals
===================-->
<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" id="content-lg">


    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-xl">
  <div class="modal-dialog modal-dialog-scrollable modal-xl">
    <div class="modal-content" id="content-xl">

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-fullscreen">
  <div class="modal-dialog modal-fullscreen-xxl-down">
    <div class="modal-content" id="content-fullscreen">

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!--modal pequeño-->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content" id="content-modal-default">

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!--modal small-->
<div class="modal fade" id="modal-sm">
  <div class="modal-dialog modal-sm">
    <div class="modal-content" id="modal-content-sm">

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-graficas">
  <div class="modal-dialog modal-dialog-scrollable modal-xl">
    <div class="modal-content" id="contenedor-chart">

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
  $(function() {
    $("#DataTableUsuario").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableUsuario_wrapper .col-md-6:eq(0)');

  });

  $(function() {
    $("#DataTablePanelAdmin").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "lengthMenu": -1,
      "buttons": ["excel", "colvis"]
    }).buttons().container().appendTo('#DataTablePanelAdmin_wrapper .col-md-6:eq(0)');

  });

  $(function() {
    $("#DataTableSeguimiento").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableSeguimiento_wrapper .col-md-6:eq(0)');

  });

  $(function() {
    $("#DataTableMateriales").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableMateriales_wrapper .col-md-6:eq(0)');

  });

  $(function() {
    $("#DataTableMarcacion").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableMarcacion_wrapper .col-md-6:eq(0)');

  });

  $(function() {
    $('#DTableVitacora').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    });
  });

  $(function() {
    $("#DataTableArchivos").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableArchivos_wrapper .col-md-6:eq(0)');

  });

  $(function() {
    $("#DataTableServicio").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableServicio_wrapper .col-md-6:eq(0)');

  });

  $(function() {
    $("#DataTableHoras").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableHoras_wrapper .col-md-6:eq(0)');

  });

  $(function() {
    $("#DataTableControlHerramientas").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#DataTableControlHerramientas_wrapper .col-md-6:eq(0)');

  });

  $(function() {
    $("#DataTableCalibracion").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#DataTableCalibracion_wrapper .col-md-6:eq(0)');

  });

  $(function() {
    $("#DataTableDBaja").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#DataTableDBaja_wrapper .col-md-6:eq(0)');

  });

  $(function() {
    $("#DataTableHerramientas").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#DataTableHerramientas_wrapper .col-md-6:eq(0)');

  });

  $(function() {
    $("#DataTableLogHerramientas").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#DataTableLogHerramientas_wrapper .col-md-6:eq(0)');

  });

  $(function() {
    $("#DataTableOrdenDeTrabajo").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableOrdenDeTrabajo_wrapper .col-md-6:eq(0)');
  });

  $(function() {
    $("#DataTableInventario").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableInventario_wrapper .col-md-6:eq(0)');
  });

  $(function() {
    $("#DataTableRab").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableRab_wrapper .col-md-6:eq(0)');
  });

  $(function() {
    $("#DataTableBaseLpz").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableBaseLpz_wrapper .col-md-6:eq(0)');
  });

  $(function() {
    $("#DataTableBaseScz").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#DataTableBaseScz_wrapper .col-md-6:eq(0)');
  });

  $(function() {
    $("#DataTableCPCP").DataTable({
      language: {
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "No se encontraron resultados",
        "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sSearch": "Buscar:",
        "oPaginate": {
          "sFirst": "Primero",
          "sLast": "Último",
          "sNext": "Siguiente",
          "sPrevious": "Anterior"
        },
        "sProcessing": "Procesando...",
      },
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#DataTableCPCP_wrapper .col-md-6:eq(0)');
  });

  $(function() {
    $("#DataTableMRBR").DataTable({
      language: {
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "No se encontraron resultados",
        "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sSearch": "Buscar:",
        "oPaginate": {
          "sFirst": "Primero",
          "sLast": "Último",
          "sNext": "Siguiente",
          "sPrevious": "Anterior"
        },
        "sProcessing": "Procesando...",
      },
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["excel", "pdf", "print"]
    }).buttons().container().appendTo('#DataTableMRBR_wrapper .col-md-6:eq(0)');
  });

  $('.select2bs4').select2({
    theme: 'bootstrap4'
  })

  $('.select2Usu').select2({
    theme: 'bootstrap4'
  })

/*  $(function () {
    //Date picker
    $('#reservationdate').datetimepicker({
      format: 'L'
    });
  })*/
      //Date range picker
    $('#reservation').daterangepicker()
</script>

<!-- jquery-validation -->
<script src="assest/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="assest/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="assest/plugins/jquery-validation/localization/messages_es.js"></script>


</body>

</html>