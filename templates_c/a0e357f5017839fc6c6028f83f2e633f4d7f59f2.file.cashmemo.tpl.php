<?php /* Smarty version Smarty-3.1.14, created on 2015-11-19 14:45:27
         compiled from "./templates/cashmemo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1714718813564d932fe83936-41827186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0e357f5017839fc6c6028f83f2e633f4d7f59f2' => 
    array (
      0 => './templates/cashmemo.tpl',
      1 => 1445758276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1714718813564d932fe83936-41827186',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orders' => 0,
    'val' => 0,
    'FRONTEND' => 0,
    'ordercount' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_564d9330199819_79426386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564d9330199819_79426386')) {function content_564d9330199819_79426386($_smarty_tpl) {?><div class="order-history">
    <div style="border: 1px solid #aaa; border-radius: 8px;">
        <div class="panel-head">
            <h2>Cash Memo List</h2>
        </div>
        <div class="table-wrapper">
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th style="text-align: left;width: 125px;">Status</th>
                        <th style="text-align: left; min-width: 25px;">Invoice #</th>
                        <th>Email</th>
                        <th class="jettisonable">Date Issued</th>
                        <th style="text-align: right;" class="jettisonable">Order Total</th>
                        <th style="padding-right: 32px;" class="list-right">Payment Method</th>
                        <th style="padding-right: 32px;" class="list-right">Payment Date</th>
                        <th style="padding-right: 32px;" class="list-right"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($_smarty_tpl->tpl_vars['orders']->value)>0){?>
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                            <tr>
                                <td style="text-align: left;width: 125px;"><?php echo ucfirst($_smarty_tpl->tpl_vars['val']->value['status']);?>
</td>
                                <td style="text-align: left; min-width: 25px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['chalan_no'];?>
</td>
                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['val']->value['email'];?>
</td>
                                <td style="text-align: center;" class="jettisonable"><?php echo $_smarty_tpl->tpl_vars['val']->value['createdat'];?>
</td>
                                <td style="text-align: right;padding-right: 10px;" class="jettisonable">&#8377;&nbsp;<?php echo ceil($_smarty_tpl->tpl_vars['val']->value['grandtotal']);?>
</td>
                                <td style="text-align: center;padding-right: 10px;" class="jettisonable">&nbsp;<?php echo ucfirst($_smarty_tpl->tpl_vars['val']->value['paymentmethod']);?>
</td>
                                <td style="padding-right: 32px;text-align: center" class="list-right">
                                    <?php echo $_smarty_tpl->tpl_vars['val']->value['markpaidat'];?>

                                    
                                </td>
                                <td style="padding-right: 32px;text-align: center" class="list-right">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
cashmemo.php?action=printcashmemo&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
&chalan_no=<?php echo $_smarty_tpl->tpl_vars['val']->value['chalan_no'];?>
" target="_blank">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
skin/images/print.png" title="Print Cash Memo"/>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php }else{ ?>
                        <tr>
                            <td style="text-align: center;" colspan="7">
                                <div style="padding:50px 10px 5px 10px;color:#666;"><p style="font-weight:bold;font-size:14px;">Create a Cash Memo for Unpaid Invoices.</p><p>It's how you replenish your stock.</p></div>              
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="paging">
            <div style="float: left;">There are <strong><?php echo $_smarty_tpl->tpl_vars['ordercount']->value;?>
</strong> results in your database.</div>
            <?php if ($_smarty_tpl->tpl_vars['ordercount']->value>10){?>
                <div class="pagination">
                    <ul>
                        <li>
                            <?php if (($_smarty_tpl->tpl_vars['page']->value-1)>0){?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
invoice.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">‹</a>
                            <?php }?>
                        </li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
invoice.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
</a></li>
                        <?php if (($_smarty_tpl->tpl_vars['page']->value+2)<=($_smarty_tpl->tpl_vars['ordercount']->value/10)){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
invoice.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+2;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+2;?>
</a></li>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['page']->value+3)<=($_smarty_tpl->tpl_vars['ordercount']->value/10)){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
invoice.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+3;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+3;?>
</a></li>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['page']->value+4)<=($_smarty_tpl->tpl_vars['ordercount']->value/10)){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
invoice.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+4;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+4;?>
</a></li>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['page']->value+2)<=($_smarty_tpl->tpl_vars['ordercount']->value/10)&&($_smarty_tpl->tpl_vars['page']->value+3)<=($_smarty_tpl->tpl_vars['ordercount']->value/10)&&($_smarty_tpl->tpl_vars['page']->value+4)<=($_smarty_tpl->tpl_vars['ordercount']->value/10)){?>
                            <?php if (($_smarty_tpl->tpl_vars['page']->value+5)<$_smarty_tpl->tpl_vars['ordercount']->value/10){?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
invoice.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+5;?>
">›</a></li>
                            <?php }?>                        
                        <?php }?>
                        <li>&nbsp; of <a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
invoice.php?page=<?php echo $_smarty_tpl->tpl_vars['ordercount']->value/10;?>
"><?php echo $_smarty_tpl->tpl_vars['ordercount']->value/10;?>
</a></li>

                    </ul>
                </div>
            <?php }?>
        </div>
    </div>
</div><?php }} ?>