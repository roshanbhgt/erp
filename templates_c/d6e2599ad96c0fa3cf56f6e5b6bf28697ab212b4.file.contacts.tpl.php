<?php /* Smarty version Smarty-3.1.14, created on 2015-11-05 17:12:17
         compiled from "./templates/contacts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1127084822563b4099e8fd60-14711258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6e2599ad96c0fa3cf56f6e5b6bf28697ab212b4' => 
    array (
      0 => './templates/contacts.tpl',
      1 => 1445758279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1127084822563b4099e8fd60-14711258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contacts' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563b409a0b3c36_86188241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563b409a0b3c36_86188241')) {function content_563b409a0b3c36_86188241($_smarty_tpl) {?><div class="order-history">
    <div style="border: 1px solid #aaa; border-radius: 8px;">
        <div class="panel-head">
            <h2>Global Address Book</h2>
        </div>
        <div class="table-wrapper">
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th style="text-align: left;width: 125px;">Full Name</th>
                        <th style="text-align: left; min-width: 25px;">Email</th>
                        <th>Phone</th>
                        <th class="jettisonable">Date Added</th>
                        <th style="padding-right: 32px;" class="list-right"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($_smarty_tpl->tpl_vars['contacts']->value)>0){?>
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contacts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                            <tr>
                                <td style="text-align: left;width: 125px;"><?php echo ucfirst($_smarty_tpl->tpl_vars['val']->value['firstname']);?>
&nbsp;<?php echo ucfirst($_smarty_tpl->tpl_vars['val']->value['lastname']);?>
</td>
                                <td style="text-align: left; min-width: 25px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['pri_email'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['val']->value['sec_email'];?>
</td>
                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['val']->value['phone'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['val']->value['cell'];?>
</td>
                                <td style="text-align: center;" class="jettisonable"><?php echo $_smarty_tpl->tpl_vars['val']->value['createdat'];?>
</td>
                                <td style="text-align: right;padding-right: 10px;" class="jettisonable"></td>
                            </tr>
                        <?php } ?>
                    <?php }else{ ?>
                        <tr>
                            <td style="text-align: center;" colspan="7">
                                <div style="padding:50px 10px 5px 10px;color:#666;"><p style="font-weight:bold;font-size:14px;">Create a Purchase Order.</p><p>It's how you replenish your stock.</p></div>              
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="paging">
            <div style="float: left;">There are <strong><?php echo count($_smarty_tpl->tpl_vars['contacts']->value);?>
</strong> results in your database.</div>
        </div>
    </div>
</div><?php }} ?>