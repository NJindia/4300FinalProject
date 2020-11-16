<?php

include('database.php');
$userID = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT);

$first=$_POST['first'];
$last=$_POST['last'];
$phone=$_POST['phone'];


$query="UPDATE user_info SET first = '$first', last = '$last', phone = $phone WHERE id = '1'" ;
$db->exec($query);

include('myAccount.php');
?>