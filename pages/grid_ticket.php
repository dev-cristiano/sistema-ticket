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

        <!-- Inicio Form -->
        <div class="div-center">
            <p class="mt-3">Bem Vindo: <?php echo $_SESSION["username"]; ?></p>
        </div>
        <hr class="mt-3">
        <div class="div-center mt-2">
            <div class="buttons-action mt-2">
                <a class="btn-novo" name="novo" href="form_ticket.php"><i class="fa-solid fa-plus"></i> Novo</a>
            </div>
        </div>

        <hr class="mt-2">

        <div class="div-center">
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col" class="table-title">#</th>
                        <th scope="col" class="table-title">Nr Ticket</th>
                        <th scope="col" class="table-title">Cliente</th>
                        <th scope="col" class="table-title">Situação</th>
                        <th scope="col" class="table-title">Data Inicio</th>
                        <th scope="col" class="table-title">Data Final</th>
                        <th scope="col" class="table-title">Ultimo Atend.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="table-sub"><a href="#"><i class="fa-solid fa-pen-to-square"></i></a></th>
                        <td class="table-sub">1</td>
                        <td class="table-sub">Cristiano</td>
                        <td class="table-sub">Pendente</td>
                        <td class="table-sub">13/09/2022</td>
                        <td class="table-sub">09/02/2023</td>
                        <td class="table-sub">13/09/2022 19:42</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Fim Form -->
</body>

</html>