<?php
require_once "../../../modelo/graficaModelo.php";
$respuesta = ModeloGrafica::mdlInfoGraficasMRBR();
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

const ctx = document.getElementById('report_tarjetas_mrbr1');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php echo $etiqueta1;?>],
        datasets: [
          {
            label: 'TARJETAS MRBR',
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

const ctx2 = document.getElementById('report_tarjetas_mrbr2');
new Chart(ctx2, {
    type: 'bar',
    data: {
    labels: [<?php echo $etiqueta1;?>],
        datasets: [{
            label: 'TARJETAS MRBR',
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

const ctx2_1 = document.getElementById('report_tarjetas_mrbr3');
new Chart(ctx2_1, {
    type: 'doughnut',
    data: {
        labels: [<?php echo $etiqueta1;?>],
        datasets: [{
            label: 'TARJETAS MRBR',
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

const ctx2_2 = document.getElementById('report_tarjetas_mrbr4');
new Chart(ctx2_2, {
    type: 'pie',
    data: {
        labels: [<?php echo $etiqueta1;?>],
        datasets: [{
            label: 'TARJETAS MRBR',
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