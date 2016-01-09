<?php /* Smarty version Smarty-3.1.14, created on 2016-01-09 22:25:09
         compiled from ".\templates\content-left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2556456913b6d9c01c0-54756285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb82ad329b162304e3e2c96c0b27fb0c4e097593' => 
    array (
      0 => '.\\templates\\content-left.tpl',
      1 => 1445758280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2556456913b6d9c01c0-54756285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'toolbar' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56913b6d9d78c5_55812617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56913b6d9d78c5_55812617')) {function content_56913b6d9d78c5_55812617($_smarty_tpl) {?><div class="content-left">
    <?php echo $_smarty_tpl->getSubTemplate ('left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div class="content-right">
    <div id="toolbar"><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
</div>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>

<?php }} ?>