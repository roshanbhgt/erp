<?php
// Includng configuration file
include 'config/config.php';

//Check user is already login or not
checkAuthentication();

$id = $_SESSION['adminid'];
$order = new invoice();
$customer = new customer();

if(isset($_GET['action']) && $_GET['action'] == 'new'){
    $smarty->assign('content', $smarty->fetch('searchchalaninvoice.tpl'));
}elseif(isset($_GET['action']) && $_GET['action'] == 'viewinvoice'){
    $id = $_GET['id'];
    $orderdet = $order->getOrder($id);
    $orderitems = $order->getOrderItems($orderdet['id']);
    $customer = $order->getCustomer($orderdet['customer_id']);
    $smarty->assign('order', $orderdet);
    $smarty->assign('orderitem', $orderitems);
    $smarty->assign('customer', $customer);
    $smarty->assign('billing', $order->getCustomerBilling($customer['id']));
    $smarty->assign('shipping', $order->getCustomerShipping($customer['id']));
    $smarty->assign('content', $smarty->fetch('invoiceview.tpl'));
}elseif(isset($_GET['action']) && $_GET['action'] == 'printinvoice'){
    $id = $_GET['id'];
    $orderdet = $order->getOrder($id);
    $orderitems = $order->getOrderItems($orderdet['id']);
    $customer = $order->getCustomer($orderdet['customer_id']);
    $smarty->assign('order', $orderdet);
    $smarty->assign('orderitem', $orderitems);
    $smarty->assign('customer', $customer);
    $smarty->assign('billing', $order->getCustomerBilling($customer['id']));
    $smarty->assign('shipping', $order->getCustomerShipping($customer['id']));
    $smarty->assign('content', $smarty->fetch('printinvoice.tpl'));
    $smarty->display('print.html');
    exit;
}elseif(isset($_GET['action']) && $_GET['action'] == 'search'){
    $keyword = $_POST['keywords'];
    $page = 0;
    if(isset($_GET['page'])){
        $page = $_GET['page'];      
    }
    $result = $order->getSearchInvoice($keyword,$page, $offset=10);
    $smarty->assign('ordercount', count($result));
    $smarty->assign('page', $page);
    $smarty->assign('orders', $result);
    $smarty->assign('content', $smarty->fetch('invoice.tpl'));    
}elseif(isset($_GET['action']) && $_GET['action'] == 'deleteinvoice'){
    $id = $_GET['id'];
	$chalan_no = $_GET['chalan_no'];
    $order->deleteInvoice($id, $chalan_no);
    header('Location: '.FRONTEND.'invoice.php');
    exit;
}elseif(isset($_GET['action']) && $_GET['action'] == 'paidinvoice'){
    $id = $_GET['id'];
    $order->markInvoicedPaid($id);
    header('Location: '.FRONTEND.'invoice.php');
    exit;
}else{
    $page = 0;
    if(isset($_GET['page'])){
        $page = $_GET['page'];      
    }
    $orders = $order->getOrders($page, $offset=10);
    $smarty->assign('ordercount', $order->getOrdersCount());
    $smarty->assign('page', $page);
    $smarty->assign('orders', $orders);
    $smarty->assign('content', $smarty->fetch('invoice.tpl'));    
}
$smarty->assign('action', 'invoice');
$smarty->assign('toolbar', $smarty->fetch('toolbar.tpl'));
$smarty->display('two-column-left.html');

?>

