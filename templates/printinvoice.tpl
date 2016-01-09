<div style="width:800px">
    <div style="width:800px;margin-bottom: 15px;padding:15px 0;border-bottom: 2px dotted #4cc2ff;float: right;">
        <div style="width:412px;float: left;text-align: left;">
            Shop No. 3, Continental Chambers, Karve Road, Near Sonal Hall, Pune-411004
            <br/>
                Ph. - +91-9325033199, 020-25457700, 020-25430333<br>
                E.- contact@aartisalescorp.com<br>
                W. - aartisalescorp.com
        </div>
        <div style="width:368px;float: right;">
            <img src="{$FRONTEND}skin/images/logo.png">
        </div>
    </div>
    <div style="float: right; font-size: 11px; margin-top: 6px; color: #666;width: 100%;padding-bottom: 15px;text-align:center;">
        <h2 class="dashboard">Invoice #{$order.chalan_no}</h2>
    </div>
    <div id="cart">
        {if count($customer)>0}
        <div style="width:400px; float: left;padding-top:15px;line-height: 18px;" class="std billing">
            <h3>Customer Information</h3>
            <ul>
                <li>Name: {$customer.account_name}</li>
                <li>Vat Number: {$customer.vat}</li>
                <li>Email: {$customer.email}</li>
                <li>Web: {$customer.website}</li>
                <li>Phone: {$customer.phone}</li>
                <li>Fax: {$customer.fax}</li>
            </ul>
        </div>
    {/if}
    {if count($billing)>0}
        <div style="width:400px; float: left;padding-top:15px;line-height: 18px;" class="std billing">
            <h3>Billing Information</h3>
            <ul>
                <li>{$billing.address1}</li>
                <li>{$billing.address2}</li>
                <li>{$billing.city},{$billing.state},{$billing.country}-{$billing.postcode}</li>
            </ul>
        </div>
    {/if}
    {if count($shipping)>0}
        <div style="width:400px; float: left;padding-top:15px;line-height: 18px;" class="std billing">
            <h3>Shipping Information</h3>
            <ul>
                <li>{$shipping.address1}</li>
                <li>{$shipping.address2}</li>
                <li>{$shipping.city},{$shipping.state},{$shipping.country}-{$shipping.postcode}</li>
            </ul>
        </div>
    {/if}<br/>
    <div style="float:left; width:100%;">
        <h3>Items List </h3>
        {if count($orderitem)>0}
        <table id="item-table" border="1"  align="left">
            <thead>
                <th style="width: 50px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Sr. No.</th>
                <th style="width: 300px;border-right:1px solid #FFFFFF;text-align: left;background: #4cc2ff;color: #FFFFFF;">Name</th>
                <th style="width: 150px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Catalog No.</th>
                <th style="width: 100px;border-right:1px solid #000;background: #4cc2ff;color: #FFFFFF;">Qty</th>
                <th style="width: 150px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Rate</th>
                <th style="width: 100px;border-right:1px solid #000;background: #4cc2ff;color: #FFFFFF;">Discount in %</th>
                <th style="width: 125px;text-align: center;background: #4cc2ff;color: #FFFFFF;">Subtotal</th>
            </thead>
            {$i=1}
            {foreach $orderitem as $val}
            <tr>
                <td style="border-right:1px solid #000;text-align: center;">{$i++}</td>
                <td style="border-right:1px solid #000;text-align: left;">{$val.name}</td>
                <td style="border-right:1px solid #000;text-align: center;">{$val.sku}</td>
                <td style="border-right:1px solid #000;text-align: center;">{$val.qty}</td>
                <td style="border-right:1px solid #000;text-align: center;">&#8377;&nbsp;{$val.price|round:"2"}</td>
                <td style="border-right:1px solid #000;text-align: center;">{$val.disc}%</td>
                <td style="text-align: center">&#8377;&nbsp;{$val.subtotal|round:"2"}</td>
            </tr>
            {/foreach}
            <tfoot>
                <tr>
                    <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="6">Subtotal</td>
                    <td style="width: 125px;text-align: center">&#8377;&nbsp;{$order.subtotal|round:"2"}</td>
                </tr>
                <tr>
                    <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="6">Transportation/Loading</td>
                    <td style="width: 125px;text-align: center">&#8377;&nbsp;{$order.shipping|round:"2"}</td>
                </tr>
                <tr>
                    <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="6">Tax (12.5%)</td>
                    <td style="width: 125px;text-align: center">&#8377;&nbsp;{$order.tax|round:"2"}</td>
                </tr>
                <tr>
                    <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="6">Discount</td>
                    <td style="width: 125px;text-align: center">&#8377;&nbsp;{$order.discount|round:"2"}</td>
                </tr>
                <tr>
                    <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="6">Grand Total</td>
                    <td style="width: 125px;text-align: center">&#8377;&nbsp;{$order.grandtotal|round:"2"}</td>
                </tr>
                <tr>
                    <td style="width: 100px;padding:5px;border-right:1px solid #000;text-align: right;" colspan="6">Grand Total (Rounded)</td>
                    <td style="width: 125px;text-align: center">&#8377;&nbsp;{$order.grandtotal|string_format:"%d"}</td>
                </tr>
            </tfoot>
        </table>
        {else}
            Your cart is empty.
        {/if} 
    </div>
    <div style="width:100%;margin-bottom: 15px;padding:15px 0;text-align: left;float:left;">
        Customers VAT IN : {$customer.vat}
    </div>
    </div>
    <div style="width: 800px; text-align: right; float: right; margin: 30px 0px;">
        <label style="padding: 10px;">Reciever Signiture</label><br/>
        <textarea></textarea>
    </div>
</div>
        
{literal}
<script type="text/javascript">
<!--
window.print();
//-->
</script>
{/literal}

