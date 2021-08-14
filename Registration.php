<?php
    require_once("connection.php");

    if($_POST){
        $login = $_POST['login'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        $loginLength = strlen($login);
        $passwordLength = strlen($password);

        if($loginLength < 6){
            echo "Podany login jest za krótki";
            exit;
        }

        if($passwordLength < 8){
            echo "Podane hasło jest za krótkie";
            exit;
        }

        if(strcmp($password, $confirmpassword) !== 0){
            echo "Hasła nie są identyczne";
            exit;
        }

        $isUserExist = "SELECT * FROM users WHERE login = '$login'";
        $result = $mysqli->query($isUserExist);
        if($result->num_rows !== 0){
            echo "Istnieje już użytkownik o podanym loginie";
            exit;
        }
        else{
            $newUser = "INSERT INTO users (login, password) VALUES ('$login', '$password')";
            $addUser = $mysqli->query($newUser);
            echo "Pomyślnie utworzono konto";
        }
    }

    $mysqli->close();
?>