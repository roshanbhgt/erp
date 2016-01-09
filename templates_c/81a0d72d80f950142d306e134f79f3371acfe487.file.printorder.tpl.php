<?php /* Smarty version Smarty-3.1.14, created on 2015-10-26 09:44:16
         compiled from "./templates/printorder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1373751431562da898848900-51208872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81a0d72d80f950142d306e134f79f3371acfe487' => 
    array (
      0 => './templates/printorder.tpl',
      1 => 1445758302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1373751431562da898848900-51208872',
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
  'unifunc' => 'content_562da898978b73_74956511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562da898978b73_74956511')) {function content_562da898978b73_74956511($_smarty_tpl) {?><div style="width:800px">
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
    <div style="float: right; font-size: 11px; margin-top: 6px; color: #666;width: 100%;padding-bottom: 15px;text-align: center;">
        <h2 class="dashboard">Delevery chalan #<?php echo $_smarty_tpl->tpl_vars['order']->value['chalan_no'];?>
</h2>
    </div>
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
        <table id="item-table" border="1"  align="left" width="100%">
            <thead>
                <th style="width: 50px;border-right:1px solid #FFFFFF;background: #4cc2ff;text-align: center;color: #FFFFFF;">Sr. No.</th>
                <th style="width: 300px;border-right:1px solid #FFFFFF;text-align: left;background: #4cc2ff;color: #FFFFFF;">Name</th>
                <th style="width: 150px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Catalog No.</th>
                
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