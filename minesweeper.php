<?php
    require_once('database.php');
    if (!isset($_SESSION)) {
        session_start();
    }
    $user_id = $_SESSION['user_id'];
    $query = "SELECT price FROM games WHERE name = 'Mine Sweeper' LIMIT 1";
    $name = 'Mine Sweeper';
    $statement = $db->prepare($query);
    $statement->execute();
    $price = $statement->fetch();
    $statement->closeCursor();
?> 
    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8">
        <title>Mine Sweeper</title>
        <link rel="icon" href="images/favicon.ico">
        <link rel="stylesheet" href="game_page.css">
        <link rel="stylesheet" href="home.css">
    </head>
    <body>
        <div id="main">
            <a href="home.php"><img id="icon" src="images/icon.png"></a>
            <a href="home.php"><img id="title_logo" src="images/title.png"></a><br>
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
            <div id="game_description">
                <img id="game" src="images/minesweeper.png"><br>
                <h1>Mine Sweeper</h1>
                <p>   
                    Get ready to sweep the mines! Experience the classic Mine Sweeper and never look back... or maybe look because there's a bomb! One mistake and it will blow up in your face. Disclaimer: we do not own the rights to the original Minesweeper game and this is only for the purpose of this project. Either way, enjoy the game, but tread carefully!
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