<?php /* Smarty version Smarty-3.1.14, created on 2015-11-25 14:57:07
         compiled from "./templates/addbilling.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9005192556557eeb7f0c50-81009079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7356bb76e119efaa3de8202f5bf25c7e8f556329' => 
    array (
      0 => './templates/addbilling.tpl',
      1 => 1445758271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9005192556557eeb7f0c50-81009079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FRONTEND' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56557eeb8db736_50685415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56557eeb8db736_50685415')) {function content_56557eeb8db736_50685415($_smarty_tpl) {?><script type="text/javascript">
    function resetForm(){
        document.getElementById("CustomerAddForm").reset();
    }
</script>
<div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a><h3>Add New Address</h3>
        </div>
        <div class="content">
            <form accept-charset="utf-8" method="post" action="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
/billinginfo.php">
                <fieldset class="show"><legend>Billing Information</legend>
                    <div style="float: left; width: 50%;">
                        <div class="input text">
                            <label for="">First Name</label>
                            <input type="text" maxlength="255" style="width: 200px;" name="firstname">
                        </div>
                        <div class="input text">
                            <label for="">Last Name</label>
                            <input type="text" maxlength="255" style="width: 200px;" name="lastname">
                        </div>
                        <div class="input text">
                            <label for="">Company</label>
                            <input type="text" maxlength="255" style="width: 200px;" name="company">
                        </div>
                        <div class="input text">
                            <label for="">Address Line 1</label>
                            <input type="text" maxlength="255" style="width: 200px;" name="address1">
                        </div>
                        <div class="input text">
                            <label for="">Address Line 2</label>
                            <input type="text" maxlength="255" style="width: 200px;" name="address2">
                        </div>
                        <div class="input text">
                            <label for="">Address Line 3</label>
                            <input type="text" maxlength="255" style="width: 200px;" name="address3">
                        </div>
                    </div>
                    <div style="float: left; width: 50%;">
                        <div class="input text">
                            <label for="">City</label>
                            <input type="text" maxlength="255" style="width: 200px;" name="city">
                        </div>
                        <div class="input text">
                            <label for="">State</label>
                            <input type="text" maxlength="255" style="width: 200px;" name="state">
                        </div>
                        <div class="input text">
                            <label for="">Country</label>
                            <input type="text" maxlength="255" style="width: 200px;" name="country">
                        </div>
                        <div class="input text">
                            <label for="">Postcode</label>
                            <input type="text" maxlength="255" style="width: 200px;" name="postcode">
                        </div>
                        <div class="input text">
                            <label for="">Telephone</label>
                            <input type="text" maxlength="255" style="width: 200px;" name="telephone">
                        </div>
                        <div class="input text">
                            <label for="">Fax</label>
                            <input type="text" maxlength="255" style="width: 200px;" name="fax">
                        </div>
                    </div>
                    <div class="input checkbox">
                            <input type="checkbox" value="1" name="default_billing">
                            <label for="">Default Billing</label>
                        </div>
                </fieldset>
                <div style="text-align: center;">
                    <button class="button" type="submit" name="action" value="add">Save New Address</button>  
                    <span class="cancel">or <a class="close-dialog" href="javascript:void(0)" onclick="resetForm();">Cancel</a></span>
                </div>
            </form>
        </div>
    </div>
</div>

<?php }} ?>