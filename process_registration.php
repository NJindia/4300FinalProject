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
$expiration;
$expiration = $_POST['expiration'];

$query = "SELECT email FROM user_info WHERE email = '$email'";
$check = $db->query($query);
$check = $check->fetch();

if ($check['email'] != null) {
    $email_error = "This E-Mail already exists. Please enter a valid E-Mail.";
}



//--------personal info--------
if (!empty($first)) {
    if (!preg_match("/^[a-zA-Z]+$/", $first)) {
        $first_error = "Please input a valid first name.";
    }
} else {
    $first_error = "Please input a valid first name.";
}

if (!empty($last)) {
    if (!preg_match("/^[a-zA-Z]+$/", $last)) {
        $last_error = "Please input a valid last name.";
    }
} else {
    $last_error = "Please input a valid last name.";
}

if (!empty($phone)) {
    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        $phone_error = "Please input a valid phone number.";
    }
} else {
    $phone_error = "Please input a valid phone number.";
}

//--------email and pass info--------
if (!empty($email)) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Please input a valid E-Mail Address.";
    }
} else {
    $email_error = "Please input a valid E-Mail Address.";
}
if (!empty($password)) {
    if (!preg_match('/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/', $password)) {
        $newPass_error = "Please input a valid New Password.<br>
         A password must be 8-20 characters long with at least: 1 Uppercase, 1 number, and 1 special character.";
    }
} else {
    $newPass_error = "Please input a valid New Password.<br>
         A password must be 8-20 characters long with at least: 1 Uppercase, 1 number, and 1 special character.";
}

//--------Address info--------
if (!empty($street)) {
    if (!preg_match("/^[a-zA-Z0-9 ]+$/", $street)) {
        $street_error = "Please input a valid Street name.";
    }
} else {
    $street_error = "Please input a valid Street name.";
}

if (!empty($city)) {
    if (!preg_match("/^[a-zA-Z]+$/", $city)) {
        $city_error = "Please input a valid City.";
    }
} else {
    $city_error = "Please input a valid City.";
}

if (!empty($state)) {
    if (!preg_match("/^[a-zA-Z]+$/", $state)) {
        $state_error = "Please input a valid State.";
    }
} else {
    $state_error = "Please input a valid State.";
}

if (!empty($zip)) {
    if (!preg_match("/^[0-9]{5}$/", $zip)) {
        $zipcode_error = "Please input a valid Zipcode.";
    }
} else {
    $zipcode_error = "Please input a valid Zipcode.";
}

//---------payment info---------
if (!empty($cardNumber)) {
    if (!preg_match("/^[0-9]{16}$/", $cardNumber)) {
        $card_num_error = "Please enter a valid Card Number.";
    } 
} else {
    $card_num_error = "Please enter a valid Card Number.";
}


if (
    empty($street_error) && empty($city_error) && empty($state_error) && empty($zipcode_error) && empty($first_error) &&
    empty($email_error) && empty($currentPass_error) && empty($newPass_error) && empty($last_error) && empty($phone_error)
    && empty($card_type_error) && empty($card_num_error) && empty($expiration_error)
) {
    $query = "INSERT INTO user_info (first, last, email, password, phone) VALUES ('$first', '$last', '$email', '$password', '$phone')";
    $db->exec($query);

    $query = "SELECT id FROM user_info WHERE email = '$email'";
    $info = $db->query($query);
    $info = $info->fetch();

    $id = $info['id'];
    $query = "INSERT INTO address (user_id, street, city, state, zipcode) VALUES ('$id', '$street','$city', '$state', '$zip')";
    $db->exec($query);
    $expiration = '2020-02-02';
    $cardNumber = '1234123412341234';
    $cardType = 'Visa';
    $query = "INSERT INTO payment (user_id, card_type, card_num, expiration) VALUES ('$id', '$cardType', '$cardNumber', '$expiration')";
    $db->exec($query);


    header("location:login.php");
} else {
    include("registration.php");
}
