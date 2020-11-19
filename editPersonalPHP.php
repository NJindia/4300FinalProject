<?php

include('database.php');
$userID = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT);

$first = $_POST['first'];
$last = $_POST['last'];
$phone = $_POST['phone'];

if (($first != "") && ($last == "") && ($phone == "")) {
    $query = "UPDATE user_info SET first = '$first' WHERE id = '1'";
    $db->exec($query);
    echo "hi";
} 
else if (($first == "") && ($last != "") && ($phone == "")) {
    $query = "UPDATE user_info SET last = '$last' WHERE id = '1'";
    $db->exec($query);
} 
else if (($first == "") && ($last == "") && ($phone != "")) {
    $query = "UPDATE user_info SET phone = '$phone' WHERE id = '1'";
    $db->exec($query);
    echo "what up";
} 
else if (($first != "") && ($last != "") && ($phone != "")) {
    $query = "UPDATE user_info SET first = '$first', last = '$last', phone = '$phone' WHERE id = '1'";
    $db->exec($query);
} 
else if (($first == "") && ($last != "") && ($phone != "")) {
    $query = "UPDATE user_info SET last = '$last', phone = '$phone' WHERE id = '1'";
    $db->exec($query);
} 
else if (($first != "") && ($last == "") && ($phone != "")) {
    $query = "UPDATE user_info SET first = '$first', phone = '$phone' WHERE id = '1'";
    $db->exec($query);
}
else if (($first != "") && ($last != "") && ($phone == "")) {
    $query = "UPDATE user_info SET first = '$first', last = '$last' WHERE id = '1'";
    $db->exec($query);
} 

include('myAccount.php');

?>