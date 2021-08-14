<?php
    session_start();
    @$loggeduser = $_SESSION['loggeduser'];

    if(empty($loggeduser)){
        echo "Nie jesteś zalogowany";
        header('Location: LoginView.php');
        exit;
    }
?>