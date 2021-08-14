<?php
    require_once("Session.php");
    require_once("connection.php");

    $id = $_GET['id'];

    if($_POST){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $isAvailable = $_POST['isAvailable'];

        if(!empty($title)){
            $titleLenght = strlen($title);
            if($titleLenght > 6){
                $editProduct = "UPDATE products SET title = '$title', isAvailable = '$isAvailable' WHERE ID = '$id'";
                $result = $mysqli->query($editProduct);
            }
            else{
                echo "Tytuł jest za krótki";
            }
        }

        if(!empty($description)){
            $editProduct = "UPDATE products SET description = '$description', isAvailable = '$isAvailable' WHERE ID = '$id'";
            $result = $mysqli->query($editProduct);
        }

        if(empty($description) && empty($title)){
            $editProduct = "UPDATE products SET isAvailable = '$isAvailable' WHERE ID = '$id'";
            $result = $mysqli->query($editProduct);
        }
        
        header("Location: ProductListView.php");
        $mysqli->close();
    }
?>