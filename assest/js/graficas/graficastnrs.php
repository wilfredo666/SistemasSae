<?php
require_once "../../../modelo/graficaModelo.php";
$respuesta = ModeloGrafica::mdlInfoGraficasTNRs();
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

const ctx5 = document.getElementById('reporte_tarjetas_tnrs1');
new Chart(ctx5, {
    type: 'bar',
    data: {
        labels: [<?php echo $etiqueta1;?>],
        datasets: [
          {
            label: 'TARJETAS TNRs',
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

const ctx6 = document.getElementById('reportes_tarjetas_tnr2');
new Chart(ctx6, {
    type: 'bar',
    data: {
    labels: [<?php echo $etiqueta1;?>],
        datasets: [{
            label: 'TARJETAS TNRs',
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

const ctx7 = document.getElementById('reportes_tarjetas_tnr3');
new Chart(ctx7, {
    type: 'doughnut',
    data: {
        labels: [<?php echo $etiqueta1;?>],
        datasets: [{
            label: 'TARJETAS TNRs',
            data: [<?php echo $valor1;?>],
            
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgb(29, 22, 178, 0.2)'
              ],
              borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(75, 192, 192)',
                'rgb(29, 22, 178)',
              ],
            borderWidth: 1
        }]
    }
});

const ctx8 = document.getElementById('reportes_tarjetas_tnr4');
new Chart(ctx8, {
    type: 'pie',
    data: {
        labels: [<?php echo $etiqueta1;?>],
        datasets: [{
            label: 'TARJETAS TNRs',
            data: [<?php echo $valor1;?>],
            
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 159, 64, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgb(29, 22, 178, 0.2)'
            ],
            borderColor: [
              'rgb(255, 99, 132)',
              'rgb(255, 159, 64)',
              'rgb(54, 162, 235)',
              'rgb(153, 102, 255)',
              'rgb(75, 192, 192)',
              'rgb(29, 22, 178)',
            ],

            borderWidth: 1
        }]
    }
});

