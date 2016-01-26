<?php
// Includng configuration file
include 'config/config.php';

//Check user is already login or not
checkAuthentication();

$product = new product();
$category = new category();
$smarty->assign('categories', $category->getCategories());

if(isset($_GET['action']) && $_GET['action'] == 'new'){
    $smarty->assign('content', $smarty->fetch('additem.tpl'));
}elseif(isset($_GET['action']) && $_GET['action'] == 'edit'){
    $id = $_GET['id'];
    $producted = $product->getProduct($id);
    $smarty->assign('product', $producted);
    $smarty->assign('content', $smarty->fetch('edititem.tpl'));
}elseif(isset($_POST['action']) && $_POST['action'] == 'add'){
    $file = $_FILES;
    $data = $_POST['data']['Item'];
    $data['image'] = $file['name'];
    if($product->checkProduct($data)){
        $_SESSION['message'] = 'Product with catalog no already exist. Please search with product sku and update details.';
        header('Location: '.FRONTEND.'inventory.php');
        exit;
    }else if($product->addProduct($data)){
        header('Location: '.FRONTEND.'inventory.php');
        exit;
    }
}elseif(isset($_POST['action']) && $_POST['action'] == 'update'){
    $file = $_FILES;
    $data = $_POST['data']['Item'];
    if(isset($file['name'])){
        $data['image'] = $file['name'];
    }else{
        $data['image'] =  '';
    }
    
    if($product->updateProduct($data)){
        $_SESSION['message'] = 'Product has been updated successfully.';
        header('Location: '.FRONTEND.'inventory.php');
        exit;
    }
}elseif(isset($_GET['action']) && $_GET['action'] == 'delete'){
    $id = $_GET['id'];
    if($product->deleteProduct($id)){
        $_SESSION['message'] = 'Product has been deleted successfully.';
        header('Location: '.FRONTEND.'inventory.php');
        exit;
    }
}elseif(isset($_GET['action']) && $_GET['action'] == 'search'){
    $keyword = $_POST['keywords'];
    $products = $product->getSearchProducts($keyword);
    $smarty->assign('productcount', count($products));
    $smarty->assign('products', $products);
    $smarty->assign('content', $smarty->fetch('product.tpl'));    
}else{
    $page = 1;
    if(isset($_GET['page'])){
        $page = $_GET['page'];      
    }
    $products = $product->getProducts($page, $offset=10);
    $smarty->assign('productcount', $product->getProductsCount());
    $smarty->assign('page', $page);
    
    $smarty->assign('products', $products);
    $smarty->assign('pagecount', ceil($product->getProductsCount()/10));
    $smarty->assign('content', $smarty->fetch('product.tpl'));    
}

$smarty->assign('action', 'inventory');
$smarty->assign('toolbar', $smarty->fetch('toolbar.tpl'));
$smarty->display('two-column-left.html');
?>

