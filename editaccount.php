<?php
// Includng configuration file
include 'config/config.php';

//Check user is already login or not
checkAuthentication();

$admin = new admin();
$id = $_SESSION['adminid'];

if(!empty($_POST) && isset($_POST['update']) && $_POST['update'] == 'Update'){
    $data = $_POST;
    $admin->updateCompany($data);
}

$company = $admin->getCompany($id);
$billing = $admin->getDefaultBilling($id);

$smarty->assign('company', $company);
$smarty->assign('content', $smarty->fetch('editaccount.tpl'));
$smarty->display('two-column-left.html');

?>

