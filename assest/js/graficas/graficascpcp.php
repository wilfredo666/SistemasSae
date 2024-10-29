<?php
require_once "../../../modelo/graficaModelo.php";
$respuesta = ModeloGrafica::mdlInfoGraficasCPCP();
$etiqueta1='';
$valor1='';
foreach($respuesta as $elemento){
    $etiqueta1.="'".$elemento['estados_seguimiento']."',";
    $valor1.=$elemento['total'].",";
}
if($etiqueta1!=''){
    $etiqueta1=substr($etiqueta1,0,-1);
    $valor1=substr($valor1,0,-1);
}
?>

/* global Chart:false */

const ctx3 = document.getElementById('reporte_tarjetas_cpcp1');
new Chart(ctx3, {
    type: 'bar',
    data: {
        labels: [<?php echo $etiqueta1;?>],
        datasets: [
          {
            label: 'TARJETAS CPCP',
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(75, 192, 192, 0.2)'
              ],
              borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(75, 192, 192)'
              ],
            data: [<?php echo $valor1;?>]
          }
        ]
      },
});

const ctx4 = document.getElementById('report_tarjetas_cpcp2');
new Chart(ctx4, {
    type: 'bar',
    data: {
    labels: [<?php echo $etiqueta1;?>],
        datasets: [{
            label: 'TARJETAS CPCP',
            data: [<?php echo $valor1;?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(75, 192, 192, 0.2)'
              ],
              borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(75, 192, 192)'
              ],
            borderWidth: 1
        }]
    }
});

const ctx4_1 = document.getElementById('report_tarjetas_cpcp3');
new Chart(ctx4_1, {
    type: 'doughnut',
    data: {
        labels: [<?php echo $etiqueta1;?>],
        datasets: [{
            label: 'TARJETAS CPCP',
            data: [<?php echo $valor1;?>],
            
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(75, 192, 192, 0.2)'
              ],
              borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(75, 192, 192)'
              ],
            borderWidth: 1
        }]
    }
});


const ctx4_2 = document.getElementById('report_tarjetas_cpcp4');
new Chart(ctx4_2, {
    type: 'pie',
    data: {
        labels: [<?php echo $etiqueta1;?>],
        datasets: [{
            label: 'TARJETAS CPCP',
            data: [<?php echo $valor1;?>],
            
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(75, 192, 192, 0.2)'
              ],
              borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(75, 192, 192)'
              ],

            borderWidth: 1
        }]
    }
});

const ctx4_3 = document.getElementById('report_tarjetas_cpcp5');
new Chart(ctx4_3, {
    type: 'pie',
    data: {
        labels: [<?php echo $etiqueta1;?>],
        datasets: [{
            label: 'TARJETAS CPCP',
            data: [<?php echo $valor1;?>],
            
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(75, 192, 192, 0.2)'
              ],
              borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(75, 192, 192)'
              ],

            borderWidth: 1
        }]
    }
});

