<?php session_start();?>

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

    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/buttons.css">



</head>

<body>
    <div class="container">
        <img src="../img/il-login.png" alt="" class="illustration-login">
        <form action="login_validation.php" method="POST" class="shadow-sm p-3 mb-5 rounded">
            <div class="mb-3 tsl">
                <p><i class="fa-solid fa-ticket"></i></p>
                <p>MONDELLY TICKET</p>
            </div>
            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <br>
                <input type="email" placeholder="Ex: me@gmail.com" name="email">
                <br>
                <br>
                <label class="form-label">Password</label>
                <br>
                <input type="password" placeholder="********" name="password">
                <br>
                <br>
                <input type="checkbox" value="" id="checkbox">
                <label class="checkbox-text">
                    Remember-me
                </label>
                <br>
                <input type="submit" value="Login" class="mt-3" name="login" id="login">
                <br>
                <button class="btn-register mt-3" id="btn-register"><a href="register.php">Register</a></button>
            </div>
        </form>
    </div>
</body>

</html>