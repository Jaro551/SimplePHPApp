<?php
    require_once("Session.php");
    require_once("connection.php");

    $products = "SELECT * FROM products";
    $result = $mysqli->query($products);

    if($result->num_rows===0){
        echo "Brak produktów do wyświetlenia";
        exit;
    }

    echo "<table class='col-md-12 table'>
            <thead>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Tytuł</th>
                    <th scope='col' style='width:75%'>Opis</th>
                    <th scope='col'>Status</th>
                    <th scope='col'></th>
                    <th scope='col'></th>
                </tr>
            </thead>
            <tbody>";
                while($item=$result->fetch_assoc()){
                    echo "<tr>
                        <th scope='row'>".$item['ID']."</th>
                        <td>".$item['title']."</td>
                        <td>".$item['description']."</td>
                        <td>";
                        if($item['isAvailable'] == true){
                            echo "Dostępny";
                        }
                        else{
                            echo "Niedostępny";
                        }
                    echo "</td>
                    <td><a href='EditProductView.php?id=".$item['ID']."' class='btn btn-primary'>Edytuj</a></td>
                    <td><a href='DeleteProduct.php?id=".$item['ID']."' class='btn btn-danger'>Usuń</a></td></tr>";
                }
            echo "</tbody>
            </table>";
    
    $mysqli->close();
?>