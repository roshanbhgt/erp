<?php

class category{
    
    public function getCategories(){
        global $dbObj;
        $sql = "SELECT * FROM ".PRODUCT_CATEGORY." ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_all_array($sql);
        }else{
            return false;
        }
    }
    
    public function getCategory($id){
        global $dbObj;
        $sql = "SELECT * FROM ".PRODUCT_CATEGORY." WHERE id = ".$id." ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_array_assoc($res);
        }else{
            return false;
        }
    }
    
    public function addCategory($data){
        global $dbObj;
        $sql = "INSERT INTO
                    ".PRODUCT_CATEGORY."
                SET
                    admin_id = '".$_SESSION['adminid']."',
                    title = '".$data['title']."',
                    description = '".$data['description']."',
                    status = 1,
                    createdat = NOW()
                ";
        if($dbObj->query($sql)){
            return true;
        }else{
            return false;
        }
    }
    
    public function updateCategory($data){
        global $dbObj;
        $sql = "UPDATE 
                    ".PRODUCT_CATEGORY."
                SET
                    admin_id = '".$_SESSION['adminid']."',
                    title = '".$data['title']."',
                    description = '".$data['description']."' 
                WHERE 
                    id = ".$data['id']."
                ";
        if($dbObj->query($sql)){
            return true;
        }else{
            return false;
        }
    }
    
    public function getSearchCategories($keyword){
        global $dbObj;
        $sql = "SELECT * FROM ".PRODUCT_CATEGORY." WHERE title LIKE '%".$keyword."%' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_all_array($sql);
        }else{
            return false;
        }
    }
}
