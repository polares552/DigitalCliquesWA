import Chart from 'chart.js';

var DADashboard = function () {

    var widgetClientsStatisticsChart = function () {

        if (!document.getElementById('da_chart_clients_statistics')) {
            return;
        }

        var MONTHS = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];

        var color = Chart.helpers.color;
        var barChartData = {
            labels: MONTHS,
            datasets: [{
                label: 'Aquisição mensal de clientes',
                backgroundColor: '#F4F5FF',
                borderWidth: 0,
                data: [10, 40, 20, 40, 40, 60, 40, 80, 40, 70, 40, 70],
                borderColor: '#5d78ff',
                borderWidth: 3,
                fill: true
            }]
        };

        var ctx = document.getElementById('da_chart_clients_statistics').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: barChartData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: false,
                scales: {
                    xAxes: [{
                        categoryPercentage: 0.35,
                        barPercentage: 0.70,
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: 'Month'
                        },
                        gridLines: false,
                        ticks: {
                            display: true,
                            beginAtZero: true,
                            fontColor: '#93a2dd',
                            fontSize: 13,
                            padding: 10
                        }
                    }],
                    yAxes: [{
                        categoryPercentage: 0.35,
                        barPercentage: 0.70,
                        display: true,
                        scaleLabel: {
                            display: false,
                            labelString: 'Value'
                        },
                        gridLines: {
                            color: '#e8ecfa',
                            drawBorder: false,
                            offsetGridLines: false,
                            drawTicks: false,
                            borderDash: [3, 4],
                            zeroLineWidth: 1,
                            zeroLineColor: '#e8ecfa',
                            zeroLineBorderDash: [3, 4]
                        },
                        ticks: {
                            max: 100,
                            stepSize: 20,
                            display: true,
                            beginAtZero: true,
                            fontColor: '#93a2dd',
                            fontSize: 13,
                            padding: 10
                        }
                    }]
                },
                title: {
                    display: false
                },
                hover: {
                    mode: 'index'
                },
                elements: {
                    line: {
                        tension: 0.5
                    },
                    point: {
                        radius: 0
                    }
                },
                tooltips: {
                    enabled: true,
                    intersect: false,
                    mode: 'nearest',
                    bodySpacing: 5,
                    yPadding: 10,
                    xPadding: 10,
                    caretPadding: 0,
                    displayColors: false,
                    backgroundColor: '#5d78ff',
                    titleFontColor: '#ffffff',
                    cornerRadius: 4,
                    footerSpacing: 0,
                    titleSpacing: 0
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 5,
                        bottom: 5
                    }
                }
            }
        });

    };

    return {
        init: function () {
            widgetClientsStatisticsChart();
        }
    };

}();

// Inicialização da classe
jQuery(document).ready(function () {
    DADashboard.init();
});
