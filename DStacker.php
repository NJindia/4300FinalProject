<?php
require_once('database.php');
$query = "SELECT price FROM games WHERE name = 'DStacker' LIMIT 1";
$name = 'DStacker';
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
        <title>DStacker</title>
        <link rel="icon" href="images/favicon.ico">
        <link rel="stylesheet" href="game_page.css">
        <link rel="stylesheet" href="home.css">
    </head>
    <body>
        <div id="main">
            <img id="icon" src="images/icon.png"><br>
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
            <div id="game_description">
                <img src="images/DStacker.png"><br>
                <h1>DStacker</h1>
                <p>
                    DStacker, short for DoubleStacker, is a fresh take on the popular game Tetris&reg where shapes fall to both sides simultaneously instead of just one side. 
                    It's double the fun and double the difficulty! 
                    For fun with friends, one person can take control of each side, and players can swap out shapes with each other to maximize their points and ensure victory! 
                    Buy now!
                </p>
                <h2>Price: $<?php echo reset($price); ?></h2>
                <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="name" value="<?php echo $name; ?>">
                    <input type="hidden" name="price" value="<?php echo reset($price); ?>">
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                    <input type="submit"><br>
                </form>
            </div>
        </div>
    </body>
</html>
