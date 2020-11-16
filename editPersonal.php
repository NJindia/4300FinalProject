<?php

include('database.php');
$userID = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT);


$query="UPDATE user_info WHERE id = '$userID'";
$db->exec($query);

include('index1.php');
?>