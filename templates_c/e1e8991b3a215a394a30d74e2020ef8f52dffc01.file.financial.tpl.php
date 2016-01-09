<?php /* Smarty version Smarty-3.1.14, created on 2015-10-26 18:51:51
         compiled from "./templates/financial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:381804397562b9cc0ba4cf8-03840072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1e8991b3a215a394a30d74e2020ef8f52dffc01' => 
    array (
      0 => './templates/financial.tpl',
      1 => 1445758291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '381804397562b9cc0ba4cf8-03840072',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_562b9cc0c7b042_94869454',
  'variables' => 
  array (
    'from' => 0,
    'to' => 0,
    'totalwithtax' => 0,
    'totalwithouttax' => 0,
    'totaltax' => 0,
    'totalship' => 0,
    'inventorycost' => 0,
    'orders' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562b9cc0c7b042_94869454')) {function content_562b9cc0c7b042_94869454($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/aarti/public_html/billing/lib/Smarty/plugins/modifier.date_format.php';
?><div class="dialog">
    <div class="interior reports">
        <div class="dialog-head">
            <h3>Financial Report</h3>
        </div>
        <div class="panel-body">
                        <h2>Reporting Period: <span style="color: #888; font-weight: normal"><?php echo $_smarty_tpl->tpl_vars['from']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['to']->value;?>
</span></h2>

            <div style="width: 47%; padding-right: 3%;" class="column">

                <dl>
                    <dt><span class="subheading-a">Account Receivable:</span><br>
                    Total revenue with taxes included</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;<?php echo $_smarty_tpl->tpl_vars['totalwithtax']->value;?>
</span></dd>
                    <dt><span class="subheading-a">Net Revenue:</span><br>
                    Total revenue without taxes</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;<?php echo $_smarty_tpl->tpl_vars['totalwithouttax']->value;?>
</span></dd>
                    <dt><span class="subheading-a">Total VAT Collected:</span><br>
                    Taxex Collected during this period</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;<?php echo $_smarty_tpl->tpl_vars['totaltax']->value;?>
</span></dd>
                                    </dl>

                <p style="font-weight: bold; color: #036; font-size: 20px; padding-top: 10px; clear:both">Revenue Breakdown</p>

                <dl>
                                        <dt><span class="subheading-a">Inventory Sales:</span><br>
                    Total revenue without taxes</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;<?php echo $_smarty_tpl->tpl_vars['totalwithouttax']->value;?>
</span></dd>
                                        
                    <dt><span class="subheading-a">Transportaion & Lodging:</span><br>
                    Total revenue without taxes</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;<?php echo $_smarty_tpl->tpl_vars['totalship']->value;?>
</span></dd>
                </dl>
                
                <p style="padding-top: 10px; clear: both" class="detail">Note: Revenues are based on the date each invoice was paid.</p>

            </div>
            <div style="width: 48%; padding-left: 2%;" class="column">

                <p style="font-weight: bold; color: #036; font-size: 20px;">Inventory: <span style="color: #888">All Items</span></p>

                <dl>
                    <dt><span class="subheading-a">Inventory Cost:</span><br>
                    Total sold inventory value based on purchased prices as of for this period</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;<?php echo $_smarty_tpl->tpl_vars['inventorycost']->value;?>
</span></dd>

                    <dt><span class="subheading-a">All Additional Expenses:</span><br>
                    Total additional expenses for Test as of for this period</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;0</span></dd>

                    <dt><span class="subheading-a">Total Inventory Valuation:</span><br>
                    Total inventory cost plus all additional expenses</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;<?php echo $_smarty_tpl->tpl_vars['inventorycost']->value;?>
</span></dd>

                    <dt><span class="subheading-a">Newly Purchased Inventory:</span><br>
                    Newly added Inventory costs for this period.</dt>
                    <dd><span style="font-size: 16px;" class="negative">&#8377;&nbsp;0</span></dd>
                </dl>
                <div class="dashed"></div>
                <dl>
                    <dt><span class="subheading-a">Inventory Sales:</span><br>
                    Total inventory sales without tax</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;<?php echo $_smarty_tpl->tpl_vars['totalwithouttax']->value;?>
</span></dd>

                    <dt><span class="subheading-a">Sold Inventory Cost:</span><br>
                    Total cost of inventory sold for this period</dt>
                    <dd><span style="font-size: 16px;" class="negative">&#8377;&nbsp;<?php echo $_smarty_tpl->tpl_vars['totalwithouttax']->value;?>
</span></dd>

                    <dt><span class="subheading-a">Sold Additional Expenses:</span><br>
                    Total additional expenses associated with sold inventory for this period</dt>
                    <dd><span style="font-size: 16px;" class="negative">&#8377;&nbsp;0</span></dd>

                    <dt><span class="subheading-a">Profit / Loss:</span><br>
                    The total of Inventory Sales minus the cost of those items for this period.</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;0</span></dd>
                </dl>
            </div>
            <div style="font-weight: bold; color: #036; font-size: 20px; padding-top: 10px; clear:both">
                Invoice List's
            </div>
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th style="text-align: left;width: 125px;">Status</th>
                        <th style="text-align: left; min-width: 25px;">Invoice #</th>
                        <th style="text-align: left;">Account Name</th>
                        <th style="text-align: right;" class="jettisonable">Order Total</th>
                        <th style="padding-right: 32px;" class="list-right">Date Invoiced</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($_smarty_tpl->tpl_vars['orders']->value)>0){?>
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                            <tr>
                                <td style="text-align: left;width: 125px;"><?php echo ucfirst($_smarty_tpl->tpl_vars['val']->value['status']);?>
</td>
                                <td style="text-align: left; min-width: 25px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['chalan_no'];?>
</td>
                                <td style="text-align: left;"><?php echo $_smarty_tpl->tpl_vars['val']->value['account_name'];?>
</td>
                                <td style="text-align: right;padding-right: 10px;" class="jettisonable">&#8377;&nbsp;<?php echo ceil($_smarty_tpl->tpl_vars['val']->value['grandtotal']);?>
</td>
                                <td style="padding-right: 32px;text-align: center" class="list-right">
                                   <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['createdat']);?>

                                </td>
                            </tr>
                        <?php } ?>
                        <tr style="border-top: solid 4px #eee; border-bottom: none;">
                            <td class="light-grey" colspan="3">Grand Total <?php echo $_smarty_tpl->tpl_vars['from']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['to']->value;?>
 :</td>
							<td style="padding-right: 12px;text-align: right;">&#8377;&nbsp;<?php echo ceil($_smarty_tpl->tpl_vars['totalwithtax']->value);?>
</td>
							<td></td>
						</tr>
                    <?php }else{ ?>
                        <tr style="border-bottom: none;">
                            <td style="padding: 15px 10px;" class="list-center" colspan="5">
                                <p style="color:#666;">Sorry, there were no paid invoiced during this period of time.</p>
                                <p style="color:#666;" class="sm-grey">Tip: Try adjusting the Date Range on the right to go back further in history.</p>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="paging">
            <div style="float: left;">There are <strong><?php echo count($_smarty_tpl->tpl_vars['orders']->value);?>
</strong> results in your database.</div>
            
        </div>
    </div>
</div><?php }} ?>