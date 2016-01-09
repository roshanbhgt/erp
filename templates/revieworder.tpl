<div class="content">
    <span style="float: right; font-size: 11px; margin-top: 6px; color: #666;width: 100%;padding-bottom: 15px">
        <h2 class="dashboard">Review your delevery chalan</h2>
    </span>
    <div id="cart">
        {if count($order.customer)>0}
            <div style="width:400px; float: left;padding-top:15px;line-height: 18px;" class="std billing">
                <h3>Customer Information</h3>
                <ul>
                    <li>PO No.: {$order.po_no}</li>
                    <li>Name: {$order.customer.name}</li>
                    <li>Vat Number: {$order.customer.vat_number}</li>
                    <li>Email: {$order.customer.office_email}</li>
                    <li>Web: {$order.customer.url}</li>
                    <li>Phone: {$order.customer.office_phone}</li>
                    <li>Fax: {$order.customer.office_fax}</li>
                </ul>
            </div>
        {/if}
        {if count($order.customer)>0}
            <div style="width:400px; float: left;padding-top:15px;line-height: 18px;" class="std billing">
                <h3>Billing Information</h3>
                <ul>
                    <li>{$order.customer.billing_address_1}</li>
                    <li>{$order.customer.billing_address_2}</li>
                    <li>{$order.customer.billing_city},{$order.customer.billing_region},{$order.customer.billing_country}-{$order.customer.billing_postal_code}</li>
                </ul>
            </div>
        {/if}
        {if count($order.customer)>0}
            <div style="width:400px; float: left;padding-top:15px;line-height: 18px;" class="std billing">
                <h3>Shipping Information</h3>
                <ul>
                    <li>{$order.customer.shipping_address_1}</li>
                    <li>{$order.customer.shipping_address_2}</li>
                    <li>{$order.customer.shipping_city},{$order.customer.shipping_region},{$order.customer.shipping_country}-{$order.customer.shipping_postal_code}</li>
                </ul>
            </div>
        {/if}
        <div style="float:left;padding: 10px 0;">
            <h3>Items List</h3>
            {if count($order.items)>0}
            <table id="item-table" border="1">
                <thead>
                    <th style="width: 50px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Sr. No.</th>
                    <th style="width: 300px;border-right:1px solid #FFFFFF;text-align: left;background: #4cc2ff;color: #FFFFFF;">Name</th>
                    <th style="width: 150px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Catalog No.</th>
                    {*<th style="width: 150px;border-right:1px solid #FFFFFF;background: #4cc2ff;color: #FFFFFF;">Price</th>*}
                    <th style="width: 100px;border-right:1px solid #000;background: #4cc2ff;color: #FFFFFF;">Qty</th>
                    {*<th style="width: 125px;text-align: center;background: #4cc2ff;color: #FFFFFF;">Subtotal</th>*}
                </thead>
                {$i = 1}
                {foreach $order.items as $val}
                <tr>
                    <td style="border-right:1px solid #000;text-align: center;">{$i++}</td>
                    <td style="border-right:1px solid #000;text-align: left;">{$val.name}</td>
                    <td style="border-right:1px solid #000;text-align: center;">{$val.code}</td>
                    {*<td style="border-right:1px solid #000;text-align: center;">{$val.price}</td>*}
                    <td style="border-right:1px solid #000;text-align: center;">{$val.qty}</td>
                    {*<td style="text-align: center">{$val.subtotal}</td>*}
                </tr>
                {/foreach}
                {*<tfoot>
                    <tr>
                        <td style="width: 100px;border-right:1px solid #FFFFFF;text-align: right;" colspan="5">Subtotal</td>
                        <td style="width: 125px;text-align: center">{$order.subtotal}</td>
                    </tr>
                    <tr>
                        <td style="width: 100px;border-right:1px solid #FFFFFF;text-align: right;" colspan="5">Shipping & Handling</td>
                        <td style="width: 125px;text-align: center">{$order.shiphanval}</td>
                    </tr>
                    <tr>
                        <td style="width: 100px;border-right:1px solid #FFFFFF;text-align: right;" colspan="5">Tax</td>
                        <td style="width: 125px;text-align: center">{$order.tax}</td>
                    </tr>
                    <tr>
                        <td style="width: 100px;border-right:1px solid #FFFFFF;text-align: right;" colspan="5">Discount</td>
                        <td style="width: 125px;text-align: center">{$order.discount}</td>
                    </tr>
                    <tr>
                        <td style="width: 100px;border-right:1px solid #FFFFFF;text-align: right;" colspan="5">Grand Total</td>
                        <td style="width: 125px;text-align: center">{$order.grandtotal}</td>
                    </tr>
                </tfoot>*}
            </table>
            {else}
                Your cart is empty.
            {/if}
        </div>
    </div>
</div>
<div style="text-align: center;padding:25px 0;">
    <div class="input checkbox"><input type="hidden" id="PlaceOrder" name="data[action]" value="saveorder" /></div>                
    <button class="button" type="submit" id="saveitem" onclick="saveOrder();">Save Chalan</button>
    <button class="button" type="submit" id="saveitem" onclick="savePrintOrder();">Save And Print Chalan</button> 
    <span class="cancel">or <a class="close-dialog" href="{$FRONTEND}order.php" >Cancel</a></span>
</div>