<?php
// Includng configuration file
include 'config/config.php';

$smarty->assign('content', $smarty->fetch('home.tpl'));
$smarty->display('empty.html');

?>
