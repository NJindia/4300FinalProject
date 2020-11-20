<?php
    SESSION_start(); ?> <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf8">
    <title>Contact Us</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" htef="registration.css">
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

        <div id="register">
            <div class="center">
                <h3 class="black ">Create a New Account</h3>
            </div>

            <form action="process_registration.php" method="post">
                <fieldset >
                    <legend>Account Information</legend>
                    
                        
                            <label for="email">Email: </label>
                            <input class="reg_input" id ="email" type="text" name="email" required autofocus > <br>  <br>
                        
                        
                            <label>Password: </label>
                            <input class="reg_input" type="text" name="password" required > <br>
                        <br>
                        
                            <label>First Name: </label>
                            <input class="reg_input" type="text" name="first" required > <br>
                        <br>
                       
                            <label>Last Name: </label>
                            <input class="reg_input" type="text" name="last" required> <br>
                        <br>
                        
                            <label>Phone Number: </label>
                            <input class="reg_input" type="text" name="phone" required> <br>
                        <br>
                </fieldset>
                <fieldset >
                    <legend>Address</legend>
                    
                        <div class="name_div">
                            <input class="reg_input" type="text" name="street" required placeholder="Street Adress"> <br> 
                        </div><br>
                        <div class="name_div">
                            <input class="reg_input" type="text" name="city" required placeholder="City"> <br>
                        </div><br>
                        <div class="name_div">
                            <input class="reg_input" type="text" name="state" required placeholder="State"> <br>
                        </div><br>
                        <div class="name_div">
                            <input class="reg_input" type="text" name="zipcode" required placeholder="Zip Code"> <br>
                        </div><br>
                </fieldset>
                <fieldset >
                    <legend>Payment Information</legend>
                   
                        <div class="name_div">
                            <input class="reg_input" type="select" name="street" required > <br> 
                        </div><br>
                        <div class="name_div">
                            <input class="reg_input" type="text" name="city" required placeholder="City"> <br>
                        </div><br>
                        <div class="name_div">
                            <input class="reg_input" type="text" name="state" required placeholder="State"> <br>
                        </div><br>
                        <div class="name_div">
                            <input class="reg_input" type="text" name="zipcode" required placeholder="Zip Code"> <br>
                        </div><br>
                </fieldset>
                <button class="login_button" type="submit" id="submit">Submit </button>
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