<?php


    include_once('connect.php');
    
    session_start();
    if (isset($_SESSION["rol"])) {
        if ($_SESSION["rol"]!="admin") {
            header("Location: index.php");
            exit;
        }
    } else {
        header("Location: index.php");
        exit;
    }

    $name = "";
    $category = "";
    $price = "";
    $amount = "";

    $id = $_GET["edit"];

    $stmt = $connect->prepare("SELECT * FROM menukaart WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $result = $stmt->fetch();

    if ($stmt->rowCount() > 0) {
        $name = $result['name'];
        $category = $result['category'];
        $price = $result['price'];
        $amount = $result['amount'];
    }

  ?> 





<div class="itemadmin">
<form action="create.php" method="post">
    <label for="id">id:</label><br>
    <input type="text" value="<?php echo $id ?>" name="id" readonly><br>
    <br>
    <label for="name">name:</label><br>
    <input type="text" id="name" value="<?php echo $name ?>" name="name">
    <br>
    <label for="category">category:</label><br>
    <input type="text" id="category" value="<?php echo $category ?>" name="category">
    <br>
    <label for="price">price:</label><br>
    <input type="text" id="price" value="<?php echo $price ?>" name="price">
    <br>
    <label for="amount">amount:</label><br>
    <input type="text" id="amount" value="<?php echo $amount ?>" name="amount">
    <br>
    <button id="editbutton" type="sumbit" name="edit" value="edit">edit</button>
</form>
</div>


