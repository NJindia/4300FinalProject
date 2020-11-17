<?php

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
            <a href="home.html"><img id="icon" src="images/icon.png"></a>
            <a href="home.html"><img id="title_logo" src="images/title.png"></a><br>
            <nav id="text_nav" class="top_nav">
                <ul>
                    <li class="li_left" id="currPage" ><a href="home.html">Home</a></li>
                    <li class="li_left"><a href="about_us.html">About Us</a></li>
                    <li class="li_left"><a href="contact_us.html">Contact Us</a></li>
                    <li class="li_right"><img id="pfp" src="images/profilepic.png">
                        <ul>
                            <li><a href="">Sign Up/Log In</a></li> <!-- when logged in should be deactivated -->
                            <li><a href="myAccount.php">My Account</a></li>
                            <li><a href="">Log Out</a></li>
                        </ul>
                    </li>
                    <li class="li_right"><img id="cart" src="images/cart.png"></li>    
                </ul>
            </nav>
            <h1>Cart</h1>
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th></th>
                        
                </thead>
            </table>
        </div>
    </body>           
</html>
