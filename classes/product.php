<?php

class product{
    
    public function getProductsCount(){
        global $dbObj;
        $sql = "SELECT * FROM ".PRODUCT." ";
        $res = $dbObj->query($sql);
        if($res){
            return $dbObj->num_rows($res);
        }else{
            return 0;
        }
    }
    
    public function getProducts($page=null,$offset=null){
        global $dbObj;
        $sql = "SELECT * FROM ".PRODUCT." ";
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
    
    public function addProduct($data){
        global $dbObj;
        $sql = "INSERT INTO
                    ".PRODUCT."
                SET
                    admin_id = '".$_SESSION['adminid']."',
                    category_id = '".$data['category']."',
                    name = '".$data['name']."',
                    sku = '".$data['sku']."',
                    serial_no = '".$data['serial_number']."',
                    description = '".$data['description']."',
                    qty_shop = '".$data['quantity_shop']."',
                    qty_godown = '".$data['quantity_godown']."',
                    threyshold = '".$data['threshold']."',
                    cost = '".$data['cost']."',
                    price = '".$data['price']."',
                    published = '".$data['published']."',
                    weight = '".$data['weight']."',
                    image = '".$data['image']."',
                    status = 1,
                    createdat = NOW()
                ";
        if($dbObj->query($sql)){
            return true;
        }else{
            return false;
        }
    }
    
    public function updateProduct($data){
        global $dbObj;
        $sql = "UPDATE
                    ".PRODUCT."
                SET
                    admin_id = '".$_SESSION['adminid']."',
                    category_id = '".$data['category']."',
                    name = '".$data['name']."',
                    sku = '".$data['sku']."',
                    serial_no = '".$data['serial_number']."',
                    description = '".$data['description']."',
                    qty_shop = '".$data['quantity_shop']."',
                    qty_godown = '".$data['quantity_godown']."',
                    threyshold = '".$data['threshold']."',
                    cost = '".$data['cost']."',
                    price = '".$data['price']."',
                    weight = '".$data['weight']."',
                    image = '".$data['image']."' 
                WHERE
                    id = ".$data['id']."
                ";
        if($dbObj->query($sql)){
            return true;
        }else{
            return false;
        }
    }
    
    public function checkProduct($data){
        global $dbObj;
        $sql = "SELECT * FROM ".PRODUCT." WHERE sku = '".$data['sku']."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return true;
        }else{
            return false;
        }
    }
    
    public function getProduct($id){
        global $dbObj;
        $sql = "SELECT * FROM ".PRODUCT." WHERE id = '".$id."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            $row = $dbObj->fetch_array_assoc($res);
            return $row;
        }else{
            return false;
        }
    }
    
    public function getSearchProducts($keyword){
        global $dbObj;
        $sql = "SELECT * FROM ".PRODUCT." WHERE sku LIKE '%".$keyword."%' OR name LIKE '%".$keyword."%' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_all_array($sql);
        }else{
            return false;
        }
    }
    
    public function getProductPrice($sku){
        global $dbObj;
        $sql = "SELECT price FROM ".PRODUCT." WHERE sku = '".$sku."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            $row = $dbObj->fetch_array_assoc($res);
            return $row['price'];
        }else{
            return 0;
        }
    }
}
