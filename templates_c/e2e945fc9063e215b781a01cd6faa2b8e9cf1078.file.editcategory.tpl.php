<?php /* Smarty version Smarty-3.1.14, created on 2015-11-19 10:59:16
         compiled from "./templates/editcategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1527839014563b422314db08-99230836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2e945fc9063e215b781a01cd6faa2b8e9cf1078' => 
    array (
      0 => './templates/editcategory.tpl',
      1 => 1447910949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1527839014563b422314db08-99230836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563b42231c1240_39877783',
  'variables' => 
  array (
    'category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563b42231c1240_39877783')) {function content_563b42231c1240_39877783($_smarty_tpl) {?><script type="text/javascript">
    function resetForm(){
        document.getElementById("CustomerAddForm").reset();
    }
</script>
<div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a><h3>Edit Category <?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</h3>
        </div>
        <div class="content">
        <form accept-charset="utf-8" method="post" id="ContactAddForm" action="/billing/category.php">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" />
        <fieldset class="show">
            <legend>Category Information</legend>
                <div style="float: left; width: 50%;">
                    <div class="input text required">
                        <label for="ContactFirstName">Title<span>*</span></label>
                        <input type="text" maxlength="255" class="autofocus" name="title" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
">
                    </div>
                    <div class="input text">
                        <label for="ContactLastName">Description</label>
                        <textarea rows="6" cols="30" name="description"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</textarea>
                    </div>      
                </div>
        </fieldset>
        <div style="text-align: center;">
            <button class="button" type="submit" name="action" value="update">Update Category</button>                    <span class="cancel">or <a class="close-dialog" href="javascript:void(0)" onclick="resetForm();">Cancel</a></span>
    </div>
        </form></div>
    </div>
</div><?php }} ?>