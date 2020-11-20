<?php
require_once('database.php');
$user_id = 1;
$itemsQuery = 'SELECT * FROM cart WHERE user_id = :user_id';
$statement = $db->prepare($itemsQuery);
$statement->bindValue(':user_id', $user_id);
$statement->execute();
$items = $statement->fetchAll();
$statement->closeCursor();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf8">
    <title>Smoke Games</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="cart.css">
    <script src="cart.js"></script>
</head>

<body>
    <div id="main">
        <a href="home.php"><img id="icon" src="images/icon.png"></a>
        <a href="home.php"><img id="title_logo" src="images/title.png"></a><br>
        <nav id="text_nav" class="top_nav">
            <ul>
                <li class="li_left" id="currPage"><a href="home.php">Home</a></li>
                <li class="li_left"><a href="about_us.php">About Us</a></li>
                <li class="li_left"><a href="contact_us.php">Contact Us</a></li>
                <li class="li_right"><img id="pfp" src="images/profilepic.png">
                    <ul>
                        <li><a href="myAccount.php">My Account</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                </li>
                <?php
                if (isset($_SESSION['first'])) { ?><li class="li_right"><a href="cart.php"><img id="cart" src="images/cart.png"></a></li><?php } ?>
            </ul>
        </nav>
        <div id="cart">
            <h1>Cart</h1>
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>Item</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                </thead>
                <?php foreach ($items as $item) : ?>
                    <tr>
                        <td class="preview">
                            <?php
                            if ($item['name'] == "DStacker") { ?>
                                <img src="images/DStacker.png">
                            <?php } ?>
                            <?php
                            if ($item['name'] == "Hack_It;") { ?>
                                <img src="images/hack_it.png">
                            <?php } ?>
                            <?php
                            if ($item['name'] == "Mine Sweeper") { ?>
                                <img src="images/minesweeper.png">
                            <?php } ?>
                        </td>

                        <td><?php echo $item['name']; ?></td>
                        <td><?php echo $item['price']; ?></td>
                        <td>
                            <form action="delete_from_cart.php" method="post">
                                <input type="hidden" name="cart_id" value="<?php echo $item['cart_id']; ?>">
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <a href="checkout.php"><img id="checkout" src="images/checkout.png"></a>
    </div>
</body>

</html>