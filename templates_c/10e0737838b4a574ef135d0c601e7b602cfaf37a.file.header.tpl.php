<?php /* Smarty version Smarty-3.1.14, created on 2016-01-09 22:25:09
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7956913b6d8f1119-62957924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1445758292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7956913b6d8f1119-62957924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'session' => 0,
    'FRONTEND' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56913b6d98d533_27408886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56913b6d98d533_27408886')) {function content_56913b6d98d533_27408886($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\roshan\\project\\erp\\lib\\Smarty\\plugins\\modifier.date_format.php';
?><div class="header-container">    
    <div class="logo">        
        <h1>Billing and Inventory Management</h1>    
    </div>    
    <?php if ($_smarty_tpl->tpl_vars['session']->value['adminid']!=''){?>    
    <div class="quik-link">        
        <ul>
            <li><a href="#"><?php echo smarty_modifier_date_format(time(),"%A, %B %e, %Y");?>
</a></li>
            <li>&nbsp;|&nbsp;</li>       
               
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
logout.php">Logout</a></li>        
        </ul>    
    </div>    
    <?php }?>
</div><?php }} ?>