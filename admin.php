<?php
include_once('includes/connect.php');
?>

<?php 
session_start();
if (isset($_SESSION["rol"])) {
    if ($_SESSION["rol"]!="admin") {
        header("Location: ../index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Admin</title>
</head>
<main>
    <div class="body-admin">

        <body>
            <!-- <header> -->
            <nav>
                <h1>Admin page</h1>
                <!-- <div class="navbar">
                        <img src="img/logo.png" class="logo">
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#eetmenu">Menu</a></li>
                            <li><a href="">Home</a></li>
                            <li class="toggle" data-toggle=".shopping-cart"><a>Winkelwagen</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                        <div class="shopping-cart">

                        </div> -->
            </nav>
            <table>
                <tr>
                    <th>ID</th>
                    <br>
                    <th>Name</th>
                    <br>
                    <th>Price</th>
                    <br>
                    <th>Category</th>
                    <br>
                    <th>amount</th>
                    <br>
                    <th>img</th>
                    <br>
                </tr>

                <div class="itemadmin">
                    <form action="includes/create.php" method="post">
                        <label for="id">id:</label><br>
                        <input type="text" name="id"><br>
                        <br>
                        <label for="name">name:</label><br>
                        <input type="text" id="name" name="name">
                        <br>
                        <label for="category">category:</label><br>
                        <input type="text" id="category" name="category">
                        <br>
                        <label for="price">price:</label><br>
                        <input type="text" id="price" name="price">
                        <br>
                        <label for="amount">amount:</label><br>
                        <input type="text" id="amount" name="amount">
                        <br>
                        <button id="createbutton" type="submit" name="create" value="create">create</button>
                        <br>
                        <button id="editbutton" type="sumbit" name="edit" value="edit">edit</button>
                    </form>
                </div>
                <div class="info">
                    <?php 
                    $sql = "SELECT * FROM menukaart";
                    $stmt = $connect -> prepare($sql);
                    $stmt -> execute();
                    $result = $stmt -> fetchAll();
                    
                    foreach($result as $res) { 
                        echo "<tr>";
                        echo "<td>{$res['id']}</td>";
                        echo "<td>{$res['name']}</td>";
                        echo "<td>{$res['price']}</td>";
                        echo "<td>{$res['category']}</td>";
                        echo "<td>{$res['amount']}</td>";
                        echo "<td>{$res['image']}</td>";
                        echo "<td><a href='includes/create.php?id={$res['id']}'>delete</a></td>";
                        echo "</tr>";
                    } ?>
                </div>
            </table>

            <!-- </header> -->
        </body>
    </div>
</main>
<footer>
    <li><a href="index.php">Home</a></li>
</footer>

</html>