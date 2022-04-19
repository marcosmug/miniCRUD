<?php include_once("includes/connect.php"); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>login</title>
</head>
<main>

    <body>
        <div class="banner">
            <div class="container">
                <h2>Login</h2>
                <form class = "white" action="includes/loginHandler.php" method="post">
                    <input type="text" name="username" id="username" placeholder="username">
                    <input type="password" name="password" id="password" placeholder="password">
                    <div class="btns">
                        <button class = "grey" type="submit">Login</button>

                        <!-- <a href="signup.php"><button type="button" id="sign-up">Sign Up</button></a> -->
                    </div>

                </form>
                <header>
                    <nav>
                        <div class="navbar">
                            <img src="img/logo.png" class="logo">
                            <ul>

                                <li><a href="index.php">home</a></li>
                                <?php 
                                if (isset($_SESSION["rol"])) {
                                    echo '<li><a href="logout.php">logout</a></li>';
                                    if ($_SESSION["rol"]=== "admin") {
                                        echo '<li><a href="admin.php">admin</a></li>';
                                    }
                                }
                                else {
                                    echo '<li><a href="login.php">Login</a></li>';
                                } 
                                ?>
                            </ul>
                    </nav>
                </header>
            </div>
        </div>

        </section>
        </div>
        </div>
    </body>
</main>

</html>