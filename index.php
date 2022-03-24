<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>mainpage</title>
</head>
<main>

    <body>
        <section id="home">
            <div class="banner">
                <div class="textbackground">
                    <h1>Freddy fazbear`s<br>
                        Pizzeria
                        <div id="path">
                            <div id="brick"></div>
                        </div>
                    </h1>
                </div>
                <header>
                    <nav>
                        <div class="navbar">
                            <img src="img/logo.png" class="logo">
                            <ul>
                                <li><a href="#home">home</a></li>
                                <li><a href="#eetmenu">menu</a></li>
                                <li><a href="#">home</a></li>
                                <li><a href="#">home</a></li>
                                <li><a href="login.php">Login</a></li>
                            </ul>
                    </nav>
                </header>
            </div>
            </div>
            <div class="maintext">
        </section>
        </div>
        <section id="eetmenu">
            <div class="menu-background">
                <div class="menu">
                    <!-- <img src="img/menubackground.png"> -->
                    <div class="menu-content">
                        <div class="menu-content-2">
                            <div class="items">
                            <?php    
                            for ($i=0; $i <8 ; $i++) {
                                include("itembox.php");
                            }
                            ?>
                                <h1>placehoder pic hier</h1>
                            </div>
                        </div>
                        <h1>betaal knop hier</h1>
                    </div>
                </div>
            </div>
        </section>
        <script src="js/main.js"></script>
    </body>
</main>
<!-- <footer>
    
</footer> -->

</html>