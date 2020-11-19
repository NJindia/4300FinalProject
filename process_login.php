<?php
session_start();
require_once('database.php');

$query = "SELECT * FROM user_info WHERE id = '1'";
$info = $db->query($query);
$info = $info->fetch();

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(isset($_POST['email'])) {
        if(empty($_POST['email']) || empty($_POST['password'])) {
            header("location:login.php?Empty= Incorrect email/password");
        }
        else {
            $query="select * from user_info where email='".$email."'AND password='".$password."' 
            limit 1";

            $result= $db->query($query);
            $info= $result->fetch();

            if($info>0) {
                $_SESSION['email']=$_POST['email'];
                $_SESSION['first'] = $info['first'];
                header("location:home.php");

                }

            else{
                header("location:login.php?Invalid= Incorrect username/password ");
            }
        }
    }
?>