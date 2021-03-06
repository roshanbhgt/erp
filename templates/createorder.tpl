﻿<div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a><h3>Create Delivery Chalan</h3>
        </div>
        <div class="content" id="createorder">
            <form accept-charset="utf-8" method="post" id="CustomerAddForm" action="">
                <fieldset class="show">
                    <legend>Select customer or Add new customer</legend>
                    <div class="input text required">
                        <label for="ItemCost">Select customer<span>*</span></label>
                        <select id="ItemCustomer" onchange="selectcustomer();" style="width: 180px; margin-right:8px;" class="select2 select2-offscreen" name="data[Customer][id]" tabindex="-1" title="Select Customer">
                            <option value=""></option>
                            {foreach $customers as $val}
                                <option value="{$val.id}" >{$val.account_name}</option>
                            {/foreach}
                        </select>
                        <span class="cancel">or <a class="close-dialog" href="javascript:void(0)" onclick="addcustomer();">Add New Customer</a></span>
                    </div>
                    <div style="width: 50%; float: left;">
                        <div class="input text required">
                            <label for="CustomerName">PO No.<span>*</span></label>
                            <input type="text" id="CustomerPO" maxlength="255" class="autofocus input-textarea-206" name="data[po_no]">
                        </div>
                    </div>    
                </fieldset>
                <div class="check"></div>
                <div id="details-tab" style="display: none">
                <fieldset class="show">
                    <legend>Business Contact Information</legend>
                    <div style="width: 50%; float: left;">
                        <div class="input text required"><label for="CustomerName">Account Name<span>*</span></label><input type="text" id="CustomerName" maxlength="255" class="autofocus input-textarea-206" name="data[Customer][name]"></div><div class="input text"><label for="CustomerOfficeEmail">Email Address</label><input type="text" id="CustomerOfficeEmail" maxlength="255" class="input-textarea-206" name="data[Customer][office_email]"></div><div class="input text"><label for="CustomerUrl">Website</label><input type="text" id="CustomerUrl" maxlength="255" class="input-textarea-206" name="data[Customer][url]"></div>                </div>
                    <div style="float: left; padding-left: 22px; ">
                        <div class="input text"><label for="CustomerOfficePhone">Office Phone</label><input type="text" id="CustomerOfficePhone" maxlength="255" name="data[Customer][office_phone]"></div><div class="input text"><label for="CustomerOfficeFax">Office Fax</label><input type="text" id="CustomerOfficeFax" maxlength="255" name="data[Customer][office_fax]"></div><div class="input text"><label for="CustomerVatNumber">VAT Number</label><input type="text" id="CustomerVatNumber" maxlength="24" name="data[Customer][vat_number]"></div>                </div>
                    <div style="clear: both;"></div>
                    <div style="float: left;"></div>                
                </fieldset>

                <fieldset class="show">
                    <legend>Billing and Shipping Addresses</legend>
                    <div style="width: 50%; float: left;">
                        <div class="input text"><label for="CustomerBillingAddress1">Billing Address Line 1</label><input type="text" id="CustomerBillingAddress1" maxlength="255" class="input-textarea-206" name="data[Customer][billing_address_1]"></div><div class="input text"><label for="CustomerBillingAddress2">Billing Address Line 2</label><input type="text" id="CustomerBillingAddress2" maxlength="255" class="input-textarea-206" name="data[Customer][billing_address_2]"></div><div class="input text"><label for="CustomerBillingCity">City</label><input type="text" id="CustomerBillingCity" maxlength="255" name="data[Customer][billing_city]"></div><div class="input text"><label for="CustomerBillingRegion">Province / State</label><input type="text" id="CustomerBillingRegion" maxlength="255" class="autocomplete regions ui-autocomplete-input" name="data[Customer][billing_region]" autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span></div><div class="input text"><label for="CustomerBillingPostalCode">Postal Code / Zip Code</label><input type="text" id="CustomerBillingPostalCode" maxlength="255" name="data[Customer][billing_postal_code]"></div><div class="input text"><label for="CustomerBillingCountry">Country</label><input type="text" id="CustomerBillingCountry" maxlength="255" class="autocomplete countries ui-autocomplete-input" name="data[Customer][billing_country]" autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span></div>                    
                        <a class="copy-address" href="javascript:void(0)" onclick="copyaddress()">
                            <span style="text-decoration:underline;">Copy info to Shipping Address</span> →
                        </a>
                    </div>
                    <div style="border-left: 1px solid #cdcdcd; padding-left: 21px; float: left;">
                        <div class="input text"><label for="CustomerShippingAddress1">Shipping Address Line 1</label><input type="text" id="CustomerShippingAddress1" maxlength="255" class="input-textarea-206" name="data[Customer][shipping_address_1]"></div><div class="input text"><label for="CustomerShippingAddress2">Shipping Address Line 2</label><input type="text" id="CustomerShippingAddress2" maxlength="255" class="input-textarea-206" name="data[Customer][shipping_address_2]"></div><div class="input text"><label for="CustomerShippingCity">City</label><input type="text" id="CustomerShippingCity" maxlength="255" name="data[Customer][shipping_city]"></div><div class="input text"><label for="CustomerShippingRegion">Province / State</label><input type="text" id="CustomerShippingRegion" maxlength="255" class="autocomplete regions ui-autocomplete-input" name="data[Customer][shipping_region]" autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span></div><div class="input text"><label for="CustomerShippingPostalCode">Postal Code / Zip Code</label><input type="text" id="CustomerShippingPostalCode" maxlength="255" name="data[Customer][shipping_postal_code]"></div><div class="input text"><label for="CustomerShippingCountry">Country</label><input type="text" id="CustomerShippingCountry" maxlength="255" class="autocomplete countries ui-autocomplete-input" name="data[Customer][shipping_country]" autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span></div>                </div>
                </fieldset>
            </div>
            <div style="text-align: center;">
                <div class="input checkbox"><input type="hidden" id="CustomerAdd" name="data[Customer][action]" value="savecustomer" /><input type="checkbox" id="CustomerAddContact" value="1" name="data[Customer][add_contact]"><label for="CustomerAddContact">Add a Person's Contact Information to this Account right away</label></div>                
                <button class="button" type="submit" onclick="saveCustomer()">Next</button> 
                <span class="cancel">or <a class="close-dialog" href="{$FRONTEND}order.php" >Cancel</a></span>
            </div>
            </form>        
        </div>
    </div>
    </div>
