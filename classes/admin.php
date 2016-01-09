<?php

class admin{
    
    public function login($data){
        global $dbObj;
        $sql = "SELECT * FROM ".ADMIN." WHERE status = 1 AND username = '".$data['username']."' AND password = '".base64_encode($data['password'])."' LIMIT 1  ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            $row = $dbObj->fetch_array_assoc($res);
            $_SESSION['adminid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['lastlogin'] = $row['lastloginat'];
            $_SESSION['company'] = $row['company'];
            $_SESSION['lastlogin'] = $row['lastloginat'];
            $sql = "UPDATE ".ADMIN." set lastloginat = NOW() WHERE id = '".$row['id']."'  ";
            $dbObj->query($sql);
            return true;
        } else {
            return false;
        }
    }
    
    public function getCompany($id){
        global $dbObj;
        $sql = "SELECT * FROM ".ADMIN." WHERE id = '".$id."' LIMIT 1 ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_array_assoc($res);
        } else {
            return false;
        }
    }
    
    public function getDefaultBilling(){
        global $dbObj;
        $sql = "SELECT * FROM ".ADMIN_BILLING." WHERE default_billing = 1  AND admin_id = '".$_SESSION['adminid']."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_array_assoc($res);
        }else{
            return false;
        }
    }
    
    public function getBilling(){
        global $dbObj;
        $sql = "SELECT * FROM ".ADMIN_BILLING." WHERE admin_id = '".$_SESSION['adminid']."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_all_array($sql);
        }else{
            return false;
        }
    }
    
    public function addBilling($data){
        global $dbObj;
        $sql = "INSERT INTO 
                    ".ADMIN_BILLING."
                SET
                    firstname = '".$data['firstname']."',
                    lastname = '".$data['lastname']."',
                    company = '".$data['company']."',
                    address1 = '".$data['address1']."',
                    address2 = '".$data['address2']."',
                    address3 = '".$data['address3']."',
                    city = '".$data['city']."',
                    state = '".$data['state']."',
                    country = '".$data['country']."',
                    postcode = '".$data['postcode']."',
                    telephone = '".$data['telephone']."',
                    fax = '".$data['fax']."',
                    default_billing = '".$data['default_billing']."',
                    admin_id = '".$_SESSION['adminid']."',
                    createdat = Now()  ";
        if($dbObj->query($sql)){
            return true;
        }else{
            return false;
        }  
    }
    
    public function addContact($data){
        global $dbObj;
        $sql = "INSERT INTO 
                    ".ADMIN_CONTACT."
                SET
                    admin_id = '".$_SESSION['adminid']."',
                    firstname = '".$data['first_name']."',
                    lastname = '".$data['last_name']."',
                    jobtitle = '".$data['job_title']."',
                    phone = '".$data['phone']."',
                    cell = '".$data['cell']."',
                    fax = '".$data['fax']."',
                    act_assoc_id = '".$data['autosuggest_customer_name']."',
                    pri_email = '".$data['email_1']."',
                    sec_email = '".$data['email_2']."',
                    createdat = Now()  
                ";
        if($dbObj->query($sql)){
            return true;
        }else{
            return false;
        }  
    }
    
    public function getContacts(){
        global $dbObj;
        $sql = "SELECT * FROM ".ADMIN_CONTACT." WHERE admin_id = '".$_SESSION['adminid']."' ";
        $res = $dbObj->query($sql);
        if($dbObj->num_rows($res) > 0){
            return $dbObj->fetch_all_array($sql);
        }else{
            return false;
        }
    }
    
    public function getTax(){
        global $dbObj;
        $sql = "SELECT * FROM ".ADMIN_TAX." WHERE status = 1 AND admin_id = '".$_SESSION['adminid']."' ";
        $res = $dbObj->query($sql);
    }
    
    public function updateCompany($data){
        global $dbObj;
        $sql = "UPDATE ".ADMIN." 
                SET 
                    firstname = '".$data['firstname']."',
                    lastname = '".$data['lastname']."',
                    email = '".$data['email']."',
                    username = '".$data['username']."',
                    company = '".$data['company']."'
                ". "WHERE id = '".$data['id']."' ";
        if($dbObj->query($sql)){
            return true;
        }else{
            return false;
        }
    }
    
}
