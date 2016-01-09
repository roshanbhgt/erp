<script type="text/javascript">
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
            <form accept-charset="utf-8" method="post" action="{$FRONTEND}/billinginfo.php">
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

