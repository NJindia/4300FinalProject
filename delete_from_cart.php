<?php
require_once('database.php');
$cart_id = filter_input(INPUT_POST, 'cart_id', FILTER_VALIDATE_INT);
$query = 'DELETE FROM cart WHERE cart_id=:cart_id';
$statement = $db->prepare($query);
$statement->bindValue(':cart_id', $cart_id);
$statement->execute();
$statement->closeCursor();

include('cart.php');
?>