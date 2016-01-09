<?php
// Includng configuration file
include 'config/config.php';

//Check user is already login or not
checkAuthentication();

$id = $_SESSION['adminid'];
$admin = new admin();
$company = $admin->getCompany($id);
$billing = $admin->getDefaultBilling($id);
$smarty->assign('action', 'billing');
$smarty->assign('toolbar', $smarty->fetch('toolbar.tpl'));

if(isset($_GET['action']) && $_GET['action'] == 'new'){
    $smarty->assign('content', $smarty->fetch('admin_contact.tpl'));
}elseif(isset($_POST['action']) && $_POST['action'] == 'add'){
    $data = $_POST['data']['Contact'];
    if($admin->addContact($data)){
        header('Location: '.FRONTEND.'billinginfo.php');
        exit;
    }
}else{
    $smarty->assign('company', $company);
    $smarty->assign('billing', $billing);
    $smarty->assign('content', $smarty->fetch('account.tpl'));
}
$smarty->display('two-column-left.html');

?>

