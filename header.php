<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RedStore | Ecommerce Website Design</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>



        <div class="header">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="../site d'E-commerce/index.php"><img src="images/logo.png" width="125px"></a>
                    </div>
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="../site d'E-commerce/index.php">Home</a></li>
                            <li><a href="../site d'E-commerce/products.php">Products</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Contact</a></li>
                            <?php
                                if (isset($_SESSION["useruid"])) {
                                    echo "<li><a href=\"../site d'E-commerce/profil.php\">Profil</a></li>";
                                }
                                else {
                                    echo "<li><a href=\"../site d'E-commerce/account.php\">Account</a></li>";
                                }
                            ?>
                        </ul>
                    </nav>
                    <a href="../site d'E-commerce/cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
                    <img src="images/menu.png" class="menu-icon" onclick="menutoggle()"></a>
                </div>
            </div>