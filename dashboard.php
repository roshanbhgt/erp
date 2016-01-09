<?php
    // Includng configuration file
    include 'config/config.php';

    //Check user is already login or not
    checkAuthentication();
    
    $dashboard = new dashboard() ;
        
    $customercount = $dashboard->getCustomersCount();
    $unpaidinvoicescont = $dashboard->getUnpaidInvoices();
    $paidinvoicescount = $dashboard->getPaidInvoices();
    $purchasebillcount = $dashboard->getPurchaseBills();
    
    $paidinv = $dashboard->getTopPaid();
    $unpaidinv = $dashboard->getTopUnpaid();
    $purchasebill = $dashboard->getTopPurchase();
    $customer = $dashboard->getCustomers();
    $paidtotal = $dashboard->getPaidInvTotal();
    $purchtotal = $dashboard->getPaidPurchTotal();
    
    

    $smarty->assign('customer', $customer);
    $smarty->assign('paidtotal', $paidtotal);
    $smarty->assign('purchtotal', $purchtotal);
    $smarty->assign('unpaidinv', $unpaidinv);
    $smarty->assign('purcasebills', $purchasebill);
    $smarty->assign('custcount', $customercount);
    $smarty->assign('unpaidinvcount', $unpaidinvoicescont);
    $smarty->assign('paidinvcount', $paidinvoicescount);
    $smarty->assign('purbillcount', $purchasebillcount);
    $smarty->assign('action', 'dashboard');
    $smarty->assign('toolbar', $smarty->fetch('toolbar.tpl'));
    $smarty->assign('content', $smarty->fetch('dashboard.tpl'));
    $smarty->display('two-column-left.html');

?>
