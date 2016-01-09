<?php /* Smarty version Smarty-3.1.14, created on 2015-11-25 17:51:48
         compiled from "./templates/searchcashmemoinvoice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3916577995655a7dc2d1935-36599573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '312d5dc1daec29098829d798e7755aff2b628ff5' => 
    array (
      0 => './templates/searchcashmemoinvoice.tpl',
      1 => 1445758308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3916577995655a7dc2d1935-36599573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FRONTEND' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5655a7dc34fef3_29163442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5655a7dc34fef3_29163442')) {function content_5655a7dc34fef3_29163442($_smarty_tpl) {?>﻿<div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a><h3>Create Cash Memo</h3>
        </div>
        <div class="content" id="createorder">
            <form accept-charset="utf-8" method="post" id="processChalanForm" action="">
                <fieldset class="show">
                    <legend>Search by invoice chalan no</legend>                    
                    <div style="width: 50%; float: left;">
                        <div class="input text required">
                            <label for="CustomerChalan">Invoice Chalan #<span>*</span></label>
                            <input autocomplete="off" type="text" id="chalan" maxlength="255" class="autofocus input-textarea-206" name="chalan_no" onkeyup="suggestchalan(this.value);" onblur="hidesuggest();">
                            <input type="hidden" id="chalanid" name="id">
                            <div class="suggestbox" id="suggestions" style="display: none;"> 
                                <div class="suggestlist" id="suggestionsList"> &nbsp; </div>
                            </div>
                        </div>      
                    </div>
                </fieldset>
            
                <div style="text-align: center;">
                    <input id="processchalan" type="hidden" name="action" value="processchalan" />
                    <button  class="button" type="submit" onclick="processChalan()">Next</button> 
                    <span class="cancel">or <a class="close-dialog" href="<?php echo $_smarty_tpl->tpl_vars['FRONTEND']->value;?>
invoice.php">Cancel</a></span>
                </div>
            </form>        
        </div>
    </div>
    </div>
</div>

<script type="text/javascript">
function processChalan(){
    var form = $('#processChalanForm'); // contact form
    var submit = $('#processchalan');
    // form submit event
    form.on('submit', function(e) {
        e.preventDefault(); // prevent default form submit
        // sending ajax request through jQuery
        $.ajax({
            url: 'createinvoice.php', // form action url
            type: 'POST', // form submit method get/post
            dataType: 'JSON', // request type html/json/xml
            data: form.serialize(), // serialize form data 
            beforeSend: function() {
                submit.html('Submitting...'); // change submit button text
            },
            success: function(data, status){
                if(data.status == 'success'){
                    window.location.assign("cashmemo.php?action=invoicecashmemo&id="+data.orderid);
                }else if(data.status == 'error'){
                    if(confirm(data.message)){
                        $('#createorder').html(data.content);
                    }
                    submit.html('Next');
                }
            },
            error: function(e) {
                console.log(e)
            }
        });
    });
}
function saveCustomer(){
    var form = $('#CustomerAddForm'); // contact form
    var submit = $('#CustomerAdd');	// submit button

    // form submit event
    form.on('submit', function(e) {
        e.preventDefault(); // prevent default form submit
        // sending ajax request through jQuery
        $.ajax({
            url: 'createinvoice.php', // form action url
            type: 'POST', // form submit method get/post
            dataType: 'JSON', // request type html/json/xml
            data: form.serialize(), // serialize form data 
            beforeSend: function() {
                submit.html('Submitting...'); // change submit button text
            },
            success: function(data, status){
                if(data.status == 'success'){
                    $('#createorder').html(data.content);
                }else if(data.status == 'error'){
                    alert(data.content);
                    submit.html('Next');
                }
            },
            error: function(e) {
                console.log(e)
            }
        });
    });
}
function saveItems(){
    var form = $('#saveitemform'); // contact form
    var submit = $('#saveitem');	// submit button

    // form submit event
    form.on('submit', function(e) {
        e.preventDefault(); // prevent default form submit
        // sending ajax request through jQuery
        $.ajax({
            url: 'createinvoice.php', // form action url
            type: 'POST', // form submit method get/post
            dataType: 'JSON', // request type html/json/xml
            data: form.serialize(), // serialize form data 
            beforeSend: function() {
                submit.html('Submitting...'); // change submit button text
            },
            success: function(data, status){
                if(data.status == 'success'){
                    $('#createorder').html(data.content);
                }else if(data.status == 'error'){
                    alert(data.content);
                    submit.html('Next');
                }
            },
            error: function(e) {
                console.log(e)
            }
        });
    });
}
function saveOrder(){
    // sending ajax request through jQuery
    $.ajax({
        url: 'createinvoice.php', // form action url
        type: 'POST', // form submit method get/post
        dataType: 'JSON', // request type html/json/xml
        data: {'action':'saveorder'}, // serialize form data 
        beforeSend: function() {
            $('#placeorder').html('Submitting...'); // change submit button text
        },
        success: function(data, status){
            if(data.status == 'success'){
                $('#createorder').html(data.content);
            }
        },
        error: function(e) {
            console.log(e)
        }
    });
}
function savePrintOrder(){
    // sending ajax request through jQuery
    $.ajax({
        url: 'createinvoice.php', // form action url
        type: 'POST', // form submit method get/post
        dataType: 'JSON', // request type html/json/xml
        data: {'action':'saveprintorder'}, // serialize form data 
        beforeSend: function() {
            $('#placeorder').html('Submitting...'); // change submit button text
        },
        success: function(data, status){
            if(data.status == 'success'){
                $('#createorder').html(data.content);
                window.open("invoice.php?action=printinvoice&id="+data.orderid);
            }
        },
        error: function(e) {
            console.log(e)
        }
    });
}

function suggestchalan(keyword){
    if(keyword.length == 0) {
        $('#suggestions').fadeOut();
    } else {
        $.ajax({
            url: "autosuggest.php",
            data: 'action=suggestinvoice&status=paid&chalan_no='+keyword,
            success: function(msg){
                if(msg.length >0) {
                    $('#suggestions').fadeIn();
                    $('#suggestionsList').html(msg);
                }
            }
        });
    }
}
    
function copyaddress(){
    $('#CustomerShippingAddress1').val($('#CustomerBillingAddress1').val());
    $('#CustomerShippingAddress2').val($('#CustomerBillingAddress2').val());
    $('#CustomerShippingCity').val($('#CustomerBillingAddress2').val());
    $('#CustomerShippingRegion').val($('#CustomerBillingRegion').val());
    $('#CustomerShippingPostalCode').val($('#CustomerBillingPostalCode').val());
    $('#CustomerShippingCountry').val($('#CustomerBillingCountry').val());
}

function selectcustomer(){
    $('#CustomerName').val('');
    $('#CustomerOfficePhone').val('');
    $('#CustomerOfficeEmail').val('');
    $('#CustomerOfficeFax').val('');
    $('#CustomerUrl').val('');
    $('#CustomerVatNumber').val('');
    $('#CustomerBillingAddress1').val('');
    $('#CustomerShippingAddress1').val('');
    $('#CustomerBillingAddress2').val('');
    $('#CustomerShippingAddress2').val('');
    $('#CustomerBillingCity').val('');
    $('#CustomerShippingCity').val('');
    $('#CustomerBillingRegion').val('');
    $('#CustomerShippingRegion').val('');
    $('#CustomerBillingPostalCode').val('');
    $('#CustomerShippingPostalCode').val('');
    $('#CustomerBillingCountry').val('');
    $('#CustomerShippingCountry').val('');
    document.getElementById('details-tab').style.display='none';
}

function addcustomer(){
    document.getElementById('details-tab').style.display='block';
    document.getElementById('ItemCustomer').selectedIndex = "0";
}

function hidesuggest(){
    $('#suggestions').fadeOut();
}

function fillchlan(thisValue) {
    $('#chalan').val(thisValue);
}

function fillid(thisValue) {
    $('#chalanid').val(thisValue);
}
</script>
<?php }} ?>