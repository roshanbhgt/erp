<?php
// Includng configuration file
include 'config/config.php';

$admin = new admin();
if(!empty($_POST) && isset($_POST['username']) && isset($_POST['password'])){
    $data = $_POST;
    if($admin->login($data)){
        $_SESSION['message'] = 'You have login successfully!';
        header('Location: '.FRONTEND.'dashboard.php');
        exit;
    }else{
        $_SESSION['message'] = 'Wrong password entered!';
        header('Location: '.FRONTEND.'index.php');
        exit;
    }
}