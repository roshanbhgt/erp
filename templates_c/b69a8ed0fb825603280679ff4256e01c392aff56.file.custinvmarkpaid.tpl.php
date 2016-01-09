<?php /* Smarty version Smarty-3.1.14, created on 2015-11-27 17:38:09
         compiled from "./templates/custinvmarkpaid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1585601537565847a9a8d8c0-56173777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b69a8ed0fb825603280679ff4256e01c392aff56' => 
    array (
      0 => './templates/custinvmarkpaid.tpl',
      1 => 1445758283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1585601537565847a9a8d8c0-56173777',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'invoice' => 0,
    'FRONTEND' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_565847a9c01989_59520966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565847a9c01989_59520966')) {function content_565847a9c01989_59520966($_smarty_tpl) {?>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#paid_date").datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd'
            });
         });
    </script>

<div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a><h3>Mark Invoice #<?php echo $_smarty_tpl->tpl_vars['invoice']->value['chalan_no'];?>
 Paid</h3>
        </div>
        <div class="content">
            <form accept-charset="utf-8" method="post" id="CustomerAddForm" action="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
custrevenue.php">
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['invoice']->value['id'];?>
" />
                <div style="width: 50%; float: left;">
                    <div class="input text required">
                        <label for="CustomerName">Account Name<span>*</span></label>
                        <input type="text" id="CustomerName" maxlength="255" class="autofocus input-textarea-206" name="name" value="<?php echo $_smarty_tpl->tpl_vars['invoice']->value['account_name'];?>
" disabled="true" />
                    </div>
                </div>
                <div style="width: 50%; float: left;">
                    <div class="input text required">
                        <label for="CustomerEmail">Customer Email<span>*</span></label>
                        <input type="text" id="CustomerEmail" maxlength="255" class="autofocus input-textarea-206" name="email" value="<?php echo $_smarty_tpl->tpl_vars['invoice']->value['email'];?>
" disabled="true">
                    </div>
                </div>
                <div style="width: 100%; float: left;">
                    <div class="input text required">
                        <label for="GrandTotal">Grand Total<span>*</span></label>
                        <input type="text" id="GrandTotal" maxlength="255" class="autofocus input-textarea-206" name="grandtotal" value="<?php echo $_smarty_tpl->tpl_vars['invoice']->value['grandtotal'];?>
" disabled="true">
                    </div>
                </div>
                <div style="width: 50%; float: left;">
                    <div class="input text required">
                        <label for="PaymentMethod">Payment Method<span>*</span></label>
                        <select name="payment_method">
                            <option>-- Choose from option --</option>
                            <option value="cash">-- By Cash --</option>
                            <option value="cheque">-- By Cheque --</option>
                        </select>
                    </div>
                </div>
                <div style="width: 50%; float: left;">
                    <div class="input text required">
                        <label for="PaymentDate">Payment Date<span>*</span></label>
                        <input type="text" id="paid_date" maxlength="255" class="autofocus input-textarea-206" name="paid_date">
                    </div>
                </div>
                <div style="text-align: center;width:100%;float:left;padding:10px 0px;">
                    <button class="button" type="submit" name="action" value="markpaid">Update Invoice</button>
                </div>
            </form>
        </div>
    </div>
</div><?php }} ?>