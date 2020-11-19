<?php

include('database.php');
$userID = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT);

$card_type = $_POST['card_type'];
$card_num = $_POST['card_num'];
$expiration = $_POST['expiration'];

if (($card_type != "") && ($card_num != "") && ($expiration !="")) {
    $query = "UPDATE payment SET card_type = '$card_type', card_num = '$card_num', expiration = '$expiration' WHERE user_id = '1'";
    $db->exec($query);
}

include('myAccount.php');
?>