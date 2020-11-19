<?php
require_once('database.php');

// $query = "SELECT * FROM user_info WHERE id = '1'";
// $info = $db->query($query);
// $info = $info->fetch();

// $query = "SELECT * FROM address WHERE user_id = '1'";
// $addressInfo = $db->query($query);
// $addressInfo = $addressInfo->fetch();

// $query = "SELECT * FROM payment WHERE user_id = '1'";
// $paymentInfo = $db->query($query);
// $paymentInfo = $paymentInfo->fetch();

// if(isset($_POST['email'])) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $query="select * from user_info where email='".$email."'AND password='".$password."' 
//     limit 1";

//     $result= $db->query($query);
//     $info= $result->fetch();

//     if($info>0) {
//         echo "You Have Successfully Logged In";
//         exit();
//     }
//     else{
//         echo "The Password Entered is Incorrect";
//     }
// }
// ?>


<?php
    SESSION_start(); ?> <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf8">
    <title>Log In</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="contact_us.css">
</head>

<body>
    <div id="main">
        <img id="icon" src="images/icon.png">
        <a href="home.php"><img id="title_logo" src="images/title.png"></a><br>
        <!--Start Navigation Bar-->
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
        <!--End Navigation Bar-->

        <div id="contact_us">
            <div class="center">
                <img id="icon2" src="images/icon.png">
                <h1 class ="black no_top_margin">Welcome to Smoke Games</h1>
            </div>

                <form method="POST" action="process_login.php">
                <fieldset id="login_fieldset">
                    <div class="center_div">
                        <div class="name_div">
                            <input class="login_input" type="text" name="email" required autofocus placeholder="Email"> <br> 
                        </div>
                        <div class="name_div">
                            <input class="login_input" type="text" name="password" required placeholder="Password"> <br>
                        </div><br>
                        <div class="name_div">
                        <button class="login_button" type="submit" id="submit">Log In </button>
                        </div>
                        <br>
                        <?php 
                            if(@$_GET['Invalid']==true) { ?>
                                <div class="red"><?php echo $_GET['Invalid'];

                            }

                        ?></div>
                        <a href="signUp.php" style="text-decoration:none;">  <p class="slategrey bold">Not a member yet? Sign up </p> </a>
                    </div><br>
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
<footer>

</footer>

</html>