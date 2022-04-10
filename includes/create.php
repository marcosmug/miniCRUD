<?php
    include_once('connect.php');

    // delete 
if(isset($_GET["id"])){  
        $sql = "DELETE FROM menukaart
                WHERE id = :id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_GET['id']);
        $stmt->execute();
        header("Location: admin.php");
}

if(isset($_POST["create"])){  
    $sql = "INSERT INTO menukaart (id, name, category, price, amount)
            VALUES (:id,:name,:category,:price,:amount)";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->bindParam(":name", $_POST['name']);
    $stmt->bindParam(":category", $_POST['category']);
    $stmt->bindParam(":price", $_POST['price']);
    $stmt->bindParam(":amount", $_POST['amount']);
    $stmt->execute();
}



if(isset($_POST["edit"])){  
    $sql = "UPDATE menukaart
            SET name = :name , category = :category,
                price = :price, amount = :amount
            WHERE id = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->bindParam(":name", $_POST['name']);
    $stmt->bindParam(":category", $_POST['category']);
    $stmt->bindParam(":price", $_POST['price']);
    
    $stmt->bindParam(":amount", $_POST['amount']);
    $stmt->execute();
}



header("Location: ../admin.php");


?>