<?php
// Includng configuration file
include 'config/config.php';

//Check user is already login or not
checkAuthentication();

$id = $_SESSION['adminid'];
$product = new product();
$order = new order();
$cashmemo = new cashmemo();
if(isset($_GET['action']) && $_GET['action'] == 'suggestprod'){
    $keyword = $_GET['keyword'];
    $elementid = $_GET['id'];
    $string = '';
    $autosuggpro = $product->getSearchProducts($keyword);
    if(is_array($autosuggpro)) {
    $string.= '<ul>';
    foreach ($autosuggpro as $val){
        $string.= '<li onClick="fillname(\''.addslashes($val['name']).'\',\''.$elementid.'\');fillcode(\''.addslashes($val['sku']).'\',\''.$elementid.'\');fillprice(\''.addslashes($val['price']).'\',\''.$elementid.'\');" >'.$val['name'].'</li>';
    }
    $string.= '</ul>';

    } else {
    $string.= '<li>No Record found</li></ul>';
    }
    echo $string;
    exit;
}elseif(isset($_GET['action']) && $_GET['action'] == 'suggestchalan'){
    $keyword = $_GET['chalan_no'];
    $string = '';
    $autosuggpro = $order->getChalanOrders($keyword);
    if(is_array($autosuggpro)) {
    $string.= '<ul>';
    foreach ($autosuggpro as $val){
        if(isset($_GET['status'])){
            if($val['status'] == $_GET['status']){
                continue;
            }
        }
        $string.= '<li onClick="fillchlan(\''.addslashes($val['chalan_no']).'\');fillid(\''.addslashes($val['id']).'\');" >'.$val['chalan_no'].'</li>';
    }
    $string.= '</ul>';

    } else {
    $string.= '<li>No Record found</li></ul>';
    }
    echo $string;
    exit;
}elseif(isset($_GET['action']) && $_GET['action'] == 'suggestinvoice'){
    $keyword = $_GET['chalan_no'];
    $string = '';
    $autosuggpro = $cashmemo->getChalanInvoice($keyword);
    if(is_array($autosuggpro)) {
    $string.= '<ul>';
    foreach ($autosuggpro as $val){
        if(isset($_GET['status'])){
            if($val['status'] == $_GET['status']){
                continue;
            }
        }
        $string.= '<li onClick="fillchlan(\''.addslashes($val['chalan_no']).'\');fillid(\''.addslashes($val['id']).'\');" >'.$val['chalan_no'].'</li>';
    }
    $string.= '</ul>';

    } else {
    $string.= '<li>No Record found</li></ul>';
    }
    echo $string;
    exit;
}



?>

