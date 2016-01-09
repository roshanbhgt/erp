<?php
// Includng configuration file
include 'config/config.php';

//Check user is already login or not
checkAuthentication();

$id = $_SESSION['adminid'];
$order = new order();
$report = new report();

if(isset($_GET['action']) && $_GET['action'] == 'financial'){
    $page = 0;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    $offset = 10;
    if($_POST){
        $data = $_POST;
    }else{
        $data['from'] = date("Y-m-d");
        $data['to'] = date("Y-m-d");
    }
    $orders = $report->getFinancial($data,$page,$offset);
    $totalwithtax = 0;
    $totalwithouttax = 0;
    $totaltax = 0;
    $totalship = 0;
    $totaldisc = 0;
    if(count($orders)){
        foreach($orders as $val){
            if($val['status'] == 'paid'){
                $totalwithtax = $totalwithtax + $val['grandtotal'];
                $totalwithouttax = $totalwithouttax + $val['grandtotal'] - $val['tax'];
                $totaltax = $totaltax + $val['tax'];
                $totalship = $totalship + $val['shipping'];
                // $totaldisc = $totaldisc + $val['discount'];
            }
        }
    }
    $itemsales = $report->getSalesItem($data,$page,$offset);
    $inventorysold = 0;
    $inventorycost = 0;
    if(count($itemsales)){
        foreach($itemsales as $val){
            $inventorysold = $inventorysold + $val['qty'];
            $inventorycost = $inventorycost + $val['total'];
            // $inventorycostwithouttax = $inventorycostwithouttax + $val['subtoal'];
        }
    }
    $smarty->assign('from', date('M d, Y', strtotime($data['from'])));
    $smarty->assign('to', date('M d, Y', strtotime($data['to'])));
    $smarty->assign('orders', $orders);
    $smarty->assign('totalwithtax', $totalwithtax);
    $smarty->assign('totalwithouttax', $totalwithouttax);
    $smarty->assign('totaltax', $totaltax);
    $smarty->assign('totalship', $totalship);
    $smarty->assign('inventorysold', $inventorysold);
    $smarty->assign('inventorycost', $inventorycost);
    $smarty->assign('content', $smarty->fetch('financial.tpl'));
}elseif(isset($_GET['action']) && $_GET['action'] == 'salesitem'){
    $page = 0;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    $offset = 10;
    if($_POST){
        $data = $_POST;
    }else{
        $data['from'] = date("Y-m-d");
        $data['to'] = date("Y-m-d");
    }
    $items = $report->getSalesItem($data,$page,$offset);
    $totalqty = 0;
    $totalrevenue = 0;
    if(count($items)){
        foreach($items as $val){
            $totalqty = $totalqty + $val['qty']; 
            $totalrevenue = $totalrevenue + $val['total'];
        }
    }
    $smarty->assign('from', date('M d, Y', strtotime($data['from'])));
    $smarty->assign('to', date('M d, Y', strtotime($data['to'])));
    $smarty->assign('items', $items);
    $smarty->assign('totalqty', $totalqty);
    $smarty->assign('totalrevenue', $totalrevenue);
    $smarty->assign('content', $smarty->fetch('salesitem.tpl'));
}elseif(isset($_GET['action']) && $_GET['action'] == 'customer'){
    $page = 0;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    $offset = 10;
    if($_POST){
        $data = $_POST;
    }else{
        $data['from'] = date("Y-m-d");
        $data['to'] = date("Y-m-d");
    }
    $customerrevenue = $report->getCustomer($data,$page,$offset);
    $totalrevenue = 0;
    $totalorders = 0;
    if(count($customerrevenue)){
        foreach ($customerrevenue as $val){
            $totalrevenue = $totalrevenue + $val['total'];
            $totalorders = $totalorders + $val['orders'];
        }
    }
    $smarty->assign('from', date('M d, Y', strtotime($data['from'])));
    $smarty->assign('to', date('M d, Y', strtotime($data['to'])));
    $smarty->assign('customers', $customerrevenue);
    $smarty->assign('totalrevenue', $totalrevenue);
    $smarty->assign('totalorders', $totalorders);
    $smarty->assign('content', $smarty->fetch('customerreport.tpl'));
}else{
    $page = 0;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    $offset = 10;
    if($_POST){
        $data = $_POST;
    }else{
        $data['from'] = date("Y-m-d");
        $data['to'] = date("Y-m-d");
    }
    $orders = $report->getFinancial($data,$page,$offset);
    $totalwithtax = 0;
    $totalwithouttax = 0;
    $totaltax = 0;
    $totalship = 0;
    $totaldisc = 0;
    if(count($orders)){
        foreach($orders as $val){
            if($val['status'] == 'paid'){
                $totalwithtax = $totalwithtax + $val['grandtotal'];
                $totalwithouttax = $totalwithouttax + $val['grandtotal'] - $val['tax'];
                $totaltax = $totaltax + $val['tax'];
                $totalship = $totalship + $val['shipping'];
                // $totaldisc = $totaldisc + $val['discount'];
            }
        }
    }
    $itemsales = $report->getSalesItem($data,$page,$offset);
    $inventorysold = 0;
    $inventorycost = 0;
    if(count($itemsales)){
        foreach($itemsales as $val){
            $inventorysold = $inventorysold + $val['qty'];
            $inventorycost = $inventorycost + $val['total'];
            // $inventorycostwithouttax = $inventorycostwithouttax + $val['subtoal'];
        }
    }
    $smarty->assign('from', date('M d, Y', strtotime($data['from'])));
    $smarty->assign('to', date('M d, Y', strtotime($data['to'])));
    $smarty->assign('orders', $orders);
    $smarty->assign('totalwithtax', $totalwithtax);
    $smarty->assign('totalwithouttax', $totalwithouttax);
    $smarty->assign('totaltax', $totaltax);
    $smarty->assign('totalship', $totalship);
    $smarty->assign('inventorysold', $inventorysold);
    $smarty->assign('inventorycost', $inventorycost);
    $smarty->assign('content', $smarty->fetch('report.tpl'));
}

$smarty->assign('action', 'report');
$smarty->assign('toolbar', $smarty->fetch('toolbar.tpl'));
$smarty->display('two-column-left.html');

?>

