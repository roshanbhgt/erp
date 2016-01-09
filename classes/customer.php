<?php

class customer{
    
    public function getCustomersCount(){
        global $dbObj;
        $sql = "SELECT * FROM ".CUSTOMER." ";
        $res = $dbObj->query($sql);
        if($res){
            return $dbObj->num_rows($res);
        }else{
            return 0;
        }
    }
    
    public function getCustomers($page=null,$offset=null){
        global $dbObj;
        $sql = "SELECT * FROM ".CUSTOMER." ";
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
    
    public function getCustomer($id){
        global $dbObj;
        $sql = "SELECT * FROM ".CUSTOMER." WHERE id=".$id;
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
    
    public function getCustomerTax($id){
        global $dbObj;
        $sql = "SELECT * FROM ".CUSTOMER_TAX." WHERE customer_id = '".$id."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            $row = $dbObj->fetch_array_assoc($res);
            return $row;
        }else{
            return false;
        }
    }
    
    public function addCustomer($data){
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
        $sql = "INSERT INTO 
                    ".CUSTOMER_TAX." 
                SET
                    admin_id = '".$_SESSION['adminid']."',
                    customer_id = '".$customerid."',
                    tax_rate_one = '".$data['tax_rate1']."',
                    tax_rate_two = '".$data['tax_rate2']."',
                    createdat = NOW()
                ";
        $res = $dbObj->query($sql);
        return true;
    }
    
    public function updateCustomer($data){
        global $dbObj;
        $sql = "UPDATE 
                    ".CUSTOMER." 
                SET
                    admin_id = '".$_SESSION['adminid']."',
                    account_name = '".$data['name']."',
                    email = '".$data['office_email']."',
                    website = '".$data['url']."',
                    phone = '".$data['office_phone']."',
                    fax = '".$data['office_fax']."',
                    vat = '".$data['vat_number']."' 
                WHERE
                    id = ".$data['id']."
                ";
        $res = $dbObj->query($sql);
        $customerid = $data['id'];
        $sql = "UPDATE 
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
                    type = 'billing' 
                WHERE
                    id = ".$data['billing_id']."
                ";
        $res = $dbObj->query($sql);
        $sql = "UPDATE 
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
                    type = 'shipping' 
                WHERE
                    id = ".$data['shipping_id']."
                ";
        $res = $dbObj->query($sql);
        $sql = "UPDATE  
                    ".CUSTOMER_TAX." 
                SET
                    admin_id = '".$_SESSION['adminid']."',
                    customer_id = '".$customerid."',
                    tax_rate_one = '".$data['tax_rate1']."',
                    tax_rate_two = '".$data['tax_rate2']."' 
                WHERE
                    id = ".$data['tax_id']."
                ";
        $res = $dbObj->query($sql);
        return true;
    }
    
    public function getSearchCustomers($keyword){
        global $dbObj;
        $sql = "SELECT * FROM ".CUSTOMER." where account_name LIKE '%".$keyword."%' OR email LIKE '".$keyword."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_all_array($sql);
        }else{
            return false;
        }
    }
    
    public function getCustomersInvoices($id){         
        global $dbObj;
        $sql = "SELECT oi.*, c.account_name FROM ".ORDER_INVOICE." as oi Inner Join ".CUSTOMER." 
                as c ON oi.customer_id  = c.id  WHERE customer_id = '".$id."' ";        
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_all_array($sql);
        }else{
            return ;
        }
    }
    
    public function getCustomersInvoice($id){         
        global $dbObj;
        $sql = "SELECT oi.*, c.account_name FROM ".ORDER_INVOICE." as oi Inner Join ".CUSTOMER." 
                as c ON oi.customer_id  = c.id  WHERE oi.id = '".$id."' ";        
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_array_assoc($res);
        }else{
            return ;
        }
    }
    
    public function markInvoicedPaid($data){
        global $dbObj;
        $sql = "UPDATE 
                    ".ORDER_INVOICE." 
                SET
                    status = 'paid',
                    paymentmethod = '".$data['payment_method']."',
                    markpaidat = '".$data['paid_date']."'
                WHERE
                    id = '".$data['id']."'
                ";
        if($dbObj->query($sql)){
            return true;
        }else{
            return false;
        }
    }
}
