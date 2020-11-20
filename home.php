<?php
    SESSION_start();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8">
        <title>Smoke Games</title>
        <link rel="icon" href="images/favicon.ico">
        <link rel="stylesheet" href="home.css">
    </head>
    <body>
        <div id="main">
            <a href="home.php"><img id="icon" src="images/icon.png"></a>
            <a href="home.php"><img id="title_logo" src="images/title.png"></a><br>
            <div class="white"><p>
                <?php if(isset($_SESSION['first'])) {
                echo 'Welcome '. $_SESSION['first']; 
                }?>
                <?php if(!isset($_SESSION['first'])) {
                ?> <a id="signin" href="login.php">Sign In</a>
                <?php }?></p>
                
            
            </p>

            </div>
    
            <nav id="text_nav" class="top_nav">
                <ul>
                    <li class="li_left" id="currPage" ><a href="home.php">Home</a></li>
                    <li class="li_left"><a href="about_us.php">About Us</a></li>
                    <li class="li_left"><a href="contact_us.php">Contact Us</a></li>
                    <li class="li_right"><img id="pfp" src="images/profilepic.png">
                        <ul>
                            <?php 
                            if(!isset($_SESSION['first'])){?>
                            <?php 
                            if(!isset($_SESSION['first'])){?>
                            <li><a href="login.php">Sign Up/Log In</a></li> <!-- when logged in should be deactivated -->
                            <?php } ?>
                            <?php } ?>

                            <li><a href="myAccount.php">My Account</a></li>
                            <?php 
                            if(isset($_SESSION['first'])){?>
                            <li><a href="logout.php">Log Out</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="li_right"><a href="cart.php"><img id="cart" src="images/cart.png"></a></li>    
                </ul>
            </nav>
            <div id="games">
                <a href="DStacker.php"><img class="games" id="game1" src="images/DStacker.png"></a><br>
                <a href="hack_it.php"><img id="game2" class="games" src="images/hack_it.png"></a><br>
                <a href="minesweeper.php"><img id="game3" class="games" src="images/minesweeper.png"></a><br>
            </div>
            <div id="social_media">
                <a href="#" ><img class="social_media" src="images/discord.png"></a>
                <a href="#" ><img class="social_media" src="images/reddit.png"></a>
                <a href="#" ><img class="social_media" src="images/twitter.png"></a>
                <a href="#" ><img class="social_media" src="images/instagram.png"></a>
                <br>
                <p>&copy; Smoke Games</p>
            </div>
        </div>
    </body>           
</html>
