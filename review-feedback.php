<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donut Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            background-color: white;
        }

        th {
            font-size: 30px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        .chart-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th></th>
        <th>5</th>
        <th>4</th>
        <th>3</th>
        <th>2</th>
        <th>1</th>
    </tr>
    <tr>
        <th>I. Usability</th>
        <td>
            <div class="chart-container"><canvas id="usabilityChart1"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="usabilityChart2"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="usabilityChart3"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="usabilityChart4"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="usabilityChart5"></canvas></div>
        </td>
    </tr>
    <tr>
        <th>II. Availability</th>
        <td>
            <div class="chart-container"><canvas id="availabilityChart1"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="availabilityChart2"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="availabilityChart3"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="availabilityChart4"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="availabilityChart5"></canvas></div>
        </td>
    </tr>
    <tr>
        <th>III. Functionality</th>
        <td>
            <div class="chart-container"><canvas id="functionalityChart1"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="functionalityChart2"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="functionalityChart3"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="functionalityChart4"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="functionalityChart5"></canvas></div>
        </td>
    </tr>
    <tr>
        <th>IV. Reliability</th>
        <td>
            <div class="chart-container"><canvas id="reliabilityChart1"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="reliabilityChart2"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="reliabilityChart3"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="reliabilityChart4"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="reliabilityChart5"></canvas></div>
        </td>
    </tr>
    <tr>
        <th>V. Portability</th>
        <td>
            <div class="chart-container"><canvas id="portabilityChart1"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="portabilityChart2"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="portabilityChart3"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="portabilityChart4"></canvas></div>
        </td>
        <td>
            <div class="chart-container"><canvas id="portabilityChart5"></canvas></div>
        </td>
    </tr>
</table>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var chartOptions = {
            responsive: true,
            cutoutPercentage: 80,
            legend: {
                display: false
            },
            tooltips: {
                enabled: false
            }
        };

        // Generate a random value for each chart
        function generateChartData() {
            return Math.floor(Math.random() * 100);
        }

        // Initialize the charts
        for (var chartIndex = 1; chartIndex <= 5; chartIndex++) {
            var chartData = {
                labels: [],
                datasets: [{
                    data: [generateChartData()],
                    backgroundColor: [
                        '#FFCE56',
                        '#FF9F40',
                        '#36A2EB',
                        '#FF6384',
                        '#4BC0C0'
                    ],
                    hoverBackgroundColor: [
                        '#FFCE56',
                        '#FF9F40',
                        '#36A2EB',
                        '#FF6384',
                        '#4BC0C0'
                    ]
                }]
            };

            new Chart(document.getElementById("usabilityChart" + chartIndex), {
                type: 'doughnut',
                data: chartData,
                options: chartOptions
            });
            new Chart(document.getElementById("availabilityChart" + chartIndex), {
                type: 'doughnut',
                data: chartData,
                options: chartOptions
            });
            new Chart(document.getElementById("functionalityChart" + chartIndex), {
                type: 'doughnut',
                data: chartData,
                options: chartOptions
            });
            new Chart(document.getElementById("reliabilityChart" + chartIndex), {
                type: 'doughnut',
                data: chartData,
                options: chartOptions
            });
            new Chart(document.getElementById("portabilityChart" + chartIndex), {
                type: 'doughnut',
                data: chartData,
                options: chartOptions
            });
        }
    });
</script>
</body>
</html>
