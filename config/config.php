<?php

// Loding constant
require_once ('config/constants.php');

// Session setting
ini_set('session.save_handler', 'files');
$sessionpath = SESSION_FRONTEND_PATH;

ini_set('session.save_path', $sessionpath);
if(!isset($_SESSION) && !headers_sent()){
	session_start();
	ini_set('session.gc_probability', 1);
}
ini_set('session.gc_maxlifetime', 50*30*60);

set_time_limit(0);
date_default_timezone_set("Asia/Calcutta");

// Loading smarty library
require_once ('lib/Database/Database.class.php');

$dbObj = new Database();

// Loading smarty library
require_once ('lib/Smarty/Smarty.class.php');

$smarty = new Smarty();

$smarty->force_compile = false;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 30;

$smarty->assign('FRONTEND', FRONTEND);
$smarty->assign('session', $_SESSION);
$smarty->assign('message', $_SESSION['message']);
$_SESSION['message'] = '';

?>