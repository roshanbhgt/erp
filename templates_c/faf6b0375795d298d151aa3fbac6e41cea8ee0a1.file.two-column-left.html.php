<?php /* Smarty version Smarty-3.1.14, created on 2016-01-09 22:25:09
         compiled from ".\templates\two-column-left.html" */ ?>
<?php /*%%SmartyHeaderCode:1911856913b6d8aea80-56239148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faf6b0375795d298d151aa3fbac6e41cea8ee0a1' => 
    array (
      0 => '.\\templates\\two-column-left.html',
      1 => 1445758312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1911856913b6d8aea80-56239148',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56913b6d8e5597_16318794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56913b6d8e5597_16318794')) {function content_56913b6d8e5597_16318794($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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