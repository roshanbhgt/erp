<?php

class purchase{
    
    public function getPurchaseBills($page=null,$offset=null){
        global $dbObj;
        $sql = "SELECT * FROM ".PURCHASE." ";
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
            return;
        }
    }
    
    public function addPurchaseBill($data){
        global $dbObj;
        $sql = "INSERT INTO
                    ".PURCHASE."
                SET
                    admin_id = '".$_SESSION['adminid']."',
                    chalan = '".$data['chalan']."',
                    name = '".$data['name']."',
                    address = '".$data['address']."',
                    subtotal = '".$data['subtotal']."',
                    tax = '".$data['tax']."',
                    shipping = '".$data['shipping']."',
                    discount = '".$data['discount']."',
                    total = '".$data['grandtotal']."',
                    purchaseat = '".$data['prchasedate']."',
                    createdat = NOW()
                ";
        if($dbObj->query($sql)){
            $purchaseid = $dbObj->last_id();
            foreach ($data['item'] as $val){
                $sql = "INSERT INTO
                            ".PURCHASE_ITEMS."
                        SET
                            purchase_id = '".$purchaseid."',
                            name = '".$val['name']."',
                            sku = '".$val['code']."',
                            qty_type = '".$val['qty_type']."',
                            qty = '".$val['qty']."',
                            price = '".$val['price']."',
                            subtotal = '".$val['subtotal']."',
                            createdat = NOW()
                        ";
                $dbObj->query($sql);
            }
            $this->addProducts($data['item']);
        }else{
            return false;
        }
        
    }

    public function updatePurchaseBill($data){
        global $dbObj;
        $purchaseid = $data['id'];
        $sql = "UPDATE
                    ".PURCHASE."
                SET
                    admin_id = '".$_SESSION['adminid']."',
                    chalan = '".$data['chalan']."',
                    name = '".$data['name']."',
                    address = '".$data['address']."',
                    subtotal = '".$data['subtotal']."',
                    tax = '".$data['tax']."',
                    shipping = '".$data['shipping']."',
                    discount = '".$data['discount']."',
                    total = '".$data['grandtotal']."',
                    purchaseat = '".$data['prchasedate']."',
                    createdat = NOW()
                WHERE
                    id = '".$purchaseid."'
                ";
        if($dbObj->query($sql)){
            foreach ($data['item'] as $val){
                $sql = "UPDATE
                            ".PURCHASE_ITEMS."
                        SET
                            purchase_id = '".$purchaseid."',
                            name = '".$val['name']."',
                            sku = '".$val['code']."',
                            qty_type = '".$val['qty_type']."',
                            qty = '".$val['qty']."',
                            price = '".$val['price']."',
                            subtotal = '".$val['subtotal']."',
                            createdat = NOW()
                        WHERE
                            id = '".$val['id']."'
                        ";
                $dbObj->query($sql);
            }
            $this->addProducts($data['item']);
        }else{
            return false;
        }

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
    
    public function deletePurchase($id){
        global $dbObj;
        $sql = "DELETE FROM ".PURCHASE." WHERE id = '".$id."' ";
        if($dbObj->query($sql)){
            $sql = "DELETE FROM ".PURCHASE_ITEMS." WHERE purchase_id = '".$id."' ";
            if($dbObj->query($sql)){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    
    public function getPurchase($id){
        global $dbObj;
        $sql = "SELECT * FROM ".PURCHASE." WHERE id = '".$id."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            $row = $dbObj->fetch_array_assoc($res);
            return $row;
        }else{
            return false;
        }
    }
    
    public function getPurchaseItems($id){
        global $dbObj;
        $sql = "SELECT * FROM ".PURCHASE_ITEMS." WHERE purchase_id = '".$id."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){            
            return $dbObj->fetch_all_array($sql);            
        }else{
            return false;
        }
    }
	
	public function getSearchPurchase($keyword,$page=null,$offset=null){
        global $dbObj;
        $sql = "SELECT * FROM ".PURCHASE." WHERE chalan LIKE '%".$keyword."%' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_all_array($sql);
        }else{
            return 0;
        }
    }
    
}
