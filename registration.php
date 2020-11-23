<?php
    SESSION_start(); ?> <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf8">
    <title>Registration</title>
    <link rel="icon" href="images/favicon.ico" >
    <link rel="stylesheet" href="home.css" type="text/css">
    <link rel="stylesheet" href="contact_us.css" type="text/css">
    <!-- <link rel="stylesheet" href="myAccount.css" type="text/css"> -->
    <link rel="stylesheet" href="registration.css" type="text/css">
</head>

<body>
    <div id="main">
        <a href="home.php"><img id="icon" src="images/icon.png"></a>
        <a href="home.php"><img id="title_logo" src="images/title.png"></a><br>
        <nav id="text_nav" class="top_nav">
            <ul>
                <li class="li_left"><a href="home.php">Home</a></li>
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
                <h3 class="black">Create a New Account</h3>
            </div>

            <form action="process_registration.php" method="post">
            <div class="form">    
            <fieldset >
                    <legend>Account Information</legend>
                            <label>Email: </label>
                            <input class="reg_input" id ="email" type="text" name="email" required autofocus > 
                            <p><?php if (isset($email_error)) { ?>
                                    <br><span class="error"><?php echo $email_error ?></span>
                                <?php } ?><br></p>
                                
                        
                            <label>Password: </label>
                            <input class="reg_input" type="text" name="password" required >
                            <p><?php if (isset($newPass_error)) { ?>
                                    <br><br><br><span class="error"><?php echo $newPass_error ?></span>
                                <?php } ?> <br><br></p>
                       
                        
                            <label>First Name: </label>
                            <input class="reg_input" type="text" name="first" required > 
                             <p><?php if (isset($first_error)) { ?>
                                    <br><br><br><span class="error"><?php echo $first_error ?></span>
                                <?php } ?><br></p><br>
                      
                       
                            <label>Last Name: </label>
                            <input class="reg_input" type="text" name="last" required>
                            <p><?php if (isset($last_error)) { ?>
                                    <br><span class="error"><?php echo $last_error ?></span>
                                <?php } ?> <br></p>
                        
                        
                            <label>Phone Number: </label>
                            <input class="reg_input" type="text" name="phone" required>
                            <p><?php if (isset($phone_error)) { ?>
                                   <br> <br><br><span class="error"><?php echo $phone_error ?></span>
                                <?php } ?> <br></p>
                       
                </fieldset>
                <br>
                <fieldset >
                    <legend>Address</legend>
                    
                            <label>Address: </label>
                            <input class="reg_input" type="text" name="address" required >
                            <p><?php if (isset($street_error)) { ?>
                                        <br><span class="error"><?php echo $street_error ?></span>
                                     <?php } ?></p><br> 
                                    
                        
                            <label>City: </label>
                            <input class="reg_input" type="text" name="city" required >
                             <p><?php if (isset($city_error)) { ?>
                                        <br><span class="error"><?php echo $city_error ?></span>
                                    <?php } ?></p> <br>
                        
                                   
                            <label>State: </label>
                            <input class="reg_input" type="text" name="state" required > 
                            <p><?php if (isset($state_error)) { ?>
                                        <br><span class="error"><?php echo $state_error ?></span>
                                    <?php } ?></p><br>
                        
                                    
                            <label>Zip Code: </label>
                            <input class="reg_input" type="text" name="zipcode" required> 
                            <p><?php if (isset($zipcode_error)) { ?>
                                        <br><span class="error"><?php echo $zipcode_error ?></span>
                                    <?php } ?></p><br>
                        
                                    
                </fieldset>
                <br>
                <fieldset >
                    <legend>Payment Information</legend>
                   
                            <label>Card Type: </label>
                            <select name="cardType">
                                        <option value="American Express">American Express</option>
                                        <option value="Discover">Discover</option>
                                        <option value="Master Card">Master Card</option>
                                        <option value="Visa">Visa</option>
                                    </select><br><br>
                                    <?php if (isset($card_type_error)) { ?>
                                    <p><br>    <span class="error"><?php echo $card_type_error ?></span>
                                    <?php } ?>
                        
                        
                            <label>Card Number: </label>
                            <input class="reg_input" type="text" placeholder="****************" name="cardNumber" required > <br><br>
                       
                        <?php if (isset($card_num_error)) { ?>
                                       <p> <br><span class="error"><?php echo $card_num_error ?></span>
                                    <?php } ?>
                        
                            <label>Expiration: </label>
                            <input class="reg_input" type="text" placeholder="YYYY-MM-DD" name="expiration" required > <br>
                        <br>
                        <?php if (isset($expiration_error)) { ?>
                                      <p><br>  <span class="error"><?php echo $expiration_error ?></span>
                                    <?php } ?>
                </fieldset>
                            </div>
                <div class="center">
                <button class="login_button" type="submit" id="submit">Submit </button>
                            </div>
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