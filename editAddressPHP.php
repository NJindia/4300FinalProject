<?php

include('database.php');
$userID = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT);

$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];


if (!empty($street)) {
    if (!preg_match("/^[a-zA-Z0-9 ]+$/",$street)) {
        $street_error = "Please input a valid Street name.";
    }
    else {
        $query = "UPDATE address SET street = '$street' WHERE user_id = '1'";
        $db->exec($query);
    }
}

if (!empty($city)) {
    if (!preg_match("/^[a-zA-Z]+$/",$city)) {
        $city_error = "Please input a valid City.";
    }
    else {
        $query = "UPDATE address SET city = '$city' WHERE user_id = '1'";
        $db->exec($query);
    }
}

if (!empty($state)) {
    if (!preg_match("/^[a-zA-Z]+$/",$state)) {
        $state_error = "Please input a valid State.";
    }
    else {
        $query = "UPDATE address SET state = '$state' WHERE user_id = '1'";
        $db->exec($query);
    }
}

if (!empty($zipcode)) {
    if (!preg_match("/^[0-9]{5}$/",$zipcode)) {
        $zipcode_error = "Please input a valid Zipcode.";
    }
    else {
        $query = "UPDATE address SET zipcode = '$zipcode' WHERE user_id = '1'";
        $db->exec($query);
    }
}

if (empty($street_error) && empty($city_error) && empty($state_error) && empty($zipcode_error)) {
    include('myAccount.php');
}
else {
    include("editAddress.php");
}
?>
