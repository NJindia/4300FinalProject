<?php
include('database.php');

$query = "SELECT * FROM user_info WHERE id = '1'";
$info = $db->query($query);
$info = $info->fetch();
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
                <li class="li_left"><a href="">Contact Us</a></li>
                <li class="li_right"><img id="pfp" src="images/profilepic.png">
                    <ul>
                        <li><a href="">Sign Up/Log In</a></li> <!-- when logged in should be deactivated -->
                        <li><a href="">My Account</a></li>
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
                        <input type="submit" name = "userID" value=<?php echo$info['id'];?>>
                    </form>
                </div><br>
                <div id="emailAndPass">
                    <form action="" method="post">
                        <h2 class="infoHeaders">E-Mail and Password</h2>
                        <p><strong>Email:</strong>
                            <?php echo $infos['email']; ?>
                        </p>
                        <p><strong>Password:</strong> *****</p>
                        <input type="submit" value="Edit E-Mail and Password">
                    </form>
                </div><br>
                <div id="addressAndPayment">
                    <form action="" method="post">
                        <h2 class="infoHeaders">Address and Payment Information</h2>
                        <p><strong>Address:</strong><br>
                            1 Way St, Athens, GA 30605
                        </p>
                        <p><strong>Payment Information:</strong><br>
                            Visa XXXX-XXXX-XXXX-1234
                        </p>
                        <input type="submit" value="Edit Address and Payment Information">
                    </form>

                </div>
            </div>
        </div>


    </div>

</body>
<footer>

</footer>

</html>