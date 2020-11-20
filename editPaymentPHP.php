<?php

include('database.php');
$userID = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT);

$card_type = $_POST['card_type'];
$card_num = $_POST['card_num'];
$expiration = $_POST['expiration'];


if (!empty($card_num)) {
    if (!preg_match("/^[0-9]{16}$/",$card_num)) {
        $card_num_error = "Please enter a valid Card Number.";
    }
}
else {
    $card_num_error = "Please enter a valid Card Number.";
}
function validateDate($date, $format= 'Y-m-d'){
    return $date == date($format, strtotime($date));
}
if (!empty($expiration)) {
    if (!validateDate($expiration)){
        $expiration_error = "Please enter a valid Expiration Date.";
    }
}
else {
    $expiration_error = "Please enter a valid Expiration Date.";
}

if (empty($card_type_error) && empty($card_num_error) && empty($expiration_error)) {
    $query = "UPDATE payment SET card_type = '$card_type', card_num = '$card_num', expiration = '$expiration' WHERE user_id = '1'";
    $db->exec($query);
    include('myAccount.php');
}
else {
    include("editPayment.php");
}
?>