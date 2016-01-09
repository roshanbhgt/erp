<?php /* Smarty version Smarty-3.1.14, created on 2015-10-26 09:44:10
         compiled from "./templates/revieworder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1823563823562da892e967a2-56996611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c370ace366e1d39283a494caa367308a4935886' => 
    array (
      0 => './templates/revieworder.tpl',
      1 => 1445758306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1823563823562da892e967a2-56996611',
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
  'unifunc' => 'content_562da8930a48b8_42448511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562da8930a48b8_42448511')) {function content_562da8930a48b8_42448511($_smarty_tpl) {?><div class="content">
    <span style="float: right; font-size: 11px; margin-top: 6px; color: #666;width: 100%;padding-bottom: 15px">
        <h2 class="dashboard">Review your delevery chalan</h2>
    </span>
    <div id="cart">
        <?php if (count($_smarty_tpl->tpl_vars['order']->value['customer'])>0){?>
            <div style="width:400px; float: left;padding-top:15px;line-height: 18px;" class="std billing">
                <h3>Customer Information</h3>
                <ul>
                    <li>PO No.: <?php echo $_smarty_tpl->tpl_vars['order']->value['po_no'];?>
</li>
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
        <div style="float:left;padding: 10px 0;">
            <h3>Items List</h3>
            <?php if (count($_smarty_tpl->tpl_vars['order']->value['items'])>0){?>
            <table id="item-table" border="1">
                <thead>
                    <th style="width: 50px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Sr. No.</th>
                    <th style="width: 300px;border-right:1px solid #FFFFFF;text-align: left;background: #4cc2ff;color: #FFFFFF;">Name</th>
                    <th style="width: 150px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Catalog No.</th>
                    
                    <th style="width: 100px;border-right:1px solid #000;background: #4cc2ff;color: #FFFFFF;">Qty</th>
                    
                </thead>
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                <tr>
                    <td style="border-right:1px solid #000;text-align: center;"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
                    <td style="border-right:1px solid #000;text-align: left;"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
                    <td style="border-right:1px solid #000;text-align: center;"><?php echo $_smarty_tpl->tpl_vars['val']->value['code'];?>
</td>
                    
                    <td style="border-right:1px solid #000;text-align: center;"><?php echo $_smarty_tpl->tpl_vars['val']->value['qty'];?>
</td>
                    
                </tr>
                <?php } ?>
                
            </table>
            <?php }else{ ?>
                Your cart is empty.
            <?php }?>
        </div>
    </div>
</div>
<div style="text-align: center;padding:25px 0;">
    <div class="input checkbox"><input type="hidden" id="PlaceOrder" name="data[action]" value="saveorder" /></div>                
    <button class="button" type="submit" id="saveitem" onclick="saveOrder();">Save Chalan</button>
    <button class="button" type="submit" id="saveitem" onclick="savePrintOrder();">Save And Print Chalan</button> 
    <span class="cancel">or <a class="close-dialog" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
order.php" >Cancel</a></span>
</div><?php }} ?>