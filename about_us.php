<?php
    SESSION_start(); ?> <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8">
        <title>About Us</title>
        <link rel="icon" href="images/favicon.ico">
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="about_us.css">
    </head>
    <body>
        <div id="main">
                        <a href="home.php"><img id="icon" src="images/icon.png"></a>
            <a href="home.php"><img id="title_logo" src="images/title.png"></a><br>
            <nav id="text_nav" class="top_nav">
                <ul>
                    <li class="li_left"  ><a href="home.php">Home</a></li>
                    <li class="li_left" id="currPage"><a href="about_us.php">About Us</a></li>
                    <li class="li_left"><a href="contact_us.php">Contact Us</a></li>
                    <li class="li_right"><img id="pfp" src="images/profilepic.png">
                        <ul>
                            <?php 
                            if(!isset($_SESSION['first'])){?>
                            <li><a href="login.php">Sign Up/Log In</a></li> <!-- when logged in should be deactivated -->
                            <?php } ?>
                            <li><a href="myAccount.php">My Account</a></li>
                            <li><a href="">Log Out</a></li>
                        </ul>
                    </li>
                    <li class="li_right"><img id="cart" src="images/cart.png"></li>    
                </ul>
            </nav>
            <div id ="content">
                    <h1 id="aboutUs">About Us</h1>
                    <h1>Meet The Team</h1>
                    <table>
                        <tr>
                            <td><img src="images/nikhil_pfp.png"></td>
                            <td><img src="images/giao_pfp.png"></td>
                            <td><img src="images/jae_pfp.png"></td>
                            <td><img src="images/alex_pfp.png"></td>
                        </tr>
                        <tr>
                            <td>Nikhil Jindia</td>
                            <td>Giao Pham</td>
                            <td>Jae Oh</td>
                            <td>Alex Nguyen</td>
                        </tr>
                    </table>
                    <p id="intro">Hi there, fellow humans! We created this website to act as an Indie Game Developer's video game digital distribution service. We created three mock-up games that do NOT exist. Our team consists of junioir and senior CS students as UGA. We hope you enjoy your stay and if you have any questions, please <a href="contact_us.php">contact us!</a></p>
                    <h1>Mission Statement</h1>
                    <p>We strive to earn an A on our final project and we hope that our website is worthy of such grade. Our goal is to continue making games that
                        is suitable for all players of any age. We value our customers, contributors, and developers, and we will continue to show this image of ourselves.
                        Thank you for your support!
                    </p>
                    <h1>Disclaimer</h1>
                    <p>Our company and our offered games are works of fiction and do not exist in the real world. We are not associated with any real company.
                        Please do not consider it as such.</p>
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
