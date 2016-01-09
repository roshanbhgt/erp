<?php /* Smarty version Smarty-3.1.14, created on 2015-10-25 13:32:25
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:806759161562b9ba7800be2-49977744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1445758292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '806759161562b9ba7800be2-49977744',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_562b9ba7828533_91991568',
  'variables' => 
  array (
    'session' => 0,
    'FRONTEND' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562b9ba7828533_91991568')) {function content_562b9ba7828533_91991568($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/aarti/public_html/billing/lib/Smarty/plugins/modifier.date_format.php';
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