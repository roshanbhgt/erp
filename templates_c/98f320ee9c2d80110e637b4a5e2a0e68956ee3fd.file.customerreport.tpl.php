<?php /* Smarty version Smarty-3.1.14, created on 2015-10-26 18:52:00
         compiled from "./templates/customerreport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1136803902562b9ccd2a18c9-72842174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98f320ee9c2d80110e637b4a5e2a0e68956ee3fd' => 
    array (
      0 => './templates/customerreport.tpl',
      1 => 1445758284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1136803902562b9ccd2a18c9-72842174',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_562b9ccd348dc4_00692584',
  'variables' => 
  array (
    'from' => 0,
    'to' => 0,
    'customers' => 0,
    'val' => 0,
    'totalorders' => 0,
    'totalrevenue' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562b9ccd348dc4_00692584')) {function content_562b9ccd348dc4_00692584($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/aarti/public_html/billing/lib/Smarty/plugins/modifier.date_format.php';
?><div class="order-history">
    <div style="border: 1px solid #aaa; border-radius: 8px;">
        <div class="panel-head">
            <h2>Customers Report for <?php echo $_smarty_tpl->tpl_vars['from']->value;?>
 to <?php echo $_smarty_tpl->tpl_vars['to']->value;?>
 </h2>
        </div>
        <div class="table-wrapper" style="padding: 0 10px">
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th style="text-align: left; min-width: 25px;">Account Name</th>
                        <th>Total Invoices</th>
                        <th class="jettisonable">Grand Total</th>
                        <th style="text-align: right;" class="jettisonable">Date Invoiced</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($_smarty_tpl->tpl_vars['customers']->value)>0){?>
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                            <tr>
                                <td style="text-align: left; min-width: 25px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['account_name'];?>
</td>
                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['val']->value['orders'];?>
</td>
                                <td style="text-align: center;padding-right: 10px;" class="jettisonable">&#8377;&nbsp;<?php echo ceil($_smarty_tpl->tpl_vars['val']->value['total']);?>
</td>
                                <td style="text-align: right;padding-right: 10px;" class="jettisonable"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['createdat']);?>
</td>
                            </tr>
                        <?php } ?>
                    <tr style="border-top: solid 4px #CDCDCD; border-bottom: none;">
                            <td class="light-grey">Grand Total <?php echo $_smarty_tpl->tpl_vars['from']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['to']->value;?>
 :</td>
                            <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['totalorders']->value;?>
</td>           
                            <td style="padding-right: 10px;text-align: center;">&#8377;&nbsp;<?php echo ceil($_smarty_tpl->tpl_vars['totalrevenue']->value);?>
</td>
                            <td></td>
                    </tr>
                    <?php }else{ ?>
                        <tr style="border-bottom: none;">
                            <td style="padding: 15px 10px;" class="list-center" colspan="5">
                                <p style="color:#666;">Sorry, there were no customer purchased during this period of time.</p>
                                <p style="color:#666;" class="sm-grey">Tip: Try adjusting the Date Range on the right to go back further in history.</p>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="paging">
            <div style="float: left;">There are <strong><?php echo count($_smarty_tpl->tpl_vars['customers']->value);?>
</strong> results in your database.</div>
            
        </div>
    </div>
</div><?php }} ?>