<?php
// Includng configuration file
include 'config/config.php';

//Check user is already login or not
checkAuthentication();

$id = $_SESSION['adminid'];
$admin = new admin();
$company = $admin->getCompany($id);
$contacts = $admin->getContacts($id);
$smarty->assign('company', $company);
$smarty->assign('action', 'contact');

if(isset($_GET['action']) && $_GET['action'] == 'new'){
    $smarty->assign('action', 'billing');
    $smarty->assign('content', $smarty->fetch('addbilling.tpl'));
}elseif(isset($_POST['action']) && $_POST['action'] == 'add'){
    $data = $_POST;
    if($data['default_billing'] == 'on'){
        $data['default_billing'] = 1;
    }else{
        $data['default_billing'] = '';
    }
    $admin->addBilling($data);
    header('Location: '.FRONTEND.'account.php');
    exit;
}else{   
    $smarty->assign('contacts', $contacts);
    $smarty->assign('content', $smarty->fetch('contacts.tpl'));
}
$smarty->assign('toolbar', $smarty->fetch('toolbar.tpl'));
$smarty->display('two-column-left.html');

?>

