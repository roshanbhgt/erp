<?php /* Smarty version Smarty-3.1.14, created on 2015-11-23 16:09:09
         compiled from "./templates/reviewinvoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5866764665652eccd7c7e81-22668292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa39d60f1038daf42a267d8636ed4c467a675918' => 
    array (
      0 => './templates/reviewinvoice.tpl',
      1 => 1445758305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5866764665652eccd7c7e81-22668292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'i' => 0,
    'val' => 0,
    'FRONTEND' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5652eccd997b36_40840770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652eccd997b36_40840770')) {function content_5652eccd997b36_40840770($_smarty_tpl) {?><div class="content">
    <span style="float: right; font-size: 11px; margin-top: 6px; color: #666;width: 100%;padding-bottom: 15px">
        <h2 class="dashboard">Review your invoice</h2>
    </span>
    <div id="cart">
        <?php if (count($_smarty_tpl->tpl_vars['order']->value['customer'])>0){?>
            <div style="width:400px; float: left;padding-top:15px;line-height: 18px;" class="std billing">
                <h3>Customer Information</h3>
                <ul>
                    <li>Name: <?php echo $_smarty_tpl->tpl_vars['order']->value['customer']['name'];?>
</li>
                    <li>Vat Number: <?php echo $_smarty_tpl->tpl_vars['order']->value['customer']['vat_number'];?>
</li>
                    <li>Email: <?php echo $_smarty_tpl->tpl_vars['order']->value['customer']['office_email'];?>
</li>
                    <li>Web: <?php echo $_smarty_tpl->tpl_vars['order']->value['customer']['url'];?>
</li>
                    <li>Phone: <?php echo $_smarty_tpl->tpl_vars['order']->value['customer']['office_phone'];?>
</li>
                    <li>Fax: <?php echo $_smarty_tpl->tpl_vars['order']->value['customer']['office_fax'];?>
</li>
                </ul>
            </div>
        <?php }?>
        <?php if (count($_smarty_tpl->tpl_vars['order']->value['customer'])>0){?>
            <div style="width:400px; float: left;padding-top:15px;line-height: 18px;" class="std billing">
                <h3>Billing Information</h3>
                <ul>
                    <li><?php echo $_smarty_tpl->tpl_vars['order']->value['customer']['billing_address_1'];?>
</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['order']->value['customer']['billing_address_2'];?>
</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['order']->value['customer']['billing_city'];?>
,<?php echo $_smarty_tpl->tpl_vars['order']->value['customer']['billing_region'];?>
,<?php echo $_smarty_tpl->tpl_vars['order']->value['customer']['billing_country'];?>
-<?php echo $_smarty_tpl->tpl_vars['order']->value['customer']['billing_postal_code'];?>
</li>
                </ul>
            </div>
        <?php }?>
        <?php if (count($_smarty_tpl->tpl_vars['order']->value['customer'])>0){?>
            <div style="width:400px; float: left;padding-top:15px;line-height: 18px;" class="std billing">
                <h3>Shipping Information</h3>
                <ul>
                    <li><?php echo $_smarty_tpl->tpl_vars['order']->value['customer']['shipping_address_1'];?>
</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['order']->value['customer']['shipping_address_2'];?>
</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['order']->value['customer']['shipping_city'];?>
,<?php echo $_smarty_tpl->tpl_vars['order']->value['customer']['shipping_region'];?>
,<?php echo $_smarty_tpl->tpl_vars['order']->value['customer']['shipping_country'];?>
-<?php echo $_smarty_tpl->tpl_vars['order']->value['customer']['shipping_postal_code'];?>
</li>
                </ul>
            </div>
        <?php }?>
        <div style="width:100%; float: left;padding-top:15px;" >
            <h3>Item List</h3>
            <?php if (count($_smarty_tpl->tpl_vars['order']->value['items'])>0){?>
            <table id="item-table" border="1">
                <thead>
                    <th style="width: 50px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">&nbsp;</th>
                    <th style="width: 300px;border-right:1px solid #FFFFFF;text-align: left;background: #4cc2ff;color: #FFFFFF;">Name</th>
                    <th style="width: 150px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Code</th>
                    <th style="width: 100px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Qty</th>
                    <th style="width: 150px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Price in &#8377;</th>
                    <th style="width: 125px;border-bottom:1px solid #FFFFFF;text-align: center;background: #4cc2ff;color: #fff;">Subtotal</th>
                </thead>
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                <tr>
                    <td style="border-right:1px solid #000;"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
                    <td style="border-right:1px solid #000;text-align: left;"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
                    <td style="border-right:1px solid #000;text-align: center;"><?php echo $_smarty_tpl->tpl_vars['val']->value['code'];?>
</td>
                    <td style="border-right:1px solid #000;text-align: center;"><?php echo $_smarty_tpl->tpl_vars['val']->value['qty'];?>
</td>
                    <td style="border-right:1px solid #000;text-align: center;">&#8377;&nbsp;<?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
</td>
                    <td style="text-align: center">&#8377;<?php echo round($_smarty_tpl->tpl_vars['val']->value['subtotal'],"2");?>
</td>
                </tr>
                <?php } ?>
                <tfoot>
                    <tr>
                        <td style="width: 100px;border-right:1px solid #000;padding:5px;text-align: right;" colspan="5">Subtotal</td>
                        <td style="width: 125px;padding:5px;text-align: center">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['order']->value['subtotal'],"2");?>
</td>
                    </tr>
                    <tr>
                        <td style="width: 100px;border-right:1px solid #000;padding:5px;text-align: right;" colspan="5">Shipping & Handling</td>
                        <td style="width: 125px;padding:5px;text-align: center">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['order']->value['shiphanval'],"2");?>
</td>
                    </tr>
                    <tr>
                        <td style="width: 100px;border-right:1px solid #000;padding:5px;text-align: right;" colspan="5">Tax</td>
                        <td style="width: 125px;padding:5px;text-align: center">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['order']->value['tax'],"2");?>
</td>
                    </tr>
                    <tr>
                        <td style="width: 100px;border-right:1px solid #000;padding:5px;text-align: right;" colspan="5">Discount</td>
                        <td style="width: 125px;padding:5px;text-align: center">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['order']->value['discount'],"2");?>
</td>
                    </tr>
                    <tr>
                        <td style="width: 100px;border-right:1px solid #000;padding:5px;text-align: right;" colspan="5">Grand Total</td>
                        <td style="width: 125px;padding:5px;text-align: center">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['order']->value['grandtotal'],"2");?>
</td>
                    </tr>
                    <tr>
                        <td style="width: 100px;border-right:1px solid #000;padding:5px;text-align: right;" colspan="5">Grand Total (Rounded)</td>
                        <td style="width: 125px;padding:5px;text-align: center">&#8377;&nbsp;<?php echo sprintf("%d",$_smarty_tpl->tpl_vars['order']->value['grandtotal']);?>
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
<div style="text-align: center;padding:25px 0;">
    <div class="input checkbox"><input type="hidden" id="PlaceOrder" name="data[action]" value="saveorder" /></div>                
    <button class="button" type="submit" id="saveitem" onclick="saveOrder();">Save Invoice</button> 
    <button class="button" type="submit" id="saveitem" onclick="savePrintOrder();">Save And Print Invoice</button> 
    <span class="cancel">or <a class="close-dialog" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
createorder.php?action=new" >Cancel</a></span>
</div><?php }} ?>