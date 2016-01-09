<?php /* Smarty version Smarty-3.1.14, created on 2015-10-25 13:32:25
         compiled from "./templates/content-left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:787896876562b9ba782cec9-95928366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66ef8f6cce99f934d60972f32e87565fb9c757c7' => 
    array (
      0 => './templates/content-left.tpl',
      1 => 1445758279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '787896876562b9ba782cec9-95928366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_562b9ba783b148_79966525',
  'variables' => 
  array (
    'toolbar' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562b9ba783b148_79966525')) {function content_562b9ba783b148_79966525($_smarty_tpl) {?><div class="content-left">
    <?php echo $_smarty_tpl->getSubTemplate ('left.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div class="content-right">
    <div id="toolbar"><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
</div>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>

<?php }} ?>