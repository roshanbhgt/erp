<?php /* Smarty version Smarty-3.1.14, created on 2015-11-05 17:15:18
         compiled from "./templates/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1919460935563b414ec8c284-59320052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '596a02a5b0280a75530d396803234209abb39d26' => 
    array (
      0 => './templates/product.tpl',
      1 => 1445758302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1919460935563b414ec8c284-59320052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'val' => 0,
    'FRONTEND' => 0,
    'productcount' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563b414ee40bb5_29675640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563b414ee40bb5_29675640')) {function content_563b414ee40bb5_29675640($_smarty_tpl) {?><div class="order-history">
    <div style="border: 1px solid #aaa; border-radius: 8px;">
        <div class="panel-head">
            <h2>Inventory List</h2>
        </div>
        <div class="table-wrapper">
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th style="text-align: left;width: 125px;">Item Name</th>
                        <th style="text-align: left;width: 125px;">Catalog No</th>
                        <th style="text-align: left; min-width: 25px;">Quantity in Shop</th>
                        <th style="text-align: left; min-width: 25px;">Quantity in Godown</th>
                        <th class="jettisonable">Price in &#8377;</th>
                        <th style="padding-right: 32px;" class="list-right">Date Added</th>
                        <th style="padding-right: 32px;" class="list-right"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($_smarty_tpl->tpl_vars['products']->value)){?>
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                            <tr>
                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
                                <td style="text-align: left;width: 125px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
                                <td style="text-align: left;width: 125px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['sku'];?>
</td>
                                <td style="text-align: left; min-width: 25px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['qty_shop'];?>
</td>
                                <td style="text-align: left; min-width: 25px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['qty_godown'];?>
</td>
                                <td style="text-align: center;" class="jettisonable">&#8377;&nbsp;<?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
</td>
                                <td style="text-align: center;" class="jettisonable"><?php echo $_smarty_tpl->tpl_vars['val']->value['createdat'];?>
</td>
                                <td style="text-align: right;padding-right: 10px;" class="jettisonable">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
inventory.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
skin/images/edit.png" /></a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php }else{ ?>
                        <tr>
                            <td style="text-align: center;" colspan="7">
                                <div style="padding:50px 10px 5px 10px;color:#666;">
                                    <p style="font-weight:bold;font-size:14px;">Where's your inventory?</p>
                                    <p>First, create some categories. Then enter your inventory items into those categories using the toolbar above.</p>
                                    <p style="font-size:11px;margin-top:50px;">Hint: If you don't carry an inventory, go ahead and hide it by navigating to "Settings" (top right).<br>You'll have to be the administrator for your account though.</p>
                                </div>              
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="paging">
            <div style="float: left;">There are <strong><?php echo $_smarty_tpl->tpl_vars['productcount']->value;?>
</strong> results in your database.</div>
            <?php if ($_smarty_tpl->tpl_vars['productcount']->value>10){?>
                <div class="pagination">
                    <ul>
                        <li>
                            <?php if (($_smarty_tpl->tpl_vars['page']->value-1)>0){?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
inventory.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">‹</a>
                            <?php }?>
                        </li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
inventory.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
</a></li>
                        <?php if (($_smarty_tpl->tpl_vars['page']->value+2)<=($_smarty_tpl->tpl_vars['productcount']->value/10)){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
inventory.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+2;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+2;?>
</a></li>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['page']->value+3)<=($_smarty_tpl->tpl_vars['productcount']->value/10)){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
inventory.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+3;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+3;?>
</a></li>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['page']->value+4)<=($_smarty_tpl->tpl_vars['productcount']->value/10)){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
inventory.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+4;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+4;?>
</a></li>
                        <?php }?>
                        <?php if (($_smarty_tpl->tpl_vars['page']->value+2)<=($_smarty_tpl->tpl_vars['productcount']->value/10)&&($_smarty_tpl->tpl_vars['page']->value+3)<=($_smarty_tpl->tpl_vars['productcount']->value/10)&&($_smarty_tpl->tpl_vars['page']->value+4)<=($_smarty_tpl->tpl_vars['productcount']->value/10)){?>
                            <?php if (($_smarty_tpl->tpl_vars['page']->value+5)<$_smarty_tpl->tpl_vars['productcount']->value/10){?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
inventory.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+5;?>
">›</a></li>
                            <?php }?>                        
                        <?php }?>
                        <li>&nbsp; of <a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
inventory.php?page=<?php echo $_smarty_tpl->tpl_vars['productcount']->value/10;?>
"><?php echo $_smarty_tpl->tpl_vars['productcount']->value/10;?>
</a></li>
                    </ul>
                </div>
            <?php }?>
        </div>
    </div>
</div>


<?php }} ?>