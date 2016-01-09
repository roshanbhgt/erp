<?php /* Smarty version Smarty-3.1.14, created on 2015-10-26 09:44:40
         compiled from "./templates/printinvoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1033281365562da8b0f315f3-14645629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d1fba149b1cd1dc7d92cca843434029191e024d' => 
    array (
      0 => './templates/printinvoice.tpl',
      1 => 1445758301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1033281365562da8b0f315f3-14645629',
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
    'orderitem' => 0,
    'i' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_562da8b115dc79_03109298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562da8b115dc79_03109298')) {function content_562da8b115dc79_03109298($_smarty_tpl) {?><div style="width:800px">
    <div style="width:800px;margin-bottom: 15px;padding:15px 0;border-bottom: 2px dotted #4cc2ff;float: right;">
        <div style="width:412px;float: left;text-align: left;">
            Shop No. 3, Continental Chambers, Karve Road, Near Sonal Hall, Pune-411004
            <br/>
                Ph. - +91-9325033199, 020-25457700, 020-25430333<br>
                E.- contact@aartisalescorp.com<br>
                W. - aartisalescorp.com
        </div>
        <div style="width:368px;float: right;">
            <img src="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
skin/images/logo.png">
        </div>
    </div>
    <div style="float: right; font-size: 11px; margin-top: 6px; color: #666;width: 100%;padding-bottom: 15px;text-align:center;">
        <h2 class="dashboard">Invoice #<?php echo $_smarty_tpl->tpl_vars['order']->value['chalan_no'];?>
</h2>
    </div>
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
        <table id="item-table" border="1"  align="left">
            <thead>
                <th style="width: 50px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Sr. No.</th>
                <th style="width: 300px;border-right:1px solid #FFFFFF;text-align: left;background: #4cc2ff;color: #FFFFFF;">Name</th>
                <th style="width: 150px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Catalog No.</th>
                <th style="width: 100px;border-right:1px solid #000;background: #4cc2ff;color: #FFFFFF;">Qty</th>
                <th style="width: 150px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Rate</th>
                <th style="width: 100px;border-right:1px solid #000;background: #4cc2ff;color: #FFFFFF;">Discount in %</th>
                <th style="width: 125px;text-align: center;background: #4cc2ff;color: #FFFFFF;">Subtotal</th>
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
                <td style="border-right:1px solid #000;text-align: center;">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['val']->value['price'],"2");?>
</td>
                <td style="border-right:1px solid #000;text-align: center;"><?php echo $_smarty_tpl->tpl_vars['val']->value['disc'];?>
%</td>
                <td style="text-align: center">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['val']->value['subtotal'],"2");?>
</td>
            </tr>
            <?php } ?>
            <tfoot>
                <tr>
                    <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="6">Subtotal</td>
                    <td style="width: 125px;text-align: center">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['order']->value['subtotal'],"2");?>
</td>
                </tr>
                <tr>
                    <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="6">Transportation/Loading</td>
                    <td style="width: 125px;text-align: center">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['order']->value['shipping'],"2");?>
</td>
                </tr>
                <tr>
                    <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="6">Tax (12.5%)</td>
                    <td style="width: 125px;text-align: center">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['order']->value['tax'],"2");?>
</td>
                </tr>
                <tr>
                    <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="6">Discount</td>
                    <td style="width: 125px;text-align: center">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['order']->value['discount'],"2");?>
</td>
                </tr>
                <tr>
                    <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="6">Grand Total</td>
                    <td style="width: 125px;text-align: center">&#8377;&nbsp;<?php echo round($_smarty_tpl->tpl_vars['order']->value['grandtotal'],"2");?>
</td>
                </tr>
                <tr>
                    <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="6">Grand Total (Rounded)</td>
                    <td style="width: 125px;text-align: center">&#8377;&nbsp;<?php echo sprintf("%d",$_smarty_tpl->tpl_vars['order']->value['grandtotal']);?>
</td>
                </tr>
            </tfoot>
        </table>
        <?php }else{ ?>
            Your cart is empty.
        <?php }?> 
    </div>
    <div style="width:100%;margin-bottom: 15px;padding:15px 0;text-align: left;float:left;">
        Customers VAT IN : <?php echo $_smarty_tpl->tpl_vars['customer']->value['vat'];?>

    </div>
    </div>
    <div style="width: 800px; text-align: right; float: right; margin: 30px 0px;">
        <label style="padding: 10px;">Reciever Signiture</label><br/>
        <textarea></textarea>
    </div>
</div>
        

<script type="text/javascript">
<!--
window.print();
//-->
</script>


<?php }} ?>