<?php
    require_once("connection.php");
    if($_POST){
        $login = $_POST['login'];
        $password = $_POST['password'];

        if(empty($login) && empty($password)){
            echo "Nie podałeś danych do logowania";
            exit;
        }
        else{
            $isUserExist = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
            $result = $mysqli->query($isUserExist);

            if($result->num_rows === 0){
                echo "Nie znaleziono użyktownika o podanym loginie i haśle";
                exit;
            }
            else{
                session_start();
                $loggeduser = $login."|".$password;
                $_SESSION['loggeduser'] = $loggeduser;
                header("Location: ProductListView.php");
            }
        }
    }
    $mysqli->close();
?>