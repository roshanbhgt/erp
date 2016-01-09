<?php /* Smarty version Smarty-3.1.14, created on 2015-11-19 10:58:28
         compiled from "./templates/addcategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1379534783563b4144017194-05340145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a93eed4ea7f3c678e9132a29d62a8bb7b0f5f34' => 
    array (
      0 => './templates/addcategory.tpl',
      1 => 1447910884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1379534783563b4144017194-05340145',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563b414407c973_78208375',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563b414407c973_78208375')) {function content_563b414407c973_78208375($_smarty_tpl) {?><script type="text/javascript">
    function resetForm(){
        document.getElementById("CustomerAddForm").reset();
    }
</script>
<div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a><h3>Add New Category</h3>
        </div>
        <div class="content">
        <form accept-charset="utf-8" method="post" id="ContactAddForm" action="/billing/category.php">
        <fieldset class="show">
            <legend>Category Information</legend>
                <div style="float: left; width: 50%;">
                    <div class="input text required">
                        <label for="ContactFirstName">Title<span>*</span></label>
                        <input type="text" maxlength="255" class="autofocus" name="title">
                    </div>
                    <div class="input text">
                        <label for="ContactLastName">Description</label>
                        <textarea rows="6" cols="30" name="description"></textarea>
                    </div>      
                </div>
        </fieldset>
        <div style="text-align: center;">
            <button class="button" type="submit" name="action" value="add">Save New Category</button>                    <span class="cancel">or <a class="close-dialog" href="javascript:void(0)" onclick="resetForm();">Cancel</a></span>
    </div>
        </form></div>
    </div>
</div><?php }} ?>