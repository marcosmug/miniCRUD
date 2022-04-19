<?php
include_once('includes/connect.php');
?>

<?php 
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

<body>
    <main>
        <div class="body-admin">
            <nav>
                <h1>Admin page</h1>
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
                    
                    foreach($result as $res) { ?>
                        <tr>
                        <td><?php echo $res['id'] ?></td>
                        <td><?php echo $res['name'] ?></td>
                        <td><?php echo $res['price'] ?></td>
                        <td><?php echo $res['category'] ?></td>
                        <td><?php echo $res['amount'] ?></td>
                        <td><?php echo $res['image'] ?></td>
                        <td><a href="includes/create.php?id=<?php echo $res['id'] ?>">delete</a></td>
                        <!-- <td><a href="includes/create.php?edit=<?php echo $res['id'] ?>">edit</a></td> -->
                        </tr>
                    <?php } ?>
                    
                </div>
            </table>
        </div>
    </main>

    <footer>
        <li><a href="index.php">Home</a></li>
    </footer>
</body>

</html>