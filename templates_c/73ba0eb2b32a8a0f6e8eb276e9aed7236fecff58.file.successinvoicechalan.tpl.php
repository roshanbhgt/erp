<?php /* Smarty version Smarty-3.1.14, created on 2015-11-25 17:34:18
         compiled from "./templates/successinvoicechalan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3398138845655a3c22fd5c5-17636055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73ba0eb2b32a8a0f6e8eb276e9aed7236fecff58' => 
    array (
      0 => './templates/successinvoicechalan.tpl',
      1 => 1445758309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3398138845655a3c22fd5c5-17636055',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5655a3c2370293_68184775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5655a3c2370293_68184775')) {function content_5655a3c2370293_68184775($_smarty_tpl) {?><div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a>
            <h3>Invoice Successful</h3>
        </div>
        <div class="content" style="padding:20px 13px 10px;">
            <div id="successorder">
                Invoice for created successfully, here you can find reference #<b><?php echo $_smarty_tpl->tpl_vars['orderid']->value;?>
</b>.
            </div>
        </div>
    </div>
</div>
                <?php }} ?>