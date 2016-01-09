<?php /* Smarty version Smarty-3.1.14, created on 2015-10-25 13:32:25
         compiled from "./templates/two-column-left.html" */ ?>
<?php /*%%SmartyHeaderCode:1525452859562b9ba77e8559-23209962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7aa0329704a9d10d2d0d11701aec4adfa3cf5ce' => 
    array (
      0 => './templates/two-column-left.html',
      1 => 1445758311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1525452859562b9ba77e8559-23209962',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_562b9ba77fb303_25814446',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562b9ba77fb303_25814446')) {function content_562b9ba77fb303_25814446($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $_smarty_tpl->getSubTemplate ('head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body>
    <div class="wrapper">	
        <div class="header">
            <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
        </div>
        <div class="main-content">        	
            <?php echo $_smarty_tpl->getSubTemplate ('content-left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>    
    </div>
    <div class="footer">
        <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
            
    </div>
    <div id="overlay"></div>
</body>
</html>
<?php }} ?>