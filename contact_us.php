<?php
    SESSION_start(); ?> <!DOCTYPE html>
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
                        <li><a href="myAccount.php">My Account</a></li>
                        <li><a href="">Log Out</a></li>
                    </ul>
                </li>
                <li class="li_right"><img id="cart" src="images/cart.png"></li>
            </ul>
        </nav>

        <div id="contact_us">
            <div class="center">
                <h3 class ="monospace maroon top_margin">GOT A QUESTION?</h3>
                <h1 class="black no_top_margin">Contact Us Below!</h1>
                <p> We’re here to help and answer any question you might</p>
                <p> have. We look forward to hearing from you</p>
            </div>

            <form action="add_from_contact_us.php" method="post">
                <fieldset id="contact_us_field">
                    <div class="center_div">
                        <div class="name_div">
                            <label>First Name </label><span id="error1">*</span><br>
                            <input class="name_input" type="text" name="firstName" required autofocus><br>
                        </div>
                        <div class="name_div">
                            <label>Last Name </label><span id="error2">*</span><br>
                            <input class="name_input" type="text" name="lastName" required><br>
                        </div>
                    </div><br>
                    <div class="name_div">
                    <label>Email </label> <span id="error1">*</span><br>
                    <input class="email_input" type="text" name="email" required><br>
                    </div><br>
                    <div class="name_div">
                    <label>Message </label><br>
                    <input class="message_input" type="text" name="message"><br>
                    </div><br>
                    <div class="name_div">
                    <label>Additional Details </label><br>
                    <input class="additional_input" type="text" name="additionalInfo"><br>
                    </div><br>
                    <input class="submitButton" type="submit" id="submit" value="Send Message"><br>
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