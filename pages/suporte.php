<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login::Ticket</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.2/dist/boxicons.js' rel='stylesheet'>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d0bfcad90a.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/suporte.css">



</head>

<body>
    <div class="container">

        <form action="suporte_validation.php" method="POST" class="shadow-sm p-3 mb-5 rounded">
            <div class="mt-3">

                <h6>DEIXE NÓS UMA MENSAGEM</h6>
                <div class="mt-5">
                    <label for="" class="form-label">Nome Funcionário</label>
                    <input type="text" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                    <label for="" class="form-label">Duvidas/Problemas</label>
                    <input type="text" name="" id="" class="form-control form-control-sm" placeholder="" aria-describedby="helpId">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <button class="btn-enviar mt-3" id="btn-enviar"><a href="register.php">Enviar</a></button>

                    <button class="btn-voltar mt-3" id="btn-voltar"><a href="register.php">Voltar</a></button>
                </div>
                <img src="../img/suporte.png" alt="" class="illustration-register">
            </div>
        </form>

    </div>

</html>