<?php
    if (!isset($_SESSION)) {
        session_start();
    } ?> <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf8">
    <title>Contact Us</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="contact_us.css">
</head>

<body>
    <div id="main">
        <a href="home.php"><img id="icon" src="images/icon.png"></a>
        <a href="home.php"><img id="title_logo" src="images/title.png"></a><br>
        <nav id="text_nav" class="top_nav">
            <ul>
                <li class="li_left" ><a href="home.php">Home</a></li>
                <li class="li_left"><a href="about_us.php">About Us</a></li>
                <li class="li_left" id="currPage"><a href="contact_us.php">Contact Us</a></li>
                <li class="li_right"><img id="pfp" src="images/profilepic.png">
                    <ul>
                        <?php 
                            if(!isset($_SESSION['first'])){?>
                            <?php 
                            if(!isset($_SESSION['first'])){?>
                            <li><a href="login.php">Sign Up/Log In</a></li> <!-- when logged in should be deactivated -->
                            <?php } ?>
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
                            if(isset($_SESSION['first'])){?><li class="li_right"><a href="cart.php"><img id="cart" src="images/cart.png"></a></li><?php } ?>
            </ul>
        </nav>

        <div id="contact_us">
            <div class="center">
                <div class ="yes_top_margin">

                <h1 class="black">Thanks for Contacting Us!</h1>
                </div>
                <p> We will contact you through email shortly</p>
            </div>

            <form action="home.php" method="post">
                <fieldset id="contact_us_field">

                    <input class="submitButton" type="submit" id="submit" value="Go back to main"><br>
                </fieldset>
            </form>

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
<footer>

</footer>

</html>