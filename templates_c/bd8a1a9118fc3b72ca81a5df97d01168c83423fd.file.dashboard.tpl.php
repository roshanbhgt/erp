<?php /* Smarty version Smarty-3.1.14, created on 2016-01-09 22:25:09
         compiled from ".\templates\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2231356913b6d622465-22757864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd8a1a9118fc3b72ca81a5df97d01168c83423fd' => 
    array (
      0 => '.\\templates\\dashboard.tpl',
      1 => 1445758286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2231356913b6d622465-22757864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'unpaidinvcount' => 0,
    'unpaidinv' => 0,
    'i' => 0,
    'val' => 0,
    'purbillcount' => 0,
    'purcasebills' => 0,
    'custcount' => 0,
    'customer' => 0,
    'paidinvcount' => 0,
    'paidtotal' => 0,
    'purchtotal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56913b6d8a6d83_55606542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56913b6d8a6d83_55606542')) {function content_56913b6d8a6d83_55606542($_smarty_tpl) {?><div class="dashboard">
    <div class="column-2">
        <div class="news">
            <div class="content">
                <span style="float: right; font-size: 11px; margin-top: 6px; color: #666;"></span><h2 class="dashboard">Top Unpaid Invoices</h2>
                <?php if ($_smarty_tpl->tpl_vars['unpaidinvcount']->value>0){?>
                    <table>
                        <thead>
                            <tr>
                                <td>Sr. No.</td>
                                <td>Chalan No</td>
                                <td>Grand Total in &#8377;</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unpaidinv']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['val']->value['chalan_no'];?>
</td>
                                <td><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['val']->value['grandtotal']);?>
</td>
                            </tr>
                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                        <?php } ?>
                        </tbody>
                    </table>
                <?php }else{ ?>
                    <p style="padding:20px 0px 0px 0px; color:#999;">Looks like there's no unpaid invoices.<br><br>Once you have some, you'll see the biggest unpaid invoices here.</p>
                <?php }?>
            </div>
        </div>
        <div class="news">
            <div class="content">
                <span style="float: right; font-size: 11px; margin-top: 6px; color: #666;"></span><h2 class="dashboard">Latest Purcahse</h2>
                <?php if ($_smarty_tpl->tpl_vars['purbillcount']->value>0){?>
                    <table>
                        <thead>
                            <tr>
                                <td>Sr. No.</td>
                                <td>Bill No</td>
                                <td>Grand Total in &#8377;</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['purcasebills']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['val']->value['chalan'];?>
</td>
                                <td><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['val']->value['total']);?>
</td>
                            </tr>
                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                        <?php } ?>
                        </tbody>
                    </table>
                <?php }else{ ?>
                    <p style="padding:20px 0px 0px 0px; color:#999;">Looks like there's no purchases.<br><br>Once you have some, you'll see the biggest purchase here.</p>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="column-1">
        <div class="activity">
            <div class="head">
                <span class="heading">
                    Today's Activity:
                </span>
            </div>
            <ul class="activity-feed">
                <li style="width:300px;float: left;">
                    <span style="float: right; font-size: 11px; margin-top: 6px; color: #666;"><?php echo $_smarty_tpl->tpl_vars['custcount']->value;?>
</span><h2 class="dashboard">New Customer</h2>                
                    <?php if ($_smarty_tpl->tpl_vars['custcount']->value>0){?>
                    <table>
                        <thead>
                            <tr>
                                <td>Sr. No.</td>
                                <td>Account Name</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(0, null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['val']->value['account_name'];?>
</td>
                            </tr>
                            <?php echo $_smarty_tpl->tpl_vars['i']->value++;?>

                        <?php } ?>
                        </tbody>
                    </table>
                    <?php }else{ ?>
                        <p style="padding:20px; color:#999;">No customers to report here.<br><br></p>                                
                    <?php }?>
                </li>
                <li style="width:300px;float: left;">
                    <span style="float: right; font-size: 11px; margin-top: 6px; color: #666;"><?php echo $_smarty_tpl->tpl_vars['paidinvcount']->value;?>
</span><h2 class="dashboard">Total Sales</h2>                
                    <?php if ($_smarty_tpl->tpl_vars['paidinvcount']->value>0){?>
                        <p style="padding:20px;"><span class="positive" style="font-size: 16px;">&#8377;&nbsp;<?php echo sprintf("%d",$_smarty_tpl->tpl_vars['paidtotal']->value);?>
</span></p>
                    <?php }else{ ?>
                        <p style="padding:20px; color:#999;">No paid invoices to report here.<br><br></p>                                
                    <?php }?>
                </li>
                <li style="width:300px;float: left;">
                    <span style="float: right; font-size: 11px; margin-top: 6px; color: #666;"><?php echo $_smarty_tpl->tpl_vars['purbillcount']->value;?>
</span><h2 class="dashboard">Total purchase</h2>                
                    <?php if ($_smarty_tpl->tpl_vars['purbillcount']->value>0){?>
                        <p style="padding:20px;"><span class="positive" style="font-size: 16px;">&#8377;&nbsp;<?php echo sprintf("%d",$_smarty_tpl->tpl_vars['purchtotal']->value);?>
</span></p>
                    <?php }else{ ?>
                        <p style="padding:20px; color:#999;">No purchase to report here.<br><br></p>                                
                    <?php }?>                    
                </li>                
            </ul>
        </div>
    </div>
</div>
<?php }} ?>