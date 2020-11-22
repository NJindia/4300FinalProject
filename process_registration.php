<?php
    include('database.php');

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$street = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zipcode'];
$cardType = $_POST['cardType'];
$cardNumber = $_POST['cardNumber'];
$expiration = $_POST['expiration'];


if (empty($first)) {
        $first_error = "Please input a name";       
}
else {
        $query = "INSERT INTO user_info (first, last, email, password, phone) VALUES ('$first', '$last', '$email', '$phone', '$password')";
        $db->exec($query);    
}
$query = "INSERT INTO payment (card_type, card_num, expiration) VALUES ('$cardType', '$cardNumber', '$expiration')";
        $db->exec($query);
        
//  $query = "INSERT INTO address (street, city, state, zipcode) VALUES ('$street', '$city', '$state', '$zip')";
//         $db->exec($query);
//         echo $first;       


        if (!empty($street)) {
    if (!preg_match("/^[a-zA-Z0-9 ]+$/",$street)) {
        $street_error = "Please input a valid Street name.";
    }
    else {
        $query = "INSERT INTO address SET (street) VALUES ('$street')";
        $db->exec($query);
    }
}

if (!empty($city)) {
    if (!preg_match("/^[a-zA-Z]+$/",$city)) {
        $city_error = "Please input a valid City.";
    }
    else {
        $query = "INSERT INTO address SET (city) VALUES ('$city')";
        $db->exec($query);
    }
}

if (!empty($state)) {
    if (!preg_match("/^[a-zA-Z]+$/",$state)) {
        $state_error = "Please input a valid State.";
    }
    else {
        $query = "INSERT INTO address SET (state) VALUES ('$state')";
        $db->exec($query);
    }
}

if (!empty($zip)) {
    if (!preg_match("/^[0-9]{5}$/",$zip)) {
        $zipcode_error = "Please input a valid Zipcode.";
    }
    else {
        $query = "INSERT INTO address SET (zip) VALUES ('$zip')";
        $db->exec($query);
    }
}
if (empty($street_error) && empty($city_error) && empty($state_error) && empty($zipcode_error)) {
    header("location:login.php");
}

else {
    include("registration.php");
}



?>