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
        <div class="div-center class=" mt-2">
            <div class="buttons-action mt-2">
                <a class="btn-voltar" name="voltar" href="grid_ticket.php"><i class="fa-solid fa-arrow-left"></i> Voltar</a>
                <a class="btn-incluir" name="incluir" href="#"><i class="fa-solid fa-check"></i> Incluir</a>
            </div>
        </div>

        <hr class="mt-2">
        <div class="div-center">
            <form action="">
                <div class="div-form col-sm-6 mt-5">
                    <div class="mb-3">
                        <label for="" class="form-label">Nome Cliente</label>
                        <input type="text" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Situação</label>
                        <input type="text" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="mb-3 col-sm-6">
                        <label for="" class="form-label">Data Inicio</label>
                        <input type="text" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="mb-3 col-sm-6">
                        <label for="" class="form-label">Data Fim</label>
                        <input type="text" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                    </div>
                </div>

                <!-- /.div-form -->
            </form>
        </div>

        <!-- Fim Form -->
    </div>
</body>

</html>