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

<?php
SESSION_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf8">
    <title>My Account</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="myAccount.css">
</head>

<body>
    <div id="main">
        <img id="icon" src="images/icon.png"><br>
        <!--Start Navigation Bar-->
        <nav id="text_nav" class="top_nav">
            <ul>
                <li class="li_left" id="currPage"><a href="home.php">Home</a></li>
                <li class="li_left"><a href="about_us.php">About Us</a></li>
                <li class="li_left"><a href="contact_us.php">Contact Us</a></li>
                <li class="li_right"><img id="pfp" src="images/profilepic.png">
                    <ul>
                        <?php
                        if (!isset($_SESSION['first'])) { ?>
                            <li><a href="login.php">Sign Up/Log In</a></li> <!-- when logged in should be deactivated -->
                        <?php } ?>
                        <li><a href="">My Account</a></li>
                        <?php
                        if (isset($_SESSION['first'])) { ?>
                            <li><a href="logout.php">Log Out</a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="li_right"><img id="cart" src="images/cart.png"></li>
            </ul>
        </nav>
        <!--End Navigation Bar-->

        <div id="myAccount">
            <div id="accountInfo">
                <div id="personalInfo">
                    <form action="editPersonal.php" method="post">
                        <h2 class="infoHeaders">Personal Information</h2>
                        <p><strong>First Name:</strong>
                            <?php echo $info['first']; ?>
                        </p>
                        <p><strong>Last Name:</strong>
                            <?php echo $info['last']; ?>
                        </p>
                        <p><strong>Phone Number:</strong>
                            <?php echo $info['phone']; ?>
                        </p>
                        <input type="submit" value="Edit Personal Information">
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
                        <form action="editPaymentPHP.php" method="post">
                            <p><strong>Change Payment Information:</strong><br>
                                <p><strong>Card Type:</strong>
                                    <select name="card_type">
                                        <option value="American Express">American Express</option>
                                        <option value="Discover">Discover</option>
                                        <option value="Master Card">Master Card</option>
                                        <option value="Visa">Visa</option>
                                    </select>*
                                    <?php if (isset($card_type_error)) { ?>
                                        <span class="error"><?php echo $card_type_error ?></span>
                                    <?php } ?>
                                </p>
                                <p><strong>Card Number:</strong>
                                    <input type="text" placeholder="<?php echo $paymentInfo['card_num'] ?>" name="card_num">*<br>
                                    <?php if (isset($card_num_error)) { ?>
                                        <span class="error"><?php echo $card_num_error ?></span>
                                    <?php } ?>
                                </p>
                                <p><strong>Expiration:</strong>
                                    <input type="text" placeholder="YYYY-MM-DD" name="expiration">*<br>
                                    <?php if (isset($expiration_error)) { ?>
                                        <span class="error"><?php echo $expiration_error ?></span>
                                    <?php } ?>
                                </p>
                            </p>
                            <input type="submit" value="Save">
                        </form>
                    </div>
                </div>
            </div>


        </div>

</body>
<footer>

</footer>

</html>