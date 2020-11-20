<?php

include('database.php');
session_start();

$userID = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT);

$user_id = $_SESSION['user_id'];

$query = "SELECT password FROM user_info WHERE id = $user_id";
$info = $db->query($query);
$info = $info->fetch();

$email = $_POST['email'];
$currentPass = $_POST['currentPass'];
$newPass = $_POST['newPass'];


if ($currentPass == $info['password']) {
    if (!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Please input a valid E-Mail Address.";
        } else {
            $query = "UPDATE user_info SET email = '$email' WHERE id = $user_id";
            $db->exec($query);
        }
    }
    if (!empty($newPass)) {
        if (!preg_match('/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/', $newPass)) {
            $newPass_error = "Please input a valid New Password.";
        } else {
            $query = "UPDATE user_info SET password = '$newPass' WHERE id = $user_id";
            $db->exec($query);
        }
    }
}

else {
    $currentPass_error = "The Current Password is Incorrect";
}

if (empty($email_error) && empty($currentPass_error) && empty($newPass_error)) {
    include('myAccount.php');
}
else {
    include("editEmailAndPass.php");
}
?>
