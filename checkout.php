<?php
    require_once('database.php');
    if (!isset($_SESSION)) {
        session_start();
    }
    $user_id = $_SESSION['user_id'];
    $query = "SELECT * FROM cart WHERE user_id=$user_id";
    $review = $db->query($query);

    $query = "SELECT * FROM payment WHERE user_id=$user_id";
    $payment = $db->query($query);

    $sum=0.00;
    foreach($review as $item):
        $sum += $item['price'];
    endforeach;
    
    $query = "SELECT * FROM cart WHERE user_id=$user_id ORDER BY `name`";
    $review = $db->query($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8">
        <title>Checkout</title>
        <link rel="icon" href="images/favicon.ico">
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="checkout.css">
    </head>
    <body>
        <div id="main">
            <a href="home.php"><img id="icon" src="images/icon.png"></a>
            <a href="home.php"><img id="title_logo" src="images/title.png"></a><br>
            <nav id="text_nav" class="top_nav">
                <ul>
                    <li class="li_left"  ><a href="home.php">Home</a></li>
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
            <div id="content">
                <h1 id="title">Checkout</h1>

                <fieldset id="payment">
                    <legend class="title">1. Payment Method</legend>
                    <form>
                        <input type="button" onclick="location.href='editPayment.php';" id="change" value="Change" />
                        <label id="card_title">Credit Card:</label>
                    </form>
                    <p id="card">
                        <?php foreach($payment as $card): ?>
                            <?php echo 'Current Card: '.$card['card_type']. ' ending in '.substr($card['card_num'],-4); ?>
                        <?php endforeach; ?>
                        </p>
                </fieldset>

                <fieldset id="summary">
                    <legend class="title">3. Order Summary</legend>
                    <table>
                        <tr>
                            <td>Price:</td>
                            <td><?php echo '$' . number_format($sum,2,'.',',');?></td>
                        </tr>
                        <tr>
                            <td>Tax:</td>
                            <td id="tax">$0.00</td>
                        </tr>
                        <tr>
                            <td>Balance:</td>
                            <td><?php echo '$' . number_format($sum,2,'.',',');?></td>
                        </tr>
                    </table>
                        <p class="total" id="method">Payment Method:</p>
                        <p class="total" id="code"><?php echo $card['card_type']. ' ending in '.substr($card['card_num'],-4);?> </p>
                    <form action="post_order.php" method="post">
                        <input id="buy" type="image" src="images/purchase-button.png">
                    </form>
                </fieldset>

                <fieldset id="review">
                    <legend class="title">2. Review Items</legend>
                    <table>
                        <?php foreach($review as $item):?>
                            <tr>
                                <td class="preview" id="image">
                                    <?php
                                        if($item['name'] == "DStacker") { ?>
                                        <img class="item" id="image" src="images/DStacker.png">
                                    <?php } ?>
                                    <?php
                                        if($item['name'] == "Hack_It;") { ?>
                                        <img class="item" id="image" src="images/hack_it.png">
                                    <?php } ?>
                                    <?php
                                        if($item['name'] == "Mine Sweeper") { ?>
                                        <img class="item" id="image" src="images/minesweeper.png">
                                    <?php } ?>
                                </td>
                                <td class="items"> <?php echo $item['name']?> </td> 
                                <td class="items"> <?php echo '$' . number_format($item['price'],2,'.',',');?> </td>  
                            </tr>
                        <?php endforeach; ?>  
                    </table>
                    <p id="sum">Total: <?php echo '$' . number_format($sum,2,'.',',');?></p>
                    <form id="edit_cart" >
                        <input type="button" onclick="location.href='cart.php';" value="Edit Cart" />
                    </form>
                </fieldset> 
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