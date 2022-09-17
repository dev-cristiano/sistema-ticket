<?php
session_start();
include('connetion.php');
?>
<!-- Head -->
<?php include('head.php') ?>
<!-- Head Fim-->

<body>
    <div class="container-fluid">
        <!-- Menu Navegação -->
        <?php include('navbar.php') ?>
        <!-- Menu Navegação Fim-->

        <div class="div-center">
            <p class="mt-3">Bem Vindo: <?php echo $_SESSION["username"]; ?></p>
        </div>
        <hr>
        <div class="div-center mt-3">

            <!-- CALENDAR -->
            <div class="row">
                <div class="col-lg-6 mt-3">

                </div>
                <div class="row">
                    <div class="col-lg-6 mt-3">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <canvas id="myChart"></canvas>
                </div>
                <!-- FINISH CALENDAR -->
            </div>
        </div>

        <script>
            const ctx = document.getElementById('myChart');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                    datasets: [{
                        label: '# Total de Tickets',
                        data: [12, 19, 3, 5, 2, 3, 20, 7, 13, 15, 1, 5],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
</body>

</html>