<?php

// Defining Domain Constant
// define ('FRONTEND','http://'.$_SERVER['HTTP_HOST'].'/billing/');
 define ('FRONTEND','http://'.$_SERVER['HTTP_HOST'].'/');
 define ('BACKEND','http://'.$_SERVER['HTTP_HOST'].'/');
 define ('ROOT_BACKEND_PATH',$_SERVER['DOCUMENT_ROOT'].'/cpanel/');
// define ('ROOT_FRONT_PATH',$_SERVER['DOCUMENT_ROOT'].'/billing/');
 define ('SESSION_BACKEND_PATH',$_SERVER['DOCUMENT_ROOT'].'/cpanel/session');
// define ('SESSION_FRONTEND_PATH',$_SERVER['DOCUMENT_ROOT'].'/billing/session');
define ('SESSION_FRONTEND_PATH',$_SERVER['DOCUMENT_ROOT'].'/session');

// Defining Table Contants 
define ('ADMIN','admin');
define ('ADMIN_BILLING','admin_billing');
define ('ADMIN_CONTACT','admin_contact');
define ('ORDER','orders');
define ('ORDER_ADDRESS','order_address');
define ('ORDER_ITEMS','order_items');
define ('PRODUCT','product');
define ('PRODUCT_CATEGORY','product_category');
define ('CUSTOMER','customer');
define ('CUSTOMER_ADDRESS','customer_address');
define ('CUSTOMER_TAX','customer_tax');
define ('ORDER_INVOICE','orders_invoice');
define ('ORDER_INVOICE_ITEMS','order_invoice_items');
define ('PURCHASE','purchase');
define ('PURCHASE_ITEMS','purchase_items');


require_once 'classes/admin.php';
require_once 'classes/order.php';
require_once 'classes/product.php';
require_once 'classes/purchase.php';
require_once 'classes/customer.php';
require_once 'classes/category.php';
require_once 'classes/invoice.php';
require_once 'classes/report.php';
require_once 'classes/cashmemo.php';
require_once 'classes/dashboard.php';

include_once 'include/functions.php';