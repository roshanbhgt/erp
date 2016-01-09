<?php /* Smarty version Smarty-3.1.14, created on 2015-10-26 09:44:16
         compiled from "./templates/successorder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1418308779562da898173776-77432967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b0572fbd8b0bda047abb570c17f26cabbc17b1b' => 
    array (
      0 => './templates/successorder.tpl',
      1 => 1445758310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1418308779562da898173776-77432967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_562da8981c3077_52853915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562da8981c3077_52853915')) {function content_562da8981c3077_52853915($_smarty_tpl) {?><div id="successorder">
    Your delivery chalan created successfully and here you can find reference #<b><?php echo $_smarty_tpl->tpl_vars['orderid']->value;?>
</b>.
</div><?php }} ?>