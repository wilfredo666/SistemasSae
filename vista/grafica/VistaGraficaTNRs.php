<?php
require_once "../../modelo/graficaModelo.php";
$respuesta = ModeloGrafica::mdlTNRs();
$totalTNRs = '';
if (count($respuesta)) {
  $totalTNRs = $respuesta[0]['total'];
}
?>
<div class="modal-header bg-danger">
  <h4 class="modal-title text-light">Grafica Tarjetas Extendida</h4>
  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
     </button>
</div>
<div class="modal-body">
  <div class="card">
    <div class="card-header border-0">
      <div class="d-flex justify-content-between">
        <h3 class="card-title">Reportes Tarjetas TNRs <?php echo $totalTNRs; ?></h3>
      </div>
    </div>
    <div class="card-body">
      <div class="d-flex">
        <p class="d-flex flex-column">

        </p>
      </div>
      <!-- /.d-flex -->
      <div class="position-relative mb-4">
        <canvas id="sales-charttnrs" height="200"></canvas>
      </div>
    </div>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
</div>

<script src="../../assest/js/graficas/graficascpcp.php"></script>