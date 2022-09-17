<?php
session_start();
include('connetion.php');

echo $_SESSION["username"];

if(isset($_SESSION["username"]) == $_SESSION["username"]){
    unset($_SESSION["iduser"]);
    unset($_SESSION["username"]);
    unset($_SESSION['pswd']);

    header('Location: index.php');
}
