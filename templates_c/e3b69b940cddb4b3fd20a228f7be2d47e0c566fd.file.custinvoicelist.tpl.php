<?php /* Smarty version Smarty-3.1.14, created on 2015-11-27 13:05:29
         compiled from "./templates/custinvoicelist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1767652147562b9cf4300a08-91548292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3b69b940cddb4b3fd20a228f7be2d47e0c566fd' => 
    array (
      0 => './templates/custinvoicelist.tpl',
      1 => 1445758283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1767652147562b9cf4300a08-91548292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_562b9cf43b62a0_08379317',
  'variables' => 
  array (
    'customer' => 0,
    'invoices' => 0,
    'val' => 0,
    'FRONTEND' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562b9cf43b62a0_08379317')) {function content_562b9cf43b62a0_08379317($_smarty_tpl) {?><div class="order-history">
    <div style="border: 1px solid #aaa; border-radius: 8px;">
        <div class="panel-head">
            <h2>Invoices List <?php echo $_smarty_tpl->tpl_vars['customer']->value['account_name'];?>
</h2>
        </div>
        <div class="table-wrapper">
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th style="text-align: left;width: 125px;">Status</th>
                        <th style="text-align: left;width: 125px;">Account Name</th>
                        <th style="text-align: left; min-width: 25px;">Email</th>
                        <th>Grand Total in &#8377;</th>
                        <th class="jettisonable">Date Created</th>
                        <th class="jettisonable">Payment Method</th>
                        <th class="jettisonable">Paid Date</th>
                        <th style="padding-right: 32px;" class="list-right"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($_smarty_tpl->tpl_vars['invoices']->value>0){?>
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['invoices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                            <tr>
                                <td style="text-align: left;width: 125px;"><?php echo ucfirst($_smarty_tpl->tpl_vars['val']->value['status']);?>
</td>
                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['val']->value['account_name'];?>
</td>
                                <td style="text-align: left; min-width: 25px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['email'];?>
</td>
                                <td style="text-align: center;">&#8377;&nbsp;<?php echo $_smarty_tpl->tpl_vars['val']->value['grandtotal'];?>
</td>
                                <td style="text-align: center;" class="jettisonable"><?php echo $_smarty_tpl->tpl_vars['val']->value['createdat'];?>
</td>
                                <td style="text-align: center;" class="jettisonable"><?php echo ucfirst($_smarty_tpl->tpl_vars['val']->value['paymentmethod']);?>
</td>
                                <td style="text-align: center;" class="jettisonable"><?php echo $_smarty_tpl->tpl_vars['val']->value['markpaidat'];?>
</td>
                                <td style="text-align: right;padding-right: 10px;" class="jettisonable">
                                    <?php if ($_smarty_tpl->tpl_vars['val']->value['status']!='paid'){?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
custrevenue.php?action=custinvmarkpaid&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
skin/images/paid.png" alt="Mark As Paid" title="Mark As Paid" /></a>
                                    <?php }?>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php }else{ ?>
                        <tr>
                            <td style="text-align: center;" colspan="7">
                                <div style="padding:50px 10px 5px 10px;color:#666;">
                                    <p style="font-weight:bold;font-size:14px;">Hey, it looks like you haven't entered any customers yet.</p>
                                    <p>Quickly add your first customer using the toolbar above.</p>
                                    <p style="font-size:11px;margin-top:50px;">Hint: Once your customer list grows larger, we recommend trying our 'Instant Search' (top left) to quickly find what you're looking for.</p>
                                </div>              
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="paging">
            <div style="float: left;">There are <strong><?php echo count($_smarty_tpl->tpl_vars['invoices']->value);?>
</strong> results in your database.</div>
        </div>
    </div>
</div><?php }} ?>