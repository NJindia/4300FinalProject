<?php
require_once('database.php');
$query = "SELECT price FROM games WHERE name = 'Hack_It;' LIMIT 1";
$name = 'Hack_It;';
$statement = $db->prepare($query);
$statement->execute();
$price = $statement->fetch();
$statement->closeCursor();
$user_id = 1
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8">
        <title>Hack_It;</title>
        <link rel="icon" href="images/favicon.ico">
        <link rel="stylesheet" href="game_page.css">
        <link rel="stylesheet" href="home.css">
    </head>
    <body>
        <div id="main">
            <img id="icon" src="images/icon.png">
            <img id="title_logo" src="images/title.png"><br>
            <nav id="text_nav" class="top_nav">
                <ul>
                    <li class="li_left" id="currPage" ><a href="home.php">Home</a></li>
                    <li class="li_left"><a href="about_us.php">About Us</a></li>
                    <li class="li_left"><a href="contact_us.php">Contact Us</a></li>
                    <li class="li_right"><img id="pfp" src="images/profilepic.png">
                        <ul>
                            <?php 
                            if(!isset($_SESSION['first'])){?>
                            <li><a href="login.php">Sign Up/Log In</a></li> <!-- when logged in should be deactivated -->
                            <?php } ?>
                            <li><a href="myAccount.php">My Account</a></li>
                            <?php 
                            if(isset($_SESSION['first'])){?>
                            <li><a href="logout.php">Log Out</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="li_right"><img id="cart" src="images/cart.png"></li>    
                </ul>
            </nav>
            <div id="game_description">
                <img id="game" src="images/hack_it.png"><br>
                <h1>Hack_It;</h1>
                <p>   
                    Wanna be a Hacker, but scared it's illegal? No problem! With <em>Hack_It;</em>, it is legally safe! You play as a hacker going through each security level, infiltrating someone's personal information which will lead you to gain full control of their PC. Evil indeed. Solve puzzles as you unlock each layer of security and find out what secrets are hidden in your victim's computer. Don't wait; Evil awaits!
                </p>
                <h2>Price: $<?php echo reset($price); ?></h2>
                <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="name" value="<?php echo $name; ?>">
                    <input type="hidden" name="price" value="<?php echo reset($price); ?>">
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                    <input type="image" id="add" src="images/add_to_cart.png"><br>
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
</html>


