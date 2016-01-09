<?php /* Smarty version Smarty-3.1.14, created on 2015-11-19 14:45:35
         compiled from "./templates/custrevenue.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2058776594562b9cece7e337-89744241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdf574b2e993b9170ff4f34d2dfe4665bee1d9a6' => 
    array (
      0 => './templates/custrevenue.tpl',
      1 => 1445758285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2058776594562b9cece7e337-89744241',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_562b9ced0af705_09753352',
  'variables' => 
  array (
    'customer' => 0,
    'val' => 0,
    'FRONTEND' => 0,
    'customercount' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562b9ced0af705_09753352')) {function content_562b9ced0af705_09753352($_smarty_tpl) {?><div class="order-history">
    <div style="border: 1px solid #aaa; border-radius: 8px;">
        <div class="panel-head">
            <h2>Customer Revenue</h2>
        </div>
        <div class="table-wrapper">
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th style="text-align: left;width: 125px;">Account Name</th>
                        <th style="text-align: left; min-width: 25px;">Email</th>
                        <th>Phone</th>
                        <th class="jettisonable">Date Added</th>
                        <th style="padding-right: 32px;" class="list-right"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($_smarty_tpl->tpl_vars['customer']->value>0){?>
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                            <tr>
                                <td style="text-align: left;width: 125px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['account_name'];?>
</td>
                                <td style="text-align: left; min-width: 25px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['email'];?>
</td>
                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['val']->value['phone'];?>
</td>
                                <td style="text-align: center;" class="jettisonable"><?php echo $_smarty_tpl->tpl_vars['val']->value['createdat'];?>
</td>
                                <td style="text-align: right;padding-right: 10px;" class="jettisonable">                                    
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
custrevenue.php?action=invoicelist&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
skin/images/invoice-list.png" alt="Invoice List" title="Invoice List" /></a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php }else{ ?>
                        <tr>
                            <td style="text-align: center;" colspan="7">
                                <div style="padding:50px 10px 5px 10px;color:#666;">
                                    <p style="font-weight:bold;font-size:14px;">Hey, it looks like you haven't entered any customers yet.</p>
                                    <p>Quickly add your first customer using the toolbar above.</p>
                                    <p style="font-size:11px;margin-top:50px;">Hint: Once your customer list grows larger, we recommend trying our 'Instant Search' (top left) to quickly find what you're looking for.</p>
                                </div>              
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="paging">
            <div style="float: left;">There are <strong><?php echo $_smarty_tpl->tpl_vars['customercount']->value;?>
</strong> results in your database.</div>
            <?php if ($_smarty_tpl->tpl_vars['customercount']->value>10){?>
                <div class="pagination">
                    <ul>
                        <li>
                            <?php if (($_smarty_tpl->tpl_vars['page']->value-1)>0){?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
customer.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">‹</a>
                            <?php }?>
                        </li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
customer.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
</a></li>
                        <?php if (($_smarty_tpl->tpl_vars['page']->value+2)<=($_smarty_tpl->tpl_vars['customercount']->value/10)){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
customer.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+2;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+2;?>
</a></li>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['page']->value+3)<=($_smarty_tpl->tpl_vars['customercount']->value/10)){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
customer.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+3;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+3;?>
</a></li>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['page']->value+4)<=($_smarty_tpl->tpl_vars['customercount']->value/10)){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
customer.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+4;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+4;?>
</a></li>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['page']->value+2)<=($_smarty_tpl->tpl_vars['customercount']->value/10)&&($_smarty_tpl->tpl_vars['page']->value+3)<=($_smarty_tpl->tpl_vars['customercount']->value/10)&&($_smarty_tpl->tpl_vars['page']->value+4)<=($_smarty_tpl->tpl_vars['customercount']->value/10)){?>
                            <?php if (($_smarty_tpl->tpl_vars['page']->value+5)<$_smarty_tpl->tpl_vars['customercount']->value/10){?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
customer.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+5;?>
">›</a></li>
                            <?php }?>                        
                        <?php }?>
                        <li>&nbsp; of <a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
customer.php?page=<?php echo $_smarty_tpl->tpl_vars['customercount']->value/10;?>
"><?php echo $_smarty_tpl->tpl_vars['customercount']->value/10;?>
</a></li>

                    </ul>
                </div>
            <?php }?>
        </div>
    </div>
</div><?php }} ?>