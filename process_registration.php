<?php
    include('database.php');

    $user_id = $_SESSION['user_id'];

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zipcode'];
$cardType = $_POST['cardType'];
$cardNumber = $_POST['cardNumber'];
$expiration = $_POST['expiration'];


if (empty($first)) {
        $first_error = "Please input a name";
        echo $first;
}
else {
        $query = "INSERT INTO user_info (first, last, email, password, phone) VALUES ('$first', '$last', '$email', '$phone', '$password')";
        $db->exec($query);
        echo $first;
}
$query = "INSERT INTO payment (card_type, card_num, expiration) VALUES ('$cardType', '$cardNumber', '$expiration')";
        $db->exec($query);
        echo $first;
        
 $query = "INSERT INTO address (street, city, state, zipcode) VALUES ('$address', '$city', '$state', '$zip')";
        $db->exec($query);
        echo $first;       

header("location:login.php");
?>