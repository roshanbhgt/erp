<?php /* Smarty version Smarty-3.1.14, created on 2015-11-27 18:01:08
         compiled from "./templates/admin_contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132623012056584d0c75d1a0-36902072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36443a0359662e77bb3120c08c46b10b237d568a' => 
    array (
      0 => './templates/admin_contact.tpl',
      1 => 1445758275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132623012056584d0c75d1a0-36902072',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56584d0c7b3ec0_44782390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56584d0c7b3ec0_44782390')) {function content_56584d0c7b3ec0_44782390($_smarty_tpl) {?><script type="text/javascript">
    function resetForm(){
        document.getElementById("CustomerAddForm").reset();
    }
</script>
<div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a><h3>Add New  Contact</h3>
        </div>
        <div class="content">
        <form accept-charset="utf-8" method="post" id="ContactAddForm" action="/account.php">
        <fieldset class="show">
            <legend>Contact's Information</legend>
                    <div style="float: left; width: 50%;">
                <div class="input text required"><label for="ContactFirstName">First Name<span>*</span></label><input type="text" id="ContactFirstName" maxlength="255" class="autofocus" name="data[Contact][first_name]"></div><div class="input text"><label for="ContactLastName">Last Name</label><input type="text" id="ContactLastName" maxlength="255" name="data[Contact][last_name]"></div><div class="input text"><label for="ContactJobTitle">Job Title</label><input type="text" id="ContactJobTitle" maxlength="255" name="data[Contact][job_title]"></div>        </div>
            <div style="float: left; width: 50%;">
                <div class="input text"><label for="ContactPhone">Phone</label><input type="text" id="ContactPhone" maxlength="255" name="data[Contact][phone]"></div><div class="input text"><label for="ContactCell">Cell</label><input type="text" id="ContactCell" maxlength="255" name="data[Contact][cell]"></div><div class="input text"><label for="ContactFax">Fax</label><input type="text" id="ContactFax" maxlength="255" name="data[Contact][fax]"></div>        </div>
        </fieldset>
        <fieldset class="show">
            <legend>Accounts</legend>
            <div class="input text"><label for="ContactAutosuggestCustomerName">Customer, Prospect or Supplier accounts to affiliate this Contact with:</label><ul id="as-selections-autosuggest_customer_id" class="as-selections"><li id="as-original-autosuggest_customer_id" class="as-original"><input type="text" id="autosuggest_customer_id" class="autosuggest finder width-full as-input" name="data[Contact][autosuggest_customer_name]" autocomplete="off"><input type="hidden" id="as-values-autosuggest_customer_id" name="as_values_autosuggest_customer_id" class="as-values"></li></ul><div id="as-results-autosuggest_customer_id" class="as-results" style="display: none;"></div></div>    </fieldset>

        <fieldset class="show">
            <legend>Email Addresses</legend>
            <div style="float: left; width: 50%;">
                    <div class="input text"><label for="ContactEmail1">Primary Email</label><input type="text" id="ContactEmail1" maxlength="255" style="width: 200px;" name="data[Contact][email_1]"></div>        </div>
            <div style="float: left; width: 50%;">
                    <div class="input text"><label for="ContactEmail2">Secondary Email</label><input type="text" id="ContactEmail2" maxlength="255" style="width: 200px;" name="data[Contact][email_2]"></div>        </div>
            <div style="clear: both; padding-top: 14px;display: none;">
                    <div style="float: left;"><input type="hidden" value="0" id="ContactAutoAddEmail_" name="data[Contact][auto_add_email]"><div class="iPhoneCheckContainer" style="width: 96px;"><input type="checkbox" id="ContactAutoAddEmail" value="1" checked="checked" name="data[Contact][auto_add_email]"><label class="iPhoneCheckLabelOff" style="width: 91px;">
      <span style="margin-right: -51px;">NO</span>
    </label><label class="iPhoneCheckLabelOn" style="width: 55px;">
      <span>YES</span>
    </label><div class="iPhoneCheckHandle" style="width: 42px; left: 51px;">
      <div class="iPhoneCheckHandleRight">
        <div class="iPhoneCheckHandleCenter"></div>
      </div>
    </div></div></div>
                    <div style="float: left; padding-left: 15px; line-height: 28px;display: none;" class="light-grey">Automatically include this contact in outgoing messages. <span title="When sending invoices, estimates, or purchase orders, the primary email address for this Contact can be automatically added as a recipient." data-toggle="tooltip" style="font-size: 170%; line-height: 22px; vertical-align: middle;" class="icon-information info options" aria-hidden="true"></span></div>
            </div>
        </fieldset>
        <div style="text-align: center;">
            <button class="button" type="submit" name="action" value="add">Save New Contact</button>                    <span class="cancel">or <a class="close-dialog" href="javascript:void(0)" onclick="resetForm();">Cancel</a></span>
    </div>
        </form></div>
    </div>
</div><?php }} ?>