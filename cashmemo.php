<?php
// Includng configuration file
include 'config/config.php';

//Check user is already login or not
checkAuthentication();

$id = $_SESSION['adminid'];
$order = new invoice();
$product = new product();
$cashmemo = new cashmemo();
$customer = new customer();

if(isset($_GET['action']) && $_GET['action'] == 'new'){
    $smarty->assign('content', $smarty->fetch('searchcashmemoinvoice.tpl'));
}else if(isset($_GET['action']) && $_GET['action'] == 'invoicecashmemo'){
    $id = $_GET['id'];
    $orderdet = $order->getOrder($id);
    $orderitems = $order->getOrderItems($orderdet['id']);
    foreach($orderitems as $key=>$val){
        $orderitems[$key]['price'] = $product->getProductPrice($val['sku']);
    }
    $customer = $order->getCustomer($orderdet['customer_id']);
    $smarty->assign('order', $orderdet);
    $smarty->assign('items', $orderitems);
    $smarty->assign('customer', $customer);
    $smarty->assign('billing', $order->getCustomerBilling($customer['id']));
    $smarty->assign('shipping', $order->getCustomerShipping($customer['id']));
    $smarty->assign('content', $smarty->fetch('cashmemoinvoice.tpl'));
}elseif(isset($_POST['action']) && $_POST['action'] == 'cashmemoinvoice'){
    $id = $_POST['id'];
    $data = $_POST;
    if($customer->markInvoicedPaid($data)){
        header('Location: '.FRONTEND.'custrevenue.php');
        exit;
    }
    $smarty->assign('id',$id);
    $smarty->assign('content', $smarty->fetch('cashmemoinvoice.tpl'));
}elseif(isset($_POST['action']) && $_POST['action'] == 'cashmemoinvoiceprint'){
    $id = $_POST['id'];
    $data = $_POST;
    if($customer->markInvoicedPaid($data)){
        header('Location: '.FRONTEND.'custrevenue.php');
        exit;
    }
    header('Location: '.FRONTEND.'cashmemo.php?action=printcashmemo&id='.$id);
    exit;
}elseif(isset($_GET['action']) && $_GET['action'] == 'printcashmemo'){
    $id = $_GET['id'];
    $orderdet = $order->getOrder($id);
    $orderitems = $order->getOrderItems($orderdet['id']);
    $customer = $order->getCustomer($orderdet['customer_id']);
    $smarty->assign('order', $orderdet);
    $smarty->assign('orderitem', $orderitems);
    $smarty->assign('customer', $customer);
    $smarty->assign('billing', $order->getCustomerBilling($customer['id']));
    $smarty->assign('shipping', $order->getCustomerShipping($customer['id']));
    $smarty->assign('content', $smarty->fetch('printcashmemo.tpl'));
    $smarty->display('print.html');
    exit;
}elseif(isset($_GET['action']) && $_GET['action'] == 'search'){
    $keyword = $_POST['keywords'];
    $page = 1;
    if(isset($_GET['page'])){
        $page = $_GET['page'];      
    }
    $result = $order->getSearchInvoice($keyword,$page, $offset=10);
    $smarty->assign('ordercount', count($result));
    $smarty->assign('page', $page);
    $smarty->assign('pagecount', ceil(count($result)/$offset));
    $smarty->assign('orders', $result);
    $smarty->assign('content', $smarty->fetch('cashmemo.tpl'));    
}else{
    $page = 1;
    if(isset($_GET['page'])){
        $page = $_GET['page'];      
    }
    $orders = $cashmemo->getOrders($page, $offset=10);
    $smarty->assign('ordercount', $cashmemo->getOrdersCount());
    $smarty->assign('page', $page);
    $smarty->assign('pagecount', ceil($cashmemo->getOrdersCount()/$offset));
    $smarty->assign('orders', $orders);
    $smarty->assign('content', $smarty->fetch('cashmemo.tpl'));    
}
$smarty->assign('action', 'cashmemo');
$smarty->assign('toolbar', $smarty->fetch('toolbar.tpl'));
$smarty->display('two-column-left.html');

?>

