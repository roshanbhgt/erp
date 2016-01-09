<?php /* Smarty version Smarty-3.1.14, created on 2015-11-10 22:20:53
         compiled from "./templates/orderview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4988395505642206d9d8c40-03155195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5239dacee05fd44673d620afcd5f3304b537fc25' => 
    array (
      0 => './templates/orderview.tpl',
      1 => 1445758298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4988395505642206d9d8c40-03155195',
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
  'unifunc' => 'content_5642206dbfe8b0_55792204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642206dbfe8b0_55792204')) {function content_5642206dbfe8b0_55792204($_smarty_tpl) {?><div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a>
            <h3>Delevery chalan #<?php echo $_smarty_tpl->tpl_vars['order']->value['chalan_no'];?>
</h3>
        </div>
        <div class="content">
            <div id="cart">
                <?php if (count($_smarty_tpl->tpl_vars['customer']->value)>0){?>
                <div style="width:400px; float: left;padding-top:15px;line-height: 18px;" class="std billing">
                    <h3>Customer Information</h3>
                    <ul>
                        <li>PO No.: <?php echo $_smarty_tpl->tpl_vars['order']->value['po_no'];?>
</li>
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
                        <th style="width: 150px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Code</th>
                        
                        <th style="width: 100px;border-right:1px solid #000;background: #4cc2ff;color: #FFFFFF;">Qty</th>
                        
                    </thead>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderitem']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                    <tr>
                        <td style="border-right:1px solid #000;text-align: center;"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
                        <td style="border-right:1px solid #000;text-align: left;"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
                        <td style="border-right:1px solid #000;text-align: center;"><?php echo $_smarty_tpl->tpl_vars['val']->value['sku'];?>
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
        <div style="text-align: center;">
            <div class="input checkbox"><input type="hidden" id="PlaceOrder" name="data[action]" value="saveorder" /></div>                
            <button class="button" type="submit" id="saveitem" onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
order.php?action=printchalan&id=<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
')">Print Chalan</button>
        </div>
    </div>
</div>
    <?php }} ?>