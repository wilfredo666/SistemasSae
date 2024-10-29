<?php
//ejecutando una salida en excel
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename = ReportesSaeBaseScz.xls");

require_once "../../controlador/basesczControlador.php";
require_once "../../modelo/basesczModelo.php";

// Verificar si llegaron opciones seleccionadas (entrada string)
if (isset($_GET["opciones"])) {
  // Obtener las opciones seleccionadas
  $opcionesSeleccionadas = $_GET["opciones"];
  $encabezados = $_GET["encabezado"];
  
} else {
  echo "No se han seleccionado opciones.";
}

//transformamos las opciones a array
$encabezados=explode(",",$encabezados );

?>



<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>

  <body>
    <table>
      <thead>
        <tr>
          <?php 
          foreach ($encabezados as $columna) {
            echo "<th>$columna</th>";
          }
          ?>
        </tr>
      </thead>
      <tbody>
        <?php
        $resultado=ControladorBaseVVI::ctrRepExcelBasesScz($opcionesSeleccionadas);
        foreach ($resultado as $fila) {
          echo "<tr>";
          foreach ($fila as $valor) {
            echo "<td>$valor</td>";
          }
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </body>

</html>
