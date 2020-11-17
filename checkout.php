<?php
    include('database.php');

    $query = "SELECT * FROM cart WHERE user_id='1'";
    $review = $db->query($query);

    $sum=0.00;
    foreach($review as $item):
        $sum += $item['price'];
    endforeach;
    
    $query = "SELECT * FROM cart WHERE user_id='1'";
    $review = $db->query($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8">
        <title>CHECKOUT</title>
        <link rel="icon" href="images/favicon.ico">
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="checkout.css">
    </head>
    <body>
        <div id="main">
            <img id="icon" src="images/icon.png">
            <img id="title_logo" src="images/title.png"><br>
            <nav id="text_nav" class="top_nav">
                <ul>
                    <li class="li_left"  ><a href="home.html">Home</a></li>
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
            <div id="content">
                <h1 id="title">Checkout</h1>

                <fieldset id="payment">
                    <legend class="title">1. Payment Method</legend>
                    <form>
                        <input type="submit" class="select" name="credit" value="Change">
                        <label>Credit Card:</label><br>
                    </form>
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
                        <tr>
                            <td>Payment Method:</td>
                            <td></td>
                        </tr>
                    </table>
                    <form action="process_order.php" method="post">
                        <input type="hidden" name="total" value="">
                        <input id="buy" type="submit" value="Purchase">
                    </form>
                </fieldset>

                <fieldset id="review">
                    <legend class="title">2. Review Items</legend>
                    <table>
                        <?php foreach($review as $item):?>
                            <tr>
                                <td class="items"> <?php echo $item['name']?> </td> 
                                <td class="items"> <?php echo '$' . number_format($item['price'],2,'.',',');?> </td>  
                            </tr>
                        <?php endforeach; ?>  
                    </table>
                    <a href="">Edit Cart</a>
                    <p>Total: <?php echo '$' . number_format($sum,2,'.',',');?></p>
                </fieldset> 
            </div>
            
        </div>
        
    </body>
    <footer>
        
    </footer>
</html>