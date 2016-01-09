<?php /* Smarty version Smarty-3.1.14, created on 2015-10-26 18:51:49
         compiled from "./templates/salesitem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:254176450562e28ed1d5bd8-37080333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bb3b423e6530b5ee4daed680db731411aa3f541' => 
    array (
      0 => './templates/salesitem.tpl',
      1 => 1445758306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254176450562e28ed1d5bd8-37080333',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'from' => 0,
    'to' => 0,
    'items' => 0,
    'val' => 0,
    'totalqty' => 0,
    'totalrevenue' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_562e28ed288309_32355309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562e28ed288309_32355309')) {function content_562e28ed288309_32355309($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/aarti/public_html/billing/lib/Smarty/plugins/modifier.date_format.php';
?><div class="order-history">
    <div style="border: 1px solid #aaa; border-radius: 8px;">
        <div class="panel-head">
            <h2>Sales Item Report for <?php echo $_smarty_tpl->tpl_vars['from']->value;?>
 to <?php echo $_smarty_tpl->tpl_vars['to']->value;?>
 </h2>
        </div>
        <div class="table-wrapper" style="padding: 0 10px">
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th style="text-align: left; min-width: 25px;">Name</th>
                        <th>Catalog No.</th>
                        <th class="jettisonable">Qty</th>
                        <th style="text-align: right;" class="jettisonable">Total</th>
                        <th style="text-align: right;" class="jettisonable">Date Invoiced</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($_smarty_tpl->tpl_vars['items']->value)>0){?>
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                            <tr>
                                <td style="text-align: left; min-width: 25px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['val']->value['sku'];?>
</td>
                                <td style="text-align: center;" class="jettisonable"><?php echo $_smarty_tpl->tpl_vars['val']->value['qty'];?>
</td>
                                <td style="text-align: right;padding-right: 10px;" class="jettisonable">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['val']->value['total'],"2");?>
</td>
                                <td style="text-align: right;padding-right: 10px;" class="jettisonable"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['createdat']);?>
</td>
                            </tr>
                        <?php } ?>
                        <tr style="border-top: solid 4px #CDCDCD; border-bottom: none;">
                            <td class="light-grey" colspan="2">Grand Total <?php echo $_smarty_tpl->tpl_vars['from']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['to']->value;?>
 :</td>
							<td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['totalqty']->value;?>
</td>
                                                        <td style="padding-right: 10px;text-align: right;">&#8377;&nbsp;<?php echo ceil($_smarty_tpl->tpl_vars['totalrevenue']->value);?>
</td>
							<td></td>
						</tr>
                    <?php }else{ ?>
                        <tr style="border-bottom: none;">
                            <td style="padding: 15px 10px;" class="list-center" colspan="5">
                                <p style="color:#666;">Sorry, there were no inventory sold during this period of time.</p>
                                <p style="color:#666;" class="sm-grey">Tip: Try adjusting the Date Range on the right to go back further in history.</p>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="paging">
            <div style="float: left;">There are <strong><?php echo count($_smarty_tpl->tpl_vars['items']->value);?>
</strong> results in your database.</div>
            
        </div>
    </div>
</div><?php }} ?>