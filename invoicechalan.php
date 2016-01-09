<?php
// Includng configuration file
include 'config/config.php';

//Check user is already login or not
checkAuthentication();

$id = $_SESSION['adminid'];
$order = new order();
$invoice = new invoice();
$product = new product();
$smarty->assign('action', 'order');
$smarty->assign('toolbar', $smarty->fetch('toolbar.tpl'));

if(isset($_GET['action']) && $_GET['action'] == 'invoice'){
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
    $smarty->assign('content', $smarty->fetch('invoicechalan.tpl'));
}elseif(isset($_POST['action']) && $_POST['action'] == 'invoicechalan'){
    $id = $_POST['id'];
    $invoicedata['order'] = $order->getOrder($id);
    $invoicedata['order']['subtotal'] = $_POST['data']['order']['subtotal'];
    $invoicedata['order']['shipping'] = $_POST['data']['order']['shipping'];
    $invoicedata['order']['discount'] = $_POST['data']['order']['disc'];
    $invoicedata['order']['tax'] = $_POST['data']['order']['tax'];
    $invoicedata['order']['grandtotal'] = $_POST['data']['order']['grandtotal'];
    $invoicedata['order']['status'] = 'invoiced';
    $invoicedata['items'] = $_POST['data']['item'];
    $invoiceid = $invoice->invoiceChalan($invoicedata);
    $smarty->assign('orderid', $invoiceid);
    $smarty->assign('content', $smarty->fetch('successinvoicechalan.tpl'));
}elseif(isset($_POST['action']) && $_POST['action'] == 'invoiceprintchalan'){
    $id = $_POST['id'];
    $invoicedata['order'] = $order->getOrder($id);
    $invoicedata['order']['subtotal'] = $_POST['data']['order']['subtotal'];
    $invoicedata['order']['shipping'] = $_POST['data']['order']['shipping'];
    $invoicedata['order']['discount'] = $_POST['data']['order']['disc'];
    $invoicedata['order']['tax'] = $_POST['data']['order']['tax'];
    $invoicedata['order']['grandtotal'] = $_POST['data']['order']['grandtotal'];
    $invoicedata['order']['status'] = 'invoiced';
    $invoicedata['items'] = $_POST['data']['item'];
    $invoiceid = $invoice->invoiceChalan($invoicedata);
    $orderid =  $invoice->getOrderId($invoiceid);
    $smarty->assign('orderid',$invoice);
    header('Location: '.FRONTEND.'invoice.php?action=printinvoice&id='.$orderid);
    exit;
}
$smarty->display('two-column-left.html');

?>

