<?php

// Includng configuration file
include 'config/config.php';

//Check user is already login or not
checkAuthentication();

$id = $_SESSION['adminid'];
$customer = new customer();

if(isset($_GET['action']) && $_GET['action'] == 'new'){
    $smarty->assign('content', $smarty->fetch('addcustomer.tpl'));
}elseif(isset($_GET['action']) && $_GET['action'] == 'edit'){
    $id = $_GET['id'];
    $smarty->assign('customer', $customer->getCustomer($id));
    $smarty->assign('billing', $customer->getCustomerBilling($id));
    $smarty->assign('shipping', $customer->getCustomerShipping($id));
    $smarty->assign('tax', $customer->getCustomerTax($id));
    $smarty->assign('content', $smarty->fetch('editcustomer.tpl'));
}elseif (isset($_POST['action']) && $_POST['action'] == 'add'){
    $data = $_POST['data']['Customer'];
    if($customer->addCustomer($data)){
        header('Location: '.FRONTEND.'customer.php');
        exit;
    }
}elseif (isset($_POST['action']) && $_POST['action'] == 'update'){
    $data = $_POST['data']['Customer'];
    if($customer->updateCustomer($data)){
        header('Location: '.FRONTEND.'customer.php');
        exit;
    }
}elseif(isset($_GET['action']) && $_GET['action'] == 'search'){
    $keyword = $_POST['keywords'];
    $smarty->assign('customer', $customer->getSearchCustomers($keyword));
    $smarty->assign('content', $smarty->fetch('customerlist.tpl'));    
}else{
    $page = 0;
    if(isset($_GET['page'])){
        $page = $_GET['page'];      
    }
    $customers = $customer->getCustomers($page, $offset=10);
    $smarty->assign('customercount', $customer->getCustomersCount());
    $smarty->assign('page', $page);
    
    $smarty->assign('customer', $customers);
    $smarty->assign('content', $smarty->fetch('customerlist.tpl'));    
}
$smarty->assign('action', 'customer');
$smarty->assign('toolbar', $smarty->fetch('toolbar.tpl'));
$smarty->display('two-column-left.html');

?>