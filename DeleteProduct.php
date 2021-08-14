<?php
    require_once("Session.php");
    require_once("connection.php");

    $id = $_GET['id'];

    $deleteProduct = "DELETE FROM products WHERE ID='$id'";
    $result = $mysqli->query($deleteProduct);
    
    if($result){
        header("location:ProductListView.php");
    }
    else{
        echo "Wystąpił błąd podczas usuwania produktu";
    }
    $mysqli->close();
?>