</div>
{literal}
<script type="text/javascript">
function saveCustomer(){
    var form = $('#CustomerAddForm'); // contact form
    var submit = $('#CustomerAdd');	// submit button

    // form submit event
    form.on('submit', function(e) {
        e.preventDefault(); // prevent default form submit
        // sending ajax request through jQuery
        $.ajax({
            url: 'createorder.php', // form action url
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
            url: 'createorder.php', // form action url
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
        url: 'createorder.php', // form action url
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
        url: 'createorder.php', // form action url
        type: 'POST', // form submit method get/post
        dataType: 'JSON', // request type html/json/xml
        data: {'action':'saveprintorder'}, // serialize form data 
        beforeSend: function() {
            $('#placeorder').html('Submitting...'); // change submit button text
        },
        success: function(data, status){
            if(data.status == 'success'){
                $('#createorder').html(data.content);
                window.open("order.php?action=printchalan&id="+data.orderid);
            }
        },
        error: function(e) {
            console.log(e)
        }
    });
}

function copyaddress(){
    $('#CustomerShippingAddress1').val($('#CustomerBillingAddress1').val());
    $('#CustomerShippingAddress2').val($('#CustomerBillingAddress2').val());
    $('#CustomerShippingCity').val($('#CustomerBillingCity').val());
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
</script>
{/literal}