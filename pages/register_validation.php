<?php

    if(isset($_POST['register'])){

        include ('connetion.php');

        if(empty($_POST['email']) || empty($_POST['password'])){
            echo "Email or password cannot be empty!";
        }else{

            $username = mysqli_real_escape_string($conn,$_POST['username']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $password = md5($_POST['password']);
    
            $sql = "SELECT * FROM user WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($result);
            $row_cnt = mysqli_num_rows($result);
    
            if($row_cnt > 0){
                echo "User Already Registered!";
            }else{
                $insert = "INSERT INTO user (name, email, password, date_register) VALUES ('$username','$email','$password',NOW())";
    
                mysqli_query($conn, $insert);
        
                header('Location: index.php');
        
                mysqli_close($conn);
            }
        }
    
    }