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

    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="./css/buttons.css">



</head>

<body>
    <div class="container">
       
        <form action="register_validation.php" method="POST" class="shadow-sm p-3 mb-5 rounded">
            <div class="mb-3 tsl">
                <p><i class="fa-solid fa-ticket bx-tada"></i></p>
                <p>TICKET SERVICE REGISTER</p>
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <br>
                <input type="text" placeholder="Cristiano Moreira" name="username">
                <br>
                <br>
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
                <input type="submit" value="Register" class="mt-3" name="register" id="register">
                <br>
                <button class="btn-login mt-3" id="btn-login" name="login"><a href="index.php">Login</a></button>
            </div>
            <img src="../img/il-register.png" alt="" class="illustration-register">
        </form>
        
    </div>
</body>

</html>