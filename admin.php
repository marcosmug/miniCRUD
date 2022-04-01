<?php
include_once('connect.php');
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
                    <th>Name</th>
                    <th>Category</th>
                    <th>price</th>
                    <th>amount</th>
                </tr>

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
                        echo "</tr>";
                    } ?>
            </table>
            <!-- </header> -->
        </body>
    </div>
</main>
<footer>
    <li><a href="index.php">Home</a></li>
</footer>
</html>