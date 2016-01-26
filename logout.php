<?php
// Includng configuration file
include 'config/config.php';

session_destroy();
$_SESSION['message'] = 'You have been logout successfully.';
header('Location: '.FRONTEND.'index.php');
exit;

