<?php

    session_start();
    include('connetion.php');

    if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);

    /* echo "$email $password"; */

    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);

    $row_cnt = mysqli_num_rows($result);

    if($row_cnt > 0) {

        while($dados = mysqli_fetch_array($result)) {
            $_SESSION['iduser'] = $dados["iduser"];
            $_SESSION['username'] = $dados["name"];
            $_SESSION['pswd'] = $dados["password"];
            /* echo $_SESSION["username"]; */
        }
        header('Location: menu.php');
        mysqli_close($conn);
    }else{
        unset($_SESSION["iduser"]);
        unset($_SESSION["username"]);
        unset($_SESSION['pswd']);
        header('Location: index.php');
    }
}

?>