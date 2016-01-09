<?php

class dashboard{
    
    public function getCustomersCount(){
        global $dbObj;
        $sql = "SELECT * FROM ".CUSTOMER." WHERE DATE(createdat) >= '".date("Y-m-d 00:00:00")."' AND DATE(createdat) <= '".date("Y-m-d H:i:s")."' ";
        $res = $dbObj->query($sql);
        return $dbObj->num_rows($res);
    }
    
    public function getPaidInvoices(){
        global $dbObj;
        $sql = "SELECT * FROM ".ORDER_INVOICE." WHERE status = 'paid' AND DATE(createdat) >= '".date("Y-m-d 00:00:00")."' AND DATE(createdat) <= '".date("Y-m-d H:i:s")."' ";
        $res = $dbObj->query($sql);        
        return $dbObj->num_rows($res);
    }
    
    public function getUnpaidInvoices(){
        global $dbObj;
        $sql = "SELECT * FROM ".ORDER_INVOICE." WHERE status = 'unpaid' AND DATE(createdat) >= '".date("Y-m-d 00:00:00")."' AND DATE(createdat) <= '".date("Y-m-d H:i:s")."' ";
        $res = $dbObj->query($sql);
        return $dbObj->num_rows($res);
    }
    
    public function getPurchaseBills(){
        global $dbObj;
        $sql = "SELECT * FROM ".PURCHASE." WHERE DATE(createdat) >= '".date("Y-m-d 00:00:00")."' AND DATE(createdat) <= '".date("Y-m-d H:i:s")."' ";
        $res = $dbObj->query($sql);
        return $dbObj->num_rows($res);
    }
    
    public function getTopPaid(){
        global $dbObj;
        $sql = "SELECT * FROM ".ORDER_INVOICE." WHERE status = 'paid' AND DATE(createdat) >= '".date("Y-m-d 00:00:00")."' AND DATE(createdat) <= '".date("Y-m-d H:i:s")."' LIMIT 5 ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_all_array($sql);
        }else{
            return 0;
        }
    }
    
    public function getTopUnpaid(){
        global $dbObj;
        $sql = "SELECT * FROM ".ORDER_INVOICE." WHERE status = 'unpaid' AND DATE(createdat) >= '".date("Y-m-d 00:00:00")."' AND DATE(createdat) <= '".date("Y-m-d H:i:s")."' LIMIT 5 ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_all_array($sql);
        }else{
            return 0;
        }
    }
    
    public function getTopPurchase(){
        global $dbObj;
        $sql = "SELECT * FROM ".PURCHASE." WHERE DATE(createdat) >= '".date("Y-m-d 00:00:00")."' AND DATE(createdat) <= '".date("Y-m-d H:i:s")."' LIMIT 5 ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_all_array($sql);
        }else{
            return 0;
        }
    }
    
    public function getCustomers(){
        global $dbObj;
        $sql = "SELECT * FROM ".CUSTOMER." WHERE DATE(createdat) >= '".date("Y-m-d 00:00:00")."' AND DATE(createdat) <= '".date("Y-m-d H:i:s")."' LIMIT 5 ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_all_array($sql);
        }else{
            return 0;
        }
    }
    
    public function getPaidInvTotal(){
        global $dbObj;
        $sql = "SELECT sum(grandtotal) as total FROM ".ORDER_INVOICE." WHERE status = 'paid' AND DATE(createdat) >= '".date("Y-m-d 00:00:00")."' AND DATE(createdat) <= '".date("Y-m-d H:i:s")."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            $row = $dbObj->fetch_array_assoc($res);
            return $row['total'];
        }else{
            return 0;
        }
    }
    
    public function getPaidPurchTotal(){
        global $dbObj;
        $sql = "SELECT sum(total) as total FROM ".PURCHASE." WHERE DATE(createdat) >= '".date("Y-m-d 00:00:00")."' AND DATE(createdat) <= '".date("Y-m-d H:i:s")."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            $row = $dbObj->fetch_array_assoc($res);
            return $row['total'];
        }else{
            return 0;
        }
    }
}
