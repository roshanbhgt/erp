<?php /* Smarty version Smarty-3.1.14, created on 2015-11-23 16:09:25
         compiled from "./templates/successinvoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6854707555652ecddc77a00-11105697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c76c4a247e25dc0880139d84441369019a11e8d' => 
    array (
      0 => './templates/successinvoice.tpl',
      1 => 1445758309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6854707555652ecddc77a00-11105697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5652ecddcd9a86_30027029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652ecddcd9a86_30027029')) {function content_5652ecddcd9a86_30027029($_smarty_tpl) {?><div id="successorder">
    Invoice for created successfully, here you can find reference #<b><?php echo $_smarty_tpl->tpl_vars['orderid']->value;?>
</b>.
</div><?php }} ?>