<?php
    require_once("Session.php");

    session_destroy();
    header("Location: LoginView.php");
?>