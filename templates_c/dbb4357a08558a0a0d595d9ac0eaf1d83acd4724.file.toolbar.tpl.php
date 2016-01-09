<?php /* Smarty version Smarty-3.1.14, created on 2016-01-09 22:25:09
         compiled from ".\templates\toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1144056913b6d1d0be5-73392730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbb4357a08558a0a0d595d9ac0eaf1d83acd4724' => 
    array (
      0 => '.\\templates\\toolbar.tpl',
      1 => 1445758310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1144056913b6d1d0be5-73392730',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'FRONTEND' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56913b6d5eb965_50873802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56913b6d5eb965_50873802')) {function content_56913b6d5eb965_50873802($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['action']->value=='dashboard'){?>
    <h2 style="color: #005985;padding: 5px 15px;">My Dashboard</h2>
<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='customer'){?>
<form accept-charset="utf-8" method="post" action="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
customer.php?action=search">
    <div class="input text">
        <input type="text" autocomplete="off" class="live-search autofocus" placeholder="Search Customer by Name or Email" name="keywords">
    </div>
</form>
<a class="load-dialog button" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
customer.php?action=new">
    <span style="font-size: 120%; color: #666; line-height: 16px;" class="icon-plus icon-font" aria-hidden="true">
    </span>Add New Customer
</a>
<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='billing'){?>    
<a class="load-dialog button" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
billinginfo.php?action=new">
    <span style="font-size: 120%; color: #666; line-height: 16px;" class="icon-plus icon-font" aria-hidden="true">
    </span>Add New Billing 
</a>
<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='contact'){?>    
<a class="load-dialog button" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
account.php?action=new">
    <span style="font-size: 120%; color: #666; line-height: 16px;" class="icon-plus icon-font" aria-hidden="true">
    </span>Add New Contact 
</a>
<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='inventory'){?>
<form accept-charset="utf-8" method="post" action="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
inventory.php?action=search">
    <div class="input text">
        <input type="text" autocomplete="off" class="live-search autofocus" placeholder="Search Products by Name or SKU" name="keywords" />
    </div>
</form>
<a class="load-dialog button" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
inventory.php?action=new">
    <span style="font-size: 120%; color: #666; line-height: 16px;" class="icon-plus icon-font" aria-hidden="true">
    </span>Add Inventory Item
</a>
<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='purchase'){?>
<form accept-charset="utf-8" method="post" action="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
purchasebills.php?action=search">
    <div class="input text">
        <input type="text" autocomplete="off" class="live-search autofocus" placeholder="Search Purchase by Purchase #" name="keywords" />
    </div>
</form>
<a class="load-dialog button" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
purchasebills.php?action=new">
    <span style="font-size: 120%; color: #666; line-height: 16px;" class="icon-plus icon-font" aria-hidden="true">
    </span>Add Purchase Bill
</a>
<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='category'){?>   
<form accept-charset="utf-8" method="post" action="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
category.php?action=search">
    <div class="input text">
        <input type="text" autocomplete="off" class="live-search autofocus" placeholder="Search Category by Name" name="keywords">
    </div>
</form>
<a class="load-dialog button" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
category.php?action=new">
    <span style="font-size: 120%; color: #666; line-height: 16px;" class="icon-plus icon-font" aria-hidden="true">
    </span>Add New Category
</a>
<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='order'){?>    
<form accept-charset="utf-8" method="post" action="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
order.php?action=search">
    <div class="input text">
        <input type="text" id="SearchKeywords" autocomplete="off" class="live-search autofocus" placeholder="Search by Chalan #" name="keywords">
    </div>
</form>
<a class="load-dialog button" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
order.php?action=new">
    <span style="font-size: 120%; color: #666; line-height: 16px;" class="icon-plus icon-font" aria-hidden="true">
    </span>Create Delivery Chalan
</a>
<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='invoice'){?>    
<form accept-charset="utf-8" method="post" action="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
invoice.php?action=search">
    <div class="input text">
        <input type="text" id="SearchKeywords" autocomplete="off" class="live-search autofocus" placeholder="Search by Invoice #" name="keywords">
    </div>
</form>
<a class="load-dialog button" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
invoice.php?action=new">
    <span style="font-size: 120%; color: #666; line-height: 16px;" class="icon-plus icon-font" aria-hidden="true">
    </span>Create New Invoice
</a>
<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='cashmemo'){?>    
<form accept-charset="utf-8" method="post" action="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
cashmemo.php?action=search">
    <div class="input text">
        <input type="text" id="SearchKeywords" autocomplete="off" class="live-search autofocus" placeholder="Search by Invoice #" name="keywords">
    </div>
</form>
<a class="load-dialog button" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
cashmemo.php?action=new">
    <span style="font-size: 120%; color: #666; line-height: 16px;" class="icon-plus icon-font" aria-hidden="true">
    </span>Create Cash Memo
</a>
<?php }elseif($_smarty_tpl->tpl_vars['action']->value=='report'){?>    

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#from_date").datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd'
            });
            $("#to_date").datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd'
            });
        });
    </script>

<form accept-charset="utf-8" method="post" action="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
report.php?action=<?php echo $_GET['action'];?>
">
    <div class="input text" style="width:600px;margin:-5px">
        From&nbsp;<input type="text" name="from" id="from_date"/>&nbsp;&nbsp;
        To&nbsp;<input type="text" name="to" id="to_date"/>&nbsp;&nbsp; <button type="submit" name="action" value="financial" >Submit</button>
    </div>
</form>
<?php }?><?php }} ?>