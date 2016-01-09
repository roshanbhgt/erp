<?php /* Smarty version Smarty-3.1.14, created on 2015-11-01 10:48:53
         compiled from "./templates/account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17539301855635a0bdcb29c8-29840313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6516ccdbbd48a456a2f6ea1de75291cc247fb3e' => 
    array (
      0 => './templates/account.tpl',
      1 => 1445758271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17539301855635a0bdcb29c8-29840313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'billing' => 0,
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5635a0bddef620_82242876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5635a0bddef620_82242876')) {function content_5635a0bddef620_82242876($_smarty_tpl) {?><div class="dashboard">
    <div class="column-2">
        <div class="news">
            <div class="content">
                <span style="float: right; font-size: 11px; margin-top: 6px; color: #666;width: 100%;"><h2 class="dashboard">Business Contact</h2></span>
                <p style="padding:20px 0px 0px 0px; color:#999;line-height: 18px;padding: 35px 0 0;">
                    <?php echo $_smarty_tpl->tpl_vars['billing']->value['firstname'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['billing']->value['lastname'];?>
<br/>
                    <?php echo $_smarty_tpl->tpl_vars['billing']->value['company'];?>
<br/>
                    <?php echo $_smarty_tpl->tpl_vars['billing']->value['address1'];?>
<br/>
                    <?php echo $_smarty_tpl->tpl_vars['billing']->value['address2'];?>
<br/>
                    <?php echo $_smarty_tpl->tpl_vars['billing']->value['address3'];?>
<br/>
                    <?php echo $_smarty_tpl->tpl_vars['billing']->value['city'];?>
,<?php echo $_smarty_tpl->tpl_vars['billing']->value['state'];?>
,<?php echo $_smarty_tpl->tpl_vars['billing']->value['country'];?>
-<?php echo $_smarty_tpl->tpl_vars['billing']->value['postcode'];?>
<br/>
                    T: <?php echo $_smarty_tpl->tpl_vars['billing']->value['telephone'];?>
,&nbsp; F: <?php echo $_smarty_tpl->tpl_vars['billing']->value['fax'];?>
<br/>
                </p>                
            </div>
        </div>
    </div>
    <div class="column-1">
        <div class="activity">
            <div class="head">
                <span class="heading">
                    Welcome <strong><?php echo $_smarty_tpl->tpl_vars['company']->value['company'];?>
</strong>!
                </span>
            </div>
            <ul class="activity-feed">
                <p style="color: #999;" class="note">
                    <?php echo $_smarty_tpl->tpl_vars['company']->value['firstname'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['company']->value['lastname'];?>
<br/>
                    <?php echo $_smarty_tpl->tpl_vars['company']->value['email'];?>

                </p>                
            </ul>
        </div>
    </div>
</div>
<?php }} ?>