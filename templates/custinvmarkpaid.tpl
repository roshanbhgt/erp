{literal}
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#paid_date").datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd'
            });
         });
    </script>
{/literal}
<div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a><h3>Mark Invoice #{$invoice.chalan_no} Paid</h3>
        </div>
        <div class="content">
            <form accept-charset="utf-8" method="post" id="CustomerAddForm" action="{$FRONTEND}custrevenue.php">
                <input type="hidden" name="id" value="{$invoice.id}" />
                <div style="width: 50%; float: left;">
                    <div class="input text required">
                        <label for="CustomerName">Account Name<span>*</span></label>
                        <input type="text" id="CustomerName" maxlength="255" class="autofocus input-textarea-206" name="name" value="{$invoice.account_name}" disabled="true" />
                    </div>
                </div>
                <div style="width: 50%; float: left;">
                    <div class="input text required">
                        <label for="CustomerEmail">Customer Email<span>*</span></label>
                        <input type="text" id="CustomerEmail" maxlength="255" class="autofocus input-textarea-206" name="email" value="{$invoice.email}" disabled="true">
                    </div>
                </div>
                <div style="width: 100%; float: left;">
                    <div class="input text required">
                        <label for="GrandTotal">Grand Total<span>*</span></label>
                        <input type="text" id="GrandTotal" maxlength="255" class="autofocus input-textarea-206" name="grandtotal" value="{$invoice.grandtotal}" disabled="true">
                    </div>
                </div>
                <div style="width: 50%; float: left;">
                    <div class="input text required">
                        <label for="PaymentMethod">Payment Method<span>*</span></label>
                        <select name="payment_method">
                            <option>-- Choose from option --</option>
                            <option value="cash">-- By Cash --</option>
                            <option value="cheque">-- By Cheque --</option>
                        </select>
                    </div>
                </div>
                <div style="width: 50%; float: left;">
                    <div class="input text required">
                        <label for="PaymentDate">Payment Date<span>*</span></label>
                        <input type="text" id="paid_date" maxlength="255" class="autofocus input-textarea-206" name="paid_date">
                    </div>
                </div>
                <div style="text-align: center;width:100%;float:left;padding:10px 0px;">
                    <button class="button" type="submit" name="action" value="markpaid">Update Invoice</button>
                </div>
            </form>
        </div>
    </div>
</div>