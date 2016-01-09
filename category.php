<?php
// Includng configuration file
include 'config/config.php';

//Check user is already login or not
checkAuthentication();

$id = $_SESSION['adminid'];
$category = new category();
$categories = $category->getCategories($id);
$smarty->assign('action', 'category');
$smarty->assign('toolbar', $smarty->fetch('toolbar.tpl'));
if(isset($_GET['action']) && $_GET['action'] == 'new'){
    $smarty->assign('content', $smarty->fetch('addcategory.tpl'));
}elseif(isset($_GET['action']) && $_GET['action'] == 'edit'){
    $id = $_GET['id'];
    $categories = $category->getCategory($id);
    $smarty->assign('category', $categories);
    $smarty->assign('content', $smarty->fetch('editcategory.tpl'));
}elseif(isset($_POST['action']) && $_POST['action'] == 'add'){
    $data = $_POST;
    if($category->addCategory($data)){
        header('Location: '.FRONTEND.'category.php');
        exit;
    }
}elseif(isset($_POST['action']) && $_POST['action'] == 'update'){
    $data = $_POST;
    if($category->updateCategory($data)){
        header('Location: '.FRONTEND.'category.php');
        exit;
    }
}elseif(isset($_GET['action']) && $_GET['action'] == 'search'){
    $keyword = $_POST['keywords'];
    $smarty->assign('categories', $category->getSearchCategories($keyword));
    $smarty->assign('content', $smarty->fetch('category.tpl'));
}else{
    $smarty->assign('categories', $categories);
    $smarty->assign('content', $smarty->fetch('category.tpl'));
}
$smarty->display('two-column-left.html');

?>

