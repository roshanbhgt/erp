<?php /* Smarty version Smarty-3.1.14, created on 2015-10-25 13:32:25
         compiled from "./templates/left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1343788934562b9ba783d5c8-84301830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff98212e8794afac37dedc73283e183e6dd256b3' => 
    array (
      0 => './templates/left.tpl',
      1 => 1445758296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1343788934562b9ba783d5c8-84301830',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_562b9ba78b0f50_12113917',
  'variables' => 
  array (
    'session' => 0,
    'FRONTEND' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562b9ba78b0f50_12113917')) {function content_562b9ba78b0f50_12113917($_smarty_tpl) {?><div class="left">
    <div id="navigation">
        <div style="font-size: 11px; overflow: hidden;" id="status">Logged In: <?php echo $_smarty_tpl->tpl_vars['session']->value['firstname'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['session']->value['lastname'];?>
</a></div>
        <ul>
            <li>
                <ul>
                    <li class="heading dashboard">Dashboard</li>
                    <li><div class="nav-item"><a class="active" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
dashboard.php">My Dashboard</a></div></li>
                    <li><div class="nav-item"><a class="" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
account.php">Account Information</a></div></li>
                    <li><div class="nav-item"><a class="load-dialog plus" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
billinginfo.php?action=new&id=1">+</a><a class="" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
billinginfo.php">Address Book</a></div></li>                        
                </ul>
            </li>
            <li>
                <ul>
                    <li class="heading accounts">Accounts</li>
                    <li><div class="nav-item"><a class="load-dialog plus" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
customer.php?action=new">+</a><a class="" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
customer.php">Customer List</a></div></li>
                    <li><div class="nav-item"><a class="" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
custrevenue.php">Customer Revenue</a></div></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li class="heading inventory">Inventory</li>
                    <li><div class="nav-item"><a class="load-dialog plus" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
inventory.php?action=new">+</a><a class="" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
inventory.php">Products List</a></div></li>
                    <li><div class="nav-item"><a class="load-dialog plus" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
category.php?action=new">+</a><a class="" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
category.php">Category List</a></div></li>
                    <li><div class="nav-item"><a class="load-dialog plus" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
purchasebills.php?action=new">+</a><a class="" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
purchasebills.php">Purchase Bills</a></div></li>
                    <a href="../config/constants.php"></a>
                </ul>
            </li>
            <li>
                <ul>
                    <li class="heading billing">Orders</li>
                    <li><div class="nav-item"><a class="load-dialog plus" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
order.php?action=new&id=1">+</a><a class="" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
order.php">Delivery Chalan</a></div></li>
                    <li><div class="nav-item"><a class="load-dialog plus" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
invoice.php?action=new&id=1">+</a><a class="" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
invoice.php">Invoice List</a></div></li>
                    <li><div class="nav-item"><a class="load-dialog plus" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
cashmemo.php?action=new&id=1">+</a><a class="" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
cashmemo.php">Cash Memo</a></div></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li class="heading reports">Reports</li>
                    <li><div class="nav-item"><a class="" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
report.php?action=financial">Financial Report</a></div></li>
                    <li><div class="nav-item"><a class="" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
report.php?action=salesitem">Sold Items Report</a></div></li>
                    <li><div class="nav-item"><a class="" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
report.php?action=customer">Customer Revenue</a></div></li>
                </ul>
            </li>
        </ul>
    </div>
</div><?php }} ?>