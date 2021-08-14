<?php
    $mysqli = new mysqli('127.0.0.1','root','','simplephpapp');
    if($mysqli -> connect_errno)
    {
        echo "Nie połączyłeś się z bazą";
        exit;
    }
?>