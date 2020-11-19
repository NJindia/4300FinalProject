<?php

include('database.php');
$userID = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT);

$query = "SELECT password FROM user_info WHERE id = '1' ";
$info = $db->query($query);
$info = $info->fetch();

$email=$_POST['email'];
$currentPass=$_POST['currentPass'];
$newPass=$_POST['newPass'];



if ($currentPass == $info['password']) {
    
    if(($email == "") && ($pass != "")) {
        $query="UPDATE user_info SET password = '$newPass' WHERE id = '1'" ;
        $db->exec($query);
    }
    else if(($email != "") && ($pass == "")){
        $query="UPDATE user_info SET email = '$email' WHERE id = '1'" ;
        $db->exec($query);
    }
    else {
        $query="UPDATE user_info SET email = '$email', password = '$newPass' WHERE id = '1'" ;
        $db->exec($query);
    }
}

include('myAccount.php');
?>