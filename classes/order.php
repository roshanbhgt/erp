<?php

class order{
    
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
        $sql = "SELECT * FROM ".ORDER." WHERE admin_id = '".$_SESSION['adminid']."' ";
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
    
    public function createOrder($data =  array()){
        global $dbObj;
        $sql = "INSERT INTO 
                    ".ORDER." 
                SET
                    admin_id = '".$_SESSION['adminid']."',
                    customer_id = '".$this->addCustomer($data['customer'])."',
                    po_no = '".$data['po_no']."',
                    subtotal = '".$data['subtotal']."',
                    shipping = '".$data['shiphanval']."',
                    discount = '".$data['discount']."',
                    tax = '".$data['tax']."',
                    grandtotal = '".$data['grandtotal']."',
                    status = 'pending',
                    email = '".$data['customer']['office_email']."',
                    createdat = NOW()
                ";
        $res = $dbObj->query($sql);
        $orderid = $dbObj->last_id();
        foreach($data['items'] as $val){
            $sql = "INSERT INTO 
                        ".ORDER_ITEMS." 
                    SET
                        order_id = '".$orderid."',
                        name = '".$val['name']."',
                        sku = '".$val['code']."',
                        qty = '".$val['qty']."', 
                        qty_type = '".$val['qty_type']."', ".
                        // price = '".$val['price']."',
                        // " subtotal = '".$val['subtotal']."'
                        " created_at = NOW()
                    ";
            $res = $dbObj->query($sql);
        }
        $this->addProducts($data['items']);
        $chalanno = $this->createChalanNo($orderid);
        $sql = "UPDATE 
                    ".ORDER." 
                SET
                    chalan_no = '".$chalanno."'
                WHERE
                    id = '".$orderid."'
                ";
        $res = $dbObj->query($sql);
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
                            qty = 0, ".
                            // price = '".$val['price']."',
                            " createdat = NOW(),
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
    
    public function checkCustomerExist($code){
        global $dbObj;
        $sql = "SELECT id FROM ".CUSTOMER." WHERE email = '".$code."' ";
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
        $sql = "INSERT INTO 
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
        $sql = "SELECT * FROM ".ORDER." WHERE id = '".$id."' ";
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
        $sql = "SELECT * FROM ".ORDER." WHERE chalan_no = '".$id."' ";
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
        $sql = "SELECT * FROM ".ORDER_ITEMS." WHERE order_id = '".$id."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            $row = $dbObj->fetch_all_array($sql);
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
    
    function createChalanNo($orderId){
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
    
    public function getSearchOrders($keyword,$page=null,$offset=null){
        global $dbObj;
        $sql = "SELECT * FROM ".ORDER." WHERE chalan_no LIKE '%".$keyword."%' ";
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
    
    public function getChalanOrders($keyword){
        global $dbObj;
        $sql = "SELECT * FROM ".ORDER." WHERE chalan_no LIKE '%".$keyword."%' AND status != 'invoiced' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_all_array($sql);
        }else{
            return false;
        }
    }

    public function updateChalanItem($items){
        global $dbObj;
        if(count($items)){
            foreach($items as $val){
               echo  $sql = "UPDATE
                        ".ORDER_ITEMS."
                    SET
                        name = '".$val['name']."',
                        sku = '".$val['code']."',
                        qty = '".$val['qty']."',
                        qty_type = '".$val['qty_type']."', ".
                    // price = '".$val['price']."',
                    // " subtotal = '".$val['subtotal']."'
                    " created_at = NOW()
                    WHERE
                        id = '".$val['id']."'
                    ";
                $res = $dbObj->query($sql);
            }
            $this->addProducts($items);
            return true;
        }else{
            return false;
        }
    }
}
