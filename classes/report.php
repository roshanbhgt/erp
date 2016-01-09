<?php

class report {
    
    public function getFinancial($data, $page=null,$offset=null){
        global $dbObj;
        $sql = "SELECT oi.*, c.account_name FROM ".ORDER_INVOICE." AS oi "
                . " INNER JOIN ".CUSTOMER." AS c ON oi.customer_id = c.id "
                . " WHERE oi.createdat >= '".$data['from']." 00:00:00' AND oi.createdat <= '".$data['to']." 23:59:59' ORDER BY oi.createdat ASC ";
        if($page>0){
            $start = ($page-1) * $offset; 
            $sql .= " LIMIT $start, $offset ";
        }else{
            $start = 0 * $offset; 
            $sql .= " LIMIT $start, $offset ";
        }
            
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_all_array($sql);
        }else{
            return ;
        }
    }
    
    public function getSalesItem($data, $page=null,$offset=null){
        global $dbObj;
        $sql = "
            SELECT oi.name, oi.sku, sum(oi.qty) as qty, sum(oi.subtotal) as total, oi.createdat  
            FROM ".ORDER_INVOICE." AS o INNER JOIN ".ORDER_INVOICE_ITEMS." AS oi ON o.id = oi.invoice_id 
            WHERE oi.createdat >= '".$data['from']." 00:00:00' AND oi.createdat <= '".$data['to']." 23:59:59' AND o.status = 'paid' 
            GROUP BY oi.sku ORDER BY oi.createdat ASC
        ";
        if($page>0){
            $start = ($page-1) * $offset; 
            $sql .= " LIMIT $start, $offset ";
        }else{
            $start = 0 * $offset; 
            $sql .= " LIMIT $start, $offset ";
        }
            
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_all_array($sql);
        }else{
            return ;
        }
    }
    
    public function getCustomer($data, $page=null,$offset=null){
        global $dbObj;
        $sql = "SELECT c.account_name, count(oi.id) as orders, sum(oi.grandtotal) as total, oi.createdat FROM ".ORDER_INVOICE." AS oi "
                . " INNER JOIN ".CUSTOMER." AS c ON oi.customer_id = c.id "
                . " WHERE oi.createdat >= '".$data['from']." 00:00:00' AND oi.createdat <= '".$data['to']." 23:59:59' GROUP BY oi.email ORDER BY oi.createdat ASC ";
        if($page>0){
            $start = ($page-1) * $offset; 
            $sql .= " LIMIT $start, $offset ";
        }else{
            $start = 0 * $offset; 
            $sql .= " LIMIT $start, $offset ";
        }
            
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_all_array($sql);
        }else{
            return ;
        }
    }
    
    
}
