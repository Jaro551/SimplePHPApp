<?php
    require_once("Session.php");
    require_once("connection.php");

    if($_POST){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $isAvailable = $_POST['isAvailable'];

        $titleLength = strlen($title);

        $titleLength = strlen($title);

        if(empty($title)){
            echo "Nie podałeś tytułu";
            exit;
        }
        elseif($titleLength < 6){
            echo "Tytuł jest za krótki";
            exit;
        }

        $newProduct = "INSERT INTO products (title, description, isAvailable) VALUES ('$title', '$description', '$isAvailable')";
        $result = $mysqli->query($newProduct);
        echo "Pomyślnie dodano produkt";
    }
    
    $mysqli->close();
?>