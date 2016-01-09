<div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a><h3>Edit Customer {$customer.account_name}</h3>
        </div>
        <script>
            function showhide(tab,content){
                if(tab == 'tab1'){
                    document.getElementById(content).style.display = "block";
                    document.getElementById('pricing-tab').style.display = "none";
                    $('#'+tab).addClass('active');
                    $('#tab2').removeClass('active');
                }else if(tab == 'tab2'){
                    document.getElementById(content).style.display = "block";
                    document.getElementById('details-tab').style.display = "none";
                    $('#'+tab).addClass('active');
                    $('#tab1').removeClass('active');
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
            function resetForm(){
                document.getElementById("CustomerAddForm").reset();
            }
        </script>
        <div class="smbutton-tabs">
            <a class="smbutton active" id="tab1" href="javascript:void(0);" onclick="showhide('tab1','details-tab')">Account Details</a>
            <a class="smbutton" id="tab2" href="javascript:void(0);" onclick="showhide('tab2','pricing-tab')">Pricing &amp; Tax Rates</a>
        </div>
        <div class="content">
            <form accept-charset="utf-8" method="post" id="CustomerAddForm" action="{$FRONTEND}customer.php">
            <div class="check"></div>
            <div id="details-tab">
            <fieldset class="show">
                <legend>Business Contact Information</legend>
                <input type="hidden" name="data[Customer][id]" value="{$customer.id}" />
                <div style="width: 50%; float: left;">
                    <div class="input text required"><label for="CustomerName">Account Name<span>*</span></label><input type="text" id="CustomerName" maxlength="255" class="autofocus input-textarea-206" name="data[Customer][name]" value="{$customer.account_name}"></div>
                    <div class="input text"><label for="CustomerOfficeEmail">Email Address</label><input type="text" id="CustomerOfficeEmail" maxlength="255" class="input-textarea-206" name="data[Customer][office_email]" value="{$customer.email}"></div>
                    <div class="input text"><label for="CustomerUrl">Website</label><input type="text" id="CustomerUrl" maxlength="255" class="input-textarea-206" name="data[Customer][url]" value="{$customer.website}"></div>                
                </div>
                <div style="float: left; padding-left: 22px; ">
                    <div class="input text"><label for="CustomerOfficePhone">Office Phone</label><input type="text" id="CustomerOfficePhone" maxlength="255" name="data[Customer][office_phone]" value="{$customer.phone}"></div>
                    <div class="input text"><label for="CustomerOfficeFax">Office Fax</label><input type="text" id="CustomerOfficeFax" maxlength="255" name="data[Customer][office_fax]" value="{$customer.fax}"></div>
                    <div class="input text"><label for="CustomerVatNumber">VAT Number</label><input type="text" id="CustomerVatNumber" maxlength="24" name="data[Customer][vat_number]" value="{$customer.vat}"></div>                
                </div>
                <div style="clear: both;"></div>
            </fieldset>

            <fieldset class="show">
                <input type="hidden" name="data[Customer][billing_id]" value="{$billing.id}" />
                <legend>Billing and Shipping Addresses</legend>
                <div style="width: 50%; float: left;">
                    <div class="input text">
                        <label for="CustomerBillingAddress1">Billing Address Line 1</label>
                        <input type="text" id="CustomerBillingAddress1" maxlength="255" class="input-textarea-206" name="data[Customer][billing_address_1]" value="{$billing.address1}">
                    </div>
                    <div class="input text">
                        <label for="CustomerBillingAddress2">Billing Address Line 2</label>
                        <input type="text" id="CustomerBillingAddress2" maxlength="255" class="input-textarea-206" name="data[Customer][billing_address_2]" value="{$billing.address2}">
                    </div>
                    <div class="input text">
                        <label for="CustomerBillingCity">City</label>
                        <input type="text" id="CustomerBillingCity" maxlength="255" name="data[Customer][billing_city]" value="{$billing.city}">
                    </div>
                    <div class="input text">
                        <label for="CustomerBillingRegion">Province / State</label>
                        <input type="text" id="CustomerBillingRegion" maxlength="255" class="autocomplete regions ui-autocomplete-input" name="data[Customer][billing_region]" autocomplete="off" value="{$billing.state}"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                    </div>
                    <div class="input text">
                        <label for="CustomerBillingPostalCode">Postal Code / Zip Code</label>
                        <input type="text" id="CustomerBillingPostalCode" maxlength="255" name="data[Customer][billing_postal_code]" value="{$billing.postcode}">
                    </div>
                    <div class="input text">
                        <label for="CustomerBillingCountry">Country</label>
                        <input type="text" id="CustomerBillingCountry" maxlength="255" class="autocomplete countries ui-autocomplete-input" name="data[Customer][billing_country]" autocomplete="off" value="{$billing.country}"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                    </div>                    
                    <a class="copy-address" href="javascript:void(0)" onclick="copyaddress()">
                        <span style="text-decoration:underline;">Copy info to Shipping Address</span> →
                    </a>
                </div>
                <div style="border-left: 1px solid #cdcdcd; padding-left: 21px; float: left;">
                    <input type="hidden" name="data[Customer][shipping_id]" value="{$shipping.id}" />
                    <div class="input text">
                        <label for="CustomerShippingAddress1">Shipping Address Line 1</label>
                        <input type="text" id="CustomerShippingAddress1" maxlength="255" class="input-textarea-206" name="data[Customer][shipping_address_1]" value="{$shipping.address1}">
                    </div>
                    <div class="input text">
                        <label for="CustomerShippingAddress2">Shipping Address Line 2</label>
                        <input type="text" id="CustomerShippingAddress2" maxlength="255" class="input-textarea-206" name="data[Customer][shipping_address_2]" value="{$shipping.address2}">
                    </div>
                    <div class="input text">
                        <label for="CustomerShippingCity">City</label>
                        <input type="text" id="CustomerShippingCity" maxlength="255" name="data[Customer][shipping_city]" value="{$shipping.city}">
                    </div>
                    <div class="input text">
                        <label for="CustomerShippingRegion">Province / State</label>
                        <input type="text" id="CustomerShippingRegion" maxlength="255" class="autocomplete regions ui-autocomplete-input" name="data[Customer][shipping_region]" autocomplete="off" value="{$shipping.state}"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                    </div>
                    <div class="input text">
                        <label for="CustomerShippingPostalCode">Postal Code / Zip Code</label>
                        <input type="text" id="CustomerShippingPostalCode" maxlength="255" name="data[Customer][shipping_postal_code]" value="{$shipping.postcode}">
                    </div>
                    <div class="input text">
                        <label for="CustomerShippingCountry">Country</label>
                        <input type="text" id="CustomerShippingCountry" maxlength="255" class="autocomplete countries ui-autocomplete-input" name="data[Customer][shipping_country]" autocomplete="off" value="{$shipping.country}"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                    </div>                
                </div>
            </fieldset>
                        </div>
            <div id="pricing-tab" style="display: none;">
            <fieldset class="show">
                <legend>Pricing Tier</legend>
                <p>Orders created for this account can automatically use a custom pricing tier.</p>
                <div>
                    <p class="hint">Note: You haven't setup any pricing tiers. You can do this under Settings.</p>                </div>
            </fieldset>
            <fieldset class="show">
                <input type="hidden" name="data[Customer][tax_id]" value="{$tax.id}"
                <legend>Custom Tax Rates</legend>
                <p style="margin-bottom: 20px;">Invoices and Estimates created for this account can use custom Tax Rates.</p>
                <div style="width: 50%; float: left;">
                    <label>Custom Tax 1 Rate</label>
                    <div class="input-group input-group-sm">
                        <input type="text" id="CustomerTaxRate1" style="width: 70px;" class="form-control text-right" name="data[Customer][tax_rate1]" value="{$tax.tax_rate_one}">                    
                        <span style="width: 25px; background-color: #fff;" class="input-group-addon">%</span>
                    </div>
                </div>
                <div style="width: 50%; float: left;">
                    <label>Custom Tax 2 Rate</label>
                    <div class="input-group input-group-sm">
                        <input type="text" id="CustomerTaxRate2" style="width: 70px;" class="form-control text-right" name="data[Customer][tax_rate2]" value="{$tax.tax_rate_two}">                    
                        <span style="width: 25px; background-color: #fff;" class="input-group-addon">%</span>
                    </div>
                </div>
            </fieldset>
            </div>
            <div style="text-align: center;">
                <button class="button" type="submit" name="action" value="update">Update Customer</button> 
                <span class="cancel">or <a class="close-dialog" href="javascript:void(0)" onclick="resetForm();">Cancel</a></span>
            </div>
            </form>        
        </div>
    </div>
</div>