<?php /* Smarty version Smarty-3.1.14, created on 2015-11-01 10:49:35
         compiled from "./templates/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9679796905635a0e7ea2f25-70156786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b52f9f46cc5c3c06e852e228923844d9826c0b2' => 
    array (
      0 => './templates/category.tpl',
      1 => 1445758278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9679796905635a0e7ea2f25-70156786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'val' => 0,
    'FRONTEND' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5635a0e804d597_71032875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5635a0e804d597_71032875')) {function content_5635a0e804d597_71032875($_smarty_tpl) {?><div class="order-history">
    <div style="border: 1px solid #aaa; border-radius: 8px;">
        <div class="panel-head">
            <h2>Category List</h2>
        </div>
        <div class="table-wrapper">
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th style="text-align: left;width: 125px;">Name</th>
                        <th style="text-align: left; min-width: 25px;">Description</th>
                        <th class="jettisonable">Date Added</th>
                        <th style="padding-right: 32px;" class="list-right"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($_smarty_tpl->tpl_vars['categories']->value>0){?>
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                            <tr>
                                <td style="text-align: left;width: 125px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</td>
                                <td style="text-align: left; min-width: 25px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['description'];?>
</td>
                                <td style="text-align: center;" class="jettisonable"><?php echo $_smarty_tpl->tpl_vars['val']->value['createdat'];?>
</td>
                                <td style="text-align: right;padding-right: 10px;" class="jettisonable">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
category.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
skin/images/edit.png" /></a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php }else{ ?>
                        <tr>
                            <td style="text-align: center;" colspan="7">
                                <div style="padding:50px 10px 5px 10px;color:#666;">
                                    <p style="font-weight:bold;font-size:14px;">Create some categories for the inventory you carry.</p>
                                    <p>Categories are here to keep you organized but they also act as a basic template for quicker data entry.</p>
                                    <p style="font-size:11px;margin-top:50px;">Hint: You can only delete categories if there's currently no inventory items associated with it.</p>
                                </div>              
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="paging">
            <div style="float: left;">There are <strong><?php echo count($_smarty_tpl->tpl_vars['categories']->value);?>
</strong> results in your database.</div>
        </div>
    </div>
</div><?php }} ?>