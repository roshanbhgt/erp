<?php /* Smarty version Smarty-3.1.14, created on 2015-11-17 14:59:37
         compiled from "./templates/invoiceview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:340415986564af381592000-31972098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3599e43c20db721fbc1cc588acbd5939ae4165eb' => 
    array (
      0 => './templates/invoiceview.tpl',
      1 => 1445758296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '340415986564af381592000-31972098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'customer' => 0,
    'billing' => 0,
    'shipping' => 0,
    'orderitem' => 0,
    'i' => 0,
    'val' => 0,
    'FRONTEND' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_564af3817404b8_03854107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564af3817404b8_03854107')) {function content_564af3817404b8_03854107($_smarty_tpl) {?><div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a>
            <h3>Invoice #<?php echo $_smarty_tpl->tpl_vars['order']->value['chalan_no'];?>
</h3>
        </div>
        <div class="content">
            <div id="cart">
                <?php if (count($_smarty_tpl->tpl_vars['customer']->value)>0){?>
                <div style="width:400px; float: left;padding-top:15px;line-height: 18px;" class="std billing">
                    <h3>Customer Information</h3>
                    <ul>
                        <li>Name: <?php echo $_smarty_tpl->tpl_vars['customer']->value['account_name'];?>
</li>
                        <li>Vat Number: <?php echo $_smarty_tpl->tpl_vars['customer']->value['vat'];?>
</li>
                        <li>Email: <?php echo $_smarty_tpl->tpl_vars['customer']->value['email'];?>
</li>
                        <li>Web: <?php echo $_smarty_tpl->tpl_vars['customer']->value['website'];?>
</li>
                        <li>Phone: <?php echo $_smarty_tpl->tpl_vars['customer']->value['phone'];?>
</li>
                        <li>Fax: <?php echo $_smarty_tpl->tpl_vars['customer']->value['fax'];?>
</li>
                    </ul>
                </div>
            <?php }?>
            <?php if (count($_smarty_tpl->tpl_vars['billing']->value)>0){?>
                <div style="width:400px; float: left;padding-top:15px;line-height: 18px;" class="std billing">
                    <h3>Billing Information</h3>
                    <ul>
                        <li><?php echo $_smarty_tpl->tpl_vars['billing']->value['address1'];?>
</li>
                        <li><?php echo $_smarty_tpl->tpl_vars['billing']->value['address2'];?>
</li>
                        <li><?php echo $_smarty_tpl->tpl_vars['billing']->value['city'];?>
,<?php echo $_smarty_tpl->tpl_vars['billing']->value['state'];?>
,<?php echo $_smarty_tpl->tpl_vars['billing']->value['country'];?>
-<?php echo $_smarty_tpl->tpl_vars['billing']->value['postcode'];?>
</li>
                    </ul>
                </div>
            <?php }?>
            <?php if (count($_smarty_tpl->tpl_vars['shipping']->value)>0){?>
                <div style="width:400px; float: left;padding-top:15px;line-height: 18px;" class="std billing">
                    <h3>Shipping Information</h3>
                    <ul>
                        <li><?php echo $_smarty_tpl->tpl_vars['shipping']->value['address1'];?>
</li>
                        <li><?php echo $_smarty_tpl->tpl_vars['shipping']->value['address2'];?>
</li>
                        <li><?php echo $_smarty_tpl->tpl_vars['shipping']->value['city'];?>
,<?php echo $_smarty_tpl->tpl_vars['shipping']->value['state'];?>
,<?php echo $_smarty_tpl->tpl_vars['shipping']->value['country'];?>
-<?php echo $_smarty_tpl->tpl_vars['shipping']->value['postcode'];?>
</li>
                    </ul>
                </div>
            <?php }?><br/>
            <div style="float:left; width:100%;">
                <h3>Items List </h3>
                <?php if (count($_smarty_tpl->tpl_vars['orderitem']->value)>0){?>
                <table id="item-table" border="1">
                    <thead>
                        <th style="width: 50px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Sr. No.</th>
                        <th style="width: 300px;border-right:1px solid #FFFFFF;text-align: left;background: #4cc2ff;color: #FFFFFF;">Name</th>
                        <th style="width: 150px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Catalog No.</th>
                        <th style="width: 100px;border-right:1px solid #000;background: #4cc2ff;color: #FFFFFF;">Qty</th>
                        <th style="width: 150px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;text-align: right;">Rate</th>
                        <th style="width: 100px;border-right:1px solid #000;background: #4cc2ff;color: #FFFFFF;">Discount in %</th>
                        <th style="width: 125px;text-align: right;background: #4cc2ff;color: #FFFFFF;">Subtotal</th>
                    </thead>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderitem']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                        <td style="border-right:1px solid #000;text-align: center;"><?php echo $_smarty_tpl->tpl_vars['val']->value['disc'];?>
%</td>
                        <td style="text-align: right">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['val']->value['subtotal'],"2");?>
</td>
                    </tr>
                    <?php } ?>
                    <tfoot>
                        <tr>
                            <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="6">Subtotal</td>
                            <td style="width: 125px;text-align: right;padding:8px;">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['order']->value['subtotal'],"2");?>
</td>
                        </tr>
                        <tr>
                            <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="6">Transportation/Loading</td>
                            <td style="width: 125px;text-align: right;padding:8px;">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['order']->value['shipping'],"2");?>
</td>
                        </tr>
                        <tr>
                            <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="6">Tax (12.5%)</td>
                            <td style="width: 125px;text-align: right;padding:8px;">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['order']->value['tax'],"2");?>
</td>
                        </tr>
                        <tr>
                            <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="6">Discount</td>
                            <td style="width: 125px;text-align: right;padding:8px;">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['order']->value['discount'],"2");?>
</td>
                        </tr>
                        <tr>
                            <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="6">Grand Total</td>
                            <td style="width: 125px;text-align: right;padding:8px;">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['order']->value['grandtotal'],"2");?>
</td>
                        </tr>
                        <tr>
                            <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="6">Grand Total (Rounded Value)</td>
                            <td style="width: 125px;text-align: right;padding:8px;">&#8377;&nbsp;<?php echo sprintf("%d",$_smarty_tpl->tpl_vars['order']->value['grandtotal']);?>
</td>
                        </tr>
                    </tfoot>
                </table>
                <?php }else{ ?>
                    Your cart is empty.
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