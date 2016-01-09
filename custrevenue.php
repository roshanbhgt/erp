<?php

// Includng configuration file
include 'config/config.php';

//Check user is already login or not
checkAuthentication();

$id = $_SESSION['adminid'];
$customer = new customer();

if(isset($_GET['action']) && $_GET['action'] == 'custinvmarkpaid'){
    $id = $_GET['id'];
    $invoice = $customer->getCustomersInvoice($id);    
    $smarty->assign('invoice', $customer->getCustomersInvoice($id));
    $smarty->assign('content', $smarty->fetch('custinvmarkpaid.tpl'));
}elseif (isset($_POST['action']) && $_POST['action'] == 'markpaid'){
    $data = $_POST;
    if($customer->markInvoicedPaid($data)){
        header('Location: '.FRONTEND.'custrevenue.php');
        exit;
    }
}elseif(isset($_GET['action']) && $_GET['action'] == 'invoicelist'){
    $id = $_GET['id'];
    $smarty->assign('customer', $customer->getCustomer($id));
    $smarty->assign('invoices', $customer->getCustomersInvoices($id));
    $smarty->assign('content', $smarty->fetch('custinvoicelist.tpl'));    
}else{
    $page = 0;
    if(isset($_GET['page'])){
        $page = $_GET['page'];      
    }
    $customers = $customer->getCustomers($page, $offset=10);
    $smarty->assign('customercount', $customer->getCustomersCount());
    $smarty->assign('page', $page);
    
    $smarty->assign('customer', $customers);
    $smarty->assign('content', $smarty->fetch('custrevenue.tpl'));    
}
$smarty->assign('action', 'customer');
$smarty->assign('toolbar', $smarty->fetch('toolbar.tpl'));
$smarty->display('two-column-left.html');

?>