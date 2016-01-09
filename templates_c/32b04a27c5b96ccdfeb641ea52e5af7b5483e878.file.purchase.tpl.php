<?php /* Smarty version Smarty-3.1.14, created on 2015-10-26 18:51:38
         compiled from "./templates/purchase.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1890708470562c7f3079f283-93019774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32b04a27c5b96ccdfeb641ea52e5af7b5483e878' => 
    array (
      0 => './templates/purchase.tpl',
      1 => 1445758303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1890708470562c7f3079f283-93019774',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_562c7f30844e49_17153778',
  'variables' => 
  array (
    'purchasebills' => 0,
    'val' => 0,
    'FRONTEND' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562c7f30844e49_17153778')) {function content_562c7f30844e49_17153778($_smarty_tpl) {?><div class="order-history">
    <div style="border: 1px solid #aaa; border-radius: 8px;">
        <div class="panel-head">
            <h2>Purchase List</h2>
        </div>
        <div class="table-wrapper">
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th style="text-align: left; min-width: 25px;">Purchase #</th>
                        <th>Name</th>
                        <th class="jettisonable">Total</th>
                        <th style="text-align: right;" class="jettisonable">Purchase Date</th>
                        <th style="text-align: right;" class="jettisonable">Created At</th>
                        <th style="padding-right: 32px;" class="list-right"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($_smarty_tpl->tpl_vars['purchasebills']->value)>0){?>
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['purchasebills']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                            <tr>
                                <td style="text-align: left; min-width: 25px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['chalan'];?>
</td>
                                <td style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
                                <td style="text-align: center;">&#8377;&nbsp;<?php echo $_smarty_tpl->tpl_vars['val']->value['total'];?>
</td>
                                <td style="text-align: right;"><?php echo $_smarty_tpl->tpl_vars['val']->value['purchaseat'];?>
</td>
                                <td style="text-align: right;" class="jettisonable"><?php echo $_smarty_tpl->tpl_vars['val']->value['createdat'];?>
</td>
                                <td style="padding-right: 32px;text-align: center" class="list-right">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
purchasebills.php?action=viewpurchase&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
skin/images/info.png"  title="View Purchase" /></a> &nbsp;
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
purchasebills.php?action=deletepurchase&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
skin/images/delete.png" title="Delete Purchase"/></a>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php }else{ ?>
                        <tr>
                            <td style="text-align: center;" colspan="7">
                                <div style="padding:50px 10px 5px 10px;color:#666;"><p style="font-weight:bold;font-size:14px;">Create a Purchase Bills.</p><p>It's how you replenish your stock.</p></div>              
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="paging">
            <div style="float: left;">There are <strong><?php echo count($_smarty_tpl->tpl_vars['purchasebills']->value);?>
</strong> results in your database.</div>
        </div>
    </div>
</div><?php }} ?>