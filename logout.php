<?php
// Includng configuration file
include 'config/config.php';

session_destroy();

header('Location: '.FRONTEND.'index.php');
exit;

