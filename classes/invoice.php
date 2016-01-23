<?php

class invoice{
    
    public function getOrdersCount(){
        global $dbObj;
        $sql = "SELECT * FROM ".ORDER." WHERE admin_id = '".$_SESSION['adminid']."' ";
        $res = $dbObj->query($sql);
        if($res){
            return $dbObj->num_rows($res);
        }else{
            return 0;
        }
    }
    
    public function getOrders($page=null,$offset=null){
        global $dbObj;
        $sql = "SELECT * FROM ".ORDER_INVOICE." WHERE admin_id = '".$_SESSION['adminid']."' ";
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
            return false;
        }
    }
    
    public function createOrder($data =  array()){
        global $dbObj;
        $sql = "INSERT INTO 
                    ".ORDER_INVOICE." 
                SET
                    admin_id = '".$_SESSION['adminid']."',
                    customer_id = '".$this->addCustomer($data['customer'])."',
                    po_no = '".$data['customer']['po_no']."',
                    subtotal = '".$data['subtotal']."',
                    shipping = '".$data['shiphanval']."',
                    discount = '".$data['discount']."',
                    tax = '".$data['tax']."',
                    grandtotal = '".$data['grandtotal']."',
                    status = 'unpaid',
                    email = '".$data['customer']['office_email']."',
                    createdat = NOW()
                ";
        $res = $dbObj->query($sql);
        $orderid = $dbObj->last_id();
        if($orderid){
            foreach($data['items'] as $val){
                $sql = "INSERT INTO 
                            ".ORDER_INVOICE_ITEMS." 
                        SET
                            invoice_id = '".$orderid."',
                            name = '".$val['name']."',
                            sku = '".$val['code']."',
                            qty = '".$val['qty']."', 
                            qty_type = '".$val['qty_type']."', 
                            price = '".$val['price']."',
                            tax = '".$val['tax']."',
                            disc = '".$val['disc']."',
                            subtotal = '".$val['subtotal']."',
                            createdat = NOW()    
                        ";
                $res = $dbObj->query($sql);
                $this->updateInventory('create',$val['code'],$val['qty'],$val['qty_type']);
            }
            $this->addProducts($data['items']);
            $chalanno = $this->createChalanNo($orderid);
            $sql = "UPDATE 
                        ".ORDER_INVOICE." 
                    SET
                        chalan_no = '".$chalanno."'
                    WHERE
                        id = '".$orderid."'
                    ";
            $res = $dbObj->query($sql);
        }
        return $chalanno;
    }
    
    public function addProducts($items){
        global $dbObj;
        foreach($items as $val){
            if(!$this->checkProductExist($val['code'])){
                $sql = "INSERT INTO 
                            ".PRODUCT." 
                        SET
                            admin_id = '".$_SESSION['adminid']."',
                            name = '".$val['name']."',
                            sku = '".$val['code']."',
                            qty_shop = 0, 
                            qty_godown = 0, 
                            price = '".$val['price']."',
                            createdat = NOW(),
                            status = 1
                        ";
                $res = $dbObj->query($sql);
            }
        }
    }
    
    public function checkProductExist($code){
        global $dbObj;
        $sql = "SELECT * FROM ".PRODUCT." WHERE sku = '".$code."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return true;
        }else{
            return false;
        }
    }
    
    public function checkCustomerExist($email){
        global $dbObj;
        $sql = "SELECT id FROM ".CUSTOMER." WHERE email = '".$email."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            $row = $dbObj->fetch_array_assoc($res);
            
            return $row['id'];
        }else{
            return false;
        }
    }
    
    public function addCustomer($data){
        if(isset($data['id']) && $data['id'] != ''){
            $customerid = $data['id'];
            return $customerid;
        }
        
        $customerid = $this->checkCustomerExist($data['office_email']);
        if($customerid){
            return $customerid;
        }
        
        global $dbObj;
        echo $sql = "INSERT INTO 
                    ".CUSTOMER." 
                SET
                    admin_id = '".$_SESSION['adminid']."',
                    account_name = '".$data['name']."',
                    email = '".$data['office_email']."',
                    website = '".$data['url']."',
                    phone = '".$data['office_phone']."',
                    fax = '".$data['office_fax']."',
                    vat = '".$data['vat_number']."',
                    status = 1,
                    createdat = NOW()
                ";
        $res = $dbObj->query($sql);
        $customerid = $dbObj->last_id();
        $sql = "INSERT INTO 
                    ".CUSTOMER_ADDRESS." 
                SET
                    admin_id = '".$_SESSION['adminid']."',
                    customer_id = '".$customerid."',
                    address1 = '".$data['billing_address_1']."',
                    address2 = '".$data['billing_address_2']."',
                    city = '".$data['billing_city']."',
                    state = '".$data['billing_region']."',
                    country = '".$data['billing_country']."',
                    postcode = '".$data['billing_postal_code']."',
                    type = 'billing',
                    createdat = NOW()
                ";
        $res = $dbObj->query($sql);
        $sql = "INSERT INTO 
                    ".CUSTOMER_ADDRESS." 
                SET
                    admin_id = '".$_SESSION['adminid']."',
                    customer_id = '".$customerid."',
                    address1 = '".$data['shipping_address_1']."',
                    address2 = '".$data['shipping_address_2']."',
                    city = '".$data['shipping_city']."',
                    state = '".$data['shipping_region']."',
                    country = '".$data['shipping_country']."',
                    postcode = '".$data['shipping_postal_code']."',
                    type = 'shipping',
                    createdat = NOW()
                ";
        $res = $dbObj->query($sql);
        
        return $customerid;
    }
    
    public function getOrder($id){
        global $dbObj;
        $sql = "SELECT * FROM ".ORDER_INVOICE." WHERE id = '".$id."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            $row = $dbObj->fetch_array_assoc($res);
            return $row;
        }else{
            return false;
        }
    }
    
    public function getOrderId($id){
        global $dbObj;
        $sql = "SELECT * FROM ".ORDER_INVOICE." WHERE chalan_no = '".$id."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            $row = $dbObj->fetch_array_assoc($res);
            return $row['id'];
        }else{
            return false;
        }
    }
    
    public function getOrderItems($id){
        global $dbObj;
        $sql = "SELECT * FROM ".ORDER_INVOICE_ITEMS." WHERE invoice_id = '".$id."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            $row = $dbObj->fetch_all_array($sql);
            /* if(count($row)==1){
                $row[]=$row;
            } */
            return $row;
        }else{
            return false;
        }
    }
    
    public function getCustomer($id){
        global $dbObj;
        $sql = "SELECT * FROM ".CUSTOMER." WHERE id = '".$id."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            $row = $dbObj->fetch_array_assoc($res);
            return $row;
        }else{
            return false;
        }
    }
    
    public function getCustomerBilling($id){
        global $dbObj;
        $sql = "SELECT * FROM ".CUSTOMER_ADDRESS." WHERE type='billing' AND customer_id = '".$id."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            $row = $dbObj->fetch_array_assoc($res);
            return $row;
        }else{
            return false;
        }
    }
    
    public function getCustomerShipping($id){
        global $dbObj;
        $sql = "SELECT * FROM ".CUSTOMER_ADDRESS." WHERE type='shipping' AND customer_id = '".$id."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            $row = $dbObj->fetch_array_assoc($res);
            return $row;
        }else{
            return false;
        }
    }
    
    public function getSearchInvoice($keyword,$page=null,$offset=null){
        global $dbObj;
        $sql = "SELECT * FROM ".ORDER_INVOICE." WHERE invoice_no LIKE '%".$keyword."%' OR chalan_no LIKE '%".$keyword."%' ";
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
            return false;
        }
    }
    
    public function invoiceChalan($data){
        global $dbObj;
        $sql = "INSERT INTO 
                    ".ORDER_INVOICE." 
                SET
                    admin_id = '".$_SESSION['adminid']."',
                    customer_id = '".$data['order']['customer_id']."',
                    chalan_no = '".$data['order']['chalan_no']."',
                    subtotal = '".$data['order']['subtotal']."',
                    shipping = '".$data['order']['shipping']."',
                    discount = '".$data['order']['discount']."',
                    tax = '".$data['order']['tax']."',
                    grandtotal = '".$data['order']['grandtotal']."',
                    status = 'unpaid',
                    email = '".$data['order']['email']."',
                    createdat = NOW()
                ";
        $res = $dbObj->query($sql);
        $orderid = $dbObj->last_id();
        $chalanno = $data['order']['chalan_no'];
        if($orderid){
            foreach($data['items'] as $val){
                $sql = "INSERT INTO 
                            ".ORDER_INVOICE_ITEMS." 
                        SET
                            invoice_id = '".$orderid."',
                            name = '".$val['name']."',
                            sku = '".$val['code']."',
                            qty = '".$val['qty']."', 
                            qty_type = '".$val['qty_type']."', 
                            price = '".$val['price']."',
                            tax = '".$val['tax']."',
                            disc = '".$val['disc']."',
                            subtotal = '".$val['subtotal']."',
                            createdat = NOW()
                        ";
                $res = $dbObj->query($sql);
                $this->updateInventory('create',$val['code'],$val['qty'],$val['qty_type']);
            }
            $this->addProducts($data['items']);
        }
        $sql = "UPDATE 
                    ".ORDER." 
                SET
                    status = 'invoiced'
                WHERE
                    chalan_no = '".$chalanno."'
                ";
        $res = $dbObj->query($sql);
        
        return $chalanno;
    }
    
    public function createChalanNo($orderId){
        if(strlen($orderId) == 1){
            return '0000'.$orderId;
        }elseif(strlen($orderId) == 2){
            return '000'.$orderId;
        }elseif(strlen($orderId) == 3){
            return '00'.$orderId;
        }elseif(strlen($orderId) == 4){
            return '0'.$orderId;
        }
    }
    
    public function updateInventory($event,$code,$qty,$type){
        global $dbObj;
        $sql = "SELECT * FROM ".PRODUCT." WHERE sku = '".$code."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            $row = $dbObj->fetch_array_assoc($res);
            if($event == 'create'){
                if($type == 'shop'){
                    $qtyproduct = $row['qty_shop'];
                    $qtyproduct = $qtyproduct - $qty;
                }elseif($type == 'godown'){
                    $qtyproduct = $row['qty_godown'];
                    $qtyproduct = $qtyproduct - $qty;
                }
            }elseif($event == 'delete'){
                if($type == 'shop'){
                    $qtyproduct = $row['qty_shop'];
                    $qtyproduct = $qtyproduct + $qty;
                }elseif($type == 'godown'){
                    $qtyproduct = $row['qty_godown'];
                    $qtyproduct = $qtyproduct + $qty;
                }
            }
            if($qtyproduct < 0){
                $qtyproduct = 0;
            }
            if($type == 'shop'){
                $sql = "UPDATE ".PRODUCT." SET qty_shop = '".intval($qtyproduct)."' WHERE sku = '".$code."' ";
                $res = $dbObj->query($sql);
            }elseif($type == 'godown'){
                $sql = "UPDATE ".PRODUCT." SET qty_godown = '".intval($qtyproduct)."' WHERE sku = '".$code."' ";
                $res = $dbObj->query($sql);
            }
            return true;
        }else{
            return false;
        }
    }
    
    public function deleteInvoice($id, $chalan_no) {
        global $dbObj;
        $sql = "DELETE FROM ".ORDER_INVOICE." WHERE id = '".$id."' ";
        $res = $dbObj->query($sql);
        
        $sql = "SELECT * FROM ".ORDER_INVOICE_ITEMS." WHERE invoice_id = '".$id."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            $row = $dbObj->fetch_all_array($sql);
            foreach($row as $val){
                $this->updateInventory('delete', $val['sku'], $val['qty'], $val['qty_type']);
            }
            
            $sql = "DELETE FROM ".ORDER_INVOICE_ITEMS." WHERE invoice_id = '".$id."' ";
            $res = $dbObj->query($sql);
			
			// Updating order status to pending
            $sql = "UPDATE 
                    ".ORDER." 
                SET
                    status = 'pending'
                WHERE
                    chalan_no = '".$chalan_no."'
                ";
			$res = $dbObj->query($sql);
            
            return true;
        }else{
            return false;
        }
    }
    
    public function markInvoicedPaid($id){
        global $dbObj;
        $sql = "UPDATE 
                    ".ORDER_INVOICE." 
                SET
                    status = 'paid'
                WHERE
                    id = '".$id."'
                ";
        if($dbObj->query($sql)){
            return true;
        }else{
            return false;
        }
        
    }

    public function getInvoiceCount(){
        global $dbObj;
        $sql = "SELECT * FROM ".ORDER_INVOICE." WHERE admin_id = '".$_SESSION['adminid']."' ";
        $res = $dbObj->query($sql);
        if($res){
            return $dbObj->num_rows($res);
        }else{
            return 0;
        }
    }
    
}
