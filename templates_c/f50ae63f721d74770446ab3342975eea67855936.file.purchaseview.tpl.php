<?php /* Smarty version Smarty-3.1.14, created on 2015-11-21 12:20:25
         compiled from "./templates/purchaseview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126613765556501431917236-13276676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f50ae63f721d74770446ab3342975eea67855936' => 
    array (
      0 => './templates/purchaseview.tpl',
      1 => 1445758304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126613765556501431917236-13276676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'purchase' => 0,
    'purchaseitem' => 0,
    'i' => 0,
    'val' => 0,
    'FRONTEND' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56501431a7bcc7_36558653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56501431a7bcc7_36558653')) {function content_56501431a7bcc7_36558653($_smarty_tpl) {?><div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a>
            <h3>Purchase Bill #<?php echo $_smarty_tpl->tpl_vars['purchase']->value['chalan'];?>
</h3>
        </div>
        <div class="content">
            <div id="cart">
                <?php if (count($_smarty_tpl->tpl_vars['purchase']->value)>0){?>
                <div style="width:400px; float: left;padding-top:15px;line-height: 18px;line-height: 20px;" class="std billing">
                    <h3>Purchase Information</h3>
                    <ul>
                        <li><b>Name:</b> <?php echo $_smarty_tpl->tpl_vars['purchase']->value['name'];?>
</li>                        
                        <li><b>Address:</b> <?php echo $_smarty_tpl->tpl_vars['purchase']->value['address'];?>
</li>                       
                        <li><b>Purchase Date:</b> <?php echo $_smarty_tpl->tpl_vars['purchase']->value['purchaseat'];?>
</li>                       
                    </ul>
                </div>
                <?php }?>
                
                <div style="float:left; width:100%;padding:15px 0;">
                    <h3>Items List </h3>
                    <?php if (count($_smarty_tpl->tpl_vars['purchaseitem']->value)>0){?>
                    <table id="item-table" border="1">
                        <thead>
                            <th style="width: 50px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Sr. No.</th>
                            <th style="width: 300px;border-right:1px solid #FFFFFF;text-align: left;background: #4cc2ff;color: #FFFFFF;">Name</th>
                            <th style="width: 150px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Catalog No.</th>
                            <th style="width: 100px;border-right:1px solid #000;background: #4cc2ff;color: #FFFFFF;">Qty</th>
                            <th style="width: 150px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;text-align: right;">Rate</th>
                            <th style="width: 125px;text-align: right;background: #4cc2ff;color: #FFFFFF;">Subtotal</th>
                        </thead>
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['purchaseitem']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                        <tr>
                            <td style="border-right:1px solid #000;text-align: center"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
                            <td style="border-right:1px solid #000;text-align: left;"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
                            <td style="border-right:1px solid #000;text-align: center;"><?php echo $_smarty_tpl->tpl_vars['val']->value['sku'];?>
</td>
                            <td style="border-right:1px solid #000;text-align: center;"><?php echo $_smarty_tpl->tpl_vars['val']->value['qty'];?>
</td>
                            <td style="border-right:1px solid #000;text-align: right;">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['val']->value['price'],"2");?>
</td>
                            <td style="text-align: right">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['val']->value['subtotal'],"2");?>
</td>
                        </tr>
                        <?php } ?>
                        <tfoot>
                            <tr>
                                <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="5">Subtotal</td>
                                <td style="width: 125px;text-align: right;padding:8px;">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['purchase']->value['subtotal'],"2");?>
</td>
                            </tr>
                            <tr>
                                <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="5">Transportation/Loading</td>
                                <td style="width: 125px;text-align: right;padding:8px;">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['purchase']->value['shipping'],"2");?>
</td>
                            </tr>
                            <tr>
                                <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="5">Tax (12.5%)</td>
                                <td style="width: 125px;text-align: right;padding:8px;">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['purchase']->value['tax'],"2");?>
</td>
                            </tr>
                            <tr>
                                <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="5">Discount</td>
                                <td style="width: 125px;text-align: right;padding:8px;">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['purchase']->value['discount'],"2");?>
</td>
                            </tr>
                            <tr>
                                <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="5">Grand Total</td>
                                <td style="width: 125px;text-align: right;padding:8px;">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['purchase']->value['total'],"2");?>
</td>
                            </tr>
                        </tfoot>
                    </table>
                    <?php }else{ ?>
                        Your have no items to purchase.
                    <?php }?>
                </div>
            </div>
        </div>
        <div style="text-align: center;">
            <div class="input checkbox"><input type="hidden" id="PlaceOrder" name="data[action]" value="saveorder" /></div>                
            <button class="button" type="submit" id="saveitem" onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
invoice.php?action=printinvoice&id=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
')">Print Invoice</button>
        </div>
    </div>
</div><?php }} ?>