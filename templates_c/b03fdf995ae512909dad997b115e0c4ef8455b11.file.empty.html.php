<?php /* Smarty version Smarty-3.1.14, created on 2016-01-09 00:47:41
         compiled from ".\templates\empty.html" */ ?>
<?php /*%%SmartyHeaderCode:3071856900b55c81a14-97648868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b03fdf995ae512909dad997b115e0c4ef8455b11' => 
    array (
      0 => '.\\templates\\empty.html',
      1 => 1445758290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3071856900b55c81a14-97648868',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56900b55ca8b10_24136399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56900b55ca8b10_24136399')) {function content_56900b55ca8b10_24136399($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php echo $_smarty_tpl->getSubTemplate ('head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body>
    <div class="wrapper">
      <div class="header">
          <div class="header-container">
              <div class="logo">
                  <h1>Billing and Inventory Management</h1>
              </div>
          </div>
      </div>
      <div class="main-content">        	
          <?php echo $_smarty_tpl->getSubTemplate ('empty.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

      </div>
    </div>
    <div class="footer">
        <div class="copyright">&copy; 2015 . All rights reserved.</div>
    </div>
    <div id="overlay"></div>
</body>
</html>
<?php }} ?>