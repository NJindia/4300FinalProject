<?php

include('database.php');
$userID = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT);

$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];

$query = "UPDATE address SET street = '$street', city = '$city', state = '$state', zipcode = '$zipcode' WHERE user_id = '1'";
$db->exec($query);


include('myAccount.php');
