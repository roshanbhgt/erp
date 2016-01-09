<?php /* Smarty version Smarty-3.1.14, created on 2015-10-26 09:44:36
         compiled from "./templates/invoicechalan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1999686097562da8ac695d98-17018066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cafaeb4a3c816c5405035357810dcd5c175654e' => 
    array (
      0 => './templates/invoicechalan.tpl',
      1 => 1445758294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1999686097562da8ac695d98-17018066',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FRONTEND' => 0,
    'order' => 0,
    'customer' => 0,
    'billing' => 0,
    'shipping' => 0,
    'items' => 0,
    'i' => 0,
    'j' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_562da8ac8343a3_67522955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562da8ac8343a3_67522955')) {function content_562da8ac8343a3_67522955($_smarty_tpl) {?><form accept-charset="utf-8" method="post" action="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
invoicechalan.php">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
" />
﻿<div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a>
            <h3>Invoice Chalan <?php echo $_smarty_tpl->tpl_vars['order']->value['chalan_no'];?>
</h3>
        </div>
            <div class="content" style="padding:20px 13px 10px;">
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
                    <?php }?>
                    <div style="float:left;padding: 10px 0;">
                        <h3>Items List</h3>
                        <?php if (count($_smarty_tpl->tpl_vars['items']->value)>0){?>
                        <table id="items" border="1">
                            <thead>
                                <th style="width: 200px;border-right:1px solid #FFFFFF;text-align: left;background: #4cc2ff;color: #FFFFFF;">Name</th>
                                <th style="width: 100px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Catalog No.</th>
                                <th style="width: 50px;border-right:1px solid #000;background: #4cc2ff;color: #FFFFFF;">Quantity Type</th>                                
                                <th style="width: 50px;border-right:1px solid #000;background: #4cc2ff;color: #FFFFFF;">Qty</th>
                                <th style="width: 70px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Price in &#8377;</th>                                
                                <th style="width: 70px;border-right:1px solid #000;background: #4cc2ff;color: #FFFFFF;">Tax</th>
                                <th style="width: 70px;border-right:1px solid #000;background: #4cc2ff;color: #FFFFFF;">% Discount</th>
                                <th style="width: 70px;text-align: center;background: #4cc2ff;color: #FFFFFF;">Subtotal in &#8377;</th>
                            </thead>
                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                            <tr>
                                <?php $_smarty_tpl->tpl_vars['j'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value++, null, 0);?>
                                <td>
                                    <input type="text" id="data_item_<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
_name" name="data[item][<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
][name]" onkeyup="suggest(this.value, <?php echo $_smarty_tpl->tpl_vars['j']->value;?>
);" onblur="hidesuggest(<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
);" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
" autocomplete="off" />
                                    <div class="suggestbox" id="suggestions<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
" style="display: none;"> 
                                        <div class="suggestlist" id="suggestionsList<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
"> &nbsp; </div>
                                    </div>
                                </td>
                                <td><input type="text" id="data_item_<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
_code" name="data[item][<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
][code]" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['sku'];?>
" /></td>
                                <td>
                    <select id="data_item_<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
_qty_type" name="data[item][<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
][qty_type]">
                        <option value=""></option>
                        <option value="shop" <?php if ($_smarty_tpl->tpl_vars['val']->value['qty_type']=='shop'){?> selected="selected" <?php }?>>Shop</option>
                        <option value="godown" <?php if ($_smarty_tpl->tpl_vars['val']->value['qty_type']=='godown'){?> selected="selected" <?php }?>>Godown</option>
                    </select>
                </td>
                                <td><input style="width:70px" type="text" id="data_item_<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
_qty" name="data[item][<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
][qty]" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['qty'];?>
" onchange="calculatetotal()"/></td>
                                <td><input style="width:70px" type="text" id="data_item_<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
_price" name="data[item][<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
][price]" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
" onchange="calculatetotal()"/></td>
                                <td><input type="text" id="data_item_<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
_tax" name="data[item][<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
][tax]" value="12.5" onchange="calculatetotal()"/></td>
                                <td><input type="text" id="data_item_<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
_disc" name="data[item][<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
][disc]" value="0" onchange="calculatetotal()"/></td>
                                <td style="text-align: center">
                                    <div id="data_item_<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
_subtotalamt"></div>
                                    <input type="hidden" id="data_item_<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
_subtotal" name="data[item][<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
][subtotal]" value="" />
                                </td>
                            </tr>
                            <?php } ?>
                            <tfoot>
                                <tr>
                                    <td style="width: 100px;border-right:1px solid #000;text-align: right;padding: 10px;" colspan="7">Subtotal</td>
                                    <td style="width: 125px;text-align: center">
                                        <div id="data_item_subtotal"></div>
                                        <input type="hidden" id="data_order_subtotal" name="data[order][subtotal]" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 100px;border-right:1px solid #000;text-align: right;padding: 10px;" colspan="7">Transportation/Loading</td>
                                    <td style="width: 125px;text-align: center">
                                        <input style="width:50px;" type="text" id="data_order_shipping" name="data[order][shipping]" value="" onchange="calculatetotal()" />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 100px;border-right:1px solid #000;text-align: right;padding: 10px;" colspan="7">Tax</td>
                                    <td style="width: 125px;text-align: center">
                                        <div id="data_item_tax"></div>
                                        <input type="hidden" id="data_order_tax" name="data[order][tax]" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 100px;border-right:1px solid #000;text-align: right;padding: 10px;" colspan="7">Discount</td>
                                    <td style="width: 125px;text-align: center">
                                        <div id="data_item_disc"></div>
                                        <input type="hidden" id="data_order_disc" name="data[order][disc]" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 100px;border-right:1px solid #000;text-align: right;padding: 10px;" colspan="7">Grand Total</td>
                                    <td style="width: 125px;text-align: center">
                                        <div id="data_item_grandtotal"></div>
                                        <input type="hidden" id="data_order_grandtotal" name="data[order][grandtotal]" value="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 100px;border-right:1px solid #000;text-align: right;padding: 10px;" colspan="7">Grand Total (Rounded)</td>
                                    <td style="width: 125px;text-align: center">
                                        <div id="data_item_grandtotal_rounded"></div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <div style="text-align: left; padding: 5px 0;">
                            <input type="hidden" id="prodlastid" value="<?php echo $_smarty_tpl->tpl_vars['j']->value+1;?>
" />
                            <a href="javascript:void(0)" onclick="addmore();">+&nbsp;Add more items</a>
                            <p><strong>Note:</strong> Prices are inclusive of taxes.</p>
                        </div>
                        <?php }else{ ?>
                            Your cart is empty.
                        <?php }?>
                    </div>
                </div>
            </div>
            <div style="text-align: center;padding:25px 0;">
                <div class="input checkbox"><input type="hidden" id="PlaceOrder" name="data[action]" value="saveorder" /></div>                
                <button class="button" type="submit" name="action" value="invoicechalan" >Invoice Chalan</button>
                <button class="button" type="submit" name="action" value="invoiceprintchalan" >Invoice And Print Chalan</button>
            </div>
    </div>
</div>
</form>
  

<script type="text/javascript">
    window.onload = function(){
        calculatetotal();
    }
    
    function addmore(){
        var i = $('#prodlastid').val();
        var html = '<tr>';
            html += '<td>';
            html += '   <input type="text" id="data_item_'+i+'_name" name="data[item]['+i+'][name]" onkeyup="suggest(this.value,'+i+');" onblur="hidesuggest('+i+');" value="" autocomplete="off" />';
            html += '   <div class="suggestbox" id="suggestions'+i+'" style="display: none;">';
            html += '      <div class="suggestlist" id="suggestionsList'+i+'"> &nbsp; </div>';
            html += '    </div>';
            html += '</td>';
            html += '<td><input type="text" id="data_item_'+i+'_code" name="data[item]['+i+'][code]" /></td>';
            html += '<select id="data_item_'+i+'_qty_type" name="data[item]['+i+'][qty_type]">';
            html +=     '<option value=""></option>';
            html +=     '<option value="shop">Shop</option>';
            html +=     '<option value="godown">Godown</option>';
            html +=  '</select>';
            html += '</td>';
            html += '<td><input style="width:70px" type="text" id="data_item_'+i+'_qty" name="data[item]['+i+'][qty]" value="1" onchange="calculatetotal()" /></td>';    
            html += '<td><input type="text" id="data_item_'+i+'_price" name="data[item]['+i+'][price]" onchange="calculatetotal()" /></td>';
            html += '<td>';
            html += '<td><input type="text" id="data_item_'+i+'_tax" name="data[item]['+i+'][tax]" value="12.5" onchange="calculatetotal()" /></td>';
            html += '<td><input type="text" id="data_item_'+i+'_disc" name="data[item]['+i+'][disc]" value="0" onchange="calculatetotal()" /></td>';
            html += '<td style="text-align: center"><div id="data_item_'+i+'_subtotalamt"></div> <input type="hidden" id="data_item_'+i+'_subtotal" name="data[item]['+i+'][subtotal]" value="" /></td>';
            html += "</tr>";
        $('#items').append(html);
        i++;
        $('#prodlastid').val(i);
    }
    
    function suggest(keyword,i){
	if(keyword.length == 0) {
            $('#suggestions'+i).fadeOut();
	} else {
	$.ajax({
            url: "autosuggest.php",
            data: 'action=suggest&keyword='+keyword+'&id='+i,
            success: function(msg){
                if(msg.length >0) {
                        $('#suggestions'+i).fadeIn();
                        $('#suggestionsList'+i).html(msg);
                }
            }
	});
	}
    }
    
    function hidesuggest(i){
        $('#suggestions'+i).fadeOut();
    }
    
    function fillname(thisValue,i) {
        $('#data_item_'+i+'_name').val(thisValue);
    }
    
    function fillcode(thisValue,i) {
        $('#data_item_'+i+'_code').val(thisValue);
    }
    
    function fillprice(thisValue,i) {
        $('#data_item_'+i+'_price').val(thisValue);
        // uprowsubtotal(i);
        calculatetotal();
    }
    /* function uprowsubtotal(i){
        var price = $('#data_item_'+i+'_price').val();
        var qty = $('#data_item_'+i+'_qty').val();
        var subtotal = qty*price;
        $('#data_item_'+i+'_subtotalamt').html(subtotal);
        $('#data_item_'+i+'_subtotal').val(subtotal);
        
    } */
    function calculatetotal(){
        var itt = $('#prodlastid').val();        
        var subtotalall = 0; 
        var tax = 0;
        var disc = 0;
        var discount = 0;
        var taxrate = 0;
        var price = 0;
        var qty = 0;
        var subtotal = 0; 
        var grandtotal = 0; 
        var shipcharge = parseFloat($('#data_order_shipping').val());
        for(var i=0;i<=itt;i++){
            price = parseFloat($('#data_item_'+i+'_price').val());
            qty = parseFloat($('#data_item_'+i+'_qty').val());
            taxrate = parseFloat($('#data_item_'+i+'_tax').val());
            discount = parseFloat($('#data_item_'+i+'_disc').val());
            subtotal = parseFloat(qty*price);
            if(!isNaN(subtotal)){
                disc += subtotal*(discount/100);
                subtotal = subtotal - (subtotal*(discount/100));
                /* if(taxrate == 12.5){
                    tax += subtotal*(11.11/100);
                }else if(taxrate == 5){
                    tax += subtotal*(4.75/100);
                }else{ */
                    tax += subtotal*(taxrate/100);
                // }
                subtotalall += subtotal;
                grandtotal += subtotal;
            }
            $('#data_item_'+i+'_subtotalamt').html(subtotal.toFixed(2));
            $('#data_item_'+i+'_subtotal').val(subtotal.toFixed(2));
        }
        if(!isNaN(shipcharge)){
            tax = tax + (shipcharge*0.125);
            grandtotal += shipcharge + (shipcharge*0.125);
        }
        grandtotal += tax;
        $('#data_item_subtotal').html(subtotalall.toFixed(2));
        $('#data_item_tax').html(tax.toFixed(2));
        $('#data_item_disc').html(disc.toFixed(2));
        $('#data_item_grandtotal').html(grandtotal.toFixed(2));
        $('#data_order_subtotal').val(subtotalall.toFixed(2));
        $('#data_order_tax').val(tax.toFixed(2));
        $('#data_order_disc').val(disc.toFixed(2));
        $('#data_order_grandtotal').val(grandtotal.toFixed(2));
        $('#data_item_grandtotal_rounded').html(Math.ceil(grandtotal));
    }
</script>
<?php }} ?>