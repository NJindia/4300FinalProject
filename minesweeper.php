<?php
    SESSION_start(); ?> <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf8">
    <title>Mine Sweeper</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="about_us.css">
</head>

<body>
    <div id="main">
        <img id="icon" src="images/icon.png"><br>
        <na<v id="text_nav" class="top_nav">
            <ul>
                <li class="li_left"><a href="home.php">Home</a></li>
                <li class="li_left" id="currPage"><a href="about_us.php">About Us</a></li>
                <li class="li_left"><a href="contact_us.php">Contact Us</a></li>
                <li class="li_right"><img id="pfp" src="images/profilepic.png">
                    <ul>
                        <?php 
                            if(!isset($_SESSION['first'])){?>
                            <li><a href="login.php">Sign Up/Log In</a></li> <!-- when logged in should be deactivated -->
                            <?php } ?>
                        <?php 
                            if(isset($_SESSION['first'])){?><li><a href="myAccount.php">My Account</a></li><?php } ?>
                        <?php 
                            if(isset($_SESSION['first'])){?>
                            <li><a href="logout.php">Log Out</a></li>
                            <?php } ?>
                    </ul>
                </li>
                <?php 
                            if(isset($_SESSION['first'])){?><li class="li_right"><img id="cart" src="images/cart.png"></li><?php } ?>
            </ul>
            </nav>
            <main>
                <img id="game3" class="games" src="images/minesweeper.png">
            </main>


    </div>

</body>
<footer>

</footer>

</html>