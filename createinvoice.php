<?php
// Includng configuration file
include 'config/config.php';

//Check user is already login or not
checkAuthentication();

$id = $_SESSION['adminid'];
$order = new invoice();
$customer = new customer();
$data = array();
if(isset($_POST['action']) && $_POST['action'] == 'processchalan'){
    if(isset($_POST['id']) && $_POST['id'] == ''){
        $data['status'] = 'error';
        $data['message'] = 'Delivery chalan does not exist you can click ok to proceed with fresh invoice and cancel to search for chalan #.';        
        $smarty->assign('customers', $customer->getCustomers());
        $data['content'] = $smarty->fetch('createinvoice.tpl');
    }else{
        $data['status'] = 'success';
        $data['orderid'] = $_POST['id'];
    }
}elseif(isset($_POST['data']['Customer']['action']) && $_POST['data']['Customer']['action'] == 'savecustomer'){
	if( empty($_POST['data']['Customer']['id']) &&
        ( empty($_POST['data']['Customer']['name']) && empty($_POST['data']['Customer']['office_email']) 
            && empty($_POST['data']['Customer']['office_phone']) )
    ){
        $data['status'] = 'error';
        $data['content'] = "Please select customer or add new customer, Account name, office phone and email are mandatory fields.";
    }else{
        $data = $_POST;
        if(isset($_POST['data']['Customer']['id']) && $_POST['data']['Customer']['id'] != ''){
            $customer = $order->getCustomer($_POST['data']['Customer']['id']);
            $billing = $order->getCustomerBilling($_POST['data']['Customer']['id']);
            $shipping = $order->getCustomerShipping($_POST['data']['Customer']['id']);
            $data['Customer']['name'] = $customer['account_name'];	
            $data['Customer']['office_email'] = $customer['email'];		
            $data['Customer']['office_fax'] = $customer['fax'];		
            $data['Customer']['office_phone'] = $customer['phone'];	
            $data['Customer']['url'] = $customer['website'];	
            $data['Customer']['vat_number'] = $customer['vat'];	
            $data['Customer']['billing_address_1'] = $billing['address1'];		
            $data['Customer']['billing_address_2'] = $billing['address2'];		
            $data['Customer']['billing_city'] = $billing['city'];	
            $data['Customer']['billing_region'] = $billing['state'];	
            $data['Customer']['billing_postal_code'] = $billing['postcode'];		
            $data['Customer']['billing_country'] = $billing['country'];	
            $data['Customer']['shipping_address_1'] = $shipping['address1'];		
            $data['Customer']['shipping_address_2'] = $shipping['address2'];		
            $data['Customer']['shipping_city'] = $shipping['city'];	
            $data['Customer']['shipping_region'] = $shipping['state'];	
            $data['Customer']['shipping_postal_code'] = $shipping['state'];	
            $data['Customer']['shipping_country'] = $shipping['postcode'];
            $_SESSION['invoice']['customer'] = $data['Customer'];
            $_SESSION['invoice']['customer']['po_no'] = $_POST['data']['Customer']['po_no'];
        }else{
            $_SESSION['invoice']['customer'] = $_POST['data']['Customer'];    
        }
        $data['status'] = 'success';
        $data['content'] = $smarty->fetch('invoiceitems.tpl');
    }
}elseif(isset($_POST['data']['action']) && $_POST['data']['action'] == 'saveitem'){
    $post = $_POST['data']['Item'];
    $subtotal = 0.00;
    $shipping = 0.00;
    $discount = 0.00;
    $tax = 0.00;
    $grandtotal = 0.00;
    if(is_array($post)){
        foreach ($post as $key=>$val){
            if($val['name'] != '' && $val['code'] != ''){
                $post[$key]['subtotal'] = $val['qty'] * $val['price'];
                $discount = $discount + ($post[$key]['subtotal'] * ($val['disc']/100));
                $post[$key]['subtotal'] = $post[$key]['subtotal'] - ($post[$key]['subtotal'] * ($val['disc']/100));
                $subtotal = $subtotal + $post[$key]['subtotal'];
                
                /* if($val['tax'] == 12.5){
                    $tax = $tax + ($post[$key]['subtotal'] * (11.11/100));
                }elseif($val['tax'] == 5){
                    $tax = $tax + ($post[$key]['subtotal'] * (4.75/100));
                }else{ */
                    $tax = $tax + ($post[$key]['subtotal'] * ($val['tax']/100));
                // }
            }else{
                unset($post[$key]);
            }
        }
    }
    $_SESSION['invoice']['subtotal'] = $subtotal;
    $_SESSION['invoice']['shiphanval'] = $shipping;
    $_SESSION['invoice']['discount'] = $discount;
    $_SESSION['invoice']['tax'] = $tax;
    $_SESSION['invoice']['grandtotal'] = $subtotal + $shipping + ($shipping*0.125);
    $_SESSION['invoice']['items'] = $post;
    if(count($_SESSION['invoice']['items']) == 0){
        $data['status'] = 'error';
        $data['content'] = "Please add at least one item.";
    }else{
		$data['status'] = 'success';
		$smarty->assign('order',$_SESSION['invoice']);
		$data['content'] = $smarty->fetch('reviewinvoice.tpl');
	}
}elseif(isset($_POST['action']) && $_POST['action'] == 'saveorder'){
    $orderpost = $_SESSION['invoice'];
    $smarty->assign('orderid',$order->createOrder($orderpost));
    $data['status'] = 'success';
    $data['content'] = $smarty->fetch('successinvoice.tpl');
}elseif(isset($_POST['action']) && $_POST['action'] == 'saveprintorder'){
    $orderpost = $_SESSION['invoice'];
    $invoice = $order->createOrder($orderpost);
    $smarty->assign('orderid',$invoice);
    $orderid =  $order->getOrderId($invoice);
    $data['status'] = 'success';
    $data['orderid'] = $orderid;
    $data['status'] = 'success';
    $data['content'] = $smarty->fetch('successinvoice.tpl');
}

header('Content-Type: application/json');
echo json_encode($data);

?>

