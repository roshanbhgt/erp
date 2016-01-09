<?php

class cashmemo{
    
    public function getOrders($page=null,$offset=null){
        global $dbObj;
        $sql = "SELECT * FROM ".ORDER_INVOICE." WHERE admin_id = '".$_SESSION['adminid']."' and status = 'paid' ";
        if($page>0){
            $start = ($page-1) * $offset; 
            $sql .= " LIMIT $start, $offset ";
        }/* else{
            $start = 0 * $offset; 
            $sql .= " LIMIT $start, $offset ";
        } */
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_all_array($sql);
        }else{
            return ;
        }
    }
    
    public function getOrdersCount(){
        global $dbObj;
        $sql = "SELECT * FROM ".ORDER_INVOICE." WHERE admin_id = '".$_SESSION['adminid']."' and status = 'paid' ";
        $res = $dbObj->query($sql);
        if($res){
            return $dbObj->num_rows($res);
        }else{
            return 0;
        }
    }
    
    public function getChalanInvoice($keyword){
        global $dbObj;
        $sql = "SELECT * FROM ".ORDER_INVOICE." WHERE admin_id = '".$_SESSION['adminid']."' AND chalan_no LIKE '%".$keyword."%'  ";
        
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_all_array($sql);
        }else{
            return ;
        }
    }
}
