<?php

// Includng configuration file
include 'config/config.php';

//Check user is already login or not
checkAuthentication();

$id = $_SESSION['adminid'];
$purchase = new purchase();

if(isset($_GET['action']) && $_GET['action'] == 'new'){
    $smarty->assign('content', $smarty->fetch('addpurchase.tpl'));
}elseif(isset($_GET['action']) && $_GET['action'] == 'edit'){
    $id = $_GET['id'];
    $purchasebill = $purchase->getPurchase($id);
    $purchaseitems = $purchase->getPurchaseItems($id);
    $smarty->assign('purchase', $purchasebill);
    $smarty->assign('purchaseitem', $purchaseitems);
    $smarty->assign('content', $smarty->fetch('editpurchase.tpl'));
}elseif (isset($_POST['action']) && $_POST['action'] == 'add'){
    $data = $_POST;
    if($purchase->addPurchaseBill($data)){
        header('Location: '.FRONTEND.'purchasebills.php');
        exit;
    }
}elseif (isset($_POST['action']) && $_POST['action'] == 'update'){
    $data = $_POST;
    if($purchase->updatePurchaseBill($data)){
        header('Location: '.FRONTEND.'purchasebills.php');
        exit;
    }
}elseif (isset($_GET['action']) && $_GET['action'] == 'deletepurchase'){
    $id = $_GET['id'];
    if($purchase->deletePurchase($id)){
        header('Location: '.FRONTEND.'purchasebills.php');
        exit;
    }
}elseif(isset($_GET['action']) && $_GET['action'] == 'viewpurchase'){
    $id = $_GET['id'];
    $purchasebill = $purchase->getPurchase($id);
    $purchaseitems = $purchase->getPurchaseItems($id);   
    $smarty->assign('purchase', $purchasebill);
    $smarty->assign('purchaseitem', $purchaseitems);
    $smarty->assign('content', $smarty->fetch('purchaseview.tpl'));    
}elseif(isset($_GET['action']) && $_GET['action'] == 'search'){
    $keyword = $_POST['keywords'];
	$purchasebills = $purchase->getSearchPurchase($keyword);	
    $smarty->assign('purchasebills', $purchasebills);
    $smarty->assign('content', $smarty->fetch('purchase.tpl'));    
}else{
    $page = 0;
    if(isset($_GET['page'])){
        $page = $_GET['page'];      
    }
    $purchasebills = $purchase->getPurchaseBills($page, $offset=10);    
    $smarty->assign('page', $page);    
    $smarty->assign('purchasebills', $purchasebills);
    $smarty->assign('content', $smarty->fetch('purchase.tpl'));    
}
$smarty->assign('action', 'purchase');
$smarty->assign('toolbar', $smarty->fetch('toolbar.tpl'));
$smarty->display('two-column-left.html');

?>