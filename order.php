<?php
// Includng configuration file
include 'config/config.php';

//Check user is already login or not
checkAuthentication();

$id = $_SESSION['adminid'];
$order = new order();
$customer = new customer();

if(isset($_GET['action']) && $_GET['action'] == 'new'){
    $smarty->assign('customers', $customer->getCustomers());
    $smarty->assign('content', $smarty->fetch('createorder.tpl'));
}elseif(isset($_GET['action']) && $_GET['action'] == 'edit'){
    $id = $_GET['id'];
    $orderdet = $order->getOrder($id);
    $orderitems = $order->getOrderItems($orderdet['id']);
    $customer = $order->getCustomer($orderdet['customer_id']);
    $smarty->assign('order', $orderdet);
    $smarty->assign('orderitems', $orderitems);
    $smarty->assign('customer', $customer);
    $smarty->assign('billing', $order->getCustomerBilling($customer['id']));
    $smarty->assign('shipping', $order->getCustomerShipping($customer['id']));
    $smarty->assign('content', $smarty->fetch('editorder.tpl'));
}elseif(isset($_GET['action']) && $_GET['action'] == 'viewchalan'){
    $id = $_GET['id'];
    $orderdet = $order->getOrder($id);
    $orderitems = $order->getOrderItems($orderdet['id']);
    $customer = $order->getCustomer($orderdet['customer_id']);
    $smarty->assign('order', $orderdet);
    $smarty->assign('orderitem', $orderitems);
    $smarty->assign('customer', $customer);
    $smarty->assign('billing', $order->getCustomerBilling($customer['id']));
    $smarty->assign('shipping', $order->getCustomerShipping($customer['id']));
    $smarty->assign('content', $smarty->fetch('orderview.tpl'));
}elseif(isset($_GET['action']) && $_GET['action'] == 'printchalan'){
    $id = $_GET['id'];
    $orderdet = $order->getOrder($id);
    $orderitems = $order->getOrderItems($orderdet['id']);
    $customer = $order->getCustomer($orderdet['customer_id']);
    $smarty->assign('order', $orderdet);
    $smarty->assign('orderitem', $orderitems);
    $smarty->assign('customer', $customer);
    $smarty->assign('billing', $order->getCustomerBilling($customer['id']));
    $smarty->assign('shipping', $order->getCustomerShipping($customer['id']));
    $smarty->assign('content', $smarty->fetch('printorder.tpl'));
    $smarty->display('print.html');
    exit;http://erp.local/order.php?action=printchalan&id=4
}elseif(isset($_POST['action']) && $_POST['action'] == 'updatechalan'){
    $data = $_POST['data'];
    $chalanid = $_POST['id'];
    if($order->updateChalanItem($data['item'],$chalanid)){
        header('Location: '.FRONTEND.'order.php');
        exit;
    }
}elseif(isset($_POST['action']) && $_POST['action'] == 'updateprintchalan'){
    $data = $_POST['data'];
    if($order->updateChalanItem($data['item'])){
        header('Location: '.FRONTEND.'order.php?action=printchalan&id='.$_POST['id']);
        exit;
    }
}elseif(isset($_POST['action']) && $_POST['action'] == 'search'){
    $keyword = $_POST['keywords'];
    $page = 1;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    $result = $order->getSearchOrders($keyword,$page, $offset=10);
    $smarty->assign('ordercount', count($result));
    $smarty->assign('page', $page);
    $smarty->assign('pagecount', ceil(count($result)/$offset));
    $smarty->assign('orders', $result);
    $smarty->assign('content', $smarty->fetch('order.tpl'));
}else{
    $page = 1;
    if(isset($_GET['page'])){
        $page = $_GET['page'];      
    }
    $orders = $order->getOrders($page, $offset=10);
    $smarty->assign('ordercount', $order->getOrdersCount());
    $smarty->assign('orders', $orders);
    $smarty->assign('page', $page);
    $smarty->assign('pagecount', ceil($order->getOrdersCount()/$offset));
    $smarty->assign('content', $smarty->fetch('order.tpl'));    
}
$smarty->assign('action', 'order');
$smarty->assign('toolbar', $smarty->fetch('toolbar.tpl'));
$smarty->display('two-column-left.html');

?>

