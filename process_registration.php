<?php
    include('database.php');

$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$street = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zipcode'];
$cardType = $_POST['cardType'];
$cardNumber = $_POST['cardNumber'];
$expiration = $_POST['expiration'];


// if (empty($first)) {
//         $first_error = "Please input a name";       
// }
// else {
//         $query = "INSERT INTO user_info (first, last, email, password, phone) VALUES ('$first', '$last', '$email', '$phone', '$password')";
//         $db->exec($query);    
// }
if (!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Please input a valid E-Mail Address.";
        } else {
            $query = "INSERT INTO user_info SET email = '$email'";
            $db->exec($query);
        }
    }
    if (!empty($password)) {
        if (!preg_match('/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/', $password)) {
            $newPass_error = "Please input a valid New Password.<br>
            A password must be 8-20 characters long with at least: 1 Uppercase, 1 number, and 1 special character.";
        } else {
            $query = "INSERT INTO user_info SET password = '$password'";
            $db->exec($query);
        }
    }

if (!empty($first)) {
    if (!preg_match("/^[a-zA-Z]+$/", $first)) {
        $first_error = "Please input a valid first name.";
    } else {
        $query = "INSERT INTO user_info SET first = '$first'";
        $db->exec($query);
    }
}
if (!empty($last)) {
    if (!preg_match("/^[a-zA-Z]+$/", $last)) {
        $last_error = "Please input a valid last name.";
    } else {
        $query = "INSERT INTO user_info SET last = '$last'";
        $db->exec($query);
    }
}
if (!empty($phone)) {
    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        $phone_error = "Please input a valid phone number.";
    } else {
        $query = "INSERT INTO user_info SET phone = '$phone'";
        $db->exec($query);
    }
}



// $query = "INSERT INTO payment (card_type, card_num, expiration) VALUES ('$cardType', '$cardNumber', '$expiration')";
//         $db->exec($query);

if (!empty($cardNumber)) {
    if (!preg_match("/^[0-9]{16}$/",$cardNumber)) {
        $card_num_error = "Please enter a valid Card Number.";
    }
    else { 
        $query = "INSERT INTO payment SET card_num = '$cardNumber'";
        $db->exec($query);
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
    else {
            $query = "INSERT INTO payment SET expiration = '$expiration'";
        $db->exec($query);
    }
}
else {
    $expiration_error = "Please enter a valid Expiration Date.";
}

        
//  $query = "INSERT INTO address (street, city, state, zipcode) VALUES ('$street', '$city', '$state', '$zip')";
//         $db->exec($query);
//         echo $first;       


        if (!empty($street)) {
    if (!preg_match("/^[a-zA-Z0-9 ]+$/",$street)) {
        $street_error = "Please input a valid Street name.";
    }
    else {
        $query = "INSERT INTO address SET street = '$street'";
        $db->exec($query);
    }
}

if (!empty($city)) {
    if (!preg_match("/^[a-zA-Z]+$/",$city)) {
        $city_error = "Please input a valid City.";
    }
    else {
        $query = "INSERT INTO address SET city = '$city'";
        $db->exec($query);
    }
}

if (!empty($state)) {
    if (!preg_match("/^[a-zA-Z]+$/",$state)) {
        $state_error = "Please input a valid State.";
    }
    else {
        $query = "INSERT INTO address SET state = '$state'";
        $db->exec($query);
    }
}

if (!empty($zip)) {
    if (!preg_match("/^[0-9]{5}$/",$zip)) {
        $zipcode_error = "Please input a valid Zipcode.";
    }
    else {
        $query = "INSERT INTO address SET zip VALUES '$zip'";
        $db->exec($query);
    }
}
if (empty($street_error) && empty($city_error) && empty($state_error) && empty($zipcode_error) && empty($first_error) && 
empty($email_error) && empty($currentPass_error) && empty($newPass_error) && empty($last_error) && empty($phone_error)
&& empty($card_type_error) && empty($card_num_error) && empty($expiration_error)) {
    $query = "INSERT INTO user_info (first, last, email, password, phone) VALUES ('$first', '$last', '$email', '$phone', '$password')";
    $db->exec($query);
        $query = "SELECT user_id FROM user_info WHERE user_id = (SELECT Max(user_id) FROM user_info)";
        $lastID = $db->query($query);
        
    $query = "INSERT INTO address (user_id,street, city, state, zipcode) VALUES ('$lastID', '$city', '$state', '$zip')";
    $db->exec($query);  
    $query = "INSERT INTO payment (user_id,card_type, card_num, expiration) VALUES ('$lastID', '$cardNumber', '$expiration')";
    $db->exec($query);


        header("location:login.php");
}

else {
    include("registration.php");
}



?>