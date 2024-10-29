$(function () {
    'use strict'
  
    var ticksStyle = {
      fontColor: '#495057',
      fontStyle: 'bold'
    }
  
    var mode = 'index'
    var intersect = true
  
    var $salesChart = $('#report_tarjetas_mrbr1')
    // eslint-disable-next-line no-unused-vars
    var salesChart = new Chart($salesChart, {
      type: 'bar',
      data: {
        labels: [<?php echo $etiqueta1;?>],
        datasets: [
          {
            backgroundColor: '#007bff',
            borderColor: '#007bff',
            data: [<?php echo $valor1;?>]
          }
        ]
      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          mode: mode,
          intersect: intersect
        },
        hover: {
          mode: mode,
          intersect: intersect
        },
        legend: {
          display: false
        },
        scales: {
          yAxes: [{
            // display: false,
            gridLines: {
              display: true,
              lineWidth: '4px',
              color: 'rgba(0, 0, 0, .2)',
              zeroLineColor: 'transparent'
            },
            ticks: $.extend({
              beginAtZero: true,
  
              // Include a dollar sign in the ticks
              callback: function (value) {
                if (value >= 1000) {
                  value /= 1000
                  value += 'k'
                }
  
                return  value
              }
            }, ticksStyle)
          }],
          xAxes: [{
            display: true,
            gridLines: {
              display: false
            },
            ticks: ticksStyle
          }]
        }
      }
    })
    
  })
const ctx = document.getElementById('report_tarjetas_mrbr1');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['TERMINADO', 'PARA INSPECCIÓN', 'PARA CIERRE DE AREA', 'POR INSTALACIÓN', 'EN PROCESO'],
        datasets: [{
            label: 'Reportes Tarjetas MRBR 21',
            data: [12, 1, 4, 1, 3],
            borderWidth: 1
        }]
    }
});

const ctx2 = document.getElementById('report_tarjetas_mrbr2');
new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['TERMINADO', 'PARA INSPECCIÓN', 'PARA CIERRE DE AREA', 'POR INSTALACIÓN', 'EN PROCESO'],
        datasets: [{
            label: 'Reportes Tarjetas MRBR 21',
            data: [12, 1, 4, 1, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1
        }]
    }
});

const ctx2_1 = document.getElementById('report_tarjetas_mrbr3');
new Chart(ctx2_1, {
    type: 'doughnut',
    data: {
        labels: ['TERMINADO', 'PARA INSPECCIÓN', 'PARA CIERRE DE AREA', 'POR INSTALACIÓN', 'EN PROCESO'],
        datasets: [{
            label: 'Reportes Tarjetas MRBR 21',
            data: [12, 1, 4, 1, 3],
            borderWidth: 1
        }]
    }
});