<?php

include('database.php');
$userID = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT);


$query = "SELECT * FROM user_info WHERE id = '1'";
$info = $db->query($query);
$info = $info->fetch();

$query = "SELECT * FROM address WHERE user_id = '1'";
$addressInfo = $db->query($query);
$addressInfo = $addressInfo->fetch();

$query = "SELECT * FROM payment WHERE user_id = '1'";
$paymentInfo = $db->query($query);
$paymentInfo = $paymentInfo->fetch();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf8">
    <title>TITLE</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="myAccount.css">
</head>

<body>
    <div id="main">
        <img id="icon" src="images/icon.png"><br>
        <!--Start Navigation Bar-->
        <nav id="text_nav" class="top_nav">
            <ul>
                <li class="li_left" id="currPage"><a href="home.html">Home</a></li>
                <li class="li_left"><a href="about_us.html">About Us</a></li>
                <li class="li_left"><a href="contact_us.html">Contact Us</a></li>
                <li class="li_right"><img id="pfp" src="images/profilepic.png">
                    <ul>
                        <li><a href="login.php">Sign Up/Log In</a></li> <!-- when logged in should be deactivated -->
                        <li><a href="myAccount.php">My Account</a></li>
                        <li><a href="">Log Out</a></li>
                    </ul>
                </li>
                <li class="li_right"><img id="cart" src="images/cart.png"></li>
            </ul>
        </nav>
        <!--End Navigation Bar-->

        <div id="myAccount">
            <div id="accountInfo">
                <div id="personalInfo">
                    <form action="editPersonalPHP.php" method="post">
                        <h2 class="infoHeaders">Personal Information</h2>
                        <p><strong>First Name:</strong>
                            <input type="text" placeholder="<?php echo $info['first'] ?>" name="first"><br>
                        </p>
                        <p><strong>Last Name:</strong>
                            <input type="text" placeholder="<?php echo $info['last'] ?>" name="last"><br>
                        </p>
                        <p><strong>Phone Number:</strong>
                        <input type="text" placeholder="<?php echo $info['phone'] ?>" name="phone"><br>
                        </p>
                        <input type="submit" name="Save"><br>
                    </form>
                </div><br>
                <div id="emailAndPass">
                <form action="editEmailAndPass.php" method="post">
                        <h2 class="infoHeaders">E-Mail and Password</h2>
                        <p><strong>Email:</strong>
                            <?php echo $info['email']; ?>
                        </p>
                        <p><strong>Password:</strong> *****</p>
                        <input type="submit" value="Edit E-Mail and Password">
                    </form>
                </div><br>
                <div id="addressAndPayment">
                    <form action="editAddress.php" method="post">
                        <h2 class="infoHeaders">Address and Payment Information</h2>
                        <p><strong>Address:</strong><br>
                            <?php echo $addressInfo['street']; ?>
                            <?php echo $addressInfo['city']; ?>,
                            <?php echo $addressInfo['state']; ?>,
                            <?php echo $addressInfo['zipcode']; ?>
                        </p>
                        <input type="submit" value="Edit Address Information">
                    </form>
                    <form action="editPayment.php" method="post">
                        <p><strong>Payment Information:</strong><br>
                            <?php echo $paymentInfo['card_type']; ?> <?php echo $paymentInfo['card_num']; ?>
                        </p>
                        <input type="submit" value="Edit Payment Information">
                    </form>
                </div>
            </div>
        </div>


    </div>

</body>
<footer>

</footer>

</html>