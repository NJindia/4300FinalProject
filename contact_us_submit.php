<?php
    include('database.php');
    if (!isset($_SESSION)) {
    session_start();
}
    $user_id = $_SESSION['user_id'];

$first = $_POST['firstName'];
$last = $_POST['lastName'];
$email = $_POST['email'];
$message = $_POST['message'];
$additional = $_POST['additionalInfo'];



if (empty($first)) {
        $first_error = "Please input a name";
        echo $first;
}
else {
        $query = "INSERT INTO contact_us (first, last, email, message, additional) VALUES ('$first', '$last', '$email', '$message', '$additional')";
        $db->exec($query);
        echo $first;
}

// header("location:contact_us_ty.php");
?>